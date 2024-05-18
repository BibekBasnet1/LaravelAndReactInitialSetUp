<?php

namespace App\Http\Interfaces\Authentication;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface IAuthentication {

    public function loginUser(Request $request) : JsonResponse;
    public function registerUser(Request $request) : JsonResponse;
    public function logoutUser(): JsonResponse;
    public function resetUserPassword() :JsonResponse;
}





