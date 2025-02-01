<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @hasSection('breadcrumb-title') 
            @yield('breadcrumb-title') 
        @endif 
        @hasSection('breadcrumbs')  
            -  @yield('breadcrumbs') 
        @endif
    </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/asset/images/favicon-32x32.png') }}" type="image/png">

    <!-- Pace Loader -->
    <link href="{{ asset('public/asset/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('public/asset/js/pace.min.js') }}"></script>

    <!-- Plugins CSS -->
    <link href="{{ asset('public/asset/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/asset/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/plugins/simplebar/css/simplebar.css') }}">
    <link href="{{ asset('public/asset/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/plugins/bs-stepper/css/bs-stepper.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/plugins/bs-stepper/css/bs-stepper-custom.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/bootstrap.min.css.map') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Main & Theming CSS -->
    <link href="{{ asset('public/asset/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">
</head>
