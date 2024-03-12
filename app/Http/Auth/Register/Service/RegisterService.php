<?php

namespace App\Http\Auth\Register\Service;

use App\Http\User\Interace\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    public function __construct(
        protected UserRepositoryInterface $repository
    )
    {}

    public function create(Request $data)
    {
        $data->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $this->repository->create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password)
        ]);

        $credentials = $data->only('email', 'password');
        
        Auth::attempt($credentials);
        $data->session()->regenerate();

        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');
    }
}
