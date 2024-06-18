<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class SessionController extends Controller
{
    public function getCreate(){
        return view('auth/login');
    }

    public function store(){
        $atributosValidados = request()->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        if (!Auth::attempt($atributosValidados)){
            throw ValidationException::withMessages([
                'email' => 'Lo siento, los datos ingresados no coinciden'
            ]);
        };

        request()->session()->regenerate();

        return redirect(url('/post'));
    }

    public function destroy(){
        Auth::logout();
        return redirect(url('/post'));
    } 
}
