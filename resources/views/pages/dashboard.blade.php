@php
    $navActive = "";
    $active = "dashboard";
@endphp

@extends('layouts.dashboard')

@section('content')
    @switch(auth()->user()->accountType)
        @case('applicant')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner" >

                    <!-- Dashboard Headline -->
                    <div class="dashboard-headline">
                        <h3>Howdy,
                            @if (auth()->user()->person->firstname)
                                {{ auth()->user()->person->firstname}}
                            @else
                                {{ "There!" }}
                            @endif
                        </h3>
                        <span>We are glad to see you again!</span>

                    </div>

                    <!-- Fun Facts Container -->
                    <div class="fun-facts-container">
                        <div class="fun-fact" data-fun-fact-color="#36bd78">
                            <div class="fun-fact-text">
                                <span>Messages</span>
                                <h4>{{ auth()->user()->message->count() }}</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                        </div>

                        <div class="fun-fact" data-fun-fact-color="#b81b7f">
                            <div class="fun-fact-text">
                                <span>Jobs Applied</span>
                                <h4> {{ auth()->user()->appliedJobs->count() }} </h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                        </div>

                        <div class="fun-fact" data-fun-fact-color="#efa80f">
                            <div class="fun-fact-text">
                                <span>Reviews</span>
                                <h4>{{ auth()->user()->review->count() }}</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                        </div>

                        <!-- Last one has to be hidden below 1600px, sorry :( -->
                        <div class="fun-fact" data-fun-fact-color="#2a41e6">
                            <div class="fun-fact-text">
                                <span>This Month Views</span>
                                <h4>987</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                        </div>
                    </div>

                    <!-- Row -->
                    {{-- <div class="row">

                        <div class="col-xl-8">
                            <!-- Dashboard Box -->
                            <div class="dashboard-box main-box-in-row">
                                <div class="headline">
                                    <h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
                                    <div class="sort-by">
                                        <select class="selectpicker hide-tick">
                                            <option>Last 6 Months</option>
                                            <option>This Year</option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="content">
                                    <!-- Chart -->
                                    <div class="chart">
                                        <canvas id="chart" width="100" height="45"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Box / End -->
                        </div>
                        <div class="col-xl-4">

                            <!-- Dashboard Box -->
                            <!-- If you want adjust height of two boxes
                                add to the lower box 'main-box-in-row'
                                and 'child-box-in-row' to the higher box -->
                            <div class="dashboard-box child-box-in-row">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-note-add"></i> Notes</h3>
                                </div>

                                <div class="content with-padding">
                                    
                                    @if (auth()->user()->note->count())
                                        @foreach (auth()->user()->note as $note)
                                            <div class="dashboard-note">
                                                <p>{{ $note->note }}</p>
                                                <div class="note-footer">
                                                    <span class="note-priority {{ $note->priority }}"> {{ $note->priority }} Priority</span>
                                                    <div class="note-buttons">
                                                        <form action="{{ route('note') }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
                                                        </form>

                                                        <form action="{{ route('note') }}">
                                                            @method('PATCH')
                                                            @csrf
                                                            <button type="submit"  title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <small class="small font-weight-light">No notes!</small>
                                    @endif

                                    <!-- Note -->
                                    
                                </div>
                                    <div class="add-note-button">
                                        <a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                                    </div>
                            </div>
                            <!-- Dashboard Box / End -->
                        </div>
                    </div> --}}
                    <!-- Row / End -->

                    <!-- Row -->
                    {{-- <div class="row">

                        <!-- Dashboard Box -->
                        <div class="col-xl-6">
                            <div class="dashboard-box">
                                <div class="headline">
                                    <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                                    <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
                                            <i class="icon-feather-check-square"></i>
                                    </button>
                                </div>
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                            <span class="notification-text">
                                                <strong>Michael Shannah</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                            <span class="notification-text">
                                                <strong>Gilber Allanis</strong> placed a bid on your <a href="#">iOS App Development</a> project
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                            <span class="notification-text">
                                                Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                            <span class="notification-text">
                                                <strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
                                            <span class="notification-text">
                                                <strong>David Peterson</strong> left you a <span class="star-rating no-stars" data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a> task
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Box -->
                        <div class="col-xl-6">
                            <div class="dashboard-box">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-assignment"></i> Orders</h3>
                                </div>
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="unpaid">Unpaid</span></li>
                                                    <li>Order: #326</li>
                                                    <li>Date: 12/08/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-checkout-page.html" class="button">Finish Payment</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #264</li>
                                                    <li>Date: 10/07/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #211</li>
                                                    <li>Date: 12/06/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #179</li>
                                                    <li>Date: 06/05/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <!-- Row / End -->

                    <!-- Footer -->
                    <div class="dashboard-footer-spacer"></div>
                    <div class="small-footer margin-top-15">
                        <div class="small-footer-copyrights">
                            © @php echo date("Y"); @endphp <strong>onyxsLogistics</strong>. All Rights Reserved.
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
            @break
        @case('company')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner" >

                    <!-- Dashboard Headline -->
                    <div class="dashboard-headline">
                        <h3>Howdy,
                            @if (auth()->user()->person->name)
                                {{ auth()->user()->person->name}}
                            @else
                                {{ "There!" }}
                            @endif
                        </h3>
                        <span>We are glad to see you again!</span>

                    </div>

                    <!-- Fun Facts Container -->
                    <div class="fun-facts-container">
                        <div class="fun-fact" data-fun-fact-color="#36bd78">
                            <div class="fun-fact-text">
                                <span>Bookmarks</span>
                                <h4>{{ auth()->user()->bookmark->count() }}</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                        </div>
                        <div class="fun-fact" data-fun-fact-color="#b81b7f">
                            <div class="fun-fact-text">
                                <span>Jobs Posted</span>
                                <h4>{{ auth()->user()->job->count() }}</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                        </div>
                        <div class="fun-fact" data-fun-fact-color="#efa80f">
                            <div class="fun-fact-text">
                                <span>Reviews</span>
                                {{-- <h4>{{ auth()->user()->review->count() }}</h4> --}}
                                <h4>{{ 5 }}</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                        </div>

                        <!-- Last one has to be hidden below 1600px, sorry :( -->
                        <div class="fun-fact" data-fun-fact-color="#2a41e6">
                            <div class="fun-fact-text">
                                <span>This Month Views</span>
                                <h4>987</h4>
                            </div>
                            <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row">

                        <div class="col-xl-8">
                            <!-- Dashboard Box -->
                            <div class="dashboard-box main-box-in-row">
                                <div class="headline">
                                    <h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
                                    <div class="sort-by">
                                        <select class="selectpicker hide-tick">
                                            <option>Last 6 Months</option>
                                            <option>This Year</option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="content">
                                    <!-- Chart -->
                                    <div class="chart">
                                        <canvas id="chart" width="100" height="45"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Box / End -->
                        </div>
                        <div class="col-xl-4">

                            <!-- Dashboard Box -->
                            <!-- If you want adjust height of two boxes
                                add to the lower box 'main-box-in-row'
                                and 'child-box-in-row' to the higher box -->
                            <div class="dashboard-box child-box-in-row">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-note-add"></i> Notes</h3>
                                </div>

                                <div class="content with-padding">
                                    
                                    @if (auth()->user()->note->count())
                                        @foreach (auth()->user()->note as $note)
                                            <div class="dashboard-note">
                                                <p>{{ $note->note }}</p>
                                                <div class="note-footer">
                                                    <span class="note-priority {{ $note->priority }}"> {{ $note->priority }} Priority</span>
                                                    <div class="note-buttons">
                                                        <form method="post" action="{{ route('note.delete', $note->id) }}" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
                                                        </form>

                                                        <a href="#small-dialog-{{ $note->id }}" class="popup-with-zoom-anim"  title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <small class="small font-weight-light">No notes!</small>
                                    @endif

                                    <!-- Note -->
                                    
                                </div>
                                    <div class="add-note-button">
                                        <a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                                    </div>
                            </div>
                            <!-- Dashboard Box / End -->
                        </div>
                    </div>
                    <!-- Row / End -->

                    <!-- Row -->
                    <div class="row">

                        <!-- Dashboard Box -->
                        <div class="col-xl-6">
                            <div class="dashboard-box">
                                <div class="headline">
                                    <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                                    <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
                                            <i class="icon-feather-check-square"></i>
                                    </button>
                                </div>
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                            <span class="notification-text">
                                                <strong>Michael Shannah</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                            <span class="notification-text">
                                                <strong>Gilber Allanis</strong> placed a bid on your <a href="#">iOS App Development</a> project
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                            <span class="notification-text">
                                                Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                            <span class="notification-text">
                                                <strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
                                            <span class="notification-text">
                                                <strong>David Peterson</strong> left you a <span class="star-rating no-stars" data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a> task
                                            </span>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Box -->
                        <div class="col-xl-6">
                            <div class="dashboard-box">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-assignment"></i> Orders</h3>
                                </div>
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="unpaid">Unpaid</span></li>
                                                    <li>Order: #326</li>
                                                    <li>Date: 12/08/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-checkout-page.html" class="button">Finish Payment</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #264</li>
                                                    <li>Date: 10/07/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #211</li>
                                                    <li>Date: 12/06/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="invoice-list-item">
                                            <strong>Professional Plan</strong>
                                                <ul>
                                                    <li><span class="paid">Paid</span></li>
                                                    <li>Order: #179</li>
                                                    <li>Date: 06/05/2018</li>
                                                </ul>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                            </div>
                                        </li>
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
            
    @endswitch
   

    <!-- Add Note popup
    ================================================== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#tab">Add Note</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Tab -->
                <div class="popup-tab-content" id="tab">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Do Not Forget 😎</h3>
                    </div>

                    <!-- Form -->
                    <form method="post" id="add-note" action="{{ route('note') }}">
                        @csrf

                        <select name="priority" class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                            <option value="low">Low Priority</option>
                            <option value="medium">Medium Priority</option>
                            <option value="high">High Priority</option>
                        </select>

                        <textarea name="note" cols="10" placeholder="Note" class="with-border"></textarea>

                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

                </div>

            </div>
        </div>
    </div>
    <!-- Apply for a job popup / End -->

    <!-- Update Note popup
    ================================================== -->
    @foreach (auth()->user()->note as $note)
        <div id="small-dialog-{{ $note->id }}" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
 
            <!--Tabs -->
            <div class="sign-in-form">

                <ul class="popup-tabs-nav">
                    <li><a href="#tab">Update Note</a></li>
                </ul>

                <div class="popup-tabs-container">

                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab">

                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3>Do Not Forget 😎</h3>
                        </div>

                        <!-- Form -->
                        <form id="add-note" action="{{ route('note.update', $note->id) }}" method="post">
                            @csrf
                            @method("PATCH")
                            <select name="priority" class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                                <option @if ($note->priority == "low") selected @endif value="low">Low Priority</option>
                                <option @if ($note->priority == "medium") selected @endif value="medium">Medium Priority</option>
                                <option @if ($note->priority == "high") selected @endif value="high">High Priority</option>
                            </select>

                            <textarea name="note" cols="10" placeholder="Note" class="with-border">{{ $note->note }}</textarea>

                        </form>

                        <!-- Button -->
                        <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Update Note <i class="icon-material-outline-arrow-right-alt"></i></button>

                    </div>

                </div>
            </div>
        </div>
    @endforeach
    
@endsection
