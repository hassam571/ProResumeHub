@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Order</title>
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
            let milestoneHtml = `
                <div class="card mt-3 p-3 bg-secondary text-white">
                    <div class="mb-2">
                        <label class="form-label">Step Title:</label>
                        <input type="text" name="milestones[${index}][title]" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Step Detail:</label>
                        <textarea name="milestones[${index}][detail]" class="form-control" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Due Date:</label>
                        <input type="date" name="milestones[${index}][due_date]" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-danger" onclick="removeMilestone(this)">Remove</button>
                </div>
            `;
            milestoneContainer.insertAdjacentHTML("beforeend", milestoneHtml);
        }

        function removeMilestone(button) {
            button.parentElement.remove();
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <div class="card text-white bg-dark">
            <div class="card-header">
                <h2>Create New Order</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Order ID:</label>
                        <input type="text" name="order_id" value="{{ $nextOrderId }}" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Order Password:</label>
                        <div class="input-group">
                            <input type="text" id="order_password" name="order_password" class="form-control" required>
                            <button type="button" class="btn btn-outline-secondary" onclick="generatePassword()">Generate</button>
                            <button type="button" class="btn btn-outline-secondary" onclick="copyPassword()">Copy</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Project Name:</label>
                        <input type="text" name="project_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Project Description:</label>
                        <textarea name="project_description" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <h4>Milestones</h4>
                        <div id="milestoneContainer">
                            <div class="card mt-3 p-3 bg-secondary text-white">
                                <div class="mb-2">
                                    <label class="form-label">Step Title:</label>
                                    <input type="text" name="milestones[0][title]" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Step Detail:</label>
                                    <textarea name="milestones[0][detail]" class="form-control" required></textarea>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Due Date:</label>
                                    <input type="date" name="milestones[0][due_date]" class="form-control" required>
                                </div>
                                <button type="button" class="btn btn-danger" onclick="removeMilestone(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success mt-2" onclick="addMilestone()">Add Another Milestone</button>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Order</button>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
