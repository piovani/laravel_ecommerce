<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Mockery\Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use JWTAuth;

class CheckJWT extends BaseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->environment() === 'local' || app()->environment() === 'testing') {
            return $next($request);
        }

        if (empty($request->bearerToken())) {
            return response()->json(['message' => 'Bearer token missing', 'statusCode' => 401], 401);
        }

        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {

//            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
//                return response()->json(['status' => 'Token is Invalid']);
//            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
//                return response()->json(['status' => 'Token is Expired']);
//            }else{
//                return response()->json(['status' => 'Authorization Token not found']);
//            }
        }

        return $next($request);
    }
}
