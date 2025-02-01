@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

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
     
                






<form 
    action="{{ isset($invoice) ? route('admin.invoices.update', $invoice->id) : route('admin.invoices.store') }}" 
    method="POST"
>
    @csrf
    @if(isset($invoice))
        @method('PUT')
    @endif

    <!-- Step 1: Client Information -->
    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
        <h5 class="mb-1">Client Information</h5>
        <p class="mb-4">Provide the client's contact details for the invoice.</p>
        <div class="row g-3">
            <div class="col-12 col-lg-6">
                <label class="form-label">Client Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Client Name" 
                    name="client_name" 
                    required 
                    value="{{ old('client_name', $invoice->client_name ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Contact Person</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Contact Person" 
                    name="contact_person" 
                    value="{{ old('contact_person', $invoice->contact_person ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Email</label>
                <input 
                    type="email" 
                    class="form-control" 
                    placeholder="Client Email" 
                    name="email" 
                    required 
                    value="{{ old('email', $invoice->email ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Phone</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Phone Number" 
                    name="phone" 
                    value="{{ old('phone', $invoice->phone ?? '') }}"
                >
            </div>
            <div class="col-12">
                <label class="form-label">Address</label>
                <textarea 
                    class="form-control" 
                    name="address" 
                    placeholder="Client Address" 
                    rows="3"
                >{{ old('address', $invoice->address ?? '') }}</textarea>
            </div>


            <div class="col-12">
                <button class="btn btn-grd-danger btn-prev">Previous</button>
                <button class="btn btn-grd-success btn-next" type="button">Next</button>
            </div>
            
        </div>
    </div>

    <!-- Step 2: Project/Service Details -->
    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
        <h5 class="mb-1">Project/Service Details</h5>
        <div class="row g-3">
            <div class="col-12 col-lg-6">
                <label class="form-label">Project Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Project Title" 
                    name="project_title" 
                    required 
                    value="{{ old('project_title', $invoice->project_title ?? '') }}"
                >
            </div>
            <div class="col-12">
                <label class="form-label">Project Description</label>
                <textarea 
                    class="form-control" 
                    name="project_description" 
                    placeholder="Brief project description" 
                    rows="4"
                >{{ old('project_description', $invoice->project_description ?? '') }}</textarea>
            </div>

            <!-- Milestones -->
            <div class="col-12">
                <label class="form-label">Milestones</label>
                <table class="table" id="milestoneTable">
                    <thead>
                        <tr>
                            <th>Milestone Name</th>
                            <th>Milestone Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Pre-filled rows for edit or a single empty row for create -->
                        @if (isset($invoice) && is_array($invoice->milestone_name) && is_array($invoice->milestone_date) && is_array($invoice->milestone_amount))
                            @foreach ($invoice->milestone_name as $key => $mName)
                                <tr>
                                    <td>
                                        <input 
                                            type="text" 
                                            name="milestone_name[]" 
                                            class="form-control" 
                                            placeholder="Milestone Name" 
                                            required
                                            value="{{ old('milestone_name.'.$key, $mName) }}"
                                        >
                                    </td>
                                    <td>
                                        <input 
                                            type="date" 
                                            name="milestone_date[]" 
                                            class="form-control" 
                                            required
                                            value="{{ old('milestone_date.'.$key, $invoice->milestone_date[$key]) }}"
                                        >
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            name="milestone_amount[]" 
                                            class="form-control" 
                                            placeholder="Amount" 
                                            required
                                            value="{{ old('milestone_amount.'.$key, $invoice->milestone_amount[$key]) }}"
                                        >
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger remove-milestone">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <!-- Empty row for create form -->
                            <tr>
                                <td>
                                    <input 
                                        type="text" 
                                        name="milestone_name[]" 
                                        class="form-control" 
                                        placeholder="Milestone Name" 
                                        required
                                    >
                                </td>
                                <td>
                                    <input 
                                        type="date" 
                                        name="milestone_date[]" 
                                        class="form-control" 
                                        required
                                    >
                                </td>
                                <td>
                                    <input 
                                        type="number" 
                                        name="milestone_amount[]" 
                                        class="form-control" 
                                        placeholder="Amount" 
                                        required
                                    >
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger remove-milestone">Remove</button>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                        
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary add-milestone">Add Milestone</button>
            </div>

            <div class="col-12">
                <button class="btn btn-grd-danger btn-prev">Previous</button>
                <button class="btn btn-grd-success btn-next" type="button">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 3: Discounts -->
    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
        <h5 class="mb-1">Discounts</h5>
        <p class="mb-4">Add any applicable discounts for the invoice.</p>
        <div class="row g-3">
            <div class="col-12 col-lg-6">
                <label class="form-label">Discount Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Discount Name" 
                    name="discount_name" 
                    value="{{ old('discount_name', $invoice->discount_name ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Discount Amount</label>
                <input 
                    type="number" 
                    class="form-control" 
                    placeholder="Discount Amount" 
                    name="discount_amount" 
                    value="{{ old('discount_amount', $invoice->discount_amount ?? '') }}"
                >
            </div>

            <div class="col-12">
                <button class="btn btn-grd-danger btn-prev">Previous</button>
                <button class="btn btn-grd-success btn-next" type="button">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 4: Payment Information -->
    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
        <h5 class="mb-1">Payment Information</h5>
        <div class="row g-3">
            <div class="col-12 col-lg-6">
                <label class="form-label">Bank Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Bank Name" 
                    name="bank_name" 
                    value="{{ old('bank_name', $invoice->bank_name ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Bank Account Number</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Account Number" 
                    name="bank_account_number" 
                    value="{{ old('bank_account_number', $invoice->bank_account_number ?? '') }}"
                >
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Account Holder Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Account Holder Name" 
                    name="bank_account_holder" 
                    value="{{ old('bank_account_holder', $invoice->bank_account_holder ?? '') }}"
                >
            </div>
            <div class="col-12">
                <label class="form-label">Terms & Conditions</label>
                <textarea 
                    class="form-control" 
                    placeholder="Enter terms and conditions here..." 
                    name="terms_conditions" 
                    rows="4"
                >{{ old('terms_conditions', $invoice->terms_conditions ?? 'Invoice was created on a computer and is valid without the signature and seal.') }}</textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-grd-danger btn-prev">Previous</button>
                <button class="btn btn-grd-success btn-submit" type="submit">Submit</button>
            </div>
        </div>
    </div>

    {{-- <div class="col-12">
        <div class="col-12">
            <button class="btn btn-grd-danger btn-prev">Previous</button>
            <button class="btn btn-grd-success btn-next" type="button">Next</button>
        </div>
    </div> --}}
</form>












{{-- <script>
    document.addEventListener("DOMContentLoaded", () => {
    const addMilestoneButton = document.querySelector(".add-milestone");
    const milestoneTable = document.querySelector("#milestoneTable");

    // Function to create a new milestone row
    function createMilestoneRow() {
        const row = document.createElement("tr");

        row.innerHTML = 
            <td>
                <input type="text" name="milestone_name[]" class="form-control" placeholder="Milestone Name" required>
            </td>
            <td>
                <input type="date" name="milestone_date[]" class="form-control" required>
            </td>
            <td>
                <input type="number" name="milestone_amount[]" class="form-control" placeholder="Amount" required>
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-milestone">Remove</button>
            </td>
        ;

        milestoneTable.appendChild(row);
    }

    // Add a new milestone row on button click
    addMilestoneButton.addEventListener("click", (e) => {
        e.preventDefault();
        createMilestoneRow();
    });

    // Delegate the remove functionality to dynamically added rows
    milestoneTable.addEventListener("click", (e) => {
        if (e.target && e.target.classList.contains("remove-milestone")) {
            e.target.closest("tr").remove();
        }
    });
});

</script> --}}


   
<script>document.addEventListener("DOMContentLoaded", () => {
    const addMilestoneButton = document.querySelector(".add-milestone");
    const milestoneTable = document.querySelector("#milestoneTable tbody"); // Use tbody for appending rows

    // Function to create a new milestone row
    function createMilestoneRow() {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>
                <input 
                    type="text" 
                    name="milestone_name[]" 
                    class="form-control" 
                    placeholder="Milestone Name" 
                    required
                >
            </td>
            <td>
                <input 
                    type="date" 
                    name="milestone_date[]" 
                    class="form-control" 
                    required
                >
            </td>
            <td>
                <input 
                    type="number" 
                    name="milestone_amount[]" 
                    class="form-control" 
                    placeholder="Amount" 
                    required
                >
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-milestone">
                    Remove
                </button>
            </td>
        `;
        milestoneTable.appendChild(row); // Append the new row to the tbody
    }

    // Add new row on button click
    addMilestoneButton.addEventListener("click", (e) => {
        e.preventDefault();
        createMilestoneRow();
    });

    // Remove row on "Remove" button click
    milestoneTable.addEventListener("click", (e) => {
        if (e.target && e.target.classList.contains("remove-milestone")) {
            e.target.closest("tr").remove();
        }
    });
});
</script>
    
    </div>
</div>


    </div></div>



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

    <script src="{{ asset('public/asset/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('public/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/asset/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/asset/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    {{-- <script src="{{ asset('public/asset/plugins/bs-stepper/js/main.js') }}"></script> --}}
    <script src="{{ asset('public/asset/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/main.js') }}"></script>





    
@endsection