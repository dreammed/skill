<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function login2(Request $request)
    {

        $res = Http::asForm()->post('https://c1app.pea.co.th/idm-login/api_login.php', [
            'username' => $request->username,
            'password' => $request->password,
        ])->throw()->json();

        $res = (object)$res;
        $user = null;
        if (!$res->error) {
            $user = user::updateOrCreate(
                ['emp_id' => $request->username,],
                [
                    'emp_id' => $request->username,
                    'password' => $request->password,
                    'name' =>  $res->fullname,
                ]
            );

            if (Auth::attempt(['emp_id' => $request->username, 'password' => $request->password])) {
                $request->session()->regenerate();
                session(['user' => $res]);
                session(['emp_id' => $user->emp_id]);
                return redirect()->intended('home');
            }
        } else {
            return redirect()->back()->withErrors($res->message);
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return redirect()->back()->withErrors("ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด");
        }
    }

    public function home()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $path = $request->pic ;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        User::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'pic' => $request->pic,
            'lang_id' => $request->lang_id,
            'private' => $request->private,
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect('home');
    }

    public function me($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
