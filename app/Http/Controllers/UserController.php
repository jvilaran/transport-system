<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
     * Register the user.
     */
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            $user = User::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);

            if ($user) {
                return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
            }

            return redirect()->back()->withErrors(['registration' => 'Registration failed. Please try again.']);
        }

        return view('User.register');
    }

    /**
     * Login the user.
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed, redirect to the dashboard
                $user = Auth::user();
                return redirect()->route('dashboard', ['id' => $user->id])->with('success', 'Login successful!');
            }
            

            return redirect()->back()->withErrors(['login' => 'Invalid credentials. Please try again.']);
        }


        return view('User.login');

    }

    /**
     * Display the specified resource.
     */
    public function dashboard(int $id)
    {
        $user = User::find($id)->toArray();

        return view('User.dashboard', compact('user'));
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
