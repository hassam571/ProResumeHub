@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')






<div class="container mt-5">
    <div class="card shadow-lg rounded-4">
        <div class="card-body">
            <h5 class="mb-4 fw-bold text-center">Add Education</h5>
            <form action="{{ isset($language) ? route('admin.languages.update', $language->id) : route('admin.languages.store') }}" method="POST">
                @csrf
                @if(isset($language))
                    @method('PUT')
                @endif
                <div class="row g-4">
                    <!-- Language Name -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Language Name</label>
                        <select class="form-select" name="language_name" required>
                            <option disabled {{ !isset($language) ? 'selected' : '' }}>Select Language</option>
                            <option value="English" {{ old('language_name', $language->language_name ?? '') == 'English' ? 'selected' : '' }}>English</option>
                            <option value="Urdu" {{ old('language_name', $language->language_name ?? '') == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                            <option value="Hindi" {{ old('language_name', $language->language_name ?? '') == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                            <option value="Arabic" {{ old('language_name', $language->language_name ?? '') == 'Arabic' ? 'selected' : '' }}>Arabic</option>
                            <option value="French" {{ old('language_name', $language->language_name ?? '') == 'French' ? 'selected' : '' }}>French</option>
                            <option value="Spanish" {{ old('language_name', $language->language_name ?? '') == 'Spanish' ? 'selected' : '' }}>Spanish</option>
                            <option value="Mandarin" {{ old('language_name', $language->language_name ?? '') == 'Mandarin' ? 'selected' : '' }}>Mandarin</option>
                            <option value="Bengali" {{ old('language_name', $language->language_name ?? '') == 'Bengali' ? 'selected' : '' }}>Bengali</option>
                            <option value="Russian" {{ old('language_name', $language->language_name ?? '') == 'Russian' ? 'selected' : '' }}>Russian</option>
                            <option value="Portuguese" {{ old('language_name', $language->language_name ?? '') == 'Portuguese' ? 'selected' : '' }}>Portuguese</option>
                            <option value="Japanese" {{ old('language_name', $language->language_name ?? '') == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                            <option value="German" {{ old('language_name', $language->language_name ?? '') == 'German' ? 'selected' : '' }}>German</option>
                            <option value="Korean" {{ old('language_name', $language->language_name ?? '') == 'Korean' ? 'selected' : '' }}>Korean</option>
                            <option value="Italian" {{ old('language_name', $language->language_name ?? '') == 'Italian' ? 'selected' : '' }}>Italian</option>
                            <option value="Turkish" {{ old('language_name', $language->language_name ?? '') == 'Turkish' ? 'selected' : '' }}>Turkish</option>
                            <option value="Persian" {{ old('language_name', $language->language_name ?? '') == 'Persian' ? 'selected' : '' }}>Persian</option>
                        </select>
                    </div>
            
                    <!-- Proficiency Level -->
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Proficiency Level</label>
                        <select class="form-select" name="proficiency_level" required>
                            <option disabled {{ !isset($language) ? 'selected' : '' }}>Select Proficiency</option>
                            <option value="Beginner" {{ old('proficiency_level', $language->proficiency_level ?? '') == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                            <option value="Intermediate" {{ old('proficiency_level', $language->proficiency_level ?? '') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                            <option value="Advanced" {{ old('proficiency_level', $language->proficiency_level ?? '') == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                            <option value="Fluent" {{ old('proficiency_level', $language->proficiency_level ?? '') == 'Fluent' ? 'selected' : '' }}>Fluent</option>
                            <option value="Native" {{ old('proficiency_level', $language->proficiency_level ?? '') == 'Native' ? 'selected' : '' }}>Native</option>
                        </select>
                    </div>
            
                    <!-- Submit Button -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">
                            {{ isset($language) ? 'Update Language' : 'Save Language' }}
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
