@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Edit')

@section('content')

<style>
    .imgbody{position: relative;}
    .prev-img{position: absolute;bottom: 1rem;left: 45%; z-index: 1000;}


#oldImage{	width: 100px;
	height: 100px;
	position: relative;
	overflow: hidden;
	margin-bottom: 1em;
	float: left;
	border-radius: 12px;
	box-shadow: 0 0 4px 0 #888}

    .cover-container {
    position: relative;
    width: 100%;
    height: 300px; /* Set height as per your preference */
    overflow: hidden;
}

.cover-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the container without distortion */
    object-position: top; /* Centers the image within the container */
}
.modal-body img {
    width: 230vh !important; /* Ensure the image doesn't overflow the viewport */
    object-fit: contain;
}

</style>
@if(isset($user))

<div class="card rounded-4">
    <div class="card-body p-4">
        <div class="position-relative mb-5">
            <!-- Cover Image -->
            <div class="cover-container rounded-4 shadow">
                <img
                    src="{{ isset($user->cover_image) ? asset('storage/' . $user->cover_image) : asset('storage/' . $user->dp_path) }}"
                    class="img-fluid rounded-4 shadow cover-image"
                    alt="Profile Cover"
                />
            </div>
     <!-- Profile Avatar -->
<div class="profile-avatar position-absolute top-100 start-50 translate-middle">
    <img
        src="{{ asset('storage/' . $user->dp_path) }}"
        class="img-fluid rounded-circle p-1 bg-grd-danger shadow"
        width="190"
        height="190"
        alt="Profile Avatar"
        data-bs-toggle="modal"
        data-bs-target="#imageModal"
    />
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body text-center">
                <img
                    src="{{ asset('storage/' . $user->dp_path) }}"
                    class="img-fluid rounded shadow"
                    alt="Profile Avatar"

                />
            </div>
        </div>
    </div>
</div>

        </div>


        <!-- Profile Info -->
        <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
            <div class="">
                <h3>{{ isset($user->first_name) ? $user->first_name . ' ' . $user->last_name : 'Jhon Deo' }}</h3>
                <p class="mb-0">
                    {{ isset($user->designation) ? $user->designation : 'Engineer at BB Agency Industry' }}<br />
                    {{ isset($user->location) ? $user->location : 'New York, United States' }}
                </p>
            </div>
            {{-- <div class="">
                <a
                    href="javascript:;"
                    class="btn btn-grd-primary rounded-5 px-4"
                >
                    <i class="bi bi-chat me-2"></i>Send Message
                </a>
            </div> --}}
        </div>

        <!-- Keywords -->
        {{-- <div class="kewords d-flex align-items-center gap-3 mt-4 overflow-x-auto">
            @if(isset($user->skills) && is_array($user->skills))
                @foreach($user->skills as $skill)
                    <button type="button" class="btn btn-sm btn-light rounded-5 px-4">
                        {{ $skill }}
                    </button>
                @endforeach
            @else
                <button type="button" class="btn btn-sm btn-light rounded-5 px-4">UX Research</button>
                <button type="button" class="btn btn-sm btn-light rounded-5 px-4">CX Strategy</button>
                <button type="button" class="btn btn-sm btn-light rounded-5 px-4">Management</button>
            @endif
        </div> --}}
    </div>
</div>

  @endif
<div class="row">
    <div @if(isset($user))
    class="col-12 col-xl-8" @else class="col-12 col-xl-12"         @endif
    >
        <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
        <div class="card-body p-4">
          <div class="d-flex align-items-start justify-content-between mb-3">
            <div>
              <h5 class="mb-0 fw-bold">Create User</h5>
            </div>
            <div class="dropdown">
              <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                <span class="material-icons-outlined fs-5">more_vert</span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
          </div>

          <!-- Form Start -->
          @php
          // Check if we're editing an existing user or creating a new one
          $isEdit = isset($user);
      @endphp

      <form
          action="{{ $isEdit ? route('admin.users.update', $user->id) : route('admin.users.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="row g-4"
          id="form"
      >
          @csrf
          @if($isEdit)
              @method('PUT')
          @endif

          <!-- Profile Image Upload -->
          <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body imgbody">
                        <!-- Existing Image Preview -->
                        @if($isEdit && $user->dp_path)
                        <div class="mb-3 prev-img" id="oldImageContainer">
                            <img
                                src="{{ asset('storage/' . $user->dp_path) }}"
                                alt="DP"
                                style="max-width: 150px; border-radius: 8px;"
                                id="oldImage"
                            >
                        </div>
                        @endif

                        <!-- File Input -->
                        <input
                            id="image-uploadify"
                            type="file"
                            name="files"
                            accept=".jpg, .png, image/jpeg, image/png"
                        >
                    </div>
                </div>
            </div>
        </div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById("image-uploadify");
    const oldImageContainer = document.getElementById("oldImageContainer");

    if (fileInput && oldImageContainer) {
        fileInput.addEventListener("change", () => {
            if (fileInput.files && fileInput.files.length > 0) {
                oldImageContainer.style.display = "none";
            }
        });
    }
});

          </script>

          <div class="col-md-12">
              <label for="inputFirstName" class="form-label">Username</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">person_outline</i>
                  </span>
                  <input
                      type="text"
                      class="form-control"
                      id="inputFirstName"
                      name="username"
                      placeholder="Username"
                      value="{{ old('username', $isEdit ? $user->username : '') }}"
                  >
              </div>
          </div>
          <div class="col-md-6">
              <label for="inputFirstName" class="form-label">First Name</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">person_outline</i>
                  </span>
                  <input
                      type="text"
                      class="form-control"
                      id="inputFirstName"
                      name="first_name"
                      placeholder="First Name"
                      value="{{ old('first_name', $isEdit ? $user->first_name : '') }}"
                  >
              </div>
          </div>

          <!-- Last Name -->
          <div class="col-md-6">
              <label for="inputLastName" class="form-label">Last Name</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">person_outline</i>
                  </span>
                  <input
                      type="text"
                      class="form-control"
                      id="inputLastName"
                      name="last_name"
                      placeholder="Last Name"
                      value="{{ old('last_name', $isEdit ? $user->last_name : '') }}"
                  >
              </div>
          </div>

          <!-- Phone -->
          <div class="col-md-6">
              <label for="inputPhone" class="form-label">Phone</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">phone</i>
                  </span>
                  <input
                      type="text"
                      class="form-control"
                      id="inputPhone"
                      name="phone"
                      placeholder="Phone Number"
                      value="{{ old('phone', $isEdit ? $user->phone : '') }}"
                  >
              </div>
          </div>

          <!-- Email -->
          <div class="col-md-6">
              <label for="inputEmail" class="form-label">Email</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">email</i>
                  </span>
                  <input
                      type="email"
                      class="form-control"
                      id="inputEmail"
                      name="email"
                      placeholder="Email Address"
                      value="{{ old('email', $isEdit ? $user->email : '') }}"
                  >
              </div>
          </div>

          <!-- Password -->
          <div class="col-md-6">
              <label for="inputPassword" class="form-label">Password</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">lock</i>
                  </span>
                  <input
                      type="password"
                      class="form-control"
                      id="inputPassword"
                      name="password"
                      placeholder="Password"
                      {{-- No old() here for security. Typically we don't fill passwords on edit. --}}
                  >
              </div>
          </div>

          <!-- Role -->
          <div class="col-md-6">
              <label for="inputRole" class="form-label">Role</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">admin_panel_settings</i>
                  </span>
                  <select id="inputRole" class="form-select" name="role">
                      <option disabled {{ !$isEdit ? 'selected' : '' }}>Choose...</option>
                      <option value="Admin" {{ old('role', $isEdit ? $user->role : '') === 'Admin' ? 'selected' : '' }}>
                          Admin
                      </option>
                      <option value="Team" {{ old('role', $isEdit ? $user->role : '') === 'Team' ? 'selected' : '' }}>
                          Team
                      </option>
                      <option value="User" {{ old('role', $isEdit ? $user->role : '') === 'User' ? 'selected' : '' }}>
                          User
                      </option>
                  </select>
              </div>
          </div>







<!-- Age -->
<div class="col-md-6">
    <label for="inputAge" class="form-label">Age</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">event</i>
        </span>
        <input
            type="number"
            class="form-control"
            id="inputAge"
            name="age"
            placeholder="Age"
            value="{{ old('age', $isEdit ? $user->age : '') }}"
        >
    </div>
</div>

<!-- City -->
<div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">location_city</i>
        </span>
        <input
            type="text"
            class="form-control"
            id="inputCity"
            name="city"
            placeholder="City"
            value="{{ old('city', $isEdit ? $user->city : '') }}"
        >
    </div>
</div>

<!-- State -->
<div class="col-md-6">
    <label for="inputState" class="form-label">State</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">map</i>
        </span>
        <input
            type="text"
            class="form-control"
            id="inputState"
            name="state"
            placeholder="State"
            value="{{ old('state', $isEdit ? $user->state : '') }}"
        >
    </div>
</div>

<!-- Postal Code -->
<div class="col-md-6">
    <label for="inputPostalCode" class="form-label">Postal Code</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">pin_drop</i>
        </span>
        <input
            type="text"
            class="form-control"
            id="inputPostalCode"
            name="postal_code"
            placeholder="Postal Code"
            value="{{ old('postal_code', $isEdit ? $user->postal_code : '') }}"
        >
    </div>
</div>

<!-- Gender -->
<div class="col-md-6">
    <label for="inputGender" class="form-label">Gender</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">wc</i>
        </span>
        <select id="inputGender" name="gender" class="form-select">
            <option disabled {{ !$isEdit || old('gender', $user->gender ?? '') === null ? 'selected' : '' }}>Choose Gender</option>
            <option value="Male" {{ old('gender', $isEdit ? $user->gender : '') === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender', $isEdit ? $user->gender : '') === 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ old('gender', $isEdit ? $user->gender : '') === 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
</div>

<!-- Marital Status -->
<div class="col-md-6">
    <label for="inputMaritalStatus" class="form-label">Marital Status</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="material-icons-outlined fs-5">family_restroom</i>
        </span>
        <select id="inputMaritalStatus" name="marital_status" class="form-select">
            <option disabled {{ !$isEdit || old('marital_status', $user->marital_status ?? '') === null ? 'selected' : '' }}>Choose Marital Status</option>
            <option value="Single" {{ old('marital_status', $isEdit ? $user->marital_status : '') === 'Single' ? 'selected' : '' }}>Single</option>
            <option value="Married" {{ old('marital_status', $isEdit ? $user->marital_status : '') === 'Married' ? 'selected' : '' }}>Married</option>
            <option value="Divorced" {{ old('marital_status', $isEdit ? $user->marital_status : '') === 'Divorced' ? 'selected' : '' }}>Divorced</option>
            <option value="Widowed" {{ old('marital_status', $isEdit ? $user->marital_status : '') === 'Widowed' ? 'selected' : '' }}>Widowed</option>
        </select>
    </div>
</div>














          <div class="col-md-6">
              <label for="inputFiverr" class="form-label">Fiverr Profile Link</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="url"
                      class="form-control"
                      id="inputFiverr"
                      name="fiverr_link"
                      placeholder="https://fiverr.com/your-profile"
                      value="{{ old('fiverr_link', $isEdit ? $user->fiverr_link : '') }}"
                  >
              </div>
          </div>

          <!-- Upwork -->
          <div class="col-md-6">
              <label for="inputUpwork" class="form-label">Upwork Profile Link</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="url"
                      class="form-control"
                      id="inputUpwork"
                      name="upwork_link"
                      placeholder="https://upwork.com/your-profile"
                      value="{{ old('upwork_link', $isEdit ? $user->upwork_link : '') }}"
                  >
              </div>
          </div>

          <!-- LinkedIn -->
          <div class="col-md-6">
              <label for="inputLinkedin" class="form-label">LinkedIn Profile</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="url"
                      class="form-control"
                      id="inputLinkedin"
                      name="linkedin_link"
                      placeholder="https://linkedin.com/in/your-profile"
                      value="{{ old('linkedin_link', $isEdit ? $user->linkedin_link : '') }}"
                  >
              </div>
          </div>

          <!-- Facebook -->
          <div class="col-md-6">
              <label for="inputFacebook" class="form-label">Facebook Profile</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="url"
                      class="form-control"
                      id="inputFacebook"
                      name="facebook_link"
                      placeholder="https://facebook.com/your-profile"
                      value="{{ old('facebook_link', $isEdit ? $user->facebook_link : '') }}"
                  >
              </div>
          </div>

          <!-- Instagram -->
          <div class="col-md-6">
              <label for="inputInstagram" class="form-label">Instagram Profile</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="url"
                      class="form-control"
                      id="inputInstagram"
                      name="instagram_link"
                      placeholder="https://instagram.com/your-profile"
                      value="{{ old('instagram_link', $isEdit ? $user->instagram_link : '') }}"
                  >
              </div>
          </div>

          <!-- Other Platform -->
          <div class="col-md-6">
              <label for="inputOtherPlatform" class="form-label">Other Platform (Skype/WhatsApp/etc.)</label>
              <div class="input-group">
                  <span class="input-group-text">
                      <i class="material-icons-outlined fs-5">link</i>
                  </span>
                  <input
                      type="text"
                      class="form-control"
                      id="inputOtherPlatform"
                      name="other_platform"
                      placeholder="Username or Link"
                      value="{{ old('other_platform', $isEdit ? $user->other_platform : '') }}"
                  >
              </div>
          </div>

          <!-- Action Buttons -->
          <div class="col-md-12">
              <div class="d-md-flex d-grid align-items-center gap-3">
                  <button type="submit" class="btn btn-grd-primary px-4" id="submit">
                      {{ $isEdit ? 'Update Profile' : 'Create Profile' }}
                  </button>
                  <button type="reset" class="btn btn-light px-4">Reset</button>
              </div>
          </div>
      </form>


          <!-- Form End -->

        </div>
      </div>
    </div>


    @if(isset($user))

  <div class="col-12 col-xl-4">
    <!-- About Section -->
    <div class="card rounded-4">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
                <div class="">
                    <h5 class="mb-0 fw-bold">About</h5>
                </div>
                <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="full-info">
                <div class="info-list d-flex flex-column gap-3">
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">account_circle</span>
                        <p class="mb-0">Full Name: {{ $user->first_name ?? 'N/A' }} {{ $user->last_name ?? '' }}</p>
                    </div>
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">done</span>
                        <p class="mb-0">Status: {{ $user->is_active ? 'Active' : 'Deactivated' }}</p>
                    </div>
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">code</span>
                        <p class="mb-0">Role: {{ $user->role ?? 'N/A' }}</p>
                    </div>
                    
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">flag</span>
                        <p class="mb-0">Country: {{ $user->country ?? 'N/A' }}</p>
                    </div>
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">language</span>
                        <p class="mb-0">Language: {{ $user->language ?? 'English' }}</p>
                    </div>
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">send</span>
                        <p class="mb-0">Email: {{ $user->email ?? 'N/A' }}</p>
                    </div>
                    <div class="info-list-item d-flex align-items-center gap-3">
                        <span class="material-icons-outlined">call</span>
                        <p class="mb-0">Phone: {{ $user->phone ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accounts Section -->
    <div class="card rounded-4">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
                <div class="">
                    <h5 class="mb-0 fw-bold">Accounts</h5>
                </div>
                <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <div class="account-list d-flex flex-column gap-4">
                @if(!empty($user->fiverr_link))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/fiverr.png') }}" width="35" alt="Fiverr" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Fiverr</h6>
                            <a href="{{ $user->fiverr_link }}" target="_blank" class="text-decoration-none text-primary">{{ $user->fiverr_link }}</a>
                        </div>
                    </div>
                @endif

                @if(!empty($user->upwork_link))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/upwork.png') }}" width="35" alt="Upwork" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Upwork</h6>
                            <a href="{{ $user->upwork_link }}" target="_blank" class="text-decoration-none text-primary">{{ $user->upwork_link }}</a>
                        </div>
                    </div>
                @endif

                @if(!empty($user->linkedin_link))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/linkedin.png') }}" width="35" alt="LinkedIn" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">LinkedIn</h6>
                            <a href="{{ $user->linkedin_link }}" target="_blank" class="text-decoration-none text-primary">{{ $user->linkedin_link }}</a>
                        </div>
                    </div>
                @endif

                @if(!empty($user->facebook_link))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/facebook.png') }}" width="35" alt="Facebook" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Facebook</h6>
                            <a href="{{ $user->facebook_link }}" target="_blank" class="text-decoration-none text-primary">{{ $user->facebook_link }}</a>
                        </div>
                    </div>
                @endif

                @if(!empty($user->instagram_link))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/insta.png') }}" width="35" alt="Instagram" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Instagram</h6>
                            <a href="{{ $user->instagram_link }}" target="_blank" class="text-decoration-none text-primary">{{ $user->instagram_link }}</a>
                        </div>
                    </div>
                @endif

                @if(!empty($user->other_platform))
                    <div class="account-list-item d-flex align-items-center gap-3">
                        <img src="{{ asset('asset/images/social/other.png') }}" width="35" alt="Other Platform" />
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Other</h6>
                            <a href="{{ $user->other_platform }}" target="_blank" class="text-decoration-none text-primary">{{ $user->other_platform }}</a>
                        </div>
                    </div>
                @endif

                @if(empty($user->fiverr_link) && empty($user->upwork_link) && empty($user->linkedin_link) && empty($user->facebook_link) && empty($user->instagram_link) && empty($user->other_platform))
                    <p class="text-muted">No social media accounts linked.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endif

  </div>



<script>
    function submit() {
    document.getElementById("form").submit();
    }
</script>


  <!--bootstrap js-->


@endsection
