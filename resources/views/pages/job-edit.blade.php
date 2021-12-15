@php
    $navActive = "";
    $active = "job";
@endphp

@extends('layouts.dashboard')

@section('content')

    <!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Job</h3>

			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<form action="{{ route('job.post') }}" method="post" id="job" class="row">
                                @csrf
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Title</h5>
										<input type="text" name="title" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Type</h5>
										<select name="type" class="selectpicker with-border" data-size="7" title="Select Job Type">
											<option value="fulltime">Full Time</option>
											<option value="freelance">Freelance</option>
											<option value="parttime">Part Time</option>
											<option value="internship">Internship</option>
											<option value="temporary">Temporary</option>
										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Category</h5>
										<select name="category_id" class="selectpicker with-border" data-size="7" title="Select Category">
											@foreach($categories as $category)
												<option value="{{ $category->id }}" style="text-transform: capitalize;">{{ $category->category }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location</h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input id="autocomplete-input" name="location" class="with-border" type="text" placeholder="Type Address">
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Salary</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border"  name="min" type="number" placeholder="Min">
													<i class="currency">USD</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="max" type="number" placeholder="Max">
													<i class="currency">USD</i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Ending Date  <i class="help-icon" data-tippy-placement="right" title="End date for the job"></i></h5>
										<input class="with-border" type="date" name="endDate" />
									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Job Description</h5>
										<textarea cols="30" rows="5" name="description" class="with-border"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" name="attachment" type="file" accept="image/*, application/pdf" id="upload" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<button form="job" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</button>
				</div>

			</div>
			<!-- Row / End -->

            <x-dashboard-footer />

		</div>
	</div>
@endsection
