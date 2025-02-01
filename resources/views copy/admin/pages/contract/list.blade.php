@extends('admin.layouts.app')

@section('breadcrumb-title', 'Jobs')
@section('breadcrumbs', 'List')

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0 py-1">Job Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="contractsTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Contract Title</th>
                        <th>Client Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contracts as $contract)
                        <tr>
                            <td>{{ $contract->id }}</td>
                            <td>{{ $contract->contract_title }}</td>
                            <td>{{ $contract->client_name }}</td>
                            <td>{{ $contract->start_date }}</td>
                            <td>{{ $contract->end_date }}</td>
                            <td>
                                @if($contract->end_date < now()->toDateString())
                                    <span class="badge bg-danger">Expired</span>
                                @else
                                    <span class="badge bg-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- View Details Button -->
                                    <a href="{{ route('admin.contract.show', $contract->id) }}" class="btn btn-outline-info btn-sm" title="View">
                                        <i class="material-icons-outlined">visibility</i>
                                    </a>
            
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.contract.edit', $contract->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i>
                                    </a>
            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.contract.destroy', $contract->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contract?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                            <i class="material-icons-outlined">delete</i>
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
