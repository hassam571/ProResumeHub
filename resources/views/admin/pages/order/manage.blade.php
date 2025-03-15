@extends('admin.layouts.app')

@section('breadcrumb-title', 'Edit Order')
@section('breadcrumbs', 'Edit')

@section('content')
    @php
        // Determine the current active milestone index from the DB.
        // We assume each milestone has a 'current' flag (true if active).
        // If none is marked active, default to 0.
        $currentActiveIndex = 0;
        foreach($order->milestones as $i => $milestone) {
            if(isset($milestone['current']) && $milestone['current']) {
                $currentActiveIndex = $i;
                break;
            }
        }
        // Total normal steps count (milestones)
        $totalNormalSteps = count($order->milestones);
    @endphp

    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Order</title>
        <style>
            .badge-status {
                position: absolute;
                top: 15px;
                right: 15px;
                padding: 5px 12px;
                border-radius: 10px;
                font-size: 14px;
                font-weight: bold;
                color: white;
            }
            .done { background-color: #28a745; }
            .current { background-color: #ffc107; border: 2px solid #ffeb3b; box-shadow: 0 0 10px #ffeb3b; }
            .pending { background-color: #6c757d; }
            .step-content { display: none; width: 100%; max-width: 70%; margin: auto; }
            .step-content.active { display: block; }
            .normal-step { }
            .summary-step { }
            .progress-container { width: 100%; max-width: 600px; margin: auto; margin-bottom: 20px; }
            .progress-bar { height: 20px; background-color: #e9ecef; border-radius: 10px; overflow: hidden; }
            .progress-fill { height: 100%; width: 0%; background-color: #28a745; text-align: center; color: white; font-weight: bold; line-height: 20px; }
            .modal {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: white;
                padding: 20px;
                border-radius: 10px;
                z-index: 999;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
            }
            .modal.show { display: block; }
            .nav-buttons {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>

    <body>
    <div class="container mt-5">
        <div class="card text-white bg-dark">

            <div class="card-body">
                <form id="milestone-form">
                    @csrf
                    <input type="hidden" id="order_id" value="{{ $order->id }}">

                    <!-- Progress Bar -->
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill">0%</div>
                        </div>
                    </div>

                    <!-- Milestones as Steps (Normal Steps) -->
                    <div id="milestones-container" class="mb-3 d-flex flex-column align-items-center">
                        @foreach ($order->milestones as $index => $milestone)
                            @php
                                // Determine status based on stored flags.
                                $isDone = isset($milestone['done']) ? $milestone['done'] : false;
                                // We rely on $currentActiveIndex computed above for active step.
                                if ($isDone) {
                                    $status = 'Done';
                                    $badgeClass = 'done';
                                } elseif ($index == $currentActiveIndex) {
                                    $status = 'Active';
                                    $badgeClass = 'current';
                                } else {
                                    $status = 'Pending';
                                    $badgeClass = 'pending';
                                }
                            @endphp
                            <div class="step-content normal-step {{ ($index == $currentActiveIndex) ? 'active' : '' }}" id="step_content_{{ $index }}">
                                <div class="card mt-3 p-3 bg-secondary text-white position-relative">
                                <span class="badge-status {{ $badgeClass }}" id="badge_{{ $index }}">
                                    {{ $status }}
                                </span>
                                    <h5>{{ $milestone['title'] }}</h5>
                                    <p>{{ $milestone['detail'] }}</p>
                                    <!-- Show "Mark as Read" and input form only for the active step -->
                                    @if(!$isDone && $index == $currentActiveIndex)
                                        <button type="button" class="btn btn-primary mt-2 mark-read-btn" data-index="{{ $index }}">
                                            Mark as Read
                                        </button>
                                        <div class="hidden-form mt-3 d-none" id="form_{{ $index }}">
                                            <input type="text" class="form-control" id="name_{{ $index }}" value="{{ $milestone['title'] }}" readonly />
                                            <textarea id="description_{{ $index }}" class="form-control" placeholder="Write description"></textarea>
                                            <input type="file" id="image_{{ $index }}" class="form-control mt-2">
                                            <button type="button" class="btn btn-success mt-2 submit-milestone" data-index="{{ $index }}">
                                                Submit
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                        <!-- Last Step: Summary Step (No active/pending/current status) -->
                        <div class="step-content summary-step" id="step_content_summary">
                            <div class="card mt-3 p-3 bg-secondary text-white position-relative">
                            <span class="badge-status" id="badge_summary">
                                Summary
                            </span>
                                <h5>Summary</h5>
                                <p>This is a summary description of your milestones. (Customize as needed.)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="nav-buttons">
                        <button type="button" id="prev-btn" class="btn btn-secondary">Previous</button>
                        <button type="button" id="next-btn" class="btn btn-secondary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Approval Popup -->
    <div id="approval-popup" class="modal">
        <h3>Approve This Step?</h3>
        <button id="approve-btn" class="btn btn-success">Approve</button>
        <button id="cancel-btn" class="btn btn-secondary">Cancel</button>
    </div>

    <script>
        // Separate out normal steps and the summary step.
        const normalSteps = document.querySelectorAll(".step-content.normal-step");
        const summaryStep = document.querySelector(".step-content.summary-step");
        let totalNormalSteps = normalSteps.length; // Number of normal milestone steps.
        // currentStepIndex ranges from 0 to totalNormalSteps; if equals totalNormalSteps, then summary is active.
        let currentStepIndex = {{ $currentActiveIndex < $totalNormalSteps ? $currentActiveIndex : $totalNormalSteps }};

        function updateStepDisplay() {
            // Update normal steps.
            normalSteps.forEach((step, idx) => {
                let badge = document.getElementById(`badge_${idx}`);
                if (idx < currentStepIndex) {
                    step.classList.remove("active");
                    badge.classList.remove("current", "pending");
                    badge.classList.add("done");
                    // badge.innerText = "Done";
                } else if (idx === currentStepIndex) {
                    step.classList.add("active");
                    badge.classList.remove("done", "pending");
                    badge.classList.add("current");
                    // badge.innerText = "Active";
                } else {
                    step.classList.remove("active");
                    badge.classList.remove("done", "current");
                    badge.classList.add("pending");
                    // badge.innerText = "Pending";
                }
            });
            // Update progress bar based on normal steps done.
            let progress = Math.round((currentStepIndex / totalNormalSteps) * 100);
            document.querySelector(".progress-fill").style.width = progress + "%";
            document.querySelector(".progress-fill").innerText = progress + "%";

            // For the summary step, if currentStepIndex equals totalNormalSteps, show it as active.
            if (currentStepIndex === totalNormalSteps) {
                summaryStep.classList.add("active");
            } else {
                summaryStep.classList.remove("active");
            }
        }

        // When "Mark as Read" is clicked on the active step, show the form.
        document.querySelectorAll(".mark-read-btn").forEach(button => {
            button.addEventListener("click", function () {
                let index = parseInt(this.dataset.index);
                // Reveal the form for the active step.
                document.getElementById(`form_${index}`).classList.remove("d-none");
                // Hide the "Mark as Read" button.
                this.style.display = "none";
            });
        });

        // When "Submit" is clicked, send data via AJAX; on success, mark the active step as Done and then move to next.
        document.querySelectorAll(".submit-milestone").forEach(button => {
            button.addEventListener("click", function () {
                let index = parseInt(this.dataset.index);
                let description = document.getElementById(`description_${index}`).value.trim();
                let name = document.getElementById(`name_${index}`).value.trim();
                let image = document.getElementById(`image_${index}`).files[0];
                let orderId = document.getElementById("order_id").value;
                if (!description) {
                    alert("Please enter a description.");
                    return;
                }
                let formData = new FormData();
                formData.append("order_id", orderId);
                formData.append("milestone_index", index);
                formData.append("name", name);
                formData.append("description", description);
                if (image) {
                    formData.append("image", image);
                }
                fetch("{{ route('orders.markDone') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Mark the current step as Done.
                            let badge = document.getElementById(`badge_${index}`);
                            badge.classList.remove("current");
                            badge.classList.add("done");
                            badge.innerText = "Done";
                            document.getElementById(`form_${index}`).classList.add("d-none");
                            // Advance to the next step if available; otherwise, activate summary.
                            if (index < totalNormalSteps - 1) {
                                currentStepIndex = index + 1;
                            } else {
                                currentStepIndex = totalNormalSteps;
                            }
                            updateStepDisplay();
                        } else {
                            alert("Error: " + data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        alert("Something went wrong. Check console for details.");
                    });
            });
        });

        // Navigation Buttons
        document.getElementById("prev-btn").addEventListener("click", function () {
            if (currentStepIndex > 0) {
                currentStepIndex--;
                updateStepDisplay();
            }
        });
        document.getElementById("next-btn").addEventListener("click", function () {
            if (currentStepIndex < totalNormalSteps) {
                currentStepIndex++;
                updateStepDisplay();
            }
        });

        // Optional Approval Popup functionality.
        document.getElementById("approve-btn").addEventListener("click", function () {
            document.getElementById("approval-popup").classList.remove("show");
        });
        document.getElementById("cancel-btn").addEventListener("click", function () {
            document.getElementById("approval-popup").classList.remove("show");
        });

        updateStepDisplay();
    </script>
    </body>
@endsection
