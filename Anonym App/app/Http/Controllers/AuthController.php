<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(!Auth::attempt($validated)){
            return response()->json([
                'message' => 'Invalid Credentials!'
            ], 401);
        }

        $query = User::where('email', $validated['email'])->first();
        $user = new UserResource($query);

        return response()->json([
            'data' => $user,
            'access_token' => $user->createToken('api_token')->plainTextToken,
            'token_type' => 'Bearer',
        ]);
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        
        // $user = User::where('email', $validated['email'])->first();
        $user = new UserResource(User::create($validated));
        return response()->json([
            'data' => $user,
            'access_token' => $user->createToken('api_token')->plainTextToken,
            'token_type' => 'Bearer'

        ]);
    }

    public function logout(){
        auth()->logout();

        return response()->json([
            'message' => 'logged out'
        ]);
    }
}
