edit.blade.php:@extends('admin.layouts.app')

@section('breadcrumb-title', 'Edit Order')
@section('breadcrumbs', 'Edit')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Order</title>
        <style>
            .line-through {
                text-decoration: line-through;
            }
        </style>
        <script>
            function generatePassword() {
                let length = 10;
                let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
                let password = "";
                for (let i = 0; i < length; i++) {
                    password += chars.charAt(Math.floor(Math.random() * chars.length));
                }
                document.getElementById("order_password").value = password;
            }

            function copyPassword() {
                let passwordField = document.getElementById("order_password");
                passwordField.select();
                document.execCommand("copy");
                alert("Password copied!");
            }

            function addMilestone() {
                let milestoneContainer = document.getElementById("milestoneContainer");
                let index = milestoneContainer.children.length;
                let milestoneHtml =
                    `<div class="card mt-3 p-3 bg-secondary text-white" id="milestone_${index}">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <label class="form-label">Step Title:</label>
                            <input type="text" name="milestones[${index}][title]" class="form-control" required>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <label class="form-label">Step Detail:</label>
                            <textarea name="milestones[${index}][detail]" class="form-control" required></textarea>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <label class="form-label">Due Date:</label>
                            <input type="date" name="milestones[${index}][due_date]" class="form-control" required>
                        </div>
<!--                        <button type="button" class="btn btn-success mx-2" onclick="markDone(this, ${index})">Done</button>-->
                        <button type="button" class="btn btn-danger" onclick="removeMilestone(this)">Remove</button>
                    </div>
                    <input type="hidden" name="milestones[${index}][done]" value="0">
                </div>`;
                milestoneContainer.insertAdjacentHTML("beforeend", milestoneHtml);
            }

            function removeMilestone(button) {
                button.parentElement.parentElement.remove();
            }

            function markDone(button, index) {
                const orderId = document.querySelector('input[name="order_id"]').value;

                fetch('{{ route("orders.markDone") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        milestone: {
                            order_id: orderId,
                            index: index
                        }
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const milestoneElement = button.parentElement.parentElement;
                            milestoneElement.classList.add('line-through');
                            button.style.display = 'none'; // Hide the Done button

                            // Store completion status in the hidden input field
                            let hiddenInput = milestoneElement.querySelector(input[name="milestones[${index}][done]"]);
                            if (hiddenInput) {
                                hiddenInput.value = "1";
                            }
                        }
                    });
            }

            // Ensure completed milestones retain the line-through effect when form reloads
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".card.bg-secondary").forEach(function (milestone) {
                    let doneInput = milestone.querySelector('input[name$="[done]"]');
                    if (doneInput && doneInput.value === "1") {
                        milestone.classList.add("line-through");
                        let doneButton = milestone.querySelector("button.btn-success");
                        if (doneButton) {
                            doneButton.style.display = "none";
                        }
                    }
                });
            });
        </script>
    </head>

    <body>
    <div class="container mt-5">
        <div class="card text-white bg-dark">
            <div class="card-header">
                <h2>Edit Order</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Order ID:</label>
                        <input type="text" name="order_id" value="{{ $order->id }}" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Order Password:</label>
                        <div class="input-group">
                            <input type="text" id="order_password" name="order_password" value="{{ $order->order_password }}" class="form-control" required>
                            <button type="button" class="btn btn-outline-secondary" onclick="generatePassword()">Generate</button>
                            <button type="button" class="btn btn-outline-secondary" onclick="copyPassword()">Copy</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Project Name:</label>
                        <input type="text" name="project_name" value="{{ $order->project_name }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Project Description:</label>
                        <textarea name="project_description" class="form-control" required>{{ $order->project_description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <h4>Milestones</h4>
                        <div id="milestoneContainer">
                            @foreach ($order->milestones as $index => $milestone)
                                <div class="card mt-3 p-3 bg-secondary text-white {{ isset($milestone['done']) && $milestone['done'] ? 'line-through' : '' }}" id="milestone_{{ $index }}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <label class="form-label">Step Title:</label>
                                            <input type="text" name="milestones[{{ $index }}][title]" value="{{ $milestone['title'] }}" class="form-control" required>
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <label class="form-label">Step Detail:</label>
                                            <textarea name="milestones[{{ $index }}][detail]" class="form-control" required>{{ $milestone['detail'] }}</textarea>
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <label class="form-label">Due Date:</label>
                                            <input type="date" name="milestones[{{ $index }}][due_date]" value="{{ $milestone['due_date'] }}" class="form-control" required>
                                        </div>
                                        <button type="button" class="btn btn-success mx-2" onclick="markDone(this, {{ $index }})" {{ isset($milestone['done']) && $milestone['done'] ? 'style=display:none;' : '' }}>Done</button>
                                    </div>
                                    <input type="hidden" name="milestones[{{ $index }}][done]" value="{{ isset($milestone['done']) && $milestone['done'] ? '1' : '0' }}">
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-success mt-2" onclick="addMilestone()">Add Another Milestone</button>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Order</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
