<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function create()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.job.create');
    }

    public function list()
    {
        $jobs = Job::all();
        return view('admin.pages.job.list',compact('jobs'));
    }

// Activate a Job
public function activate($id)
{
    $job = Job::findOrFail($id);

    // Update the status to 'active'
    $job->status = 'active';
    $job->save();

    return redirect()->route('admin.jobs.list')->with('alert', [
        'type' => 'success',
        'title' => 'Job Activated',
        'message' => 'The job has been activated successfully.',
    ]);
}

// Deactivate a Job
public function deactivate($id)
{
    $job = Job::findOrFail($id);

    // Update the status to 'inactive'
    $job->status = 'inactive';
    $job->save();

    return redirect()->route('admin.jobs.list')->with('alert', [
        'type' => 'warning',
        'title' => 'Job Deactivated',
        'message' => 'The job has been deactivated successfully.',
    ]);
}

// Delete a Job
public function destroy($id)
{
    $job = Job::findOrFail($id);

    // Delete the job record
    $job->delete();

    return redirect()->route('admin.jobs.list')->with('alert', [
        'type' => 'success',
        'title' => 'Job Deleted',
        'message' => 'The job has been deleted successfully.',
    ]);
}

// Edit a Job
public function edit($id)
{
    $job = Job::findOrFail($id); // Fetch the job by ID
    return view('admin.pages.job.create', compact('job')); // Reuse the create form for editing
}

// Store a New Job

public function store(Request $request)
{
    $validated = $request->validate([
        'job_title'          => 'required|string|max:255',
        'organization_name'  => 'required|string|max:255',
        'employment_type'    => 'required|string|max:255',
        'start_date'         => 'required|date',
        'end_date'           => 'nullable|date|after_or_equal:start_date',
        'location'           => 'nullable|string|max:255',
        'key_achievements'   => 'nullable|string',
        'notable_projects'   => 'nullable|string',
        'tools_used'         => 'nullable|string',
        'challenges_solutions' => 'nullable|string',
        'skills_acquired'    => 'nullable|string|max:255',
        'references'         => 'nullable|string|max:255',
    ]);

    // Add the authenticated user's ID to the validated data
    $validated['user_id'] = Auth::id();

    Job::create($validated);

    return redirect()->route('admin.jobs.list')->with('alert', [
        'type'    => 'success',
        'title'   => 'Job Added',
        'message' => 'The job has been added successfully.',
    ]);
}

// Update an Existing Job
public function update(Request $request, $id)
{
    $job = Job::findOrFail($id);

    $validated = $request->validate([
        'job_title' => 'required|string|max:255',
        'organization_name' => 'required|string|max:255',
        'employment_type' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'location' => 'nullable|string|max:255',
        'key_achievements' => 'nullable|string',
        'notable_projects' => 'nullable|string',
        'tools_used' => 'nullable|string',
        'challenges_solutions' => 'nullable|string',
        'skills_acquired' => 'nullable|string|max:255',
        'references' => 'nullable|string|max:255',
    ]);

    $job->update($validated);

    return redirect()->route('admin.jobs.list')->with('alert', [
        'type' => 'success',
        'title' => 'Job Updated',
        'message' => 'The job details have been updated successfully.',
    ]);
}





}
