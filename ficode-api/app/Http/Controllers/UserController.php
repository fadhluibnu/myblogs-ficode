<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->validated('email'))->first();

        return $user && Hash::check($request->validated('password'), $user->password) ? 
            response()->json([
                'status' => 200,
                'message' => 'Login berhasil',
                'data' => $user,
                'token' => $user->createToken('users_token')->plainTextToken
            ], 200)
         : response()->json([
            'status' => 400,
            'message' => 'Gagal Login',
            'data' => null,
            'token' => null
        ], 400);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return [
            'message' => 'Logged out'
        ];
    }
}
