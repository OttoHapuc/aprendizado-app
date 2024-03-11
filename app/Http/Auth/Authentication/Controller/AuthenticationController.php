<?php

namespace App\Http\Auth\Authentication\Controller;

use App\Http\Auth\Authentication\Services\AuthenticationService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function __construct(
        protected AuthenticationService $service
    ) {}

    public function authentication(){
        $this->service->authentication();
    }
}
