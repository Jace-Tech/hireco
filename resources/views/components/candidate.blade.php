<li>
    <!-- Overview -->
    <div class="freelancer-overview manage-candidates">
        <div class="freelancer-overview-inner">

            <!-- Avatar -->
            <div class="freelancer-avatar">
                <div class="verified-badge"></div>
                <a href="{{ route('applicant.profile', $applicant->user($applicant->user_id)->applicantId) }}"><img src="/applicants/image/{{ $applicant->user($applicant->user_id)->image }}" alt=""></a>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
                <h4><a href="{{ route('applicant.profile', $applicant->user($applicant->user_id)->applicantId) }}">{{ $applicant->user($applicant->user_id)->firstname }} {{ $applicant->user($applicant->user_id)->lastname }} <img class="flag" src="images/flags/{{ strtolower($applicant->user($applicant->user_id)->country) }}.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>

                <!-- Details -->
                <span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> {{ $applicant->person($applicant->user_id)->email }}</a></span>
                {{-- <span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+61) 123-456-789</span> --}}

                <!-- Rating -->
                {{-- <div class="freelancer-rating">
                    <div class="star-rating" data-rating="5.0"></div>
                </div> --}}

                <!-- Buttons -->
                <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
                    <a href="/applicants/attachment/{{ $applicant->attachment($applicant->user_id)->attachment }}" download="{{ $applicant->user($applicant->user_id)->firstname }} CV" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>
                    <a href="#small-dialog-{{ $applicant->user($applicant->user_id)->firstname  }}" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                    <a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</li>

