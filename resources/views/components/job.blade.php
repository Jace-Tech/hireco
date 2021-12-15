<!-- Job Listing -->
<a href="{{ route('job.single', $job) }}" class="job-listing">

    <!-- Job Listing Details -->
    <div class="job-listing-details">
        <!-- Logo -->
        <div class="job-listing-company-logo">
            <img src="/company/image/{{ $job->company($job->id)->logo }}" alt="">
        </div>

        <!-- Details -->
        <div class="job-listing-description">
            <h4 class="job-listing-company">{{ $job->company($job->id)->name }} <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
            <h3 class="job-listing-title">{{ $job->title }}</h3>
        </div>
    </div>

    <!-- Job Listing Footer -->
    <div class="job-listing-footer">
        <span class="bookmark-icon"></span>
        <ul>
            <li><i class="icon-material-outline-location-on"></i> {{ $job->location }}</li>
            <li><i class="icon-material-outline-business-center"></i> {{ $job->type }}</li>
            <li><i class="icon-material-outline-account-balance-wallet"></i> ${{ $job->min }}-${{ $job->max }}</li>
            <li><i class="icon-material-outline-access-time"></i> {{ $job->created_at->diffForHumans() }}</li>
        </ul>
    </div>
</a>