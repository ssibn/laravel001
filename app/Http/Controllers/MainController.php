<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel; 

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\ContactModel;
// use App\Http\Controllers\AuthController;



class MainController extends Controller
{
    public function login() {
        return view('login');
    }

    public function registration() {
        return view('registration');
    }

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function form() {
        return view('form');
    }

    public function test() {
        return view('test');
    }

    public function form_check(Request $request) {
    //     dd($request);

        $valid = $request->validate([
            'email' => 'required|min:5|max:100',
            'heading' => 'required|min:5|max:100',
            'message' => 'required|min:5|max:500',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->heading = $request->input('heading');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('/form');
    }
    // public function postRegistration(Request $request){
    //     $user = User::create([
    //         'email' => $request->input('email'),
    //         'name' => $request->input('name'),
    //         'password' => bcrypt($request->input('password')),
    //     ]);
    //     Auth::loginUsingId($user -> id);
    //     return redirect()
    //             ->route('homepage')
    //             ->with('success', 'You are success autorised');
    // }
}