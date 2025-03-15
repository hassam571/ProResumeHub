
@extends('admin.layouts.app')

@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'List')

@section('content')


<style>
    .actions button,.image{display: flex;justify-content:center;align-items: center;}
</style>
<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0 py-1">User List with Action Buttons</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DP</th> <!-- New column for the display picture -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td class="image">
                            <!-- Display the DP -->
                            @if($user->dp_path)
                                <img src="{{ asset('storage/' . $user->dp_path) }}" alt="DP" class="align-self-center rounded-circle p-1 border bg-primary" width="50" height="50">
                            @else
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png
" alt="Default DP" class="rounded-circle img-fluid rounded-circle border p-1  shadow" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <div class="d-flex gap-2 actions">
                                <!-- Deactivate or Reactivate Button -->
                                @if($user->is_active)
                                    <form action="{{ route('admin.users.activate', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this user?');">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" title="Activate this user">
                                            <i class="material-icons-outlined">block</i> Deactivated
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.users.deactivate', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to reactivate this user?');">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-success" title="Deactivate This User">
                                            <i class="material-icons-outlined">check_circle</i> Activated
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2 actions">
                                <!-- View Button -->
                                {{-- <button type="button" class="btn btn-outline-info btn-sm" title="View">
                                    <i class="material-icons-outlined">visibility</i>
                                </button> --}}
                                <!-- Edit Button -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                    <i class="material-icons-outlined">edit</i>
                                </a>

                                <!-- Deactivate Button -->
                                <form action="{{ route('admin.users.deactivate', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to deactivate this user?');">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-warning btn-sm" title="Deactivate">
                                        <i class="material-icons-outlined">block</i>
                                    </button>
                                </form>
                                <!-- Delete Button -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
