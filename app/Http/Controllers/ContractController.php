<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    public function create()
    {
        return view('admin.pages.contract.create');
    }

    public function edit($id)
    {
        $contract = Contract::findOrFail($id);
        return view('admin.pages.contract.create', compact('contract'));
    }
    

    public function list()
    {    $contracts = Contract::all(); // Assuming you have an `Invoice` model.

                return view('admin.pages.contract.list',compact('contracts'));
    }

    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return view('admin.pages.contract.view', compact('contract'));
    }
    
    public function destroy($id)
    {
        // Find the contract by its ID
        $contract = Contract::findOrFail($id);
    
        // Delete the contract
        $contract->delete();
    
        // Redirect back with a success message
        return redirect()->route('contracts.index')->with('success', 'Contract deleted successfully!');
    }
        



    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'contract_title'         => 'nullable|string|max:255',
            'contract_purpose'       => 'nullable|string',
            'client_name'            => 'nullable|string|max:255',
            'client_email'           => 'nullable|email|max:255',
            'client_phone'           => 'nullable|string|max:50',
            'client_address'         => 'nullable|string',
            'start_date'             => 'nullable|date',
            'end_date'               => 'nullable|date',
            'milestone_name'         => 'nullable|array',
            'milestone_desc'         => 'nullable|array',
            'milestone_date'         => 'nullable|array',
            'milestone_amount'       => 'nullable|array',
            'project_timeline'       => 'nullable|string',
            'payment_terms'          => 'nullable|string',
            'revisions'              => 'nullable|string',
            'ownership'              => 'nullable|string',
            'confidentiality'        => 'nullable|string',
            'client_responsibilities'=> 'nullable|string',
            'termination_clause'     => 'nullable|string',
            'dispute_resolution'     => 'nullable|string',
            'limitation_liability'   => 'nullable|string',
            'amendments'             => 'nullable|string',
        ]);
        $contract = new Contract();
        $contract->user_id          = Auth::id();
        $contract->contract_title          = $request->input('contract_title');
        $contract->contract_purpose        = $request->input('contract_purpose');
        $contract->client_name             = $request->input('client_name');
        $contract->client_email            = $request->input('client_email');
        $contract->client_phone            = $request->input('client_phone');
        $contract->client_address          = $request->input('client_address');
        $contract->start_date              = $request->input('start_date');
        $contract->end_date                = $request->input('end_date');
        $contract->milestone_name          = json_encode($request->input('milestone_name'));
        $contract->milestone_desc          = json_encode($request->input('milestone_desc'));
        $contract->milestone_date          = json_encode($request->input('milestone_date'));
        $contract->milestone_amount        = json_encode($request->input('milestone_amount'));
        $contract->project_timeline        = $request->input('project_timeline');
        $contract->payment_terms           = $request->input('payment_terms');
        $contract->revisions               = $request->input('revisions');
        $contract->ownership               = $request->input('ownership');
        $contract->confidentiality         = $request->input('confidentiality');
        $contract->client_responsibilities = $request->input('client_responsibilities');
        $contract->termination_clause      = $request->input('termination_clause');
        $contract->dispute_resolution      = $request->input('dispute_resolution');
        $contract->limitation_liability    = $request->input('limitation_liability');
        $contract->amendments              = $request->input('amendments');
        $contract->save();     
        return redirect()
        ->route('admin.contract.show', $contract->id)
        ->with('success', 'Contract has been created successfully!');
    
    }

    
    

    


    public function update(Request $request, $id)
    {
        // 1. Find the contract by ID or fail if not found
        $contract = Contract::findOrFail($id);
    
        // 2. Validate the request data
        $validatedData = $request->validate([
            'contract_title'         => 'nullable|string|max:255',
            'contract_purpose'       => 'nullable|string',
            'client_name'            => 'nullable|string|max:255',
            'client_email'           => 'nullable|email|max:255',
            'client_phone'           => 'nullable|string|max:50',
            'client_address'         => 'nullable|string',
            'start_date'             => 'nullable|date',
            'end_date'               => 'nullable|date|after_or_equal:start_date',
            'milestone_name'         => 'nullable|array',
            'milestone_desc'         => 'nullable|array',
            'milestone_date'         => 'nullable|array',
            'milestone_amount'       => 'nullable|array',
            'project_timeline'       => 'nullable|string',
            'payment_terms'          => 'nullable|string',
            'revisions'              => 'nullable|string',
            'ownership'              => 'nullable|string',
            'confidentiality'        => 'nullable|string',
            'client_responsibilities'=> 'nullable|string',
            'termination_clause'     => 'nullable|string',
            'dispute_resolution'     => 'nullable|string',
            'limitation_liability'   => 'nullable|string',
            'amendments'             => 'nullable|string',
        ]);
    
        // 3. Update contract fields
        $contract->contract_title          = $request->input('contract_title');
        $contract->contract_purpose        = $request->input('contract_purpose');
        $contract->client_name             = $request->input('client_name');
        $contract->client_email            = $request->input('client_email');
        $contract->client_phone            = $request->input('client_phone');
        $contract->client_address          = $request->input('client_address');
        $contract->start_date              = $request->input('start_date');
        $contract->end_date                = $request->input('end_date');
    
        // Convert arrays to JSON before saving (as defined in your migration)
        $contract->milestone_name          = json_encode($request->input('milestone_name'));
        $contract->milestone_desc          = json_encode($request->input('milestone_desc'));
        $contract->milestone_date          = json_encode($request->input('milestone_date'));
        $contract->milestone_amount        = json_encode($request->input('milestone_amount'));
    
        $contract->project_timeline        = $request->input('project_timeline');
        $contract->payment_terms           = $request->input('payment_terms');
        $contract->revisions               = $request->input('revisions');
        $contract->ownership               = $request->input('ownership');
        $contract->confidentiality         = $request->input('confidentiality');
        $contract->client_responsibilities = $request->input('client_responsibilities');
        $contract->termination_clause      = $request->input('termination_clause');
        $contract->dispute_resolution      = $request->input('dispute_resolution');
        $contract->limitation_liability    = $request->input('limitation_liability');
        $contract->amendments              = $request->input('amendments');
    
        // 4. Save the changes
        $contract->save();
    
        // 5. Redirect back or to another page with success message
        return redirect()
            ->route('admin.contract.list') // or wherever you want to redirect
            ->with('success', 'Contract updated successfully!');
    }
    
























    

}
