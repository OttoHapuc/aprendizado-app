<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(
        protected User $model
    ) {
    }

    public function create($data)
    {
        $user = $this->model->create(
            [
                'name' => $data->name,
                'email' => $data->email,
                'password' => $data->password
            ]
        );

        return $user;
    }
}
