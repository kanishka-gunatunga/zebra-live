@include('layouts.header')
<style>
body {
    font-family: 'Arial', sans-serif;
}

.left-panel {
    background-color: #F1935D;
    /* Orange background color */
    color: white;
    text-align: center;
    padding: 50px 20px;
    min-height: 650px;
}

.left-panel img {
    max-width: 100%;
    height: auto;
}

.right-panel {
    padding: 50px 20px;
    min-height: 500px;
}

.form-control,
.btn-custom {
    margin-bottom: 20px;
}

.btn-custom {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 0;
    width: 100%;
}

.btn-custom:hover {
    color: #FFFFFF;
}

.form-label-signup {
    font-weight: 600 !important;
}

.signup-form-placeholder::placeholder {
    color: rgb(202, 203, 205);
}

.custom-underline {
    position: relative;
    color: #F1935D; /* Yellow text */
    text-decoration: none; /* Remove default underline */
}

.custom-underline::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0px; /* Adjust thickness */
    width: 100%;
    height: 1.5px; /* Thickness of the underline */
    background-color: #F1935D; /* Yellow underline */
}

@media (max-width: 768px) {

    .left-panel,
    .right-panel {
        padding: 20px; 
    }
}
@media screen and (min-height: 800px) {
  .left-panel {
    height: calc(100vh - 92px);
  }
  .row-container{
       height: calc(100vh - 92px);
  }
}


.left-panel-space{
    padding-left: 108px;
    padding-right: 108px;
     background-color: #F1935D;
     color: white;
    text-align: center;
    flex: 1;
    height: 100%;
}
.right-panel-space{
    padding-left: 24px;
    padding-right: 108px;
}

@media screen and (max-width: 992px) {
    .left-panel-space{
        padding-left: 60px;
        padding-right: 60px;
    }
    .right-panel-space{
        padding-left: 60px;
        padding-right: 60px;
        padding-bottom: 40px;
        padding-top: 40px;
    }
}

@media screen and (max-width: 600px) {
    .left-panel-space{
        padding-left: 20px;
        padding-right: 20px;
    }
    .right-panel-space{
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 40px;
        padding-top: 40px;
    }
}

@media screen and (min-height: 800px) {
    .top-padding-large{
        padding-top: 0px;
    }
    .left-panel-space{
            min-height: calc(100vh - 91px) !important;
    }
}
</style>

<div class="container-fluid px-0">
    <div class="row row-container">
        <div class="col-xl-6 left-panel-space  d-flex flex-column justify-content-center" style="height: auto;">
            <div class="row ">
                <div class="col-12 text-center">
                    <img src="{{ asset('assets/images/signupimg.png') }}" alt="Signup Image" class="img-fluid">
                </div>
                <div class="col-12 text-start pt-5 pb-3">
                    <img src="{{ asset('assets/images/DecodemyBrain new logo-03.png') }}" alt="Logo Image" class="img-fluid"
                        style="width: 250px; height: auto;">
                </div>
                <div class="col-12 text-start">
                    <p >A comprehensive and holistic approach to
                        self-discovery and personal development through
                        cutting-edge Neuroscience.</p>
                </div>
            </div>
        </div>

        <div class="col-xl-6 right-panel-space d-flex flex-column justify-content-center" style="height: auto;">
            <h2 class="pt-5 pb-3 pb-lg-3 top-padding-large" style="color: #F1935D; font-weight: 600 !important">Your future starts here - Sign up</h2>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
           <form style="padding-left: 10px;" action="" method="post" enctype="multipart/form-data" id="signupForm">
            @csrf
                <div class="row px-0 mx-0">
                    <div class="col-lg-6 px-0 ps-lg-0 pe-lg-1">
                        <label for="first-name" class="pb-2 form-label-signup">First name</label>
                        <input type="text" class="form-control signup-form-placeholder" id="first-name"
                            placeholder="First name" required
                            style="border-radius:10px; border-color:rgb(233, 232, 232);"  name="first_name">
                            @if($errors->has("first_name")) <p style="color:red;font-size:14px;">{{ $errors->first('first_name') }}</p>@endif
                    </div>
                    <div class="col-lg-6 px-0 ps-lg-0 pe-lg-1">
                        <label for="last-name" class="pb-2 form-label-signup">Last name</label>
                        <input type="text" class="form-control signup-form-placeholder" id="last-name"
                            placeholder="Last name" required
                            style="border-radius:10px; border-color:rgb(233, 232, 232);" name="last_name">
                            @if($errors->has("last_name")) <p style="color:red;font-size:14px;">{{ $errors->first('last_name') }}</p>@endif
                    </div>
                </div>
                <div class="row px-0 mx-0">
                    <div class="col-lg-6 px-0 ps-lg-0 pe-lg-1">
                        <label for="email" class="pb-2 form-label-signup" style="font-weight: 600">User Name</label>
                        <input type="text" class="form-control signup-form-placeholder" id="email"
                            placeholder="User name" required
                            style="border-radius:10px; border-color:rgb(233, 232, 232);" name="user_name">
                            @if($errors->has("user_name")) <p style="color:red;font-size:14px;">{{ $errors->first('user_name') }}</p>@endif
                    </div>
                    <div class="col-lg-6 px-0 ps-lg-0 pe-lg-1">
                        <label for="email" class="pb-2 form-label-signup" style="font-weight: 600">Email address</label>
                        <input type="email" class="form-control signup-form-placeholder" id="email"
                            placeholder="Email address" required
                            style="border-radius:10px; border-color:rgb(233, 232, 232);"  name="email">
                            @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}</p>@endif
                    </div>
                    <div class="col-lg-6 px-0 ps-lg-0 pe-lg-1">
                        <label for="age" class="pb-2 form-label-signup" style="font-weight: 600">Date of Birth</label>
                        <input type="date" class="form-control signup-form-placeholder" id="age" 
                            required style="border-radius:10px; border-color:rgb(233, 232, 232);" name="dob">
                            @if($errors->has("dob")) <p style="color:red;font-size:14px;">{{ $errors->first('dob') }}</p>@endif
                    </div>
                </div>
                <label for="password" class="pb-2 form-label-signup" style="font-weight: 600">Password</label>
                <input type="password" class="form-control signup-form-placeholder" id="password" placeholder="Password"
                    required style="border-radius:10px; border-color:rgb(233, 232, 232);" name="password">
                    @if($errors->has("password")) <p style="color:red;font-size:14px;">{{ $errors->first('password') }}</p>@endif
                <label for="confirm-password" class="pb-2 form-label-signup" style="font-weight: 600">Confirm Password</label>
                <input type="password" class="form-control signup-form-placeholder" id="confirm-password"
                    placeholder="Confirm Password" required
                    style="border-radius:10px; border-color:rgb(233, 232, 232);" name="password_confirmation">
                    @if($errors->has("password_confirmation")) <p style="color:red;font-size:14px;">{{ $errors->first('password_confirmation') }}</p>@endif
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label style="font-weight: 600" class="form-check-label" for="terms">
                        I agree to the
                        <a href="{{ url('#') }}" style="color: #F1935D;" class="custom-underline">Terms &
                            Conditions</a>
                    </label>
                </div>
                <h3 class="small-link text-purple text-start mt-3 mb-2" style="font-weight: 600">Already have a account ? <a href="{{url('sign-in')}}" style="color:#F1935D;">Sign In</a></h3>
                <button type="submit" class="btn btn-custom" id="submitBtn" style="border-radius: 20px; font-weight: 600">
        Create account
    </button>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signupForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function () {
        // Make all inputs read-only instead of disabling them
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(el => {
            el.readOnly = true; // works for inputs and textareas
            if (el.tagName === 'SELECT') el.style.pointerEvents = 'none'; // for selects
        });

        // Update button
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Creating Account...';
        submitBtn.style.opacity = '0.7';
    });
});
</script>

