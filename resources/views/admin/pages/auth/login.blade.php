<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
  @include('admin.layouts.head')

  </head>

  <style>
 body {
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
  background-image: url('{{ asset('asset/images/bg-themes/body-background-1.webp') }}');
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-color: transparent;
  color: var(--bs-body-color);
  background-color: var(--bs-body-bg-2);

}


body {

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


background-image: url('{{ asset('asset/images/bg-themes/body-background-1.webp') }}');
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


.form-switch{cursor: pointer;}
.form-switch label{cursor: pointer;}
.form-switch input{cursor: pointer;}
</style>
  <body>
    <style>
        form{width: 100% !important; height: 100% !important; padding: 0 !important;margin: 0 !important;}
    </style>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
      <div class="container-fluid my-5 my-lg-0">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
             
             
                <div class="card-body p-5">
                    @if (session('alert') )
                    <div class="alert alert-border-{{ session('alert')['type'] }} alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-{{ session('alert')['type'] }}">
                                <span class="material-icons-outlined fs-2">report_gmailerrorred</span>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-{{ session('alert')['type'] }}">{{ session('alert')['title'] }}</h6>
                                <div class="">{{ session('alert')['message'] }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if ($errors->any())
                    <div class="alert alert-border-danger alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-danger">
                                <span class="material-icons-outlined fs-2">report_gmailerrorred</span>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-danger">Invalid Credentials</h6>
                                <div>Please verify your email and password and try again.</div>
                            </div>
                            
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                  <img src="{{ asset('asset/images/logo1.png') }}" class="mb-4" width="145" alt="">
                  <h4 class="fw-bold">Get Started Now</h4>
                  <p class="mb-0">Enter your credentials to login your account</p>

                  <div class="form-body my-5">
                    <form action="{{ route('login.post') }}" method="POST" class="row g-3">
                        @csrf
                  
                    
                        <div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="example@domain.com" required value="a@a" >
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password" class="form-control border-end-0" id="inputPassword" placeholder="Enter Password" required value="aaaaaaaa">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
													<label class="form-check-label" for="rememberMe">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="auth-basic-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-grd-primary">Login</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-register.html">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>

                  <div class="separator section-padding">
                    <div class="line"></div>
                    <p class="mb-0 fw-bold">OR SIGN IN WITH</p>
                    <div class="line"></div>
                  </div>

                  <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                      <i class="bi bi-google fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                      <i class="bi bi-facebook fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                      <i class="bi bi-linkedin fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                      <i class="bi bi-github fs-5 text-white"></i>
                    </a>
                  </div>

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
    </div>
    <!--authentication-->
    <script src="{{ asset('js/app.js') }}"></script>

    @include('admin.layouts.scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
