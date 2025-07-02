<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{

    /**
     * Login the user.
     */
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        if ($request->isMethod('post')) {

            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {

                return redirect()->route('dashboard')->with('success', 'Login successful!');
            }

            return redirect()->back()->withErrors(['login' => 'Invalid credentials. Please try again.']);
        }

        return inertia('Auth/Login');
    }

    /**
     * Register the user.
     */
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            $user = User::create([
                'name' => $request['name'] ?? '',
                'username' => $request['username'],
                'email' => $request['email'],
                'role' => $request['role'],
                'password' => bcrypt($request['password']),
            ]);

            if ($user) {

                return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
            }

            return redirect()->back()->withErrors(['registration' => 'Registration failed. Please try again.']);
        }

        return inertia('Auth/Register');
    }

    /**
     * Log out
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
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
