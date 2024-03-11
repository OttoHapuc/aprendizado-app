<?php
namespace App\Http\Auth\Register\Controller;

use App\Http\Auth\Register\Service\RegisterService;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(
        protected RegisterService $service
    ) {}

    public function login(Request $request){
        $this->service->create($request);
    }
}
