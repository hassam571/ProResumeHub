<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('public/asset/images/favicon-32x32.png') }}" type="image/png">
  <!-- loader-->
	<link href="{{ asset('public/asset/css/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('public/asset/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ asset('public/asset/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/asset/plugins/metismenu/metisMenu.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/asset/plugins/metismenu/mm-vertical.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/asset/plugins/simplebar/css/simplebar.css') }}">
  <!--bootstrap css-->
  <link href="{{ asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--main css-->
  <link href="{{ asset('public/asset/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

</head>

<body>

 <!--start header-->
 <header class="top-header">
  <nav class="navbar navbar-expand align-items-center gap-4">
    <div class="btn-toggle">
      <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
    </div>
    <div class="search-bar flex-grow-1">
      <div class="position-relative">
        <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Search">
        <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
        <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
        <div class="search-popup p-3">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-header d-lg-none">
              <div class="position-relative">
                <input class="form-control rounded-5 px-5 mobile-search-control" type="text" placeholder="Search">
                <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
               </div>
            </div>
            <div class="card-body search-content">
              <p class="search-title">Recent Searches</p>
              <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                <a href="javascript:;" class="kewords"><span>Angular Template</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Dashboard</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Admin Template</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Bootstrap 5 Admin</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Html eCommerce</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Sass</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>laravel 9</span><i
                    class="material-icons-outlined fs-6">search</i></a>
              </div>
              <hr>
              <p class="search-title">Tutorials</p>
              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">play_circle</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Wordpress Tutorials</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">shopping_basket</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">eCommerce Website Tutorials</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">laptop</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Responsive Design</h5>
                  </div>
                </div>
              </div>

              <hr>
              <p class="search-title">Members</p>

              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="{{ asset('public/asset/images/avatars/01.png') }}" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Andrew Stark</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="{{ asset('public/asset/images/avatars/02.png') }}" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Snetro Jhonia</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Michle Clark</h5>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-footer text-center bg-transparent">
              <a href="javascript:;" class="btn w-100">See All Search Results</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="navbar-nav gap-1 nav-right-links align-items-center">
      <li class="nav-item d-lg-none mobile-search-btn">
        <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('public/asset/images/county/02.png') }}" width="22" alt="">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/01.png') }}" width="20" alt=""><span class="ms-2">English</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/02.png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/03.png') }}" width="20" alt=""><span class="ms-2">French</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/04.png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/05.png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/06.png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/07.png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('public/asset/images/county/08.png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown position-static  d-md-flex d-none">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
        data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">done_all</i></a>
        <div class="dropdown-menu dropdown-menu-end mega-menu shadow-lg p-4 p-lg-5">
          <div class="mega-menu-widgets">
           <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4 g-lg-5">
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-danger">
                        <i class="material-icons-outlined">question_answer</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Marketing</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/02.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Website</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/03.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                          <h5>Subscribers</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/01.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Hubspot</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/11.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Templates</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/13.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Ebooks</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/12.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Sales</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/08.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Tools</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="{{ asset('public/asset/images/megaIcons/09.png') }}" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Academy</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
           </div><!--end row-->
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
          data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">apps</i></a>
        <div class="dropdown-menu dropdown-menu-end dropdown-apps shadow-lg p-3">
          <div class="border rounded-4 overflow-hidden">
            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/01.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Gmail</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/02.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Skype</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/03.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Slack</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/04.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">YouTube</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/05.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Google</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/06.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Instagram</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/07.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Spotify</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/08.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Yahoo</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/09.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Facebook</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/10.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Figma</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/11.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Paypal</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="{{ asset('public/asset/images/apps/12.png') }}" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Photo</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-bs-auto-close="outside"
          data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">notifications</i>
          <span class="badge-notify">5</span>
        </a>
        <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
          <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
            <h5 class="notiy-title mb-0">Notifications</h5>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-icons-outlined">
                  more_vert
                </span>
              </button>
              <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
                <div>
                  <hr class="dropdown-divider">
                </div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
              </div>
            </div>
          </div>
          <div class="notify-list">
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="{{ asset('public/asset/images/avatars/01.png') }}" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Congratulations Jhon</h5>
                    <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                    <p class="mb-0 notify-time">Today</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="user-wrapper bg-primary text-primary bg-opacity-10">
                    <span>RS</span>
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Account Created</h5>
                    <p class="mb-0 notify-desc">From USA an user has registered.</p>
                    <p class="mb-0 notify-time">Yesterday</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="{{ asset('public/asset/images/apps/13.png') }}" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Payment Recived</h5>
                    <p class="mb-0 notify-desc">New payment recived successfully</p>
                    <p class="mb-0 notify-time">1d ago</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="{{ asset('public/asset/images/apps/14.png') }}" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Order Recived</h5>
                    <p class="mb-0 notify-desc">Recived new order from michle</p>
                    <p class="mb-0 notify-time">2:15 AM</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="{{ asset('public/asset/images/avatars/06.png') }}" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Congratulations Jhon</h5>
                    <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                    <p class="mb-0 notify-time">Today</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                    <span>PK</span>
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Account Created</h5>
                    <p class="mb-0 notify-desc">From USA an user has registered.</p>
                    <p class="mb-0 notify-time">Yesterday</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item d-md-flex d-none">
        <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart"><i
            class="material-icons-outlined">shopping_cart</i>
          <span class="badge-notify">8</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
           <img src="{{ asset('public/asset/images/avatars/01.png') }}" class="rounded-circle p-1 border" width="45" height="45" alt="">
        </a>
        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
          <a class="dropdown-item  gap-2 py-2" href="javascript:;">
            <div class="text-center">
              <img src="{{ asset('public/asset/images/avatars/01.png') }}" class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                alt="">
              <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
            </div>
          </a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">person_outline</i>Profile</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">local_bar</i>Setting</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">dashboard</i>Dashboard</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">account_balance</i>Earning</a>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
              class="material-icons-outlined">cloud_download</i>Downloads</a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
          class="material-icons-outlined">power_settings_new</i>Logout</a>
        </div>
      </li>
    </ul>

  </nav>
</header>
<!--end top header-->


  <!--start sidebar-->
  <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{ asset('public/asset/images/logo-icon.png') }}" class="logo-img" alt="">
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
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
            <ul>
              <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>Analysis</a>
              </li>
              <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>eCommerce</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
              </div>
              <div class="menu-title">Widgets</div>
            </a>
            <ul>
              <li><a href="widgets-data.html"><i class="material-icons-outlined">arrow_right</i>Data</a>
              </li>
              <li><a href="widgets-static.html"><i class="material-icons-outlined">arrow_right</i>Static</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">apps</i>
              </div>
              <div class="menu-title">Apps</div>
            </a>
            <ul>
              <li><a href="app-emailbox.html"><i class="material-icons-outlined">arrow_right</i>Email Box</a>
              </li>
              <li><a href="app-emailread.html"><i class="material-icons-outlined">arrow_right</i>Email Read</a>
              </li>
              <li><a href="app-chat-box.html"><i class="material-icons-outlined">arrow_right</i>Chat</a>
              </li>
              <li><a href="app-fullcalender.html"><i class="material-icons-outlined">arrow_right</i>Calendar</a>
              </li>
              <li><a href="app-to-do.html"><i class="material-icons-outlined">arrow_right</i>To do</a>
              </li>
              <li><a href="app-invoice.html"><i class="material-icons-outlined">arrow_right</i>Invoice</a>
              </li>
            </ul>
          </li>
          <li class="menu-label">UI Elements</li>
          <li>
            <a href="cards.html">
              <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
              </div>
              <div class="menu-title">Cards</div>
            </a>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
              </div>
              <div class="menu-title">eCommerce</div>
            </a>
            <ul>
              <li><a href="ecommerce-add-product.html"><i class="material-icons-outlined">arrow_right</i>Add Product</a>
              </li>
              <li><a href="ecommerce-products.html"><i class="material-icons-outlined">arrow_right</i>Products</a>
              </li>
              <li><a href="ecommerce-customers.html"><i class="material-icons-outlined">arrow_right</i>Customers</a>
              </li>
              <li><a href="ecommerce-customer-details.html"><i class="material-icons-outlined">arrow_right</i>Customer Details</a>
              </li>
              <li><a href="ecommerce-orders.html"><i class="material-icons-outlined">arrow_right</i>Orders</a>
              </li>
              <li><a href="ecommerce-order-details.html"><i class="material-icons-outlined">arrow_right</i>Order Details</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
              </div>
              <div class="menu-title">Components</div>
            </a>
            <ul>
              <li><a href="component-alerts.html"><i class="material-icons-outlined">arrow_right</i>Alerts</a>
              </li>
              <li><a href="component-accordions.html"><i class="material-icons-outlined">arrow_right</i>Accordions</a>
              </li>
              <li><a href="component-badges.html"><i class="material-icons-outlined">arrow_right</i>Badges</a>
              </li>
              <li><a href="component-buttons.html"><i class="material-icons-outlined">arrow_right</i>Buttons</a>
              </li>
              <li><a href="component-carousels.html"><i class="material-icons-outlined">arrow_right</i>Carousels</a>
              </li>
              <li><a href="component-media-object.html"><i class="material-icons-outlined">arrow_right</i>Media
                  Objects</a>
              </li>
              <li><a href="component-modals.html"><i class="material-icons-outlined">arrow_right</i>Modals</a>
              </li>
              <li><a href="component-navs-tabs.html"><i class="material-icons-outlined">arrow_right</i>Navs & Tabs</a>
              </li>
              <li><a href="component-navbar.html"><i class="material-icons-outlined">arrow_right</i>Navbar</a>
              </li>
              <li><a href="component-paginations.html"><i class="material-icons-outlined">arrow_right</i>Pagination</a>
              </li>
              <li><a href="component-popovers-tooltips.html"><i class="material-icons-outlined">arrow_right</i>Popovers
                  & Tooltips</a>
              </li>
              <li><a href="component-progress-bars.html"><i class="material-icons-outlined">arrow_right</i>Progress</a>
              </li>
              <li><a href="component-spinners.html"><i class="material-icons-outlined">arrow_right</i>Spinners</a>
              </li>
              <li><a href="component-notifications.html"><i
                    class="material-icons-outlined">arrow_right</i>Notifications</a>
              </li>
              <li><a href="component-avtars-chips.html"><i class="material-icons-outlined">arrow_right</i>Avatrs &
                  Chips</a>
              </li>
              <li><a href="component-typography.html"><i class="material-icons-outlined">arrow_right</i>Typography</a>
               </li>
               <li><a href="component-text-utilities.html"><i class="material-icons-outlined">arrow_right</i>Utilities</a>
               </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
              </div>
              <div class="menu-title">Icons</div>
            </a>
            <ul>
              <li><a href="icons-line-icons.html"><i class="material-icons-outlined">arrow_right</i>Line Icons</a>
              </li>
              <li><a href="icons-boxicons.html"><i class="material-icons-outlined">arrow_right</i>Boxicons</a>
              </li>
              <li><a href="icons-feather-icons.html"><i class="material-icons-outlined">arrow_right</i>Feather
                  Icons</a>
              </li>
            </ul>
          </li>
          <li class="menu-label">Forms & Tables</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">toc</i>
              </div>
              <div class="menu-title">Forms</div>
            </a>
            <ul>
              <li><a href="form-elements.html"><i class="material-icons-outlined">arrow_right</i>Form Elements</a>
              </li>
              <li><a href="form-input-group.html"><i class="material-icons-outlined">arrow_right</i>Input Groups</a>
              </li>
              <li><a href="form-radios-and-checkboxes.html"><i class="material-icons-outlined">arrow_right</i>Radios &
                  Checkboxes</a>
              </li>
              <li><a href="form-layouts.html"><i class="material-icons-outlined">arrow_right</i>Forms Layouts</a>
              </li>
              <li><a href="form-validations.html"><i class="material-icons-outlined">arrow_right</i>Form Validation</a>
              </li>
              <li><a href="form-wizard.html"><i class="material-icons-outlined">arrow_right</i>Form Wizard</a>
              </li>
              <li><a href="form-file-upload.html"><i class="material-icons-outlined">arrow_right</i>File Upload</a>
              </li>
              <li><a href="form-date-time-pickes.html"><i class="material-icons-outlined">arrow_right</i>Date
                  Pickers</a>
              </li>
              <li><a href="form-select2.html"><i class="material-icons-outlined">arrow_right</i>Select2</a>
              </li>
              <li><a href="form-repeater.html"><i class="material-icons-outlined">arrow_right</i>Form Repeater</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">api</i>
              </div>
              <div class="menu-title">Tables</div>
            </a>
            <ul>
              <li><a href="table-basic-table.html"><i class="material-icons-outlined">arrow_right</i>Basic Table</a>
              </li>
              <li><a href="table-datatable.html"><i class="material-icons-outlined">arrow_right</i>Data Table</a>
              </li>
            </ul>
          </li>
          <li class="menu-label">Pages</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">lock</i>
              </div>
              <div class="menu-title">Authentication</div>
            </a>
            <ul>
              <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Basic</a>
                <ul>
                  <li><a href="auth-basic-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                  <li><a href="auth-basic-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                  <li><a href="auth-basic-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                  <li><a href="auth-basic-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                </ul>
              </li>
              <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Cover</a>
                <ul>
                  <li><a href="auth-cover-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                  <li><a href="auth-cover-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                  <li><a href="auth-cover-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                  <li><a href="auth-cover-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                </ul>
              </li>
              <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Boxed</a>
                  <ul>
                    <li><a href="auth-boxed-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                    <li><a href="auth-boxed-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                    <li><a href="auth-boxed-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                    <li><a href="auth-boxed-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="user-profile.html">
              <div class="parent-icon"><i class="material-icons-outlined">person</i>
              </div>
              <div class="menu-title">User Profile</div>
            </a>
          </li>
          <li>
            <a href="timeline.html">
              <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
              </div>
              <div class="menu-title">Timeline</div>
            </a>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">report_problem</i>
              </div>
              <div class="menu-title">Pages</div>
            </a>
            <ul>
              <li><a href="pages-error-404.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>404
                  Error</a>
              </li>
              <li><a href="pages-error-505.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>505
                  Error</a>
              </li>
              <li><a href="pages-coming-soon.html" target="_blank"><i
                    class="material-icons-outlined">arrow_right</i>Coming Soon</a>
              </li>
              <li><a href="pages-starter-page.html" target="_blank"><i
                    class="material-icons-outlined">arrow_right</i>Blank Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="faq.html">
              <div class="parent-icon"><i class="material-icons-outlined">help_outline</i>
              </div>
              <div class="menu-title">FAQ</div>
            </a>
          </li>
          <li>
            <a href="pricing-table.html">
              <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
              </div>
              <div class="menu-title">Pricing</div>
            </a>
          </li>
          <li class="menu-label">Charts & Maps</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">fitbit</i>
              </div>
              <div class="menu-title">Charts</div>
            </a>
            <ul>
              <li><a href="charts-apex-chart.html"><i class="material-icons-outlined">arrow_right</i>Apex</a>
              </li>
              <li><a href="charts-chartjs.html"><i class="material-icons-outlined">arrow_right</i>Chartjs</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
              </div>
              <div class="menu-title">Maps</div>
            </a>
            <ul>
              <li><a href="map-google-maps.html"><i class="material-icons-outlined">arrow_right</i>Google Maps</a>
              </li>
              <li><a href="map-vector-maps.html"><i class="material-icons-outlined">arrow_right</i>Vector Maps</a>
              </li>
            </ul>
          </li>
          <li class="menu-label">Others</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">face_5</i>
              </div>
              <div class="menu-title">Menu Levels</div>
            </a>
            <ul>
              <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level
                  One</a>
                <ul>
                  <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level
                      Two</a>
                    <ul>
                      <li><a href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level Three</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascrpt:;">
              <div class="parent-icon"><i class="material-icons-outlined">description</i>
              </div>
              <div class="menu-title">Documentation</div>
            </a>
          </li>
          <li>
            <a href="javascrpt:;">
              <div class="parent-icon"><i class="material-icons-outlined">support</i>
              </div>
              <div class="menu-title">Support</div>
            </a>
          </li>
         </ul>
        <!--end navigation-->
    </div>
  </aside>
<!--end sidebar-->

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">

      <div class="chat-wrapper">
        <div class="chat-sidebar">
          <div class="chat-sidebar-header">
            <div class="d-flex align-items-center">
              <div class="chat-user-online">
                <img src="{{ asset('public/asset/images/avatars/01.png') }}" width="45" height="45" class="rounded-circle" alt="" />
              </div>
              <div class="flex-grow-1 ms-2">
                <p class="mb-0">Rachel Zane</p>
              </div>
              <div class="dropdown">
                <div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded'></i>
                </div>
                <div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item" href="javascript:;">Settings</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Help & Feedback</a>
                  <a class="dropdown-item" href="javascript:;">Enable Split View Mode</a>
                  <a class="dropdown-item" href="javascript:;">Keyboard Shortcuts</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Sign Out</a>
                </div>
              </div>
            </div>
            <div class="mb-3"></div>
            <div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
              <input type="text" class="form-control" placeholder="People, groups, & messages"> <span class="input-group-text bg-transparent"><i class='bx bx-dialpad'></i></span>
            </div>
            <div class="chat-tab-menu mt-3">
              <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="pill" href="javascript:;">
                    <div class="font-24"><i class='bx bx-conversation'></i>
                    </div>
                    <div><small>Chats</small>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                    <div class="font-24"><i class='bx bx-phone'></i>
                    </div>
                    <div><small>Calls</small>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                    <div class="font-24"><i class='bx bxs-contact'></i>
                    </div>
                    <div><small>Contacts</small>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                    <div class="font-24"><i class='bx bx-bell'></i>
                    </div>
                    <div><small>Notifications</small>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="chat-sidebar-content">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-Chats">
                <div class="p-3">
                  <div class="meeting-button d-flex justify-content-between">
                    <div class="dropdown"> <a href="#" class="btn btn-white btn-sm radius-30 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-video me-2'></i>Meet Now<i class='bx bxs-chevron-down ms-2'></i></a>
                      <div class="dropdown-menu"> <a class="dropdown-item" href="#">Host a meeting</a>
                        <a class="dropdown-item" href="#">Join a meeting</a>
                      </div>
                    </div>
                    <div class="dropdown"> <a href="#" class="btn btn-white btn-sm radius-30 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" data-display="static"><i class='bx bxs-edit me-2'></i>New Chat<i class='bx bxs-chevron-down ms-2'></i></a>
                      <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="#">New Group Chat</a>
                        <a class="dropdown-item" href="#">New Moderated Group</a>
                        <a class="dropdown-item" href="#">New Chat</a>
                        <a class="dropdown-item" href="#">New Private Conversation</a>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown mt-3"> <a href="#" class="text-uppercase text-secondary dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">Recent Chats <i class='bx bxs-chevron-down'></i></a>
                    <div class="dropdown-menu">	<a class="dropdown-item" href="#">Recent Chats</a>
                      <a class="dropdown-item" href="#">Hidden Chats</a>
                      <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Sort by Time</a>
                      <a class="dropdown-item" href="#">Sort by Unread</a>
                      <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Show Favorites</a>
                    </div>
                  </div>
                </div>
                <div class="chat-list">
                  <div class="list-group list-group-flush">
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/02.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Louis Litt</h6>
                          <p class="mb-0 chat-msg">You just got LITT up, Mike.</p>
                        </div>
                        <div class="chat-time">9:51 AM</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item active">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Harvey Specter</h6>
                          <p class="mb-0 chat-msg">Wrong. You take the gun....</p>
                        </div>
                        <div class="chat-time">4:32 PM</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/04.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Rachel Zane</h6>
                          <p class="mb-0 chat-msg">I was thinking that we could...</p>
                        </div>
                        <div class="chat-time">Wed</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/05.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Donna Paulsen</h6>
                          <p class="mb-0 chat-msg">Mike, I know everything!</p>
                        </div>
                        <div class="chat-time">Tue</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/06.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Jessica Pearson</h6>
                          <p class="mb-0 chat-msg">Have you finished the draft...</p>
                        </div>
                        <div class="chat-time">9/3/2020</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/07.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Harold Gunderson</h6>
                          <p class="mb-0 chat-msg">Thanks Mike! :)</p>
                        </div>
                        <div class="chat-time">12/3/2020</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/09.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Katrina Bennett</h6>
                          <p class="mb-0 chat-msg">I've sent you the files for...</p>
                        </div>
                        <div class="chat-time">16/3/2020</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/10.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Charles Forstman</h6>
                          <p class="mb-0 chat-msg">Mike, this isn't over.</p>
                        </div>
                        <div class="chat-time">18/3/2020</div>
                      </div>
                    </a>
                    <a href="javascript:;" class="list-group-item">
                      <div class="d-flex">
                        <div class="chat-user-online">
                          <img src="{{ asset('public/asset/images/avatars/11.png') }}" width="42" height="42" class="rounded-circle" alt="" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h6 class="mb-0 chat-title">Jonathan Sidwell</h6>
                          <p class="mb-0 chat-msg">That's bullshit. This deal..</p>
                        </div>
                        <div class="chat-time">24/3/2020</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="chat-header d-flex align-items-center">
          <div class="chat-toggle-btn"><i class='bx bx-menu-alt-left'></i>
          </div>
          <div>
            <h4 class="mb-1 font-weight-bold">Harvey Inspector</h4>
            <div class="list-inline d-sm-flex mb-0 d-none"> <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary"><small class='bx bxs-circle me-1 chart-online'></small>Active Now</a>
              <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary">|</a>
              <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary"><i class='bx bx-images me-1'></i>Gallery</a>
              <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary">|</a>
              <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary"><i class='bx bx-search me-1'></i>Find</a>
            </div>
          </div>
          <div class="chat-top-header-menu ms-auto"> <a href="javascript:;"><i class='bx bx-video'></i></a>
            <a href="javascript:;"><i class='bx bx-phone'></i></a>
            <a href="javascript:;"><i class='bx bx-user-plus'></i></a>
          </div>
        </div>
        <div class="chat-content">
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex ms-auto">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                <p class="chat-right-msg">I am in USA</p>
              </div>
            </div>
          </div>
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 2:48 PM</p>
                <p class="chat-left-msg">okk, what about admin template?</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 2:49 PM</p>
                <p class="chat-right-msg">i have already purchased the admin template</p>
              </div>
            </div>
          </div>
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 3:12 PM</p>
                <p class="chat-left-msg">ohhk, great, which admin template you have purchased?</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 3:14 PM</p>
                <p class="chat-right-msg">i purchased dashtreme admin template from themeforest. it is very good product for web application</p>
              </div>
            </div>
          </div>
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 3:16 PM</p>
                <p class="chat-left-msg">who is the author of this template?</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 3:22 PM</p>
                <p class="chat-right-msg">codervent is the author of this admin template</p>
              </div>
            </div>
          </div>
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 3:16 PM</p>
                <p class="chat-left-msg">ohh i know about this author. he has good admin products in his portfolio.</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 3:30 PM</p>
                <p class="chat-right-msg">yes, codervent has multiple admin templates. also he is very supportive.</p>
              </div>
            </div>
          </div>
          <div class="chat-content-leftside">
            <div class="d-flex">
              <img src="{{ asset('public/asset/images/avatars/03.png') }}" width="48" height="48" class="rounded-circle" alt="" />
              <div class="flex-grow-1 ms-2">
                <p class="mb-0 chat-time">Harvey, 3:33 PM</p>
                <p class="chat-left-msg">All the best for your target. thanks for giving your time.</p>
              </div>
            </div>
          </div>
          <div class="chat-content-rightside">
            <div class="d-flex">
              <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, 3:35 PM</p>
                <p class="chat-right-msg">thanks Harvey</p>
              </div>
            </div>
          </div>
        </div>
        <div class="chat-footer d-flex align-items-center">
          <div class="flex-grow-1 pe-2">
            <div class="input-group"><span class="input-group-text"><i class='bx bx-smile'></i></span>
              <input type="text" class="form-control" placeholder="Type a message">
            </div>
          </div>
          <div class="chat-footer-menu">
            <a href="javascript:;"><i class='bx bx-file'></i></a>
            <a href="javascript:;"><i class='bx bxs-contact'></i></a>
            <a href="javascript:;"><i class='bx bx-microphone'></i></a>
            <a href="javascript:;"><i class='bx bx-dots-horizontal-rounded'></i></a>
          </div>
        </div>
        <!--start chat overlay-->
        <div class="overlay chat-toggle-btn-mobile"></div>
        <!--end chat overlay-->
      </div>

    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
  <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <!--start cart-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
      <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body p-0">
      <div class="order-list">
        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/01.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">White Men Shoes</h5>
            <p class="mb-0 order-price">$289</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/02.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Red Airpods</h5>
            <p class="mb-0 order-price">$149</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/03.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
            <p class="mb-0 order-price">$139</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/04.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
            <p class="mb-0 order-price">$485</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/05.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Fancy Shirts</h5>
            <p class="mb-0 order-price">$758</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/06.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Home Sofa Set </h5>
            <p class="mb-0 order-price">$546</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/07.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Black iPhone</h5>
            <p class="mb-0 order-price">$1049</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="{{ asset('public/asset/images/orders/08.png') }}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Goldan Watch</h5>
            <p class="mb-0 order-price">$689</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
      <div class="d-grid">
        <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
      </div>
    </div>
  </div>
  <!--end cart-->



  <!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
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
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
              <span class="material-icons-outlined">contactless</span>
              <span>Blue</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

  <!--bootstrap js-->
  <script src="{{ asset('public/asset/js/bootstrap.bundle.min.js') }}"></script>

  <!--plugins-->
  <script src="{{ asset('public/asset/js/jquery.min.js') }}"></script>
  <!--plugins-->
  <script src="{{ asset('public/asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('public/asset/plugins/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('public/asset/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('public/asset/js/main.js') }}"></script>
  <script>
		new PerfectScrollbar('.chat-list');
		new PerfectScrollbar('.chat-content');
	</script>

</body>

</html>
