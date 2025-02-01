@extends('frontend.layouts.vertical', ['page_title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    <!-- Quill css -->
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.bubble.css', 'node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xxl-8">
                <!-- start page title -->
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="app-search">
                            <form>
                                <div class="mb-2 position-relative">
                                    <input type="text" class="form-control border border-dark border-opacity-10" placeholder="Search files...">
                                    <span class="ri-search-line search-icon"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="page-title">Tasks <a href="#" class="btn btn-success btn-sm ms-3">Add New</a></h4>
                </div>
                <!-- end page title -->

                <!-- tasks panel -->
                <div class="mt-2">
                    <h5 class="m-0 pb-2">
                        <a class="text-dark" data-bs-toggle="collapse" href="#todayTasks" role="button" aria-expanded="false" aria-controls="todayTasks">
                            <i class='ri-arrow-down-s-line fs-18'></i>Today <span class="text-muted">(10)</span>
                        </a>
                    </h5>

                    <div class="collapse show" id="todayTasks">
                        <div class="card mb-0">
                            <div class="card-body">
                                <!-- task -->
                                <div class="row justify-content-sm-between">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task1">
                                            <label class="form-check-label" for="task1">
                                                Draft the new contract document for sales team
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container">
                                                <img src="/images/users/avatar-9.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to Arya S" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> Today 10am
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 3/7
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 21
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-danger-subtle text-danger p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task2">
                                            <label class="form-check-label" for="task2">
                                                iOS App home page
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container1">
                                                <img src="/images/users/avatar-2.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to James B" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> Today 4pm
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 2/7
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 48
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-danger-subtle text-danger p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task3">
                                            <label class="form-check-label" for="task3">
                                                Write a release note
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container2">
                                                <img src="/images/users/avatar-4.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to Kevin C" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end mb-0">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> Today 6pm
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 18/21
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 73
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-info-subtle text-info p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end .collapse-->
                </div> <!-- end .mt-2-->

                <!-- upcoming tasks -->
                <div class="mt-4">

                    <h5 class="m-0 pb-2">
                        <a class="text-dark" data-bs-toggle="collapse" href="#upcomingTasks" role="button" aria-expanded="false" aria-controls="upcomingTasks">
                            <i class='ri-arrow-down-s-line fs-18'></i>Upcoming <span class="text-muted">(5)</span>
                        </a>
                    </h5>

                    <div class="collapse show" id="upcomingTasks">
                        <div class="card mb-0">
                            <div class="card-body">
                                <!-- task -->
                                <div class="row justify-content-sm-between">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task4">
                                            <label class="form-check-label" for="task4">
                                                Invite user to a project
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container3">
                                                <img src="/images/users/avatar-2.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to James B" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> Tomorrow 7am
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 1/12
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 36
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-danger-subtle text-danger p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task5">
                                            <label class="form-check-label" for="task5">
                                                Enable analytics tracking
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container4">
                                                <img src="/images/users/avatar-2.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to James B" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> 27 Aug 10am
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 13/72
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 211
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-success-subtle text-success p-1">Low</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task6">
                                            <label class="form-check-label" for="task6">
                                                Code HTML email template
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container5">
                                                <img src="/images/users/avatar-7.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to Edward S" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end mb-0">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> No Due Date
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 0/7
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 0
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-info-subtle text-info p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end collapse-->
                </div>
                <!-- end upcoming tasks -->

                <!-- start other tasks -->
                <div class="mt-4 mb-4">
                    <h5 class="m-0 pb-2">
                        <a class="text-dark" data-bs-toggle="collapse" href="#otherTasks" role="button" aria-expanded="false" aria-controls="otherTasks">
                            <i class='ri-arrow-down-s-line fs-18'></i>Other <span class="text-muted">(3)</span>
                        </a>
                    </h5>

                    <div class="collapse show" id="otherTasks">
                        <div class="card mb-0">
                            <div class="card-body">
                                <!-- task -->
                                <div class="row justify-content-sm-between">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task7">
                                            <label class="form-check-label" for="task7">
                                                Coordinate with business development
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container6">
                                                <img src="/images/users/avatar-9.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to Arya S" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> Today 10am
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 5/14
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 71
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-info-subtle text-info p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task8">
                                            <label class="form-check-label" for="task8">
                                                Kanban board design
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container7">
                                                <img src="/images/users/avatar-2.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container7" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to James B" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> No Due Date
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 0/8
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 0
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-info-subtle text-info p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->

                                <!-- task -->
                                <div class="row justify-content-sm-between mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task9">
                                            <label class="form-check-label" for="task9">
                                                Code HTML email template for sales outreach
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-between">
                                            <div id="tooltip-container8">
                                                <img src="/images/users/avatar-5.jpg" alt="image" class="avatar-xs rounded-circle me-1" data-bs-container="#tooltip-container8" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Assigned to Gary H" />
                                            </div>
                                            <div>
                                                <ul class="list-inline fs-13 text-end mb-0">
                                                    <li class="list-inline-item">
                                                        <i class='ri-calendar-todo-line fs-16 me-1'></i> 10 Sep 3pm
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-list-check-3 fs-16 me-1'></i> 0/58
                                                    </li>
                                                    <li class="list-inline-item ms-1">
                                                        <i class='ri-chat-2-line fs-16 me-1'></i> 9
                                                    </li>
                                                    <li class="list-inline-item ms-2">
                                                        <span class="badge bg-success-subtle text-success p-1">Low</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end .d-flex-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div>
                </div>
            </div> <!-- end col -->

            <!-- task details -->
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-fill'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='ri-attachment-line me-1'></i>Attachment
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='ri-edit-box-line me-1'></i>Edit
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='ri-file-copy-2-line me-1'></i>Mark as Duplicate
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                    <i class='ri-delete-bin-line me-1'></i>Delete
                                </a>
                            </div> <!-- end dropdown menu-->
                        </div> <!-- end dropdown-->

                        <div class="form-check float-start">
                            <input type="checkbox" class="form-check-input" id="completedCheck">
                            <label class="form-check-label" for="completedCheck">
                                Mark as completed
                            </label>
                        </div> <!-- end form-check-->

                        <hr class="mt-4 mb-2" />

                        <div class="row">
                            <div class="col">

                                <h4>Draft the new contract document for sales team</h4>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- assignee -->
                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                        <div class="d-flex">
                                            <img src="/images/users/avatar-9.jpg" alt="Arya S" class="rounded-circle me-2" height="24" />
                                            <div>
                                                <h5 class="mt-1 fs-14">
                                                    Arya Stark
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end assignee -->
                                    </div> <!-- end col -->

                                    <div class="col-6">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                        <div class="d-flex">
                                            <i class='ri-calendar-todo-line fs-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 fs-14">
                                                    Today 10am
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end due date -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <!-- task description -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="border rounded">
                                            <div id="bubble-editor" style="height: 130px;">
                                                <h3>This is an simple editable area.</h3>
                                                <p><br></p>
                                                <ul>
                                                    <li>
                                                        Select a text to reveal the toolbar.
                                                    </li>
                                                    <li>
                                                        Edit rich document on-the-fly, so elastic!
                                                    </li>
                                                </ul>
                                                <p><br></p>
                                                <p>
                                                    End of simple area
                                                </p>
                                            </div> <!-- end Snow-editor-->
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task description -->

                                <!-- start sub tasks/checklists -->
                                <h5 class="mt-4 mb-2 fs-16">Checklists/Sub-tasks</h5>
                                <div class="form-check mt-1">
                                    <input type="checkbox" class="form-check-input" id="checklist1">
                                    <label class="form-check-label strikethrough" for="checklist1">
                                        Find out the old contract documents
                                    </label>
                                </div>

                                <div class="form-check mt-1">
                                    <input type="checkbox" class="form-check-input" id="checklist2">
                                    <label class="form-check-label strikethrough" for="checklist2">
                                        Organize meeting sales associates to understand need in detail
                                    </label>
                                </div>

                                <div class="form-check mt-1">
                                    <input type="checkbox" class="form-check-input" id="checklist3">
                                    <label class="form-check-label strikethrough" for="checklist3">
                                        Make sure to cover every small details
                                    </label>
                                </div>
                                <!-- end sub tasks/checklists -->

                                <!-- start attachments -->
                                <h5 class="mt-4 mb-2 fs-16">Attachments</h5>
                                <div class="card mb-2 shadow-none border">
                                    <div class="p-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded">
                                                        ZIP
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">sales-assets.zip</a>
                                                <p class="mb-0">2.3 MB</p>
                                            </div>
                                            <div class="col-auto" id="tooltip-container9">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download" class="btn btn-link text-muted btn-lg p-0">
                                                    <i class='ri-delete-bin-line'></i>
                                                </a>
                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                                    <i class='ri-close-fill'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2 shadow-none border">
                                    <div class="p-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded">
                                                        DOC
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">new-contarcts.docx</a>
                                                <p class="mb-0">1.25 MB</p>
                                            </div>
                                            <div class="col-auto" id="tooltip-container10">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container10" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download" class="btn btn-link text-muted btn-lg p-0">
                                                    <i class='ri-delete-bin-line'></i>
                                                </a>
                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container10" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                                    <i class='ri-close-fill'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end attachments -->

                                <!-- comments -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 class="mb-2 fs-16">Comments</h5>

                                        <div class="d-flex mt-3 p-1">
                                            <img src="/images/users/avatar-9.jpg" class="me-2 rounded-circle" height="36" alt="Arya Stark" />
                                            <div class="w-100">
                                                <h5 class="mt-0 mb-0">
                                                    <span class="float-end text-muted fs-12">4:30am</span>
                                                    Arya Stark
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    Should I review the last 3 years legal documents as well?
                                                </p>
                                            </div>
                                        </div> <!-- end comment -->

                                        <hr />

                                        <div class="d-flex mt-2 p-1">
                                            <img src="/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="36" alt="Dominc B" />
                                            <div class="w-100">
                                                <h5 class="mt-0 mb-0">
                                                    <span class="float-end text-muted fs-12">3:30am</span>
                                                    Gary Somya
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    @Arya FYI..I have created some general guidelines last year.
                                                </p>
                                            </div>
                                        </div> <!-- end comment-->

                                        <hr />

                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="border rounded">
                                            <form action="#" class="comment-area-box">
                                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your comment..."></textarea>
                                                <div class="p-2 bg-light">
                                                    <div class="float-end">
                                                        <button type="submit" class="btn btn-sm btn-success"><i class='ri-send-plane-2-line me-1'></i>Submit</button>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='ri-upload-line'></i></a>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='ri-at-line'></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- end .border-->
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                                <!-- end comments -->
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.tasks.js'])
@endsection
