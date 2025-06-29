<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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
     * Display the specified resource.
     */
    public function dashboard()
    {
        $user = Auth::user();

        return inertia('User/Dashboard', [
            'user' => $user,
        ]);
    }

    /**
     * Profile of user
     */
    public function profile()
    {
        $user = Auth::user();

        return inertia('User/Profile', [
            'user' => $user,
        ]);
    }

    /**
     * Services of user
     */
    public function services(int $id)
    {
        $user = User::find($id)->toArray();

        return view('User.services', compact('user'));
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
