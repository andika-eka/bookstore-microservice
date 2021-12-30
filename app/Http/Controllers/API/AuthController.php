<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    //
    public function login (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'unauthorized',
            ],401);
        }
    
        $user->tokens()->delete();
        $token = $user->createToken($request->device_name)->plainTextToken;
        
        return response()->json([
            'success' => true,
            'message' => 'success',
            'user' => $user,
            'token' => $token
        ],200);
    }
}
