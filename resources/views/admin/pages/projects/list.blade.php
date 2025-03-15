

@extends('admin.layouts.app')

@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'List')

@section('content')


<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0 py-1">Project List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Project Type</th>
                        <th>Client Name</th>
                        <th>Project Description</th>
                        <th>Preview</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->project_type }}</td>
                            <td>{{ $project->client_name }}</td>
                            <td>{{ $project->project_description }}</td>
                            <td>
                                @if (is_array($project->project_images) && count($project->project_images) > 0)
                                    @php
                                        $firstImage = $project->project_images[0];
                                    @endphp
                                    <div class="image-preview">
                                        <img src="{{ asset('storage/' . $firstImage) }}" alt="Project Image" class="img-thumbnail rounded" style="width: 100px; height: 100px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    </div>
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- Activate/Deactivate Button -->
                                    @if($project->status === 'active')
                                        <form action="{{ route('admin.projects.deactivate', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this project?');">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-warning btn-sm" title="Deactivate">
                                                <i class="material-icons-outlined">block</i> Deactivate
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.projects.activate', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to activate this project?');">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success btn-sm" title="Activate">
                                                <i class="material-icons-outlined">check_circle</i> Activate
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2 actions">
                           
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i> Edit
                                    </a>
            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
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