<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{



    public function list()
    {
        $contacts = ContactUs::where('user_id', Auth::id())->get(); // Ensure to fetch records for the authenticated user
        return view('admin.pages.contacts.list', compact('contacts'));
    }
    
    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
    
        return redirect()->route('admin.contacts.list')->with('success', 'Contact record deleted successfully!');
    }
    



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactUs::create([
            'user_id' => Auth::id(), // Associate with logged-in user
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return response()->json(['success' => 'Message sent successfully!'], 200);
    }
}
