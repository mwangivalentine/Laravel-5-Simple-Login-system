<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            'username' =>'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required'
            ]);

        User::create([
            'username' => $request->input('username'),
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password'))
            ]);

        return redirect()->route('home')->with('info','You have successfully created your account.');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required']);
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return redirect()->route()->with('info','We could not log you in with those details.');
        }
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home')->with('info','You have successfully logged out.');
    }
}
