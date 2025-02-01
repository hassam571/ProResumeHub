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
                        <th>Skill Name</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Proficiency</th>
                        <th>Experience (Years)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->id }}</td>
                            <td>{{ $skill->skill_name }}</td>
                            <td>{{ $skill->skill_category }}</td>
                            <td>{{ $skill->skill_subcategory }}</td>
                            <td>{{ $skill->proficiency_level }}</td>
                            <td>{{ $skill->years_experience ?? 'N/A' }}</td>
                            <td>
                                <div class="d-flex gap-2 actions">
                                    <!-- Deactivate or Reactivate Button -->
                                    @if($skill->status === '1')
                                        <form action="{{ route('admin.skills.deactivate', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this skill?');">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Deactivate">
                                                <i class="material-icons-outlined">block</i> Deactivate
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.skills.activate', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to activate this skill?');">
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
                                    <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="material-icons-outlined">edit</i> Edit
                                    </a>
            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this skill?');">
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
