<?php

namespace App\Http\User\Repository;

use App\Http\User\Interace\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{

    public function create($data)
    {
        $user = DB::table('users')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        return $user ? $user : null;
    }
}
