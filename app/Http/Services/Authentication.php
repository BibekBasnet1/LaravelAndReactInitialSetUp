<?php

namespace App\Http\Services;

use App\Http\Interfaces\Authentication\IAuthentication;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Authentication implements IAuthentication{
    
    public function loginUser(Request $request) : JsonResponse
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);


        if (!auth()->attempt($data)) {
            return response(['error_message' => 'Incorrect Details. 
            Please try again']);
        }

        $token = auth()->user()->createToken('API Token')->accessToken;

        return response()->json([
            'success' => true, 'user' => auth()->user(), 'token' => $token,
        ]);

    }

    public function registerUser(Request $request) : JsonResponse
    {

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'success' => true, 'user' => auth()->user(), 'token' => $token,
        ]);

    }

    public function logoutUser(): JsonResponse
    {
        return response()->json([]);
    }

    public function resetUserPassword() : JsonResponse{
        return response()->json([]);

    }

}




