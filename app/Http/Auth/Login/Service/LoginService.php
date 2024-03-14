<?php

namespace App\Http\Auth\Login\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function authorization(Request $data)
    {
        $credentials = $data->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $data->session()->regenerate();

            return redirect()->route('dashboard');
        } else {
            return redirect()->intended('/');
        }

    }
}
