<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function create()
    {
        return view('admin.pages.education.create');
    }
    public function list()
    {
            $educations = Education::all(); // Assuming you have an `Invoice` model.

        return view('admin.pages.education.list',compact('educations'));

    }

    public function edit(Education $education)
    {
        return view('admin.pages.education.create', compact('education'));
    }
    





    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'degree_name' => 'required|string|max:255',
            'institute_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'ongoing' => 'nullable|boolean',
            'field_of_study' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'certifications' => 'nullable|string',
        ]);

        // If "ongoing" is checked, set end_date to null
        if ($request->has('ongoing')) {
            $validated['ongoing'] = true;
            $validated['end_date'] = null;
        } else {
            $validated['ongoing'] = false;
        }

        $education->update($validated);

        return redirect()->route('admin.education.list')->with('success', 'Education record updated successfully!');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.education.list')->with('success', 'Education record deleted successfully!');
    }



    
public function store(Request $request)
{
    $validated = $request->validate([
        'degree_name'      => 'required|string|max:255',
        'institute_name'   => 'required|string|max:255',
        'start_date'       => 'required|date',
        'end_date'         => 'nullable|date',
        'ongoing'          => 'nullable|boolean',
        'field_of_study'   => 'nullable|string|max:255',
        'grade'            => 'nullable|string|max:50',
        'location'         => 'nullable|string|max:255',
        'description'      => 'nullable|string',
        'certifications'   => 'nullable|string',
    ]);

    // Handle the "Ongoing" checkbox
    if ($request->has('ongoing') && $request->ongoing) {
        $validated['ongoing'] = true;
        $validated['end_date'] = null;  // Make sure end_date is null if ongoing is checked
    } else {
        $validated['ongoing'] = false;
    }

    // Assign the currently authenticated user's ID
    $validated['user_id'] = Auth::id();

    // Create the Education record
    Education::create($validated);

    // Redirect with a success message
    return redirect()
           ->route('admin.education.list')
           ->with('success', 'Education record saved successfully!');
}













































}
