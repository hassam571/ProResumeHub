<?php

namespace App\Http\Controllers;

use App\Models\CompletedMilestone;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        $nextOrderId = Order::count() + 1; // Get next Order ID
        return view('admin.pages.order.order', compact('nextOrderId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_password' => 'required',
            'project_name' => 'required',
            'project_description' => 'required',
            'milestones' => 'nullable',
            'milestones.*.title' => 'required',
            'milestones.*.detail' => 'required',
            'milestones.*.due_date' => 'required',
        ]);

        Order::create([
            'order_password' => $request->order_password,
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'milestones' => $request->milestones ?? [],
        ]);

        return back()->with('success', 'Order created successfully!');
    }
    public function index()
    {
        $orders = Order::all(); // Fetch all orders from the database
        return view('admin.pages.order.list', compact('orders'));
    }

public function show($id)
{
    $order = Order::findOrFail($id); // Fetch the specific order
    return view('admin.pages.order.show', compact('order'));
}

public function edit($id)
{
    $order = Order::findOrFail($id); // Fetch the specific order for editing
    return view('admin.pages.order.edit', compact('order'));
}
public function manage($id)
{
    $order = Order::findOrFail($id); // Fetch the specific order for manage

    return view('admin.pages.order.manage', compact('order'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'order_password' => 'required',
        'project_name' => 'required',
        'project_description' => 'required',
        'milestones' => 'nullable',
        'milestones.*.title' => 'required',
        'milestones.*.detail' => 'required',
        'milestones.*.due_date' => 'required',
    ]);

    $order = Order::findOrFail($id);
    $order->update([
        'order_password' => $request->order_password,
        'project_name' => $request->project_name,
        'project_description' => $request->project_description,
        'milestones' => $request->milestones ?? [],
    ]);

    return redirect()->route('admin.pages.orders.index')->with('success', 'Order updated successfully!');
}
public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect()->route('admin.pages.orders.index')->with('success', 'Order deleted successfully!');
}

    public function markDone(Request $request)
    {
        try {
            // Ensure user is logged in
            if (!auth()->check()) {
                return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
            }

            // Validate input fields


            // Retrieve the order and its milestones (assumed to be stored as JSON)
            $order = Order::findOrFail($request->order_id);
            $milestones = $order->milestones;

            // Get the current milestone index
            $index = $request->milestone_index;

            // Check if milestone exists
            if (!isset($milestones[$index])) {
                return response()->json(['success' => false, 'message' => 'Invalid milestone index.'], 400);
            }

            $milestones[$index]['done'] = true;
            $milestones[$index]['current'] = false;

            // Set the next milestone as active, if it exists
            if (isset($milestones[$index + 1])) {
                $milestones[$index + 1]['current'] = true;
            }

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('milestones', 'public');
            }

            \App\Models\CompletedMilestone::create([
                'user_id'     => auth()->id(),
                'order_id'    => $request->order_id,
                'name'        => $request->name,
                'description' => $request->description,
                'image'       => $imagePath,
                'status'      => 'done'
            ]);

            $order->milestones = $milestones;
            $order->save();

            return response()->json(['success' => true, 'message' => 'Milestone updated successfully!']);
        } catch (\Exception $e) {
            \Log::error("Error in markDone: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Something went wrong. Check logs for details.'], 500);
        }
    }


    public function performance($orderId = null)
    {
        $user = auth()->user()->id;
        $query = CompletedMilestone::where('user_id', $user);
        if ($orderId) {
            $query->where('order_id', $orderId);
        }

        $order_mileStines = $query->get();

        return view('admin.pages.order.performance', compact('order_mileStines'));
    }






}
