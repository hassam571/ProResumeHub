@extends('admin.layouts.app')

@section('breadcrumb-title', 'Invoices')
@section('breadcrumbs', 'List')

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0 py-1">Invoice Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Project Title</th>
                        <th>Total Cost</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->id }}</td>
                            <td>{{ $invoice->client_name }}</td>
                            <td>{{ $invoice->project_title }}</td>
                            <td>${{ number_format($invoice->total_cost, 2) }}</td>
                            <td>${{ number_format($invoice->discount, 2) }}</td>
                            <td>${{ number_format($invoice->grand_total, 2) }}</td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- Download Button -->
                                    {{-- <td>
                                        <a href="{{ route('admin.invoices.download', $invoice->id) }}" class="btn btn-primary btn-sm">
                                            <i class="material-icons-outlined">download</i> Download
                                        </a>
                                    </td> --}}

                                    <!-- View Button -->
                                    <a href="{{ route('admin.invoices.show', $invoice->id) }}" class="btn btn-outline-info btn-sm" title="View">
                                        <i class="material-icons-outlined">visibility</i> View
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.invoices.edit', $invoice->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i> Edit
                                    </a>
                                    

                                    <!-- Delete Button -->
                                    {{-- <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this invoice?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                            <i class="material-icons-outlined">delete</i> Delete
                                        </button>
                                    </form> --}}
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
