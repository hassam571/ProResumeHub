<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function Adminlogin()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.auth.login');
    }



    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();
    
            // Redirect based on user role
            switch ($user->role) {
                case 'Admin':
                    return redirect()->route('admin.admin')->with('alert', [
                        'type' => 'success',
                        'title' => 'Welcome, Admin!',
                        'message' => 'You have successfully logged in.',
                    ]);
                case 'Team':
                    return redirect()->route('admin.admin')->with('alert', [
                        'type' => 'success',
                        'title' => 'Welcome, Team Member!',
                        'message' => 'You have successfully logged in.',
                    ]);
                case 'User':
                    return redirect()->route('user.dashboard')->with('alert', [
                        'type' => 'success',
                        'title' => 'Welcome, User!',
                        'message' => 'You have successfully logged in.',
                    ]);
                default:
                    Auth::logout();
                    return redirect()->route('login')->with('alert', [
                        'type' => 'warning',
                        'title' => 'Access Denied',
                        'message' => 'You do not have access to this section.',
                    ]);
            }
        }
    
        // If authentication fails
        return redirect()->back()->with('alert', [
            'type' => 'danger',
            'title' => 'Login Failed',
            'message' => 'Invalid email or password. Please try again.',
        ]);
    }
    
    // Logout
public function logout(Request $request)
{
    // Get the authenticated user before logging out
    $user = Auth::user();

    if ($user) {
        // Reset the remember_token to null
        $user->setRememberToken(null);
        $user->save();
    }

    // Log the user out
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate CSRF token
    $request->session()->regenerateToken();

    // Redirect to the login page with a success message
    return redirect()->route('admin.auth.login')->with('alert', [
        'type' => 'success',
        'title' => 'Logged Out',
        'message' => 'You have been successfully logged out.',
    ]);
}

    
    







}
