<?php

namespace App\Http\Auth\Logout\Controller;

use App\Http\Auth\Logout\Service\LogoutService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct(
        protected LogoutService $service
    ) {}

    public function logout(Request $request){
        $data = $this->service->logout($request);
        return $data;
    }
}
