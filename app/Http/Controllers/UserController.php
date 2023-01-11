<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $user = User::join('program_lang_type', 'users.lang_id', '=', 'program_lang_type.id')->get();
        return view('user.view', compact('user'));
    }

    public function login(Request $request)
    {
        $this->checkTooManyFailedAttempts();

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
        $file = $request->file('pic');
        $type = $file->getClientOriginalExtension();
        $data = file_get_contents($file);
        $base64 = 'data:image/' .$type . ';base64,' . base64_encode($data);

        $request->validate(
            [
                'password' =>
                [
                    'required',
                    'min:8',
                    'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
                ]
            ]
        );

        User::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'pic' => $base64,
            'lang_id' => $request->lang_id,
            'private' => $request->private,
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect('home');
    }


    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        if( !isset($requestData['pic'])){
            $requestData['pic'] =  $requestData['oldpic'];
        }
        dd(
            $requestData
        );

        // $user = User::findOrFail($id);
        // $user->update($requestData);
        // return redirect('home');
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

    public function throttleKey()
    {
        return Str::lower(request('username')) . '|' . request()->ip();
    }

    public function checkTooManyFailedAttempts()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 3)) {
            return;
        }
        RateLimiter::hit($this->throttleKey(), 180);
        return redirect()->back()->withErrors("ผู้ใช้งานล็อคอินมากกว่า 3 ครั้ง");
    }
}
