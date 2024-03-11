<?php

namespace App\Http\Auth\Logout\Services;

use Illuminate\Support\Facades\Auth;

class LogoutService
{
    public function logout($data)
    {
        Auth::logout();
        $data->session()->invalidate();
        $data->session()->regenerateToken();
        return redirect()->route('/')
            ->withSuccess('You have logged out successfully!');;
    }
}
