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
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Job Title</th>
                        <th>Organization Name</th>
                        <th>Employment Type</th>
                      
                        <th>Location</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->job_title }}</td>
                            <td>{{ $job->organization_name }}</td>
                            <td>{{ $job->employment_type }}</td>
                         
                            <td>{{ $job->location ?? 'Remote' }}</td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- Deactivate or Reactivate Button -->
                                    @if($job->status === 'active')
                                        <form action="{{ route('admin.jobs.deactivate', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this job?');">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" title="Deactivate">
                                                <i class="material-icons-outlined">block</i> Deactivated
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.jobs.activate', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to activate this job?');">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success" title="Reactivate">
                                                <i class="material-icons-outlined">check_circle</i> Activated
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                            
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- View Details Button -->
                               
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i>
                                    </a>
            
                                    <!-- Deactivate Button -->
                                    <form action="{{ route('admin.jobs.deactivate', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this job?');">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-warning btn-sm" title="Deactivate">
                                            <i class="material-icons-outlined">block</i>
                                        </button>
                                    </form>
            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
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
