<?php
namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function create()
    {
        $languages = Language::all();
        return view('admin.pages.language.create');
    }
    public function index()
    {
        $languages = Language::all();
        return view('admin.pages.language.list', compact('languages'));
    }

  
public function store(Request $request)
{
    $validated = $request->validate([
        'language_name'     => 'required|string|max:255',
        'proficiency_level' => 'required|string|max:255',
    ]);

    // Add the authenticated user's ID to the validated data
    $validated['user_id'] = Auth::id();

    // Insert the record into the database
    Language::create($validated);

    return redirect()->route('admin.languages.index')->with('success', 'Language added successfully!');
}

    public function edit(Language $language)
    {
        return view('admin.pages.language.create', compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $validated = $request->validate([
            'language_name' => 'required|string|max:255',
            'proficiency_level' => 'required|string|max:255',
        ]);

        $language->update($validated);

        return redirect()->route('admin.languages.index')->with('success', 'Language updated successfully!');
    }

    public function destroy(Language $language)
    {
        $language->delete();

        return redirect()->route('admin.languages.index')->with('success', 'Language deleted successfully!');
    }
}
