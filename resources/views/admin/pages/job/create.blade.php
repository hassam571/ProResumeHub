@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')







<div class="container mt-5">
    <div class="card rounded-4 shadow">
        <div class="card-body p-4">
            <h5 class="mb-4 fw-bold text-center">Job Experience Details</h5>
            <form action="{{ isset($job) ? route('admin.jobs.update', $job->id) : route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($job))
                    @method('PUT')
                @endif
                <div class="row g-4">
                    <!-- Job Title/Role -->
                    <div class="col-12 col-lg-12">
                        <label class="form-label">Job Title/Role</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="e.g., Software Engineer"
                            name="job_title"
                            value="{{ old('job_title', $job->job_title ?? '') }}"
                            required>
                    </div>

                    <!-- Organization Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Organization Name</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="e.g., Google Inc."
                            name="organization_name"
                            value="{{ old('organization_name', $job->organization_name ?? '') }}"
                            required>
                    </div>

                    <!-- Employment Type -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Employment Type</label>
                        <select class="form-select" name="employment_type">
                            <option selected disabled>Choose Employment Type</option>
                            <option value="Full-Time" {{ old('employment_type', $job->employment_type ?? '') === 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                            <option value="Part-Time" {{ old('employment_type', $job->employment_type ?? '') === 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                            <option value="Freelance" {{ old('employment_type', $job->employment_type ?? '') === 'Freelance' ? 'selected' : '' }}>Freelance</option>
                            <option value="Internship" {{ old('employment_type', $job->employment_type ?? '') === 'Internship' ? 'selected' : '' }}>Internship</option>
                            <option value="Contractual" {{ old('employment_type', $job->employment_type ?? '') === 'Contractual' ? 'selected' : '' }}>Contractual</option>
                        </select>
                    </div>

                    <!-- Start Date -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Start Date</label>
                        <input
                            type="date"
                            class="form-control "
                            name="start_date"
                            placeholder="Select Start Date"
                            value="{{ old('start_date', $job->start_date ?? '') }}"
                            required>
                    </div>

                    <!-- End Date -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">End Date</label>
                        <input
                            type="date"
                            class="form-control "
                            name="end_date"
                            placeholder="Select End Date"
                            value="{{ old('end_date', $job->end_date ?? '') }}"
                            required>
                    </div>

                    <!-- Location -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Location</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="e.g., San Francisco, CA"
                            name="location"
                            value="{{ old('location', $job->location ?? '') }}">
                    </div>

                    <!-- Key Achievements/Responsibilities -->
                    <div class="col-12">
                        <label class="form-label">Key Achievements/Responsibilities</label>
                        <textarea
                            class="form-control"
                            placeholder="Describe your key responsibilities or achievements"
                            name="key_achievements"
                            rows="4"
                            required>{{ old('key_achievements', $job->key_achievements ?? '') }}</textarea>
                    </div>

                    <!-- Notable Projects -->
                    <div class="col-12">
                        <label class="form-label">Notable Projects</label>
                        <textarea
                            class="form-control"
                            placeholder="Highlight significant projects (e.g., Developed an e-commerce platform)"
                            name="notable_projects"
                            rows="4">{{ old('notable_projects', $job->notable_projects ?? '') }}</textarea>
                    </div>

                    <!-- Tools and Technologies Used -->
                    <div class="col-12">
                        <label class="form-label">Tools and Technologies Used</label>
                        <textarea
                            class="form-control"
                            placeholder="e.g., React.js, Node.js, Python, Figma"
                            name="tools_used"
                            rows="3">{{ old('tools_used', $job->tools_used ?? '') }}</textarea>
                    </div>

                    <!-- Challenges Faced and Solutions -->
                    <div class="col-12">
                        <label class="form-label">Challenges Faced and Solutions Provided</label>
                        <textarea
                            class="form-control"
                            placeholder="Explain challenges and how you overcame them"
                            name="challenges_solutions"
                            rows="4">{{ old('challenges_solutions', $job->challenges_solutions ?? '') }}</textarea>
                    </div>

                    <!-- Skills Acquired -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Skills Acquired</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="e.g., Leadership, Team Management"
                            name="skills_acquired"
                            value="{{ old('skills_acquired', $job->skills_acquired ?? '') }}">
                    </div>

                    <!-- References/Testimonials -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">References/Testimonials</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="e.g., Contact or link to testimonials"
                            name="references"
                            value="{{ old('references', $job->references ?? '') }}">
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-grd btn-grd-info px-5">
                            {{ isset($job) ? 'Update Job' : 'Submit Experience' }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // Initialize Flatpickr for Date Picker
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr(".", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            allowInput: true
        });
    });
</script>












@endsection
