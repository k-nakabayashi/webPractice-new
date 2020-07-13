<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Responder\TokenResponder;
use Illuminate\Auth\AuthManager;
use Tymon\JWTAuth\JWTGuard;

class LoginAction extends Controller
{
    private $authManager;

    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function __invoke(Request $request, TokenResponder $responder)
    {
        $guard = $this->authManager->guard('api');

        $token = $guard->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        return $responder($token, $guard->factory()->getTTL() * 60);
    }
}
