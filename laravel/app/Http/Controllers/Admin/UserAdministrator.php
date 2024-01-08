<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdministrator extends Controller
{
    public function getUsers()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }
    public function store(Request $request)
    {
    // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);
        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return response()->json(['message' => 'User created successfully']);
    }


    // public function updateUser(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         // Add more validation rules as needed
    //     ]);
    //     // Get the user ID from the request if needed
    //     $userId = $request->input('user_id');
    //     // Find the user
    //     $user = User::findOrFail($userId);
    //     // Update user data
    //     $user->update([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         // Add more fields as needed
    //     ]);
    //     return response()->json(['message' => 'User updated successfully']);
    // }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('update-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Find the user
        $user = User::findOrFail($id);

        // Update user data
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Add more fields as needed
        ]);

        return response()->json(['message' => 'User updated successfully']);
    }
    public function changeUserRole(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = $request->input('role');
        $user->save();


        return response()->json(['message' => 'User role changed successfully']);
    }

    public function create(Request $request, $id)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return response()->json(['message' => 'User role changed successfully']);
    }
}
