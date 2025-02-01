<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('asset/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Maxton</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">

            <!-- Dashboard -->
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">dashboard</i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li><a href="index.html"><i class="material-icons-outlined">analytics</i>Analysis</a></li>
                    <li><a href="index2.html"><i class="material-icons-outlined">shopping_cart</i>eCommerce</a></li>
                </ul>
            </li>

            <!-- User Management -->
            <li class="menu-label">User Management</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i></div>
                    <div class="menu-title">Users</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.users.add') }}"><i class="material-icons-outlined">person_add</i>Add Users</a></li>
                    <li><a href="{{ route('admin.users.list') }}"><i class="material-icons-outlined">list</i>Users List</a></li>
                </ul>
            </li>

            <!-- CV Management -->
            <li class="menu-label">CV Management</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">build</i></div>
                    <div class="menu-title">Skills</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.skills.add') }}"><i class="material-icons-outlined">add</i>Add Skills</a></li>
                    <li><a href="{{ route('admin.skills.list') }}"><i class="material-icons-outlined">view_list</i>Skills List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">work</i></div>
                    <div class="menu-title">Job</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.jobs.create') }}"><i class="material-icons-outlined">add</i>Add Job</a></li>
                    <li><a href="{{ route('admin.jobs.list') }}"><i class="material-icons-outlined">view_list</i>Job List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">folder</i></div>
                    <div class="menu-title">Projects</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.projects.create') }}"><i class="material-icons-outlined">add</i>Add Projects</a></li>
                    <li><a href="{{ route('admin.projects.list') }}"><i class="material-icons-outlined">view_list</i>Projects List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">school</i></div>
                    <div class="menu-title">Education</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.education.create') }}"><i class="material-icons-outlined">add</i>Add Education</a></li>
                    <li><a href="{{ route('admin.education.list') }}"><i class="material-icons-outlined">view_list</i>Education List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">language</i></div>
                    <div class="menu-title">Languages</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.languages.create') }}"><i class="material-icons-outlined">add</i>Add Language</a></li>
                    <li><a href="{{ route('admin.languages.index') }}"><i class="material-icons-outlined">view_list</i>Language List</a></li>
                </ul>
            </li>

            <!-- Legal Documents -->
            <li class="menu-label">Legal Documents</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">receipt_long</i></div>
                    <div class="menu-title">Invoice</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.invoice.create') }}"><i class="material-icons-outlined">add</i>Add Invoice</a></li>
                    <li><a href="{{ route('admin.invoice.list') }}"><i class="material-icons-outlined">view_list</i>Invoice List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i></div>
                    <div class="menu-title">Contract</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.contract.create') }}"><i class="material-icons-outlined">add</i>Add Contract</a></li>
                    <li><a href="{{ route('admin.contract.list') }}"><i class="material-icons-outlined">view_list</i>Contract List</a></li>
                </ul>
            </li>








            <style>
                .badgea{position: relative;}
                .badge {
                    font-size: 0.7rem;
                    padding: 0.2rem 0.4rem;
                    border-radius: 1rem;
                    background-color: #ff4d4d; /* Softer red for better appearance */
                    color: #fff;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
                    position: absolute;
                    top: 27%; /* Adjust this value to move it higher */
                    right: 5px; /* Adjust this value to move it to the right */
                    transform: none;
                    z-index: 1;
                }
            
         
                .menu-title {
                    margin-left: 0.5rem;
                    font-size: 1rem;
                    font-weight: 600;
                    color: #fff;
                }
            </style>
            




            <li class="menu-label">Mails</li>
            <li>
                <a href="{{ route('admin.contacts.list') }}" class="d-flex align-items-center  badgea">
                        <div class="parent-icon">                        <i class="material-icons-outlined">mail_outline</i>

                        <!-- Badge -->
                        @php
                            $contactCount = \App\Models\ContactUs::count();
                        @endphp
                      
                    </div>
                    @if($contactCount > 0)
                    <span class="badge bg-danger">
                        {{ $contactCount }}
                    </span>
                @endif
                    <div class="menu-title">Contacts</div>
                </a>
            </li>
            

            

        </ul>




    
    </div>
</aside>
