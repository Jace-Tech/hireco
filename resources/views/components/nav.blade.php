<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href=" {{ route('home') }} "><img src="/onyx/logo-main.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li class="d-flex align-items-center">
							<a class="d-block mt-2" href=" {{ route('home') }} " class="current">Home</a>
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								<li><a href="{{ route('job') }}">Browse Jobs</a></li>
								<li><a href="{{ route('company') }}">Browse Companies</a></li>
							</ul>
						</li>

						<li><a href="#">For Employers</a>
							<ul class="dropdown-nav">
								<li><a href=" {{ route('applicant') }} ">Browse Applicants</a></li>
								<li><a href=" {{ route('job.post') }} ">Post a Job</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

            @auth
                <!-- Right Side Content / End -->
                <div class="right-side">

                    <!--  User Notifications -->
                    <div class="header-widget hide-on-mobile">

                        <!-- Notifications -->
                        <div class="header-notifications">

                            <!-- Trigger -->
                            <div class="header-notifications-trigger">
                                <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <div class="header-notifications-headline">
                                    <h4>Notifications</h4>
                                    <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                        <i class="icon-feather-check-square"></i>
                                    </button>
                                </div>

                                <div class="header-notifications-content">
                                    <div class="header-notifications-scroll" data-simplebar>
                                        <ul>
                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="dashboard-manage-candidates.html">
                                                    <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                    <span class="notification-text">
                                                        <strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                                    </span>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li>
                                                <a href="dashboard-manage-bidders.html">
                                                    <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                                    <span class="notification-text">
                                                        <strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
                                                    </span>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li>
                                                <a href="dashboard-manage-jobs.html">
                                                    <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                                    <span class="notification-text">
                                                        Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
                                                    </span>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li>
                                                <a href="dashboard-manage-candidates.html">
                                                    <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                    <span class="notification-text">
                                                        <strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Messages -->
                        <div class="header-notifications">
                            <div class="header-notifications-trigger">
                                <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <div class="header-notifications-headline">
                                    <h4>Messages</h4>
                                    <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                        <i class="icon-feather-check-square"></i>
                                    </button>
                                </div>

                                <div class="header-notifications-content">
                                    <div class="header-notifications-scroll" data-simplebar>
                                        <ul>
                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="dashboard-messages.html">
                                                    <span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>David Peterson</strong>
                                                        <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                                        <span class="color">4 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="dashboard-messages.html">
                                                    <span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>Sindy Forest</strong>
                                                        <p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
                                                        <span class="color">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="dashboard-messages.html">
                                                    <span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>Marcin Kowalski</strong>
                                                        <p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
                                                        <span class="color">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>

                    </div>
                    <!--  User Notifications / End -->

                    <!-- User Menu -->
                    <div class="header-widget">

                        <!-- Messages -->
                        <div class="header-notifications user-menu">
                            <div class="header-notifications-trigger">
                                <a href="#">
									<div class="user-avatar status-online">
										@if (auth()->user()->accountType === 'applicant')
                                            @if(auth()->user()->person->image)
                                                <img src="/applicants/image/{{ auth()->user()->person->image }}" alt="auth()->user()->person->first">
                                            @else
                                                <img src="/company/image/{{ auth()->user()->person->logo }}" alt="">
                                            @endif
                                        @else
                                            @if(auth()->user()->person->logo)
                                                <img src="/company/image/{{ auth()->user()->person->logo }}" alt="auth()->user()->person->first">
                                            @else
                                                <img src="/company/image/" alt="">
                                            @endif
                                        @endif
								</div></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <!-- User Status -->
                                <div class="user-status">

                                    <!-- User Name / Avatar -->
                                    <div class="user-details">
                                        <div class="user-avatar status-online">
											@if (auth()->user()->accountType === 'applicant')
                                                @if(auth()->user()->person->image)
                                                    <img src="/applicants/image/{{ auth()->user()->person->image }}" alt="auth()->user()->person->first">
                                                @else
                                                    <img src="/company/image/{{ auth()->user()->person->logo }}" alt="">
                                                @endif
                                            @else
                                                @if(auth()->user()->person->logo)
                                                    <img src="/company/image/{{ auth()->user()->person->logo }}" alt="auth()->user()->person->first">
                                                @else
                                                    <img src="/company/image/" alt="">
                                                @endif
                                            @endif
										</div>
                                        <div class="user-name">
											@if (auth()->user()->accountType === 'applicant')
                                                @if(auth()->user()->person->firstname)
                                                    {{auth()->user()->person->firstname}} {{auth()->user()->person->lastname}} <span>{{auth()->user()->accountType}}</span>
                                                @else
                                                    {{auth()->user()->email}}
                                                @endif
                                            @else
                                                @if(auth()->user()->person->name)
                                                    {{auth()->user()->person->name}} <span>{{auth()->user()->accountType}}</span>
                                                @else
                                                    {{auth()->user()->email}}
                                                @endif
                                            @endif

                                        </div>
                                    </div>

                                    <!-- User Status Switcher -->
                                    <div class="status-switch" id="snackbar-user-status">
                                        <label class="user-online current-status">Online</label>
                                        <label class="user-invisible">Invisible</label>
                                        <!-- Status Indicator -->
                                        <span class="status-indicator" aria-hidden="true"></span>
                                    </div>
                            </div>

                            <ul class="user-menu-small-nav">
                                <li><a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li><a href="{{ route('profile') }}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                <li><a href="{{ route('logout') }}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>

                            </div>
                        </div>

                    </div>
                    <!-- User Menu / End -->

                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </span>
                </div>
            @endauth


            @guest
                <div class="right-side">

                    <div class="header-widget">
                        <a href="/login" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
                    </div>

                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </span>

                </div>
            @endguest

		</div>
	</div>
	<!-- Header / End -->

</header>
