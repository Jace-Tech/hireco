@switch(auth()->user()->accountType)
    @case('applicant')
                
        <li>
            <!-- Job Listing -->
            <div class="job-listing">
                <!-- Job Listing Details -->
                <div class="job-listing-details">
                    <!-- Details -->
                    <div class="job-listing-description">
                        <h3 class="job-listing-title"><a href="#">{{ $title }}</a> <span class="dashboard-status-button yellows">Pending Approval</span></h3>

                        <!-- Job Listing Footer -->
                        <div class="job-listing-footer">
                            <ul>
                                <li><i class="icon-material-outline-date-range"></i> Posted on {{ $date->day }} {{ $date->shortEnglishMonth }}, {{ $date->year }}</li>
                                <li><i class="icon-material-outline-date-range"></i> Expiring on {{ date("j M, Y", strtotime($endDate)) }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <!-- Buttons -->
            <div class="buttons-to-right always-visible" style="display: flex; align-items: center; gap: .5rem">
                <form method="post" action="{{ route('applied.delete', $job) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
                </form>
            </div>
        </li>

        @break
    @case('company')
        <li>
            <!-- Job Listing -->
            <div class="job-listing">
                <!-- Job Listing Details -->
                <div class="job-listing-details">
                    <!-- Details -->
                    <div class="job-listing-description">
                        <h3 class="job-listing-title"><a href="#">{{ $title }}</a> <span class="dashboard-status-button yellows">Pending Approval</span></h3>

                        <!-- Job Listing Footer -->
                        <div class="job-listing-footer">
                            <ul>
                                <li><i class="icon-material-outline-date-range"></i> Posted on {{ $date->day }} {{ $date->shortEnglishMonth }}, {{ $date->year }}</li>
                                <li><i class="icon-material-outline-date-range"></i> Expiring on {{ date("j M, Y", strtotime($endDate)) }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="buttons-to-right always-visible" style="display: flex; align-items: center; gap: .5rem">
                <a href="{{ route('candidates', $job) }}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">{{ $job->applicant($job->id)->count() }}</span></a>
                <form method="post" action="{{ route('job.delete', $job) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
                </form>
                <a href="{{ route('job.edit', $job) }}" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
            </div>
        </li>

        @break
    @default
        
@endswitch
