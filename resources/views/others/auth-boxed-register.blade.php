<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
	<link rel="icon" href="{{ asset('asset/images/favicon-32x32.png') }}" type="image/png">
  <!-- loader-->
	<link href="{{ asset('asset/css/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('asset/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ asset('asset/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/metismenu/metisMenu.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/metismenu/mm-vertical.css') }}">
  <!--bootstrap css-->
  <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{ asset('asset/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

  </head>

<body>


  <!--authentication-->

  <div class="mx-3 mx-lg-0">

  <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-4">
    <div class="row g-4">
      <div class="col-lg-6 d-flex">
        <div class="card-body">
          <img src="{{ asset('asset/images/logo1.png') }}" class="mb-4" width="145" alt="">
          <h4 class="fw-bold">Get Started Now</h4>
          <p class="mb-0">Enter your credentials to login your account</p>
          <div class="row gy-2 gx-0 my-4">
            <div class="col-12 col-lg-12">
              <button class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                <span class=""><img src="{{ asset('asset/images/apps/05.png') }}" width="20" class="me-2" alt="">Sign up with Google</span>
              </button>
            </div>
            <div class="col-12 col-lg-12">
              <button class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                <span class=""><img src="{{ asset('asset/images/apps/17.png') }}" width="20" class="me-2" alt="">Sign up with Facebook</span>
              </button>
            </div>
            <div class="col-12 col-lg-12">
              <button class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                <span class=""><img src="{{ asset('asset/images/apps/18.png') }}" width="20" class="me-2" alt="">Sign up with LinkedIn</span>
              </button>
            </div>
          </div>
          <div class="separator">
            <div class="line"></div>
            <p class="mb-0 fw-bold">OR SIGN UP WITH</p>
            <div class="line"></div>
          </div>
          <div class="form-body mt-4">
            <form class="row g-3">
              <div class="col-12">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="email" class="form-control" id="inputUsername" placeholder="Jhon">
              </div>
              <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
              </div>
              <div class="col-12">
                <label for="inputChoosePassword" class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                  <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                  <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                </div>
              </div>
              <div class="col-12">
                <label for="inputSelectCountry" class="form-label">Country</label>
                <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                  <option selected="">India</option>
                  <option value="1">United Kingdom</option>
                  <option value="2">America</option>
                  <option value="3">Dubai</option>
                </select>
              </div>
              <div class="col-12">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                  <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button type="submit" class="btn btn-grd-info">Register</button>
                </div>
              </div>
              <div class="col-12">
                <div class="text-start">
                  <p class="mb-0">Already have an account? <a href="auth-boxed-login.html">Sign in here</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex d-none">
        <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center bg-grd-info">
          <img src="{{ asset('asset/images/auth/register1.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div><!--end row-->
  </div>

</div>

<!--authentication-->




  <!--plugins-->
  <script src="{{ asset('asset/js/jquery.min.js') }}"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>
