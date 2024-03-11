<?php

namespace App\Http\Auth\Login\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function authorization(Request $data)
    {
        $credentials = $data->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $data->session()->regenerate();
            return redirect()->route('pages.Dashboard.Dashboard')
                ->withSuccess('Login realizado com sucesso!');
        }

        return back()->withErrors([
            'email' => 'Suas credenciais de acesso estão erradas.',
        ])->onlyInput('email');

    }
}
