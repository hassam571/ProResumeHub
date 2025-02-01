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
  <!--bootstrap css-->
  <link href="{{ asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{ asset('public/asset/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

  </head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
            <div class="card-body">
              <img src="{{ asset('public/asset/images/auth/reset-password1.png') }}" class="img-fluid auth-img-cover-login" width="550" alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
              <img src="{{ asset('public/asset/images/logo1.png') }}" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Forgot Password?</h4>
              <p class="mb-0">Enter your registered email ID to reset the password</p>

              <div class="form-body mt-4">
                <form class="row g-4">
                  <div class="col-12">
                    <label class="form-label">Email id</label>
                    <input type="text" class="form-control" placeholder="example@user.com">
                  </div>
                  <div class="col-12">
                    <div class="d-grid gap-2">
                      <button type="button" class="btn btn-grd-info">Send</button>
                       <a href="auth-cover-login.html" class="btn btn-light">Back to Login</a>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="{{ asset('public/asset/js/jquery.min.js') }}"></script>

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
