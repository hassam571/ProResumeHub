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
<body >
    @include('admin.layouts.header')
    @include('admin.layouts.sidenav')




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
          </div>  </div>
      


    <main class="main-wrapper">

        <div class="main-content">
            @if(session('alert'))
            <x-alert
                :type="session('alert')['type']"
                :title="session('alert')['title']"
                :message="session('alert')['message']"
            />
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
                  <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
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
