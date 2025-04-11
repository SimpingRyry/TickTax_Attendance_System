<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        // Plain text comparison (not secure, but works for now)
        if ($user && $user->password === $request->password) {
            Auth::login($user);

            return redirect()->intended('index');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}
