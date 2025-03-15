@extends('admin.layouts.app')

@section('breadcrumb-title', 'Orders')
@section('breadcrumbs', 'List')

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0 py-1">Order Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Project Name</th>
                        <th>Project Description</th>
                        <th>Total Milestones</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->project_name }}</td>
                            <td>{{ $order->project_description }}</td>
                            <td>{{ count($order->milestones) }}</td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- View Button -->
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-outline-info btn-sm" title="View">
                                        <i class="material-icons-outlined">visibility</i> View
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i> Edit
                                    </a>

                                    <a href="{{ route('orders.manage', $order->id) }}" class="btn btn-outline-primary btn-sm" title="Manage">
                                        <i class="material-icons-outlined">work_outline</i> Manage

                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                            <i class="material-icons-outlined">delete</i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
