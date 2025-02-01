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
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Field of Study</th>
                        <th>Grade</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educations as $education)
                    <tr>
                        <td>{{ $education->degree_name }}</td>
                        <td>{{ $education->institute_name }}</td>
                        <td>{{ $education->start_date }}</td>
                        <td>{{ $education->ongoing ? 'Ongoing' : $education->end_date }}</td>
                        <td>{{ $education->field_of_study }}</td>
                        <td>{{ $education->grade }}</td>
                        <td>{{ $education->location }}</td>

                        <td>
                            <div class="d-flex gap-2 actions">
                                <!-- Edit Button -->
                                <a href="{{ route('educations.edit', $education->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                    <i class="material-icons-outlined">edit</i>
                                </a>
                    
                                <!-- Delete Button -->
                                <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this education record?');">
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
