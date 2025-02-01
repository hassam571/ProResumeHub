<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.projects.create');
    }

    public function list()
    {
        // Fetch all projects from the database
        $projects = Project::all();

        // Pass the projects to the view
        return view('admin.pages.projects.list', compact('projects'));
    }
    public function edit($id)
{
    $project = Project::findOrFail($id); // Fetch the project by ID
    return view('admin.pages.projects.create', compact('project')); // Pass the project data to the view
}
// Activate a Project
public function activate($id)
{
    $project = Project::findOrFail($id);
    $project->status = 'active'; // Set status to Active
    $project->save();

    return redirect()->route('admin.projects.index')->with('alert', [
        'type' => 'success',
        'title' => 'Project Activated',
        'message' => 'The project has been activated successfully.',
    ]);
}

// Deactivate a Project
public function deactivate($id)
{
    $project = Project::findOrFail($id);
    $project->status = 'inactive'; // Set status to Inactive
    $project->save();

    return redirect()->route('admin.projects.list')->with('alert', [
        'type' => 'warning',
        'title' => 'Project Deactivated',
        'message' => 'The project has been deactivated successfully.',
    ]);
}

// Delete a Project
public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('admin.projects.list')->with('alert', [
        'type' => 'success',
        'title' => 'Project Deleted',
        'message' => 'The project has been deleted successfully.',
    ]);
}

// Store a New Project
public function store(Request $request)
{
    $validatedData = $request->validate([
        'project_name' => 'nullable|string|max:255',
        'project_type' => 'nullable|string|max:255',
        'client_name' => 'nullable|string|max:255',
        'project_description' => 'nullable|string',
        'project_images.*' => 'nullable|file|image',
        'project_video' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
        'project_documents.*' => 'nullable|file|mimes:pdf,zip|max:10240',
        'live_link' => 'nullable|url',
        'duration' => 'nullable|integer|min:1',
        'project_cost' => 'nullable|numeric|min:0',
        'technologies_used' => 'nullable|string',
        'challenges_solutions' => 'nullable|string',
        'key_features' => 'nullable|string',
        'team_members' => 'nullable|string',
    ]);

    // Handle file uploads
    if ($request->hasFile('project_images')) {
        $validatedData['project_images'] = array_map(function ($file) {
            return $file->store('projects/images', 'public');
        }, $request->file('project_images'));
    }

    if ($request->hasFile('project_video')) {
        $validatedData['project_videos'] = $request->file('project_video')->store('projects/videos', 'public');
    }

    if ($request->hasFile('project_documents')) {
        $validatedData['project_documents'] = array_map(function ($file) {
            return $file->store('projects/documents', 'public');
        }, $request->file('project_documents'));
    }
    $validatedData['user_id'] = Auth::id();

    Project::create($validatedData);

    return redirect()->route('admin.projects.list')->with('alert', [
        'type' => 'success',
        'title' => 'Project Created',
        'message' => 'The project has been created successfully.',
    ]);
}

// Update an Existing Project
public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $validatedData = $request->validate([
        'project_name' => 'nullable|string|max:255',
        'project_type' => 'nullable|string|max:255',
        'client_name' => 'nullable|string|max:255',
        'project_description' => 'nullable|string',
        'project_images.*' => 'nullable|file|image',
        'project_video' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
        'project_documents.*' => 'nullable|file|mimes:pdf,zip|max:10240',
        'live_link' => 'nullable|url',
        'duration' => 'nullable|integer|min:1',
        'project_cost' => 'nullable|numeric|min:0',
        'technologies_used' => 'nullable|string',
        'challenges_solutions' => 'nullable|string',
        'key_features' => 'nullable|string',
        'team_members' => 'nullable|string',
    ]);

    // Handle project images
    if ($request->hasFile('project_images')) {
        $validatedData['project_images'] = array_map(function ($file) {
            return $file->store('projects/images', 'public');
        }, $request->file('project_images'));

        if ($project->project_images) {
            foreach ($project->project_images as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        }
    }

    // Handle project video
    if ($request->hasFile('project_video')) {
        $validatedData['project_videos'] = $request->file('project_video')->store('projects/videos', 'public');

        if ($project->project_videos) {
            Storage::disk('public')->delete($project->project_videos);
        }
    }

    // Handle project documents
    if ($request->hasFile('project_documents')) {
        $validatedData['project_documents'] = array_map(function ($file) {
            return $file->store('projects/documents', 'public');
        }, $request->file('project_documents'));

        if ($project->project_documents) {
            foreach ($project->project_documents as $oldDocument) {
                Storage::disk('public')->delete($oldDocument);
            }
        }
    }

    $project->update($validatedData);

    return redirect()->route('admin.projects.list')->with('alert', [
        'type' => 'success',
        'title' => 'Project Updated',
        'message' => 'The project details have been updated successfully.',
    ]);
}



}
