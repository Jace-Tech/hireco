@extends('layouts.home')


@section('content')
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Log In</h2>

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
                        <h3>We're glad to see you again!</h3>
                        <span>Don't have an account? <a href=" {{ route('register') }}">Sign Up!</a></span>
                    </div>

                    <!-- Form -->
                    <form method="post" id="login-form" action="{{ route('login') }}">
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="email" id="emailaddress" placeholder="Email Address" required/>
                        </div>

                        @csrf

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

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
                                <i class="icon-brand-linkedin"></i> Login via Linkedin
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

@endsection
