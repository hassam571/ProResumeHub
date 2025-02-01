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
            <table id="contactsTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- View Button -->
                                    <button type="button" class="btn btn-outline-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#viewMessageModal{{ $contact->id }}">
                                        <i class="material-icons-outlined">visibility</i>
                                    </button>
                            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact record?');">
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

@foreach ($contacts as $contact)

<!-- Modal for Viewing Message -->
<div class="modal fade" id="viewMessageModal{{ $contact->id }}" tabindex="-1" aria-labelledby="viewMessageModalLabel{{ $contact->id }}" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="viewMessageModalLabel{{ $contact->id }}">Message from {{ $contact->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $contact->message }}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>
@endforeach
@endsection
