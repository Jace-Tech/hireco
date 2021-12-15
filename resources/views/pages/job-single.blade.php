@extends('layouts.job')

@section('content')
    

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="/images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="#company"><img src="/company/image/{{  $job->company($job->id)->logo }}" alt=""></a></div>
						<div class="header-details">
							<h3>{{ $job->title }}</h3>
							<h5>About the Employer</h5>
							<ul>
								<li><a href="#company"><i class="icon-material-outline-business"></i> {{ $job->company($job->id)->name }}</a></li>
								{{-- <li><div class="star-rating" data-rating="4.9"></div></li> --}}
								<li><img class="flag" src="/images/flags/{{ strtolower($job->company($job->id)->country) }}.svg" alt=""> {{ $countries->firstWhere('code',  $job->company($job->id)->country)['name'] }} </li>
								{{-- <li><div class="verified-badge-with-title">Verified</div></li> --}}
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Annual Salary</div>
							<div class="salary-amount">${{ $job->readableFigure($job->min) }} - ${{ $job->readableFigure($job->max) }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Job Description</h3>

                @foreach (explode("\r\n", $job->description) as $description)
                    <p>{{ $description }}</p>
                @endforeach
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-30">Location</h3>
				<div id="single-job-map-container">
					<div id="singleListingMap" data-latitude="{{$job->latitude}}" data-longitude="{{$job->longitude}}" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Similar Jobs</h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">

					<x-similar-job />

                </div>
                <!-- Listings Container / End -->

            </div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
                @if(!auth()->user()->hasApplied($job->id))
                    <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></a>
				@else
                    <a href="#" class="apply-now-button" style="opacity: .7; cursor: default;">Applied<i class="icon-material-outline-arrow-right-alt"></i></a>
                @endif
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Job Summary</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Location</span>
									<h5>{{ $job->location }}</h5>
								</li>
								<li>
									<i class="icon-material-outline-business-center"></i>
									<span>Job Type</span>
									<h5 style="text-transform: capitalize;">{{  $job->type }}</h5>
								</li>
								<li>
									<i class="icon-material-outline-local-atm"></i>
									<span>Salary</span>
									<h5>${{  $job->readableFigure( $job->min) }} - ${{  $job->readableFigure( $job->max) }}</h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Date Posted</span>
									<h5>{{  $job->created_at->diffForHumans() }}</h5>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark or Share</h3>

					<!-- Bookmark Button -->
					<button class="bookmark-button margin-bottom-25">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<x-footer />
</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Apply Now</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Attach File With CV</h3>
				</div>
					
				<!-- Form -->
				<form method="post" action="{{route('apply', $job) }}" enctype="multipart/form-data" id="apply-now-form">
                    @csrf
					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" value="{{ auth()->user()->person->firstname }} {{ auth()->user()->person->lastname }}" placeholder="First and Last Name" required/>
                    </div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" value="{{ auth()->user()->email }}" placeholder="Email Address" required/>
					</div>

                    @if(!auth()->user()->attachment) 
                        <div class="uploadButton">
                            <input class="uploadButton-input" type="file" name="file" accept="application/pdf, .docx" id="upload-cv" />
                            <label class="uploadButton-button ripple-effect" for="upload-cv">Select File</label>
                            <span class="uploadButton-file-name">Upload your CV / resume relevant file. <br> Max. file size: 50 MB.</span>
                        </div>
                    @endif

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="apply-now-form">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
@endsection