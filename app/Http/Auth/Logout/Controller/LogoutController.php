<?php

namespace App\Http\Auth\Logout\Controller;

use App\Http\Auth\Logout\Services\LogoutService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct(
        protected LogoutService $service
    ) {}

    public function logout(Request $request){
        $this->service->logout($request);
    }
}
