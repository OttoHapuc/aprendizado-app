<?php

namespace App\Http\Auth\Authentication\Service;

use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function authentication()
    {
        if (Auth::check()) {
            return view('pages.Dashboard.Dashboard');
        }

        return redirect()->route('/');
    }
}
