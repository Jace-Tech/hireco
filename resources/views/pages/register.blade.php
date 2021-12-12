@extends('layouts.home')

@section('content')
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Register</h2>

                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>
    </div>


    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">

                <div class="login-register-page">
                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3 style="font-size: 26px;">Let's create your account!</h3>
                        <span>Already have an account? <a href="{{ route('login') }}">Log In!</a></span>
                    </div>

                    <!-- Form -->
                    <form method="post" action="{{ route('register') }}" id="register-account-form">
                        <!-- Account Type -->
                        <div class="account-type">
                            <div>
                                <input type="radio" name="account_type" value="applicant" id="freelancer-radio" class="account-type-radio" checked/>
                                <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Applicant </label>
                            </div>

                            <div>
                                <input type="radio" name="account_type" value="company" id="employer-radio" class="account-type-radio"/>
                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Company </label>
                            </div>
                        </div>

                        @csrf

                        <div class="mb-2">
                            <div class="input-with-icon-left mb-0">
                                <i class="icon-material-baseline-mail-outline"></i>
                                <input type="text" class="input-text with-border" name="email" value="{{ old('email') }}" id="emailaddress-register" placeholder="Email Address" required/>
                            </div>

                            @error('email')
                                <small class="text-danger text-light text-small mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <div class="input-with-icon-left mb-0">
                                <i class="icon-material-outline-lock"></i>
                                <input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" required/>
                            </div>

                            @error('password')
                                <small class="text-danger text-light text-small mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <div class="input-with-icon-left mb-0">
                                <i class="icon-material-outline-lock"></i>
                                <input type="password" class="input-text with-border" name="password_confirmation" id="password-repeat-register" placeholder="Repeat Password" required/>
                            </div>
                        </div>
                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>

                    <form id="">
                        <div class="social-login-buttons">
                            <input type="hidden" value="" id="accountType" name="type" />
                            @csrf
                            <button class="facebook-login ripple-effect" type="button">
                                <i class="icon-brand-facebook-f"></i> Register via Facebook
                            </button>

                            <button class="linkedin-login ripple-effect"  type="submit" formaction="{{ route('linkedin') }}" formmethod="POST">
                                <i class="icon-brand-linkedin"></i> Register via Linkedin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Spacer -->
    <div class="margin-top-70"></div>
    <!-- Spacer / End-->

    <script>
        const radioBtns = document.querySelectorAll('input[name=account_type]')

        radioBtns.forEach(btn => {
            if(btn.checked){
                document.querySelector("#accountType").value = btn.value
            }

            btn.addEventListener("change", () => {
                if(btn.checked){
                    document.querySelector("#accountType").value = btn.value
                }
            })
        })
    </script>

@endsection
