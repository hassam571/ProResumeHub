@extends('admin.layouts.app')
@section('breadcrumb-title', 'Projects')
@section('breadcrumbs', 'Add/Edit')

@section('content')
  <!-- Bootstrap CSS -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
  />

  <!-- bs-stepper CSS -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css"
  />




            <h6 class="text-uppercase">Non Linear</h6>
            <hr>
            <div id="stepper1" class="bs-stepper">
                <div class="card">

                    <div class="card-header">
                        <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                    <div class="bs-stepper-circle">1</div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Basic Details</h5>
                                        <p class="mb-0 steper-sub-title">Enter Basic Skill Information</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>

                            <div class="step" data-target="#test-l-2">
                                <div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                    <div class="bs-stepper-circle">2</div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Work Experience</h5>
                                        <p class="mb-0 steper-sub-title">Provide Relevant Work Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>

                            <div class="step" data-target="#test-l-3">
                                <div class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                    <div class="bs-stepper-circle">3</div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Accomplishments</h5>
                                        <p class="mb-0 steper-sub-title">Highlight Key Achievements</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>

                            <div class="step" data-target="#test-l-4">
                                <div class="step-trigger" role="tab" id="stepper1trigger4" aria-controls="#test-l-4">
                                    <div class="bs-stepper-circle">4</div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Additional Info</h5>
                                        <p class="mb-0 steper-sub-title">Add Supporting Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="bs-stepper-content">
                            <form action="{{ isset($skill) ? route('admin.skill.update', $skill->id) : route('admin.skills.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(isset($skill))
                                    @method('PUT')
                                @endif

                                <!-- Personal Info -->
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                    <h5 class="mb-1">Basic Details</h5>
                                    <p class="mb-4">Provide essential details about your skill to showcase your expertise effectively.</p>

                                    <div class="row g-3">
                                        <!-- Skill Name -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Skill Name</label>
                                            <input type="text" class="form-control" placeholder="Skill Name" name="skill_name" value="{{ old('skill_name', $skill->skill_name ?? '') }}" required>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Skill Category</label>
                                            <select class="form-select" id="category" name="skill_category" required>
                                                <option selected disabled>Choose Category</option>
                                                <option value="Programming & Tech" {{ old('skill_category', $skill->skill_category ?? '') === 'Programming & Tech' ? 'selected' : '' }}>Programming & Tech</option>
                                                <option value="Graphic Design" {{ old('skill_category', $skill->skill_category ?? '') === 'Graphic Design' ? 'selected' : '' }}>Graphic Design</option>
                                                <option value="Digital Marketing" {{ old('skill_category', $skill->skill_category ?? '') === 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                                <option value="Video & Animation" {{ old('skill_category', $skill->skill_category ?? '') === 'Video & Animation' ? 'selected' : '' }}>Video & Animation</option>
                                                <option value="Content Writing" {{ old('skill_category', $skill->skill_category ?? '') === 'Content Writing' ? 'selected' : '' }}>Content Writing</option>
                                            </select>
                                        </div>

                                        <!-- Subcategory -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Skill Subcategory</label>
                                            <select class="form-select" id="subcategory" name="skill_subcategory" required>
                                                <option selected disabled>Choose Subcategory</option>
                                                <!-- Dynamically populated -->
                                            </select>
                                        </div>

                                        <script>
                                            const categorySubcategoryMap = {
                                                "Programming & Tech": [
                                                    "Web Design",
                                                    "Web Development",
                                                    "App Development",
                                                    "API Integration",
                                                    "Chat Bots",
                                                ],
                                                "Graphic Design": [
                                                    "Logo Design",
                                                    "Brand Style Guides",
                                                    "Game Art",
                                                    "Graphics for Streamers",
                                                ],
                                                "Digital Marketing": [
                                                    "Social Media Marketing",
                                                    "SEO",
                                                    "Content Marketing",
                                                    "Email Marketing",
                                                ],
                                                "Video & Animation": [
                                                    "Animated Explainers",
                                                    "Video Editing",
                                                    "Video Ads & Commercials",
                                                    "Logo Animation",
                                                ],
                                                "Content Writing": [
                                                    "Blog Writing",
                                                    "Copywriting",
                                                    "Technical Writing",
                                                    "Ghostwriting",
                                                ],
                                            };

                                            const oldCategory = "{{ old('skill_category', $skill->skill_category ?? '') }}";
                                            const oldSubcategory = "{{ old('skill_subcategory', $skill->skill_subcategory ?? '') }}";

                                            document.getElementById("category").addEventListener("change", function () {
                                                const subcategorySelect = document.getElementById("subcategory");
                                                subcategorySelect.innerHTML = '<option selected disabled>Choose Subcategory</option>';
                                                const selectedCategory = this.value;

                                                if (categorySubcategoryMap[selectedCategory]) {
                                                    categorySubcategoryMap[selectedCategory].forEach((subcategory) => {
                                                        const option = document.createElement("option");
                                                        option.value = subcategory;
                                                        option.textContent = subcategory;

                                                        // Retain old subcategory value
                                                        if (subcategory === oldSubcategory) {
                                                            option.selected = true;
                                                        }

                                                        subcategorySelect.appendChild(option);
                                                    });
                                                }
                                            });

                                            // Trigger change event on page load to populate subcategories
                                            if (oldCategory) {
                                                document.getElementById("category").value = oldCategory;
                                                document.getElementById("category").dispatchEvent(new Event("change"));
                                            }
                                        </script>

































                                        <!-- Proficiency Level -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Proficiency Level (%)</label>
                                            <input 
                                                type="number" 
                                                class="form-control" 
                                                name="proficiency_level" 
                                                min="1" 
                                                max="100" 
                                                step="1" 
                                                value="{{ old('proficiency_level', $skill->proficiency_level ?? '') }}" 
                                                required 
                                                placeholder="Enter proficiency level (1-100)">
                                        </div>
                                        

                                        <!-- Years of Experience -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Years of Experience</label>
                                            <input type="number" class="form-control" placeholder="Years of Experience" name="years_experience" value="{{ old('years_experience', $skill->years_experience ?? '') }}" min="0">
                                        </div>
                                        <!-- Years of Experience -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Skill Icon (to display on frontend)</label>
                                            <input type="text" class="form-control" placeholder="Skill Icon" name="skill_icon" value="{{ old('skill_icon', $skill->skill_icon ?? '') }}" min="0">
                                        </div>

                                        <!-- Related Tools/Technologies -->
                                        <div class="col-12">
                                            <label class="form-label">Related Tools/Technologies</label>
                                            <textarea class="form-control" name="related_tools" placeholder="E.g., React.js, Photoshop, etc." rows="3">{{ old('related_tools', $skill->related_tools ?? '') }}</textarea>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-grd-primary btn-next" type="button">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                                        </div>
                                    </div>
                                </div>


                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                                    <h5 class="mb-1">Skill-Related Work Experience</h5>
                                    <p class="mb-4">Provide details of work experience related to this skill.</p>
                                    <div class="row g-3">
                                        <!-- Organization/Institute Name -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Organization/Institute Name</label>
                                            <input type="text" class="form-control" placeholder="Organization Name" name="organization_name" value="{{ old('organization_name', $skill->organization_name ?? '') }}">
                                        </div>

                                        <!-- Job Title -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Job Title</label>
                                            <input type="text" class="form-control" placeholder="Job Title" name="job_title" value="{{ old('job_title', $skill->job_title ?? '') }}">
                                        </div>

                                        <!-- Start Date -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Start Date</label>
                                            <input type="text" class="form-control date-format" name="start_date" placeholder="Select a date" value="{{ old('start_date', $skill->start_date ?? '') }}">
                                        </div>

                                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

                                        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", function () {
                                                flatpickr(".date-format", {
                                                    altInput: true,
                                                    altFormat: "F j, Y",
                                                    dateFormat: "Y-m-d",
                                                });
                                            });
                                        </script>

                                        <!-- End Date -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">End Date</label>
                                            <input type="text" class="form-control date-format" name="end_date" value="{{ old('end_date', $skill->end_date ?? '') }}">
                                        </div>

                                        <!-- Key Achievements/Responsibilities -->
                                        <div class="col-12">
                                            <label class="form-label">Key Achievements/Responsibilities</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Describe your key achievements or responsibilities related to this skill"
                                                name="key_achievements"
                                                rows="4">{{ old('key_achievements', $skill->key_achievements ?? '') }}</textarea>
                                        </div>

                                        <!-- Location -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" placeholder="Location (e.g., San Francisco, CA)" name="location" value="{{ old('location', $skill->location ?? '') }}">
                                        </div>

                                        <!-- Previous and Next Buttons -->
                                        <div class="col-12">
                                            <button class="btn btn-grd-danger btn-prev">Previous</button>
                                            <button class="btn btn-grd-success btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>



                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
                                    <h5 class="mb-1">Skill-Specific Accomplishments</h5>
                                    <p class="mb-4">Showcase your achievements, projects, and certifications for this skill.</p>
                                    <div class="row g-3">
                                        <!-- Notable Projects -->
                                        <div class="col-12">
                                            <label class="form-label">Notable Projects</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="List your significant projects related to this skill (e.g., 'Developed an e-commerce website with 100k users')"
                                                name="notable_projects"
                                                rows="4">{{ old('notable_projects', $skill->notable_projects ?? '') }}</textarea>
                                        </div>

                                        <!-- Publications or Articles -->
                                        <div class="col-12">
                                            <label class="form-label">Publications or Articles</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="List any publications or articles related to this skill (e.g., 'Published an article on Advanced CSS Techniques')"
                                                name="publications"
                                                rows="4">{{ old('publications', $skill->publications ?? '') }}</textarea>
                                        </div>

                                        <!-- Certifications or Trainings -->
                                        <div class="col-12">
                                            <label class="form-label">Certifications or Trainings</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Mention certifications or trainings for this skill (e.g., 'Certified JavaScript Developer from Coursera')"
                                                name="certifications"
                                                rows="3">{{ old('certifications', $skill->certifications ?? '') }}</textarea>
                                        </div>

                                        <!-- Upload Certification Documents -->
                                        <div class="col-12">
                                            <label class="form-label">Upload Certification Documents</label>
                                            <input
                                                type="file"
                                                class="form-control"
                                                name="certification_documents"
                                                accept=".jpg, .png, .pdf">
                                            @if (!empty($skill->certification_documents))
                                                <p class="mt-2"><a href="{{ asset('storage/' . $skill->certification_documents) }}" target="_blank">View Current Document</a></p>
                                            @endif
                                        </div>

                                        <!-- Additional Comments -->
                                        <div class="col-12">
                                            <label class="form-label">Additional Comments</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Any additional information about your accomplishments for this skill"
                                                name="additional_comments"
                                                rows="3">{{ old('additional_comments', $skill->additional_comments ?? '') }}</textarea>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="col-12">
                                            <button class="btn btn-grd-danger btn-prev">Previous</button>
                                            <button class="btn btn-grd-success btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>




                                <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
                                    <h5 class="mb-1">Additional Information</h5>
                                    <p class="mb-4">Provide any extra details to enhance your skill profile.</p>
                                    <div class="row g-3">
                                        <!-- Skill Description -->
                                        <div class="col-12">
                                            <label class="form-label">Skill Description</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Briefly describe this skill and how you apply it (e.g., 'Proficient in designing scalable front-end systems')"
                                                name="skill_description"
                                                rows="4">{{ old('skill_description', $skill->skill_description ?? '') }}</textarea>
                                        </div>

                                        <!-- Ratings/Feedback -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Ratings/Feedback (Optional)</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="e.g., 4.8/5 from client reviews"
                                                name="ratings"
                                                value="{{ old('ratings', $skill->ratings ?? '') }}">
                                        </div>

                                        <!-- Languages Used with Skill -->
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Languages Used with Skill</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="e.g., JavaScript, Python"
                                                name="languages"
                                                value="{{ old('languages', $skill->languages ?? '') }}">
                                        </div>

                                        <!-- Unique Contributions -->
                                        <div class="col-12">
                                            <label class="form-label">Unique Contributions</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Highlight unique contributions or projects you've done using this skill"
                                                name="unique_contributions"
                                                rows="4">{{ old('unique_contributions', $skill->unique_contributions ?? '') }}</textarea>
                                        </div>

                                        <!-- Testimonials/References -->
                                        <div class="col-12">
                                            <label class="form-label">Testimonials/References (Optional)</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Provide any relevant testimonials or references related to this skill"
                                                name="testimonials"
                                                rows="4">{{ old('testimonials', $skill->testimonials ?? '') }}</textarea>
                                        </div>

                                        <!-- Additional Comments -->
                                        <div class="col-12">
                                            <label class="form-label">Additional Comments</label>
                                            <textarea
                                                class="form-control"
                                                placeholder="Any additional remarks or information about this skill"
                                                name="additional_comments"
                                                rows="3">{{ old('additional_comments', $skill->additional_comments ?? '') }}</textarea>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="col-12">
                                            <button class="btn btn-grd-danger btn-prev">Previous</button>
                                            <button class="btn btn-grd-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>

                    </div>
                </div>
            </div>








    <div class="overlay btn-toggle"></div>




    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>

  <!-- bs-stepper JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js">
  </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          // 1) Initialize the Stepper
          var stepperElement = document.querySelector('#stepper1');
          var stepper = new Stepper(stepperElement, {
            // 'linear' can be true or false depending on your needs.
            // 'animation' can be true or false (if you want animated transitions).
            linear: true,
            animation: false
          });
      
          // 2) Handle "Next" button click
          document.querySelectorAll('.btn-next').forEach(function(button) {
            button.addEventListener('click', function() {
              // Find the current .bs-stepper-pane in which this button resides
              var currentPane = button.closest('.bs-stepper-pane');
              // Validate the required fields in that pane
              if (validateStep(currentPane)) {
                stepper.next();
              }
            });
          });
      
          // 3) Handle "Previous" button click
          document.querySelectorAll('.btn-prev').forEach(function(button) {
            button.addEventListener('click', function() {
              stepper.previous();
            });
          });
      
          // 4) Validate required fields
          function validateStep(stepPane) {
            var valid = true;
            // Query all required inputs within the current step
            var requiredFields = stepPane.querySelectorAll('[required]');
            requiredFields.forEach(function(field) {
              // If field is empty, mark invalid
              if (!field.value.trim()) {
                field.classList.add('is-invalid');
                valid = false;
              } else {
                field.classList.remove('is-invalid');
              }
            });
            return valid;
          }
        });
      </script>
 
    <script 
    src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js">
  </script>

    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    {{-- <script src="{{ asset('asset/plugins/bs-stepper/js/main.js') }}"></script> --}}
    <script src="{{ asset('asset/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>





    

    @endsection

