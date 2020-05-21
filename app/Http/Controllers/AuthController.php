<?php

namespace App\Http\Controllers;

use Domain\Users\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $user = new User();

        return JWTAuth::fromUser($user);

//        $token = $this->service->gerarToken($request->email, $request->password);
//
//        try {
//
//            return response(compact('token'));
//
//        } catch (Exception $e) {
//
//            return response('Verifique o seu E-Mail ou/e Senha');
//        }
    }
}
