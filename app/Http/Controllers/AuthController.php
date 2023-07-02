<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// // use Illuminate\Foundation\Auth\User;
// use App\Models\User;
// // use App\user;
// use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function postSignin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember')))
        {
            // return Redirect::route('home')->with('success', 'You are authorized <br>Вы успешно авторизованы');
            return redirect()->route('home');
            // echo 'You are authorized';
        } else {
            // var_damp($request);
            echo 'Not sure login or password';
        }
    }

    public function postRegistration(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::loginUsingId($user -> id);    
        
        return redirect()
                ->route('home')
                ->with('success', 'You are success autorised <br>Вы успешно зарегистрировались');
    }
}