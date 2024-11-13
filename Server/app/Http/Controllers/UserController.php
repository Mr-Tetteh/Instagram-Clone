<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function register(Request $request)
    {
        if (User::where('email', $request->email)->first()) {
            return response()->json([
                'message' => 'Sorry, Email already exists'
            ], 402);
        } elseif (User::where('phone', $request->phone)->first()) {
            return response()->json([
                'message' => 'Sorry, Phone number already exists'
            ], 402);
        } elseif (User::where('username', $request->username)->first()) {
            return response()->json([
                'message' => 'Sorry, Username already exists'
            ], 402);
        }

        $user = User::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'username' => $request->input('username'),
        ]);

        return new UserResource($user);
    }

    public function login(Request $request)
    {
        try {
          $user = User::where('email', $request->identifier)
              ->orWhere('phone', $request->identifier)
              ->orWhere('username', $request->identifier)
              ->first();



            logger('message',
                ['user' => $user]
            );
            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return response()->json([
                    'message' => 'Sorry Wrong Email or Password'
                ], 401);
            }
            return response()->json([
                "message" => "Login Successful",
                "user" => $user,
                "authorisation" => [
                    "type" => "Bearer",
                    "token" => $user->createToken($user->email ?? $user->phone ?? $user->username)->plainTextToken
                ]
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Something went wrong'
            ], 500);
        }
    }


    public function user()
    {
        return Auth::user();

    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout Successful'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

