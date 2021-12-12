@extends('layouts.dashboard')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Settings</h3>

                <!-- Breadcrumbs -->

            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                        </div>

                        <div class="content with-padding padding-bottom-0">
                            <form action=" {{ route('profile') }} " method="post" enctype="multipart/form-data">
                                <div class="row">
                                    @csrf
                                    <div class="col-xs-12 col-md-3">
                                        <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                            @if(auth()->user()->person->image)
                                                <img class="profile-pic" src="/applicants/image/{{ auth()->user()->person->image }}" alt="" />
                                            @else
                                                <img class="profile-pic" src="/images/user-avatar-placeholder.png" alt="" />
                                            @endif

                                            <div class="upload-button"></div>
                                            <input class="file-upload" name="image" type="file" accept="image/*"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-9">
                                        <div class="row">

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>First Name</h5>
                                                    @if(auth()->user()->person->firstname)
                                                        <input type="text" name="firstname" class="with-border" value="{{ auth()->user()->person->firstname }}">
                                                    @else
                                                        <input type="text" class="with-border" name="firstname" value="">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Last Name</h5>
                                                    @if(auth()->user()->person->lastname)
                                                        <input type="text" name="lastname" class="with-border" value="{{ auth()->user()->person->lastname }}">
                                                    @else
                                                        <input type="text" class="with-border" name="lastname" value="">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <!-- Account Type -->
                                                <div class="submit-field">
                                                    <h5>Account Type</h5>
                                                    <div class="account-type">
                                                        @if(auth()->user()->accountType == "applicant")
                                                            <div>
                                                                <input type="radio" name="account_type" value="applicant" id="applicant-radio" class="account-type-radio" checked/>
                                                                <label for="applicant-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Applicant</label>
                                                            </div>

                                                            <div>
                                                                <input type="radio" name="account_type" value="company" id="employer-radio" class="account-type-radio"/>
                                                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Company</label>
                                                            </div>
                                                        @else
                                                            <div>
                                                                <input type="radio" name="account_type" value="applicant" id="applicant-radio" class="account-type-radio"/>
                                                                <label for="applicant-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Applicant</label>
                                                            </div>

                                                            <div>
                                                                <input type="radio" name="account_type" value="company" id="employer-radio" class="account-type-radio checked"/>
                                                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Company</label>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Email</h5>
                                                    @if(auth()->user()->email)
                                                        <input type="email" name="email" class="with-border" value="{{ auth()->user()->email }}">
                                                    @else
                                                        <input type="email" class="with-border" name="email" value="">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end padding-bottom-20">
                                        <button value="account" name="submit" type="submit" class="button ripple-effect big margin-top-10 margin-bottom-10">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-face"></i> My Profile</h3>
                        </div>

                        <div class="content">
                            <form action="{{ route('profile') }}" enctype="multipart/form-data" method="post">

                                @csrf

                                <ul class="fields-ul">
                                    <li>
                                        <div class="row">
                                            

                                            {{-- <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 5 skills"></i></h5>

                                                    <!-- Skills List -->
                                                    <div class="keywords-container">
                                                        <div class="keyword-input-container">
                                                            <input type="text" class="keyword-input with-border" placeholder="e.g. ms word, excel "/>
                                                            <input type="hidden" name="skills" id="skill">
                                                            <button type="button" class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                        </div>
                                                        @if(auth()->user()->skill->count())
                                                            <div class="keywords-list">
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
                                                            </div>
                                                        @else
                                                            <div class="keywords-list">
                                                            </div>
                                                        @endif
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Category</h5>
                                                    <select name="category" class="selectpicker with-border" data-size="7" title="Choose Category" data-live-search="true">
                                                        @foreach($categories as $category)
                                                            @if(auth()->user()->person->category  == $category->id) 
                                                                <option selected value="{{ $category->id }}">{{$category->category}}</option>
                                                            @else
                                                                <option value="{{ $category->id }}">{{$category->category}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Attachment</h5>

                                                    <!-- Attachments -->
                                                    <div class="attachments-container margin-top-0 margin-bottom-0">

                                                        @if(auth()->user()->attachment->count())
                                                            <div class="attachment-box ripple-effect">
                                                                <span>Cover Letter</span>
                                                                <i>PDF</i>
                                                                <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <!-- Upload Button -->
                                                    <div class="uploadButton margin-top-0">
                                                        <input class="uploadButton-input" name="attachment" type="file" accept="application/pdf, application/msword" id="upload" multiple/>
                                                        <label class="uploadButton-button ripple-effect" for="upload">Upload CV</label>
                                                        <span class="uploadButton-file-name">Maximum file size: 10 MB</span>
                                                    </div>

                                                </div>
                                            </div>

                                            {{-- <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <div class="bidding-widget">
                                                        <!-- Headline -->
                                                        <span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

                                                        <!-- Slider -->
                                                        <div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
                                                        @if(auth()->user()->person->price_per_hour)
                                                            <input class="bidding-slider" name="price"  type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="{{ auth()->user()->person->price_per_hour }}" data-slider-step="1" data-slider-tooltip="hide" />
                                                        @else
                                                            <input class="bidding-slider" name="price"  type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="5" data-slider-step="1" data-slider-tooltip="hide" />
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Tagline</h5>
                                                    <input type="text" name="title" class="with-border" value="" placeholder="eg. Chemical Engineer"></div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Nationality</h5>
                                                    <select name="country" class="selectpicker with-border" data-size="7" title="Select Country" data-live-search="true">
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country['code'] }}" @if((auth()->user()->person->country) == $country['code']) selected  @endif> {{ $country['name'] }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5>Introduce Yourself</h5>
                                                    @if(auth()->user()->person->bio)
                                                        <textarea name="bio"  cols="30" rows="5" class="with-border">{{ auth()->user()->person->bio }}</textarea>
                                                    @else
                                                        <textarea name="bio"  cols="30" rows="5" class="with-border"></textarea>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-12 padding-bottom-20">
                                                <button type="submit" name="submit" value="profile" class="button ripple-effect big margin-top-10">Save Changes</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div id="test1" class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                        </div>

                        <div class="content with-padding">
                            <form>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Current Password</h5>
                                            <input type="password" class="with-border">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>New Password</h5>
                                            <input type="password" class="with-border">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Repeat New Password</h5>
                                            <input type="password" class="with-border">
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="two-step" checked>
                                            <label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
                                        </div>
                                    </div> -->


                                    <div class="col-12 padding-bottom-20">
                                        <button type="submit" class="button ripple-effect big margin-top-10">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row / End -->

            <!-- Footer -->
            <div class="dashboard-footer-spacer"></div>
            <div class="small-footer margin-top-15">
                <div class="small-footer-copyrights">
                    © @php echo date("Y");  @endphp <strong>OnyxsLogistics</strong>. All Rights Reserved.
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

    <script type="text/javascript">
        const btn = document.querySelector('.keyword-input-button')
        const input = document.querySelector('.keyword-input')
        let word = ""

        input.addEventListener('keydown', function(e) {
            word += input.value
        });

        btn.addEventListener('click', function(e) {
            document.querySelector('#skill').value += `${word} `
            word = ""
        });

    </script>
@endsection
