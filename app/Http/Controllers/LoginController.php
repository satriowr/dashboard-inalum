<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function login_post(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/admin/input');
            } else {
                return redirect('/dashboard');
            }
        } else {
            dd("login failed");
            return redirect('/login')->with('error', 'Username or password is incorrect.');
        }
    }

    public function register_get(){
        return view('register');
    }

    public function register_post(Request $request){
        //dd($request);
        DB::table('users')->insert([
            'role' => $request->role,
            'username' => $request->username,
            'full_name' => $request->full_name,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');
    }
}
