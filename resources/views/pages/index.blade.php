@extends('layouts.home')

@section("content")
    <!-- Intro Banner
    ================================================== -->
    <!-- add class "disable-gradient" to enable consistent background overlay -->
    <div class="intro-banner" data-background-image="/onyx/bg2.png">
        <div class="container">

            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline">
                        <h3>
                            <strong>Hire experts or be hired for any job, any time.</strong>
                            <br>
                            <span>Thousands of small businesses use <strong class="color">OnyxsLogistics</strong> to turn their ideas into reality.</span>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">

                        <!-- Search Field -->
                        <div class="intro-search-field with-autocomplete">
                            <label for="autocomplete-input" class="field-title ripple-effect">Where?</label>
                            <div class="input-with-icon">
                                <input id="autocomplete-input" type="text" placeholder="Online Job">
                                <i class="icon-material-outline-location-on"></i>
                            </div>
                        </div>

                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <label for ="intro-keywords" class="field-title ripple-effect">What job you want?</label>
                            <input id="intro-keywords" type="text" placeholder="Job Title or Keywords">
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick="javascript:void()">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">0</strong>
                            <span>Jobs Posted</span>
                        </li>
                        <li>
                            <strong class="counter">{{ $applicants->count() }}</strong>
                            <span>Applicants</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Content
    ================================================== -->
    <!-- Category Boxes -->
    <div class="section margin-top-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="section-headline centered margin-bottom-15">
                        <h3>Popular Job Categories</h3>
                    </div>

                    <!-- Category Boxes Container -->
                    <div class="categories-container">

                        @foreach($categories as $category)
                            <x-category
                                :icon="$category->icon"
                                :category="$category->category"
                            />
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Boxes / End -->


    <!-- Features Jobs -->
    <div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
        <div class="container">
            {{-- <div class="row">
                <div class="col-xl-12">

                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-35">
                        <h3>Featured Jobs</h3>
                        <a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Jobs</a>
                    </div>

                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
                                            <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>


                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-05.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Competition Law Officer</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Laxo</li>
                                            <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>
                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-02.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Barista and Cashier</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Coffee</li>
                                            <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>


                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-03.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Restaurant General Manager</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> King <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
                                            <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-05.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">International Marketing Coordinator</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Skyist</li>
                                            <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                    </div>
                    <!-- Jobs Container / End -->

                </div>
            </div> --}}
        </div>
    </div>
    <!-- Featured Jobs / End -->



    <!-- Highest Rated Freelancers -->
    <div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-25">
                        <h3>Rated Applicants</h3>
                        <a href="freelancers-grid-layout.html" class="headline-link">Browse All Freelancers</a>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">
                        @foreach ($applicants as $applicant)
                            <x-applicant 
                                :title="$applicant->title"
                                :country="$applicant->country"
                                :firstname="$applicant->firstname"
                                :lastname="$applicant->lastname"
                                :id="$applicant->applicantId"
                                :image="$applicant->image"
                            />
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Highest Rated Freelancers / End-->


    <!-- Membership Plans -->

    <!-- Membership Plans / End-->
@endsection
