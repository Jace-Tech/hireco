@extends('layouts.job')

@section('content')
<div class="full-page-container with-map">

	<div class="full-page-sidebar hidden-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar>

			<div class="sidebar-container">
				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Keywords</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="e.g. job title"/>
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design & Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT & Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales & Marketing</option>
					</select>
				</div>
				
				<!-- Job Types -->
				<div class="sidebar-widget">
					<h3>Job Type</h3>

					<div class="switches-list">
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Freelance</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Full Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Part Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Internship</label>
						</div>
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Temporary</label>
						</div>
					</div>

				</div>

				<!-- Salary -->
				<div class="sidebar-widget">
					<h3>Salary</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="1500" data-slider-max="15000" data-slider-step="100" data-slider-value="[1500,15000]"/>
				</div>

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Tags</h3>

					<div class="tags-container">
						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">front-end dev</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag2"/>
							<label for="tag2">angular</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag3"/>
							<label for="tag3">react</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag4"/>
							<label for="tag4">vue js</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag5"/>
							<label for="tag5">web apps</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag6"/>
							<label for="tag6">design</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag7"/>
							<label for="tag7">wordpress</label>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
			<!-- Sidebar Container / End -->

			<!-- Search Button -->
			<div class="sidebar-search-button-container">
				<button class="button ripple-effect">Search</button>
			</div>
			<!-- Search Button / End-->

		</div>
	</div>
	<!-- Full Page Sidebar / End -->
	

	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div>

			<div class="listings-container grid-layout margin-top-35">
				
                @foreach ($jobs as $job)
                    <x-job :job="$job" />   
                @endforeach
				
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer -->
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					?? {{ date('Y') }} <strong>OnyxsLogistics</strong>. All Rights Reserved.
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
	<!-- Full Page Content / End -->


	<!-- Full Page Map -->
	<div class="full-page-map-container">
		
		<!-- Enable Filters Button -->
		<div class="filter-button-container">
			<button class="enable-filters-button">
				<i class="enable-filters-button-icon"></i>
				<span class="show-text">Show Filters</span>
				<span class="hide-text">Hide Filters</span>
			</button>
			<div class="filter-button-tooltip">Click to expand sidebar with filters!</div>
		</div>
		
		<!-- Map -->
	    <div id="map" data-map-zoom="12"  data-map-scroll="true"></div>
	</div>
	<!-- Full Page Map / End -->

</div>
@endsection