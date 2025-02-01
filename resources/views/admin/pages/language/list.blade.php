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
                        <th>Language</th>
                        <th>Proficiency</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($languages as $language)
                    <tr>
                        <td>{{ $language->language_name }}</td>
                        <td>{{ $language->proficiency_level }}</td>
                        <td>
                            <div class="d-flex gap-2 actions">
                                <!-- Edit Button -->
                                <a href="{{ route('admin.languages.edit', $language->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                    <i class="material-icons-outlined">edit</i>
                                </a>
            
                                <!-- Delete Button -->
                                <form action="{{ route('admin.languages.destroy', $language->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this language?');">
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
