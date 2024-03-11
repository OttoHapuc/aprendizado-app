<?php

namespace App\Http\Auth\Authentication\Services;

use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function authentication()
    {
        if (Auth::check()) {
            return view('pages.Dashboard.Dashboard');
        }

        return redirect()->route('/')
            ->withErrors([
                'email' => 'Please login to access the dashboard.',
            ])->onlyInput('email');
    }
}
