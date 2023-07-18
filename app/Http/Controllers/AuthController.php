<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', Password::min(5)->mixedCase()->numbers()],
            'password_confirm' => ['required', 'same:password'],
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect('/')->with('form_success', 'User created and logged in');
    }
}
