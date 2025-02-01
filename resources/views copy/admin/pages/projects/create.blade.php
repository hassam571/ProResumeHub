@extends('admin.layouts.app')
@section('breadcrumb-title', 'Projects')
@section('breadcrumbs', 'Add/Edit')

@section('content')

<div class="container mt-5">
    <div class="card rounded-4 shadow">
        <div class="card-body p-4">
            <h5 class="mb-4 fw-bold text-center">Projects Details</h5>

            <form 
                action="{{ isset($project) ? route('admin.projects.update', $project->id) : route('admin.projects.store') }}" 
                method="POST" 
                enctype="multipart/form-data"
            >
                @csrf
                @if(isset($project))
                    @method('PUT') <!-- Include this for edit -->
                @endif
                
                <div class="row g-3">
                    <!-- Project Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Project Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Project Name" 
                            name="project_name" 
                            value="{{ old('project_name', $project->project_name ?? '') }}">
                    </div>
            
                    <!-- Project Type -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Project Type</label>
                        <select class="form-select" name="project_type">
                            <option disabled {{ !isset($project) ? 'selected' : '' }}>Choose Project Type</option>
                            <option value="Web Development" {{ old('project_type', $project->project_type ?? '') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                            <option value="App Development" {{ old('project_type', $project->project_type ?? '') == 'App Development' ? 'selected' : '' }}>App Development</option>
                            <option value="Digital Marketing" {{ old('project_type', $project->project_type ?? '') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                            <option value="Graphic Design" {{ old('project_type', $project->project_type ?? '') == 'Graphic Design' ? 'selected' : '' }}>Graphic Design</option>
                            <option value="Other" {{ old('project_type', $project->project_type ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <!-- Client/Organization Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Client/Organization Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Client or Organization" 
                            name="client_name" 
                            value="{{ old('client_name', $project->client_name ?? '') }}">
                    </div>
            
                    <!-- Project Description -->
                    <div class="col-12">
                        <label class="form-label">Project Description</label>
                        <textarea 
                            class="form-control" 
                            placeholder="Provide an overview of the project" 
                            name="project_description" 
                            rows="4"
                        >{{ old('project_description', $project->project_description ?? '') }}</textarea>
                    </div>

                
                    <style>
                        .image-preview-link {
                            display: inline-block;
                            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                        }
                        .image-preview-link:hover img {
                            transform: scale(1.1);
                            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
                        }
                        .list-group-item {
                            border: none;
                        }
                    </style>
                    











<!-- Project Video -->
<div class="col-12 mb-4">
    <label class="form-label fw-bold">Project Video</label>
    <input type="file" class="form-control mb-3" name="project_video">
    @if(isset($project) && $project->project_videos)
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <h6 class="card-title mb-3">Current Video</h6>
                <video controls style="width: 100%; max-height: 200px; border-radius: 10px;">
                    <source src="{{ asset('storage/' . $project->project_videos) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <a href="{{ asset('storage/' . $project->project_videos) }}" target="_blank" class="btn btn-primary btn-sm mt-3">Open Full Video</a>
            </div>
        </div>
    @endif
</div>

<!-- Documentation -->
<div class="col-12 mb-4">
    <label class="form-label fw-bold">Documentation (ZIP/PDF)</label>
    <input type="file" class="form-control mb-3" name="project_documents[]" accept=".zip,.pdf" multiple>
    @if(isset($project) && $project->project_documents)
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="card-title mb-3">Current Documents</h6>
                <ul class="list-group">
                    @foreach($project->project_documents as $doc)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ basename($doc) }}</span>
                            <a href="{{ asset('storage/' . $doc) }}" target="_blank" class="btn btn-link btn-sm text-primary">View/Download</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>

<!-- Project Images -->
<div class="col-12 mb-4">
    <label class="form-label fw-bold">Project Images</label>
    <input type="file" class="form-control mb-3" name="project_images[]" accept="image/*" multiple>
    @if(isset($project) && $project->project_images)
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="card-title mb-3">Current Images</h6>
                <div class="row g-3">
                    @foreach($project->project_images as $image)
                        <div class="col-4 col-md-2">
                            <div class="card border-0 shadow-sm text-center">
                                <a href="{{ asset('storage/' . $image) }}" class="image-preview-link" data-lightbox="project-images" data-title="Project Image">
                                    <img 
                                        src="{{ asset('storage/' . $image) }}" 
                                        alt="Image" 
                                        class="img-thumbnail img-fluid"
                                        style="width: 100px; height: 100px; object-fit: cover;"
                                    >
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>























































                    <!-- Live Link -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Live Link</label>
                        <input 
                            type="url" 
                            class="form-control" 
                            placeholder="Live URL (e.g., https://example.com)" 
                            name="live_link" 
                            value="{{ old('live_link', $project->live_link ?? '') }}">
                    </div>

                    <!-- Duration -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Duration (in weeks)</label>
                        <input 
                            type="number" 
                            class="form-control" 
                            placeholder="Duration in weeks" 
                            name="duration" 
                            min="1" 
                            value="{{ old('duration', $project->duration ?? '') }}">
                    </div>

                    <!-- Project Cost -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Project Cost</label>
                        <input 
                            type="number" 
                            class="form-control" 
                            placeholder="Cost in USD" 
                            name="project_cost" 
                            step="0.01" 
                            value="{{ old('project_cost', $project->project_cost ?? '') }}">
                    </div>

                    <!-- Technologies Used -->
                    <div class="col-12">
                        <label class="form-label">Technologies/Tools Used</label>
                        <textarea 
                            class="form-control" 
                            name="technologies_used" 
                            placeholder="E.g., React.js, Photoshop, etc." 
                            rows="3"
                        >{{ old('technologies_used', $project->technologies_used ?? '') }}</textarea>
                    </div>

                    <!-- Challenges & Solutions -->
                    <div class="col-12">
                        <label class="form-label">Challenges & Solutions</label>
                        <textarea 
                            class="form-control" 
                            name="challenges_solutions" 
                            placeholder="Describe any challenges and how they were solved" 
                            rows="3"
                        >{{ old('challenges_solutions', $project->challenges_solutions ?? '') }}</textarea>
                    </div>

                    <!-- Key Features -->
                    <div class="col-12">
                        <label class="form-label">Key Features</label>
                        <textarea 
                            class="form-control" 
                            name="key_features" 
                            placeholder="Highlight the notable features of the project" 
                            rows="3"
                        >{{ old('key_features', $project->key_features ?? '') }}</textarea>
                    </div>

                    <!-- Team Members -->
                    <div class="col-12">
                        <label class="form-label">Team Members</label>
                        <textarea 
                            class="form-control" 
                            name="team_members" 
                            placeholder="List the team members involved (if any)" 
                            rows="2"
                        >{{ old('team_members', $project->team_members ?? '') }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12">
                        <button class="btn btn-grd btn-grd-info px-5" type="submit">
                            {{ isset($project) ? 'Update Project' : 'Submit Portfolio' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
