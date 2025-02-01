<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function pdf($id)
    {
        $invoice = Invoice::findOrFail($id);

        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.invoice.pdf', compact('invoice'));
    }



public function download($id)
{
    $invoice = Invoice::findOrFail($id);

    $pdf = Pdf::loadView('admin.pages.invoice.pdf', compact('invoice'));

    // Return the PDF as a downloadable file
    
    
    return $pdf->download("Invoice_{$invoice->id}.pdf");
}
    public function view()
    {
        return view('admin.pages.invoice.view');
    }


    public function list()
    {
        // Fetch all invoices from the database
        $invoices = Invoice::all(); // Assuming you have an `Invoice` model.
    
        // Redirect to the list view with the fetched invoices
        return view('admin.pages.invoice.list', compact('invoices'));
    }
    
    public function create()
    {
        // Redirects to resources/views/admin/pages/users/add.blade.php
        return view('admin.pages.invoice.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_title' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'bank_account_number' => 'required|string|max:255',
            'bank_account_holder' => 'required|string|max:255',
        ]);
    
        // Ensure milestones are arrays
        $milestone_name = is_array($request->milestone_name) ? $request->milestone_name : json_decode($request->milestone_name, true);
        $milestone_date = is_array($request->milestone_date) ? $request->milestone_date : json_decode($request->milestone_date, true);
        $milestone_amount = is_array($request->milestone_amount) ? $request->milestone_amount : json_decode($request->milestone_amount, true);
    
        $invoice = Invoice::create([
            
            'user_id' => Auth::id(),
            'client_name' => $request->client_name,
            'contact_person' => $request->contact_person,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'project_title' => $request->project_title,
            'project_description' => $request->project_description,
            'milestone_name' => $milestone_name, // No need for json_encode
            'milestone_date' => $milestone_date, // No need for json_encode
            'milestone_amount' => $milestone_amount, // No need for json_encode
            'discount_name' => $request->discount_name,
            'discount_amount' => $request->discount_amount,
            'bank_name' => $request->bank_name,
            'bank_account_number' => $request->bank_account_number,
            'bank_account_holder' => $request->bank_account_holder,
            'terms_conditions' => $request->terms_conditions,
        ]);
    
        return redirect()->route('admin.invoices.show', $invoice->id)->with('success', 'Invoice created successfully!');
    }
    
    public function update(Request $request, $id)
{
    $request->validate([
        'client_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'project_title' => 'required|string|max:255',
        'bank_name' => 'required|string|max:255',
        'bank_account_number' => 'required|string|max:255',
        'bank_account_holder' => 'required|string|max:255',
    ]);

    // Find the existing invoice
    $invoice = Invoice::findOrFail($id);

    // Ensure milestones are arrays
    $milestone_name = is_array($request->milestone_name) ? $request->milestone_name : json_decode($request->milestone_name, true);
    $milestone_date = is_array($request->milestone_date) ? $request->milestone_date : json_decode($request->milestone_date, true);
    $milestone_amount = is_array($request->milestone_amount) ? $request->milestone_amount : json_decode($request->milestone_amount, true);

    // Update the invoice
    $invoice->update([
        'client_name' => $request->client_name,
        'contact_person' => $request->contact_person,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'project_title' => $request->project_title,
        'project_description' => $request->project_description,
        'milestone_name' => $milestone_name, // No need for json_encode
        'milestone_date' => $milestone_date, // No need for json_encode
        'milestone_amount' => $milestone_amount, // No need for json_encode
        'discount_name' => $request->discount_name,
        'discount_amount' => $request->discount_amount,
        'bank_name' => $request->bank_name,
        'bank_account_number' => $request->bank_account_number,
        'bank_account_holder' => $request->bank_account_holder,
        'terms_conditions' => $request->terms_conditions,
    ]);

    return redirect()->route('admin.invoices.show', $invoice->id)->with('success', 'Invoice updated successfully!');
}

    
        public function show($id)
        {
            $invoice = Invoice::findOrFail($id); // Retrieve the invoice by ID or throw 404
            return view('admin.pages.invoice.view', compact('invoice'));
        }
        


public function edit($id)
{
    $invoice = Invoice::findOrFail($id); // Fetch invoice and related milestones
    return view('admin.pages.invoice.create', compact('invoice'));
}



























}
