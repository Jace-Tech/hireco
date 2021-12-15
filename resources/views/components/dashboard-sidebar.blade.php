<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
                <span class="hamburger hamburger--collapse" >
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>

            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    @switch(auth()->user()->accountType)
                        @case('applicant')
                            <ul data-submenu-title="Start">
                                <li @if($active === 'dashboard') class="active" @endif><a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li @if($active === 'message') class="active" @endif><a href="{{ route('message') }}"><i class="icon-material-outline-question-answer"></i> Messages <!--<span class="nav-tag">2</span>--></a></li>
                                <li @if($active === 'bookmark') class="active" @endif><a href="{{ route('bookmark') }}"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
                                {{-- <li @if($active === 'review') class="active" @endif><a href="{{ route('review') }}"><i class="icon-material-outline-rate-review"></i> Reviews</a></li> --}}
                            </ul>

                            <ul data-submenu-title="Manage">
                                <li @if($active === 'job') class="active" @endif><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
                                    <ul>
                                        <li><a href="{{ route('jobs') }}">Applied Jobs </a></li>
                                        {{-- <li><a href="{{ route('jobs') }}">Manage Candidates</a></li> --}}
                                    </ul>
                                </li>
                            </ul>

                            <ul data-submenu-title="Account">
                                <li @if($active === 'profile') class="active" @endif><a href="{{ route('profile') }}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                <li><a href="{{ route('logout') }}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>
                            @break

                        @case('company')
                            <ul data-submenu-title="Start">
                                <li @if($active === 'dashboard') class="active" @endif><a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li @if($active === 'message') class="active" @endif><a href="{{ route('message') }}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
                                <li @if($active === 'bookmark') class="active" @endif><a href="{{ route('bookmark') }}"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
                                {{-- <li @if($active === 'review') class="active" @endif><a href="{{ route('review') }}"><i class="icon-material-outline-rate-review"></i> Reviews</a></li> --}}
                            </ul>

                            <ul data-submenu-title="Organize and Manage">
                                <li @if($active === 'job') class="active" @endif><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
                                    <ul>
                                        <li><a href="{{ route('jobs') }}">Manage Jobs </a></li>
                                        {{-- <li><a href="{{ route('jobs') }}">Manage Candidates</a></li> --}}
                                        <li><a href="{{ route('job.post') }}">Post a Job</a></li>
                                    </ul>
                                </li>
                            </ul>


                            <ul data-submenu-title="Account">
                                <li @if($active === 'profile') class="active" @endif><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                <li><a href="{{ route('logout') }}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>
                            @break
                    @endswitch

                </div>
            </div>
            <!-- Navigation / End -->

        </div>
    </div>
</div>
