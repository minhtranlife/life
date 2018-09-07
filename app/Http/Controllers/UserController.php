<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('system.users.login')
            ->with('pageTitle','Login');
    }

    public function signin(Request $request){
        $inputs = $request->all();
        $check = User::where('email', $inputs['email'])
            ->count();
        if ($check == 0)
            return view('errors.invalid-user');
        else{
            $ttuser = User::where('email', $inputs['email'])->first();
        }
        if (md5($inputs['password']) == $ttuser->password) {
            if ($ttuser->status == "active") {
                Session::put('admin', $ttuser);

                return redirect('');
            } else
                return view('errors.lockuser');

        } else
            return view('errors.invalid-pass');

    }

    public function logout()
    {
        Session::flush();
        return redirect('');
    }
}
