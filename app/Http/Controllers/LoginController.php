<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the admin
        if (Auth::guard('admin')->attempt($validatedData)) {
            // Admin authentication successful
            return response()->json(['message' => 'Admin logged in successfully']);
        }

        // Attempt to authenticate the customer
        if (Auth::guard('customer')->attempt($validatedData)) {
            // Customer authentication successful
            return response()->json(['message' => 'Customer logged in successfully']);
        }

        // Authentication failed
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
