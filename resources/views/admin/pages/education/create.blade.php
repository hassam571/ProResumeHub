@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')






<div class="container mt-5">
    <div class="card shadow-lg rounded-4">
        <div class="card-body">
            <h5 class="mb-4 fw-bold text-center">Add Education</h5>
            <form action="{{ isset($education) ? route('admin.education.update', $education->id) : route('admin.education.store') }}" method="POST">
                @csrf
                @if(isset($education))
                    @method('PUT')
                @endif
            
                <div class="row g-4">
                    <!-- Degree Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Degree Name</label>
                        <select class="form-select" name="degree_name" required>
                            <option disabled {{ !isset($education) ? 'selected' : '' }}>Select Degree</option>
                            <option value="Matric" {{ (old('degree_name', $education->degree_name ?? '') == 'Matric') ? 'selected' : '' }}>Matric</option>
                            <option value="Intermediate" {{ (old('degree_name', $education->degree_name ?? '') == 'Intermediate') ? 'selected' : '' }}>Intermediate</option>
                            <option value="BSc" {{ (old('degree_name', $education->degree_name ?? '') == 'BSc') ? 'selected' : '' }}>BSc</option>
                            <option value="BA" {{ (old('degree_name', $education->degree_name ?? '') == 'BA') ? 'selected' : '' }}>BA</option>
                            <option value="BS" {{ (old('degree_name', $education->degree_name ?? '') == 'BS') ? 'selected' : '' }}>BS</option>
                            <option value="MSc" {{ (old('degree_name', $education->degree_name ?? '') == 'MSc') ? 'selected' : '' }}>MSc</option>
                            <option value="MA" {{ (old('degree_name', $education->degree_name ?? '') == 'MA') ? 'selected' : '' }}>MA</option>
                            <option value="MS" {{ (old('degree_name', $education->degree_name ?? '') == 'MS') ? 'selected' : '' }}>MS</option>
                            <option value="MPhil" {{ (old('degree_name', $education->degree_name ?? '') == 'MPhil') ? 'selected' : '' }}>MPhil</option>
                            <option value="PhD" {{ (old('degree_name', $education->degree_name ?? '') == 'PhD') ? 'selected' : '' }}>PhD</option>
                        </select>
                    </div>
            
                    <!-- Institute Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Institute Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="institute_name" 
                            value="{{ old('institute_name', $education->institute_name ?? '') }}" 
                            placeholder="e.g., Harvard University" 
                            required>
                    </div>
            
                    <!-- Start Date -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Start Date</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            name="start_date" 
                            value="{{ old('start_date', $education->start_date ?? '') }}" 
                            required>
                    </div>
            <!-- End Date -->
<div class="col-12 col-lg-6">
    <label class="form-label">End Date</label>
    <input 
        type="date" 
        class="form-control" 
        id="end_date" 
        name="end_date" 
        value="{{ old('end_date', $education->end_date ?? '') }}" 
        {{ old('ongoing', $education->ongoing ?? false) ? 'disabled' : '' }}>
    <div class="form-check mt-2">
        <input 
            class="form-check-input" 
            type="checkbox" 
            name="ongoing" 
            id="ongoing" 
            value="1"
            {{ old('ongoing', $education->ongoing ?? false) ? 'checked' : '' }}>
        <label class="form-check-label" for="ongoing">
            Ongoing
        </label>
    </div>
</div>

            
                    <!-- Field of Study -->
                    <div class="col-12">
                        <label class="form-label">Field of Study</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="field_of_study" 
                            value="{{ old('field_of_study', $education->field_of_study ?? '') }}" 
                            placeholder="e.g., Computer Science, Artificial Intelligence">
                    </div>
            
                    <!-- Grade/GPA -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Grade/GPA</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="grade" 
                            value="{{ old('grade', $education->grade ?? '') }}" 
                            placeholder="e.g., 3.9 GPA / 4.0">
                    </div>
            
                    <!-- Location -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Location</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="location" 
                            value="{{ old('location', $education->location ?? '') }}" 
                            placeholder="e.g., Cambridge, MA, USA">
                    </div>
            
                    <!-- Key Achievements/Description -->
                    <div class="col-12">
                        <label class="form-label">Description/Key Achievements</label>
                        <textarea 
                            class="form-control" 
                            name="description" 
                            rows="4" 
                            placeholder="Briefly describe your education experience or key achievements">{{ old('description', $education->description ?? '') }}</textarea>
                    </div>
            
                    <!-- Certifications/Projects -->
                    <div class="col-12">
                        <label class="form-label">Certifications/Projects</label>
                        <textarea 
                            class="form-control" 
                            name="certifications" 
                            rows="4" 
                            placeholder="List certifications or projects linked to this education">{{ old('certifications', $education->certifications ?? '') }}</textarea>
                    </div>
            
                    <!-- Submit Button -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">
                            {{ isset($education) ? 'Update Education' : 'Save Education' }}
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ongoingCheckbox = document.getElementById('ongoing');
        const endDateInput = document.getElementById('end_date');

        ongoingCheckbox.addEventListener('change', function () {
            if (this.checked) {
                endDateInput.value = '';
                endDateInput.disabled = true;
            } else {
                endDateInput.disabled = false;
            }
        });

        // Ensure the end date input is properly disabled/enabled on page load
        if (ongoingCheckbox.checked) {
            endDateInput.disabled = true;
        }
    });
</script>



<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>












@endsection
