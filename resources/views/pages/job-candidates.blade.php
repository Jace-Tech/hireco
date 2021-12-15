@php
    $navActive = "";
    $active = "job";
@endphp


@extends('layouts.dashboard')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >
            
            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Manage Applicants</h3>
                <span class="margin-top-7">Job Applications for <a href="#">{{ $job->title }}</a></span>

            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-supervisor-account"></i> {{ $job->applicant($job->id)->count() }} {{Str::of('candidate')->plural( $job->applicant($job->id)->count())}} </h3>
                        </div>

                        <div class="content">
                            <ul class="dashboard-box-list">
                                @foreach ($job->applicant($job->id) as $applicant)
                                    <x-candidate :applicant="$applicant" />
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Row / End -->

            <!-- Footer -->
            <div class="dashboard-footer-spacer"></div>
            <div class="small-footer margin-top-15">
                <div class="small-footer-copyrights">
                    © {{date('Y')}} <strong>onyxsLogistics</strong>. All Rights Reserved.
                </div>
                <ul class="footer-social-links">
                    <li>
                        <a href="#" title="Facebook" data-tippy-placement="top">
                            <i class="icon-brand-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter" data-tippy-placement="top">
                            <i class="icon-brand-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Google Plus" data-tippy-placement="top">
                            <i class="icon-brand-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="LinkedIn" data-tippy-placement="top">
                            <i class="icon-brand-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Footer / End -->

        </div>
    </div>

    
    @foreach ($job->applicant($job->id) as $applicant)
        <!-- Send Direct Message Popup
        ================================================== -->
        <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

            <!--Tabs -->
            <div class="sign-in-form">

                <ul class="popup-tabs-nav">
                    <li><a href="#tab">Send Message</a></li>
                </ul>

                <div class="popup-tabs-container">

                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab">
                        
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3>Direct Message To Sindy</h3>
                        </div>
                            
                        <!-- Form -->
                        <form method="post" id="send-pm">
                            <textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
                        </form>
                        
                        <!-- Button -->
                        <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

                    </div>

                </div>
            </div>
        </div>
        <!-- Send Direct Message Popup / End -->
    @endforeach

@endsection