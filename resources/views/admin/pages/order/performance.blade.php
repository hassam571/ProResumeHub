@extends('admin.layouts.app')

@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')

    <!-- Custom CSS -->
    <style>
        .is-invalid {
            border-color: red !important;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
    <!-- bs-stepper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css"/>

    @php
        $isEdit = isset($contract);
        $formAction = $isEdit
            ? route('admin.contract.update', $contract->id)
            : route('admin.contract.store');
    @endphp

    <div id="stepper1" class="bs-stepper">
        <div class="card">
            <!-- Stepper Header -->
            <div class="card-header">
                <div class="bs-stepper-header" role="tablist">
                    @foreach($order_mileStines as $mileStines)
                        <div class="step" data-target="#step-{{ $mileStines->id }}">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger{{ $mileStines->id }}" aria-controls="step-{{ $mileStines->id }}">
                                <span class="bs-stepper-circle">{{ $mileStines->id }}</span>
                                <span class="bs-stepper-label">{{ $mileStines->name }}</span>
                            </button>
                        </div>
                        @if(!$loop->last)
                            <div class="line"></div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- Stepper Content -->
            <div class="card-body">
                <form action="{{ $formAction }}" method="POST">
                    @csrf
                    @if($isEdit)
                        @method('PUT')
                    @endif
                    <div class="bs-stepper-content">
                        @foreach($order_mileStines as $mileStines)
                            <div id="step-{{ $mileStines->id }}" class="bs-stepper-pane" role="tabpanel" aria-labelledby="stepper1trigger{{ $mileStines->id }}">
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <h5 class="mb-1">{{ $mileStines->name ?? 'No Name' }}</h5>
                                        <!-- Description is initially hidden -->
                                        <div class="description-container d-none extra-description">
                                            <p class="mb-4">{{ $mileStines->description ?? 'No Description' }}</p>
                                        </div>
                                        <!-- Navigation Buttons in each step -->
                                        <div>
                                            <div>
                                                <!-- Accept button always visible -->
                                                <button class="btn btn-primary btn-accept" type="button">Accept</button>
                                            </div>
                                            <div class=" mt-5">
                                                @if(!$loop->first)
                                                    <button class="btn btn-secondary text-light btn-prev" type="button">Pre</button>
                                                @else
                                                    <div></div>
                                                @endif
                                                @if(!$loop->last)
                                                    <button class="btn btn-success text-light btn-next" type="button">Next</button>
                                                @else
                                                    <button class="btn btn-success text-light btn-next disabled" type="button">Next</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        @if($mileStines->image)
                                            <img src="{{ asset($mileStines->image) }}" width="100%" alt="Milestone Image"/>
                                        @else
                                            <p>No Image</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Required Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var stepperElement = document.querySelector('#stepper1');
            var stepper = new Stepper(stepperElement, {
                linear: true,
                animation: false
            });

            // Previous button functionality using bs-stepper API.
            document.querySelectorAll('.btn-prev').forEach(function(button) {
                button.addEventListener('click', function() {
                    stepper.previous();
                });
            });

            // Next button functionality.
            document.querySelectorAll('.btn-next').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Optional: add validation here.
                    stepper.next();
                });
            });

            // Accept button: when clicked, reveal the extra description and persist acceptance.
            document.querySelectorAll('.btn-accept').forEach(function(button) {
                button.addEventListener('click', function() {
                    var currentPane = button.closest('.bs-stepper-pane');
                    var descContainer = currentPane.querySelector('.extra-description');
                    // Get the milestone ID from the pane's id (assuming format "step-<id>")
                    var paneId = currentPane.getAttribute('id'); // e.g. "step-5"
                    var milestoneId = paneId.split('-')[1];
                    if (descContainer) {
                        descContainer.classList.remove('d-none');
                    }
                    // Hide the Accept button.
                    button.style.display = "none";
                    // Persist acceptance in localStorage so the description stays visible.
                    localStorage.setItem("accepted_" + milestoneId, "true");
                });
            });

            // On page load, check localStorage for each milestone and show description if accepted.
            document.querySelectorAll('.bs-stepper-pane').forEach(function(pane) {
                var paneId = pane.getAttribute('id');
                if(paneId.startsWith("step-")) {
                    var milestoneId = paneId.split('-')[1];
                    if (localStorage.getItem("accepted_" + milestoneId) === "true") {
                        var descContainer = pane.querySelector('.extra-description');
                        if(descContainer) {
                            descContainer.classList.remove('d-none');
                        }
                        var acceptButton = pane.querySelector('.btn-accept');
                        if(acceptButton) {
                            acceptButton.style.display = "none";
                        }
                    }
                }
            });
        });
    </script>

@endsection
