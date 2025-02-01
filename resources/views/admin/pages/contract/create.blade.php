@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')


    <style>
       .is-invalid {

}

#alert-container {
  
    z-index: 1000;
    position: fixed;
    top: 20px;
    left: 45%;
    transform: translateX(-50%);
}

    </style>




  






















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



    <div id="stepper1" class="bs-stepper">
        <div class="card">
            <div class="card-header">
                <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
                    <div class="step" data-target="#test-l-1">
                        <div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                            <div class="bs-stepper-circle">1</div>
                            <div class="">
                                <h5 class="mb-0 steper-title">Introduction & Details</h5>
                                <p class="mb-0 steper-sub-title">Enter contract and client details</p>
                            </div>
                        </div>
                    </div>
                    <div class="bs-stepper-line"></div>

                    <div class="step" data-target="#test-l-2">
                        <div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                            <div class="bs-stepper-circle">2</div>
                            <div class="">
                                <h5 class="mb-0 steper-title">Additional Info</h5>
                                <p class="mb-0 steper-sub-title">Complete further sections</p>
                            </div>
                        </div>
                    </div>
                    <div class="bs-stepper-line"></div>

                    <div class="step" data-target="#test-l-3">
                        <div class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                            <div class="bs-stepper-circle">3</div>
                            <div class="">
                                <h5 class="mb-0 steper-title">Additional Info</h5>
                                <p class="mb-0 steper-sub-title">Complete further sections</p>
                            </div>
                        </div>
                    </div>
                    <div class="bs-stepper-line"></div>

                    <div class="step" data-target="#test-l-4">
                        <div class="step-trigger" role="tab" id="stepper1trigger4" aria-controls="test-l-4">
                            <div class="bs-stepper-circle">4</div>
                            <div class="">
                                <h5 class="mb-0 steper-title">Additional Info</h5>
                                <p class="mb-0 steper-sub-title">Complete further sections</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="bs-stepper-content">
                    @php
                    // Determine if we're editing or creating
                    $isEdit = isset($contract);
                
                    // Prepare route and method
                    $formAction = $isEdit 
                        ? route('admin.contract.update', $contract->id)  // e.g. PUT route
                        : route('admin.contract.store');                 // e.g. POST route
                
                    // Convert milestone data to arrays for editing (or use old() if posted back)
                    $milestoneNames = old('milestone_name', $isEdit && $contract->milestone_name 
                        ? json_decode($contract->milestone_name, true) 
                        : []
                    );
                
                    $milestoneDescs = old('milestone_desc', $isEdit && $contract->milestone_desc 
                        ? json_decode($contract->milestone_desc, true) 
                        : []
                    );
                
                    $milestoneDates = old('milestone_date', $isEdit && $contract->milestone_date 
                        ? json_decode($contract->milestone_date, true) 
                        : []
                    );
                
                    $milestoneAmounts = old('milestone_amount', $isEdit && $contract->milestone_amount 
                        ? json_decode($contract->milestone_amount, true) 
                        : []
                    );
                @endphp
                
                <form action="{{ $formAction }}" method="POST">
                    @csrf
                    @if($isEdit)
                        @method('PUT')
                    @endif
                
                    <!-- Step 1: Combined Introduction, Contact Info, and Timeline -->
                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                        <h5 class="mb-1">
                            @if($isEdit)
                                Edit Contract: Introduction & Client Details
                            @else
                                Create Contract: Introduction & Client Details
                            @endif
                        </h5>
                        <p class="mb-4">Provide the contract title, client information, and timeline for the project.</p>
                
                        <div class="row g-3">
                            <!-- Contract Title -->
                            <div class="col-12">
                                <label class="form-label">Contract Title</label>
                                <input type="text" class="form-control"
                                       placeholder="e.g., Freelance Services Agreement" 
                                       name="contract_title"
                                       value="{{ old('contract_title', $isEdit ? $contract->contract_title : '') }}" 
                                       required>
                            </div>
                
                            <!-- Purpose -->
                            <div class="col-12">
                                <label class="form-label">Purpose</label>
                                <textarea class="form-control" name="contract_purpose" 
                                          placeholder="Briefly explain the purpose of the contract"
                                          rows="3" required>{{ old('contract_purpose', $isEdit ? $contract->contract_purpose : '') }}</textarea>
                            </div>
                
                            <!-- Client Name -->
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Client Name</label>
                                <input type="text" class="form-control" placeholder="Client's Full Name"
                                       name="client_name" 
                                       value="{{ old('client_name', $isEdit ? $contract->client_name : '') }}" 
                                       required>
                            </div>
                
                            <!-- Client Email -->
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Client Email</label>
                                <input type="email" class="form-control" placeholder="Client's Email Address"
                                       name="client_email" 
                                       value="{{ old('client_email', $isEdit ? $contract->client_email : '') }}" 
                                       required>
                            </div>
                
                            <!-- Client Phone -->
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Client Phone</label>
                                <input type="text" class="form-control" placeholder="Client's Phone Number"
                                       name="client_phone" 
                                       value="{{ old('client_phone', $isEdit ? $contract->client_phone : '') }}">
                            </div>
                
                            <!-- Client Address -->
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Client Address</label>
                                <textarea class="form-control" name="client_address" 
                                          placeholder="Client's Address" rows="1">{{ old('client_address', $isEdit ? $contract->client_address : '') }}</textarea>
                            </div>
                
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date"
                                       value="{{ old('start_date', $isEdit && $contract->start_date ? $contract->start_date->format('Y-m-d') : '') }}" 
                                       required>
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date"
                                       value="{{ old('end_date', $isEdit && $contract->end_date ? $contract->end_date->format('Y-m-d') : '') }}" 
                                       required>
                            </div>
                            
                            <!-- Milestones -->
                            <div class="col-12">
                                <label class="form-label">Milestones</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Milestone Name</th>
                                            <th>Milestone Desc.</th>
                                            <th>Due Date</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="milestoneTable">
                                        {{-- Loop through old or existing milestone arrays --}}
                                        @if(count($milestoneNames) > 0)
                                            @foreach($milestoneNames as $index => $mName)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="milestone_name[]" class="form-control"
                                                               placeholder="Milestone Name" 
                                                               value="{{ $mName }}" 
                                                               required>
                                                    </td>
                                                    <td>
                                                        <textarea name="milestone_desc[]" class="form-control" 
                                                                  placeholder="Milestone Desc" rows="1" required>{{ $milestoneDescs[$index] ?? '' }}</textarea>
                                                    </td>
                                                    <td>
                                                        <input type="date" name="milestone_date[]" class="form-control"
                                                               value="{{ $milestoneDates[$index] ?? '' }}" 
                                                               required>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="milestone_amount[]" class="form-control"
                                                               placeholder="Amount" 
                                                               value="{{ $milestoneAmounts[$index] ?? '' }}" 
                                                               required>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger remove-milestone">Remove</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{-- If no existing milestones, show one empty row --}}
                                            <tr>
                                                <td>
                                                    <input type="text" name="milestone_name[]" class="form-control"
                                                           placeholder="Milestone Name" required>
                                                </td>
                                                <td>
                                                    <textarea name="milestone_desc[]" class="form-control" 
                                                              placeholder="Milestone Desc" rows="1" required></textarea>
                                                </td>
                                                <td>
                                                    <input type="date" name="milestone_date[]" class="form-control" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="milestone_amount[]" class="form-control"
                                                           placeholder="Amount" required>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger remove-milestone">Remove</button>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-primary add-milestone">Add Milestone</button>
                            </div>
                
                            <div class="col-12">
                                <button class="btn btn-grd-success btn-next" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Step 2: Timeline, Deliverables, Payment Terms -->
                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                        <h5 class="mb-1">Timeline, Deliverables, and Payment Terms</h5>
                        <p class="mb-4">Provide the project timeline, deliverables, and payment terms.</p>
                
                        <div class="row g-3">
                            <!-- Timeline -->
                            <div class="col-12">
                                <label class="form-label">Project Timeline</label>
                                <textarea class="form-control" name="project_timeline"
                                          placeholder="Briefly describe the timeline of the project (e.g., 'The project will span over 3 months...')"
                                          rows="4">{{ old('project_timeline', $isEdit ? $contract->project_timeline : '') }}</textarea>
                            </div>
                
                            <!-- Payment Terms -->
                            <div class="col-12">
                                <label class="form-label">Payment Terms</label>
                                <textarea class="form-control" name="payment_terms"
                                          placeholder="Specify payment terms (e.g., '50% upfront, 50% upon project completion')"
                                          rows="4">{{ old('payment_terms', $isEdit ? $contract->payment_terms : '') }}</textarea>
                            </div>
                
                          <!-- Navigation Buttons -->
                          <div class="col-12">
                            <button class="btn btn-grd-danger btn-prev" type="button">Previous</button>
                            <button class="btn btn-grd-success btn-next" type="button">Next</button>
                        </div>
                        </div>
                    </div>
                
                    <!-- Step 3: Revisions, Ownership, Confidentiality, Client Responsibilities, Termination -->
                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
                        <h5 class="mb-1">Additional Terms and Conditions</h5>
                        <p class="mb-4">Define the project terms and conditions clearly.</p>
                
                        <div class="row g-3">
                            <!-- Revisions -->
                            <div class="col-12">
                                <label class="form-label">Revisions</label>
                                <textarea class="form-control" name="revisions"
                                          placeholder="Specify the number of revisions allowed (e.g., 'Up to 3 revisions included...')"
                                          rows="4">{{ old('revisions', $isEdit ? $contract->revisions : '') }}</textarea>
                            </div>
                
                            <!-- Ownership and Intellectual Property -->
                            <div class="col-12">
                                <label class="form-label">Ownership and Intellectual Property</label>
                                <textarea class="form-control" name="ownership"
                                          placeholder="Clarify the ownership of deliverables (e.g., 'Ownership will be transferred...')"
                                          rows="4">{{ old('ownership', $isEdit ? $contract->ownership : '') }}</textarea>
                            </div>
                
                            <!-- Confidentiality -->
                            <div class="col-12">
                                <label class="form-label">Confidentiality</label>
                                <textarea class="form-control" name="confidentiality"
                                          placeholder="State confidentiality terms (e.g., 'All project-related information...')"
                                          rows="4">{{ old('confidentiality', $isEdit ? $contract->confidentiality : '') }}</textarea>
                            </div>
                
                            <!-- Client Responsibilities -->
                            <div class="col-12">
                                <label class="form-label">Client Responsibilities</label>
                                <textarea class="form-control" name="client_responsibilities"
                                          placeholder="Specify the client's responsibilities (e.g., 'Client will provide all necessary...')"
                                          rows="4">{{ old('client_responsibilities', $isEdit ? $contract->client_responsibilities : '') }}</textarea>
                            </div>
                
                            <!-- Termination Clause -->
                            <div class="col-12">
                                <label class="form-label">Termination Clause</label>
                                <textarea class="form-control" name="termination_clause"
                                          placeholder="Define termination terms (e.g., 'Either party may terminate the contract...')"
                                          rows="4">{{ old('termination_clause', $isEdit ? $contract->termination_clause : '') }}</textarea>
                            </div>
                
                            <!-- Navigation Buttons -->
                            <div class="col-12">
                                <button class="btn btn-grd-danger btn-prev" type="button">Previous</button>
                                <button class="btn btn-grd-success btn-next" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Step 4: Dispute Resolution, Limitation of Liability, Amendments -->
                    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
                        <h5 class="mb-1">Legal and Agreement Terms</h5>
                        <p class="mb-4">Clearly define the legal terms for the project agreement.</p>
                
                        <div class="row g-3">
                            <!-- Dispute Resolution -->
                            <div class="col-12">
                                <label class="form-label">Dispute Resolution</label>
                                <textarea class="form-control" name="dispute_resolution"
                                          placeholder="Describe how disputes will be resolved (e.g., 'All disputes will be resolved through...')"
                                          rows="4">{{ old('dispute_resolution', $isEdit ? $contract->dispute_resolution : '') }}</textarea>
                            </div>
                
                            <!-- Limitation of Liability -->
                            <div class="col-12">
                                <label class="form-label">Limitation of Liability</label>
                                <textarea class="form-control" name="limitation_liability"
                                          placeholder="Define liability limitations (e.g., 'The maximum liability of the freelancer...')"
                                          rows="4">{{ old('limitation_liability', $isEdit ? $contract->limitation_liability : '') }}</textarea>
                            </div>
                
                            <!-- Amendments -->
                            <div class="col-12">
                                <label class="form-label">Amendments</label>
                                <textarea class="form-control" name="amendments"
                                          placeholder="Explain how changes to the agreement will be handled (e.g., 'Amendments must be made in writing...')"
                                          rows="4">{{ old('amendments', $isEdit ? $contract->amendments : '') }}</textarea>
                            </div>
                
                            <!-- Navigation Buttons -->
                            <div class="col-12">
                                <button class="btn btn-grd-danger btn-prev" type="button">Previous</button>
                                <button class="btn btn-grd-success btn-next" type="submit">
                                    @if($isEdit)
                                        Update Contract
                                    @else
                                        Submit Contract
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const addMilestoneButton = document.querySelector(".add-milestone");
                        const milestoneTable = document.querySelector("#milestoneTable");
                
                        addMilestoneButton.addEventListener("click", () => {
                            const row = document.createElement("tr");
                            row.innerHTML = `
                                <td><input type="text" name="milestone_name[]" class="form-control" placeholder="Milestone Name" required></td>
                                <td><textarea name="milestone_desc[]" class="form-control" placeholder="Milestone Desc" rows="1" required></textarea></td>
                                <td><input type="date" name="milestone_date[]" class="form-control" required></td>
                                <td><input type="number" name="milestone_amount[]" class="form-control" placeholder="Amount" required></td>
                                <td><button type="button" class="btn btn-danger remove-milestone">Remove</button></td>
                            `;
                            milestoneTable.appendChild(row);
                        });
                
                        milestoneTable.addEventListener("click", (e) => {
                            if (e.target.classList.contains("remove-milestone")) {
                                e.target.closest("tr").remove();
                            }
                        });
                    });
                </script>
                
                </div>
            </div>
        </div>
    </div>






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





    
    
    


    {{-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const addMilestoneButton = document.querySelector(".add-milestone");
            const milestoneTable = document.querySelector("#milestoneTable");

            addMilestoneButton.addEventListener("click", () => {
                const row = document.createElement("tr");
                row.innerHTML = `
                <td><input type="text" name="milestone_name[]" class="form-control" placeholder="Milestone Name" required></td>
                <td><input type="text" name="milestone_desc[]" class="form-control" placeholder="Milestone Name" required></td>
                <td><input type="date" name="milestone_date[]" class="form-control" required></td>
                <td><input type="number" name="milestone_amount[]" class="form-control" placeholder="Amount" required></td>
                <td><button type="button" class="btn btn-danger remove-milestone">Remove</button></td>
            `;
                milestoneTable.appendChild(row);
            });

            milestoneTable.addEventListener("click", (e) => {
                if (e.target.classList.contains("remove-milestone")) {
                    e.target.closest("tr").remove();
                }
            });
        });
    </script> --}}














@endsection
