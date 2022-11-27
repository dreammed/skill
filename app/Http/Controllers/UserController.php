<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests;
class UserController extends Controller
{
    public function login(Request $request){

        $res = Http::asForm()->post('https://c1app.pea.co.th/idm-login/api_login.php', [
            'username' => $request->username,
            'password' => $request->password,
        ])->throw()->json();
        // $user = User::where('emp_id', )->first();
        $res = (object)$res;
        $user= null;
        if($res){
            $user = user::updateOrCreate(
                ['emp_id' => $request->username,],
                [
                    'emp_id' => $request->username,
                    'password' => $request->password,
                    'name' =>  $res->fullname,
                ]
            );

            if (Auth::attempt(['emp_id' => $request->username, 'password' => $request->password]))
            {
                $request->session()->regenerate();
                session(['user' => $res]);
                session(['emp_id' => $user->emp_id]);
                return redirect()->intended('home');
            } else {
                return redirect()->back()->withErrors("รหัสพนักงาน หรือ รหัสผ่าน ไม่ถูกต้อง");
            }

        }else{
            return redirect()->back()->withErrors("ไม่สามารถติดต่อกับ IDM ได้");
        }
    }

    public function home(Request $request){
        // $me = session('user');
        $user = Auth::user();
        // $user = User::where('emp_id', $me->emp_id)->first();

        // $value = $request->session()->get('userData',"defalut");
        // $value = $request->session()->pull('userData');
        return view('home',compact('user'));
        // return $request->session()->all();
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('test');
    }

}
