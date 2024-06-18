<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function getCreate(){
        return view('auth/register');
    }

    public function store(){
        $atributosValidados = request()->validate([
            'name'      => ['required'],
            'email'     => ['required', 'email'],
            'password'  => ['required', Password::min(6), 'confirmed'],
        ]);

        $user = User::create($atributosValidados);

        Auth::login($user);

        return redirect(url('/post'));
    }
}
