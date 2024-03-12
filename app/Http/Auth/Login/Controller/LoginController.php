<?php

namespace App\Http\Auth\Login\Controller;

use App\Http\Auth\Login\Service\LoginService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(
        protected LoginService $service
    ) {
    }

    public function authorization(Request $request)
    {
        $data = $this->service->authorization($request);
        return $data;
    }
}
