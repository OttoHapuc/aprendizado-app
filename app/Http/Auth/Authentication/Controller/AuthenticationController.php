<?php

namespace App\Http\Auth\Authentication\Controller;

use App\Http\Auth\Authentication\Service\AuthenticationService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function __construct(
        protected AuthenticationService $service
    ) {}

    public function authentication(){
        $data = $this->service->authentication();
        return $data;
    }
}
