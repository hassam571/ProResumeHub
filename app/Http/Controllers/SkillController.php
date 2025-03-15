<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{

    public function create()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.skills.create');
    }

    public function list()
    {
        $skills = Skill::all(); // Fetch all skills
        return view('admin.pages.skills.list', compact('skills'));
    }
    public function edit($id)
    {
        $skill = Skill::findOrFail($id); // Fetch the project by ID
        return view('admin.pages.skills.create', compact('skill')); // Pass the project data to the view
    }


// Activate a Skill
public function activate($id)
{
    $skill = Skill::findOrFail($id);
    $skill->status = '1'; // Set status to Active
    $skill->save();

    return redirect()->route('admin.skills.list')->with('alert', [
        'type' => 'success',
        'title' => 'Skill Activated',
        'message' => 'The skill has been activated successfully.',
    ]);
}

// Deactivate a Skill
public function deactivate($id)
{
    $skill = Skill::findOrFail($id);
    $skill->status = '0'; // Set status to Inactive
    $skill->save();

    return redirect()->route('admin.skills.list')->with('alert', [
        'type' => 'warning',
        'title' => 'Skill Deactivated',
        'message' => 'The skill has been deactivated successfully.',
    ]);
}

// Store a New Skill
public function store(Request $request)
{
    $validated = $request->validate([
        'skill_name' => 'required|string|max:255',
        'skill_category' => 'required|string|max:255',
        'skill_subcategory' => 'required|string|max:255',
        'proficiency_level' => 'required|string|max:255',
        'years_experience' => 'nullable|integer|min:0',
        'skill_icon' => 'nullable|min:0',
        'related_tools' => 'nullable|string',
        'organization_name' => 'nullable|string|max:255',
        'job_title' => 'nullable|string|max:255',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'key_achievements' => 'nullable|string',
        'location' => 'nullable|string|max:255',
        'notable_projects' => 'nullable|string',
        'publications' => 'nullable|string',
        'certifications' => 'nullable|string',
        'certification_documents' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        'additional_comments' => 'nullable|string',
        'skill_description' => 'nullable|string',
        'ratings' => 'nullable|string|max:255',
        'languages' => 'nullable|string',
        'unique_contributions' => 'nullable|string',
        'testimonials' => 'nullable|string',
    ]);

    // Handle file upload for certification documents
    if ($request->hasFile('certification_documents')) {
        $validated['certification_documents'] = $request->file('certification_documents')->store('certifications');
    }
    $validated['user_id'] = Auth::id();

    Skill::create($validated);

    return redirect()->route('admin.skills.list')->with('alert', [
        'type' => 'success',
        'title' => 'Skill Added',
        'message' => 'The skill has been added successfully.',
    ]);
}

// Update an Existing Skill
public function update(Request $request, $id)
{
    $skill = Skill::findOrFail($id);

    $validated = $request->validate([
        'skill_name' => 'required|string|max:255',
        'skill_category' => 'required|string|max:255',
        'skill_subcategory' => 'required|string|max:255',
        'proficiency_level' => 'required|string|max:255',
        'years_experience' => 'nullable|integer|min:0',
        'skill_icon' => 'nullable|integer|min:0',
        'related_tools' => 'nullable|string',
        'organization_name' => 'nullable|string|max:255',
        'job_title' => 'nullable|string|max:255',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'key_achievements' => 'nullable|string',
        'location' => 'nullable|string|max:255',
        'notable_projects' => 'nullable|string',
        'publications' => 'nullable|string',
        'certifications' => 'nullable|string',
        'certification_documents' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        'additional_comments' => 'nullable|string',
        'skill_description' => 'nullable|string',
        'ratings' => 'nullable|string|max:255',
        'languages' => 'nullable|string',
        'unique_contributions' => 'nullable|string',
        'testimonials' => 'nullable|string',
    ]);

    // Handle file upload for certification documents
    if ($request->hasFile('certification_documents')) {
        if ($skill->certification_documents) {
            \Storage::delete($skill->certification_documents); // Delete old file
        }
        $validated['certification_documents'] = $request->file('certification_documents')->store('certifications');
    }
    $validated['user_id'] = Auth::id();

    $skill->update($validated);

    return redirect()->route('admin.skills.list')->with('alert', [
        'type' => 'success',
        'title' => 'Skill Updated',
        'message' => 'The skill details have been updated successfully.',
    ]);
}


}
