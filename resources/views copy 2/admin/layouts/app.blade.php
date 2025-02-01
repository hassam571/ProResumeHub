<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<style>
    [data-bs-theme=blue-theme] body {
        --bs-heading-color: #e6ecf0;
        --bs-body-color: #d3d7dc;
        --bs-body-bg: #0f1535;
        --bs-body-bg-2: #181f4a;
        --bs-transparent-bg: rgba(255, 255, 255, 0.10);
        --bs-border-color-translucent: rgba(226, 232, 240, 0.15);
        --bs-border-color: rgba(255, 255, 255, 0.15);
        --sticky-header-bg: rgba(255, 255, 255, 0.45);
        --bs-disabled-bg: #4b5481;
        --bs-tertiary-bg: #181f4a;
        --bs-card-bg: #070c29;
        background-image: url('{{ asset('public/asset/images/bg-themes/body-background-1.webp') }}');
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: transparent;
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg-2);

    }


    [data-bs-theme=blue-theme] body {

        --bs-heading-color: #e6ecf0;
        --bs-body-color: #d3d7dc;
        --bs-body-bg: #0f1535;
        --bs-body-bg-2: #181f4a;
        --bs-transparent-bg: rgba(255, 255, 255, 0.10);
        --bs-border-color-translucent: rgba(226, 232, 240, 0.15);
        --bs-border-color: rgba(255, 255, 255, 0.15);
        --sticky-header-bg: rgba(255, 255, 255, 0.45);
        --bs-disabled-bg: #4b5481;
        --bs-tertiary-bg: #181f4a;
        --bs-card-bg: #070c29;


        background-image: url('{{ asset('public/asset/images/bg-themes/body-background-1.webp') }}');
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: transparent;

        color: var(--bs-body-color);
        background-color: var(--bs-body-bg-2);


        $headingColor: #d5d5d5;
        $headerbg: transparent;


        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: var(--bs-tertiary-bg)
        }
</style>
@include('admin.layouts.head')

<body>
    @include('admin.layouts.header')
    @include('admin.layouts.sidenav')




    @auth
        <script>
            window.userHasRememberToken = {{ auth()->user()->remember_token ? 'true' : 'false' }};
        </script>
    @endauth



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}




    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}



    {{-- @auth
        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Session Expiring</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        You will be logged out soon. Do you want to stay logged in?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="stayLoggedInBtn">Stay Logged In</button>
                        <button type="button" class="btn btn-primary" id="logoutNow">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    @endauth --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Bootstrap JS Bundle -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

     <!-- Your body content -->

     @auth
     <!-- Logout Modal -->
     <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="logoutModalLabel">Session Expiring</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     You will be logged out soon. Do you want to stay logged in?
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" id="stayLoggedInBtn">Stay Logged In</button>
                     <button type="button" class="btn btn-primary" id="logoutNow">Logout</button>
                 </div>
             </div>
         </div>
     </div>
 @endauth

 <!-- Bootstrap JS Bundle -->
 {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

 <!-- Your Custom JavaScript -->
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Check if user is authenticated by verifying the existence of the variable
         if (typeof window.userHasRememberToken === 'undefined') {
             return;
         }

         // If the user has a remember_token, do not set up the logout timer
         if (window.userHasRememberToken) {
             return;
         }

         let logoutTimer;
         let autoLogoutTimer;
         const logoutAfter = 1 * 5 * 1000; // 2 minutes in milliseconds
         const autoLogoutAfter = 30 * 1000; // 10 seconds in milliseconds

         // Initialize Bootstrap Modal
         const logoutModalElement = document.getElementById('logoutModal');
         const logoutModal = new bootstrap.Modal(logoutModalElement, {
             backdrop: 'static',
             keyboard: false
         });

         // Function to display the logout modal and start the auto-logout timer
         function showLogoutAlert() {
             logoutModal.show();
             startAutoLogoutTimer();
         }

         // Function to handle user logout
         function logoutUser() {
             fetch('{{ route("logout") }}', {
                     method: 'POST',
                     headers: {
                         'X-CSRF-TOKEN': getCsrfToken(),
                         'Content-Type': 'application/json'
                     },
                     credentials: 'same-origin'
                 })
                 .then(response => {
                     if (response.ok) {
                         window.location.href = '{{ route("admin.auth.login") }}'; // Redirect to login page
                     } else {
                         alert('Error logging out.');
                     }
                 })
                 .catch(error => {
                     console.error('Logout error:', error);
                 });
         }

         // Function to retrieve CSRF token from meta tag
         function getCsrfToken() {
             const meta = document.querySelector('meta[name="csrf-token"]');
             return meta ? meta.getAttribute('content') : '';
         }

         // Function to reset the initial logout timer
         function resetLogoutTimer() {
             clearTimeout(logoutTimer);
             logoutTimer = setTimeout(showLogoutAlert, logoutAfter);
         }

         // Function to start the auto-logout timer after modal is shown
         function startAutoLogoutTimer() {
             clearTimeout(autoLogoutTimer);
             autoLogoutTimer = setTimeout(function() {
                 logoutModal.hide();
                 logoutUser();
             }, autoLogoutAfter);
         }

         // Function to clear the auto-logout timer (if user interacts)
         function clearAutoLogoutTimer() {
             clearTimeout(autoLogoutTimer);
         }

         // Event listeners for modal buttons
         document.getElementById('stayLoggedInBtn').addEventListener('click', function() {
             logoutModal.hide();
             clearAutoLogoutTimer();
             resetLogoutTimer();
         });

         document.getElementById('logoutNow').addEventListener('click', function() {
             logoutModal.hide();
             clearAutoLogoutTimer();
             logoutUser();
         });

         // Start the initial logout timer
         resetLogoutTimer();

         // Reset the timer on user interactions to prevent premature logout
         ['click', 'mousemove', 'keypress', 'scroll'].forEach(event => {
             document.addEventListener(event, resetLogoutTimer, false);
         });
     });
 </script>











    <div class="loader" id="loader">
        <!-- Your custom animated loader -->
        <div class="banter-loader">
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
        </div>
    </div>



    <main class="main-wrapper">

        <div class="main-content">
            @if (session('alert'))
                <x-alert :type="session('alert')['type']" :title="session('alert')['title']" :message="session('alert')['message']" />
            @endif
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">







                @hasSection('breadcrumbs')
                    <div class="breadcrumb-title pe-3">@yield('breadcrumb-title', 'Default Title')</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @yield('breadcrumbs')
                                </li>

                            </ol>
                        </nav>
                    </div>
                @endif




                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary">Settings</button>
                        <button type="button"
                            class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>



            @yield('content')

        </div>
    </main>























    <div class="overlay btn-toggle"></div>
    @include('admin.layouts.footer')


    <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>


    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BlueTheme">
                            <span class="material-icons-outlined">contactless</span>
                            <span>Blue</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BoderedTheme">
                            <span class="material-icons-outlined">border_style</span>
                            <span>Bordered</span>
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
@include('admin.layouts.scripts')

</html>
