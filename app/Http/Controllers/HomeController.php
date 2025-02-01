<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index($username)
    {
        $users = User::where('username', $username)->firstOrFail();
    
        $skills = $users->skills; 
        $experiences = $users->job()->orderBy('start_date', 'desc')->get(); // Ensure relation in User model
        $educations = $users->educations()->orderBy('start_date', 'desc')->get(); // Ensure relation in User model
        $teammates = User::whereIn('role', ['Team', 'Admin'])
        ->where('id', '!=', $users->id) // Exclude the current user
        ->get();        $projects = Project::where('user_id', $users->id)->get();


        return view('frontend.cv.index', compact('users', 'experiences', 'educations', 'skills', 'teammates','projects'));
    }
    
    
































































































}
