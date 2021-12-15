@php
    $navActive = "";
    $active = "job";
@endphp

@extends('layouts.dashboard')

@section('content')
    @switch(auth()->user()->accountType)
        @case('applicant')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner" >
                    
                    <!-- Dashboard Headline -->
                    <div class="dashboard-headline">
                        <h3>Manage Jobs</h3>
                    </div>
        
                    <!-- Row -->
                    <div class="row">
        
                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">
        
                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        @if (auth()->user()->appliedJobs->count())
                                            @foreach(auth()->user()->appliedJobs as $job)
                                                <x-job-listing 
                                                    :title="$job->jobSingle($job->job_id)->title"
                                                    :date="$job->jobSingle($job->job_id)->created_at"
                                                    :endDate="$job->jobSingle($job->job_id)->endDate"
                                                    :id="$job->jobSingle($job->job_id)->id"
                                                    :job="$job->jobSingle($job->job_id)"
                                                />
                                            @endforeach
                                        @else
                                            <h3 style="text-align: center; padding: 3rem 0;">No Job Application found!</h3>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <!-- Row / End -->
        
                    <x-dashboard-footer />
                </div>
            </div>
            @break

        @case('company')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner" >
                    
                    <!-- Dashboard Headline -->
                    <div class="dashboard-headline">
                        <h3>Manage Jobs</h3>
                    </div>
        
                    <!-- Row -->
                    <div class="row">
        
                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">
        
                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        @if (auth()->user()->job->count())
                                                @foreach(auth()->user()->job as $job)
                                                    <x-job-listing 
                                                        :title="$job->title"
                                                        :date="$job->created_at"
                                                        :endDate="$job->endDate"
                                                        :id="$job->id"
                                                        :job="$job"
                                                    />
                                                @endforeach
                                            @else
                                                <h3 style="text-align: center; padding: 3rem 0;">No Job Posted!</h3>
                                            @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <!-- Row / End -->
        
                    <x-dashboard-footer />
                </div>
            </div>
            @break
        @default
            @break;
    @endswitch
    
@endsection
