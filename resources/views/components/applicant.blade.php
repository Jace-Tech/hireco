
<!--Freelancer -->
    <div class="freelancer">

        <!-- Overview -->
        <div class="freelancer-overview">
            <div class="freelancer-overview-inner">

                <!-- Bookmark Icon -->
                <span class="bookmark-icon"></span>

                <!-- Avatar -->
                <div class="freelancer-avatar">
                    <div class="verified-badge"></div>
                    <a href="#"><img src="/applicants/image/{{ $image }}" alt="{{ $firstname }}"></a>
                </div>
                <!-- Name -->
                <div class="freelancer-name">
                    <h4><a href="#">{{ $firstname . " " . $lastname  }} <img class="flag" src="/images/flags/{{ strtolower($country['code']) }}.svg" alt="" title="{{ $country['name'] }}" data-tippy-placement="top"></a></h4>
                    <span> {{ $country['name']}} </span>
                </div>

                <!-- Rating -->
                {{-- <div class="freelancer-rating">
                    <div class="star-rating" data-rating="5.0"></div>
                </div> --}}
            </div>
        </div>

        <!-- Details -->
        <div class="freelancer-details">
            {{-- <div class="freelancer-details-list">
                <ul>
                    <li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
                    <li>Rate <strong>$60 / hr</strong></li>
                    <li>Job Success <strong>95%</strong></li>
                </ul>
            </div> --}}
            <a href="{{ route('applicant.profile', $id) }}" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
        </div>
    </div>
<!-- Freelancer / End -->