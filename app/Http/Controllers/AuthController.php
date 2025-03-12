<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){

        
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            return response()->json([
                'user' => $user,
                'message' => 'Login successful'
            ],200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ],401);
    }



}
