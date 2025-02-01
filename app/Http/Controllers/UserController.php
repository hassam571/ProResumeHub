<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUsers()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.users.create');
    }

    /**
     * Show the list of users.
     *
     * @return \Illuminate\View\View
     */
    public function listUsers()
    {
        $users = User::all();

        // Pass the $users collection to the Blade view
        return view('admin.pages.users.list', compact('users'));

    }

// User Deletion
public function destroy(User $user)
{
    $user->delete();

    return redirect()->back()->with('alert', [
        'type' => 'success',
        'title' => 'User Deleted',
        'message' => 'The user has been deleted successfully.',
    ]);
}

// User Deactivation
public function deactivate(User $user)
{
    $user->is_active = true;
    $user->save();

    return redirect()->back()->with('alert', [
        'type' => 'warning',
        'title' => 'User Deactivated',
        'message' => 'The user has been deactivated successfully.',

    ]);
}

// User Activation
public function activate(User $user)
{
    $user->is_active = false;
    $user->save();

    return redirect()->back()->with('alert', [
        'type' => 'success',
        'title' => 'User Activated',
        'message' => 'The user has been activated successfully.',
    ]);
}




public function edit($id)
{
    $user = User::findOrFail($id); // Fetch the project by ID
    return view('admin.pages.users.create', compact('user')); // Pass the project data to the view
}


public function update(Request $request, User $user)
{
    // Retrieve all input data
    $data = $request->all();

    // Handle file upload if present
    if ($request->hasFile('files')) {
        $data['dp_path'] = $request->file('files')->store('dp', 'public');
    }

    // Update password only if provided
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->input('password'));
    } else {
        // Exclude password from the update
        unset($data['password']);
    }

    // Update the user
    $user->update($data);

    // Redirect after successful update
    return redirect()->route('admin.users.list')->with('alert', [
        'type' => 'success',
        'title' => 'User Updated',
        'message' => 'The user details have been updated successfully.',
    ]);
}


public function store(Request $request)
{
    // Handle file upload if present
    $data = $request->all();
    if ($request->hasFile('files')) {
        $data['dp_path'] = $request->file('files')->store('dp', 'public');
    }

    // Hash the password before saving
    $data['password'] = Hash::make($request->input('password'));

    // Create the user
    User::create($data);

    // Redirect after successful creation
    return redirect()->route('admin.users.list')
        ->with('alert', [
            'type' => 'success',
            'title' => 'User Created',
            'message' => 'The user has been created successfully.',
        ]);
}













































































































































































































































































}
