<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Services\Authentication;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController{

    private $auth;

    public function __construct(Authentication $auth) 
    {
        $this->auth = $auth;
    }

    public function login(Request $request) : JsonResponse
    {
        return $this->auth->loginUser($request);
    }   
    
    public function register(Request $request) : JsonResponse
    {
        return $this->auth->registerUser($request);
    }

}

