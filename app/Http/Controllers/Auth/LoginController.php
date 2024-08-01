<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use App\Models\User;

class LoginController extends Controller
{
    public function loginView()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();


        if (!$user) {
            return response()->json(['errors' => ['email' => ['No user found with this email.']]], 422);
        }

        // Check if the password matches
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['errors' => ['password' => ['The provided password is incorrect.']]], 422);
        }

        // Log the user in and regenerate the session
        Auth::login($user);
        $request->session()->regenerate();

        // Redirect using Inertia's location with the route helper
        return Inertia::location(route('admin.home'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to login page
        return Inertia::location('/login');
    }
}
