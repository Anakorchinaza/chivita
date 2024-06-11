<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $validated = $request->validate([
    //         'name' => 'required|string|min:2|max:255',
    //         'email' => 'required|email|max:255|unique:users,email'
    //     ]);

    //     // Create a new UserDetail record
    //     $user = User::create([
    //         'name' => $validated['name'],
    //         'email' => $validated['email'],
    //     ]);

    //     Auth::login($user);

    //     // Store user ID in session
    //     Session::put('user_id', $user->id);

    //     // Redirect or return response
    //     return redirect()->back();
    // }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Check if the user already exists
        $user = User::where('email', $validated['email'])->first();

        if ($user) {
            // User exists, log them in
            Auth::login($user);

            // Store user ID in session
            Session::put('user_id', $user->id);

            // Return response with a welcome back message
            return response()->json(['message' => 'Welcome back!']);
        } else {
            $user = User::create([
                'email' => $validated['email'],
            ]);

            Auth::login($user);

            // Store user ID in session
            Session::put('user_id', $user->id);

            // Return success response
            return response()->json(['message' => 'Details submitted successfully!']);
        }
    }


}
