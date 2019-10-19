<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="candidates, career, employment, freelance, glassdoor, Human Resource Management, indeed, job board, job listing, job portal, job postings, jobs, listings, recruitment, resume">
    <meta name="GyapomRecruit" content="ATFN">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- Title -->
    <title>GyapomRecruit - The Most Popular Job Board HTML Template</title>
    <!-- Favicon -->
    <link href="/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->

    @include('layouts.partials.app.header')

    <!-- Modal -->
    <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="login_form">
                            <form action="#">
                                <div class="heading">
                                    <h3 class="text-center">Quick Login</h3>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    <a class="tdu text-thm float-right" href="#">Forgot Password?</a>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm">Login</button>

                                {{-- Social login here --}}
                                @include('partials.auth.social')

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="sign_up_form">
                            <div class="heading">
                                <h3 class="text-center">Create New Account</h3>
                                <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleInputPhone1" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <select id="inputState1" class="form-control">
                                        <option selected>Select Sector</option>
                                        <option>Web Developer</option>
                                        <option>Ui/Ux Designer</option>
                                        <option>Photoeditor</option>
                                        <option>Graphics Designer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">By Registering You Confirm That You Accept <a class="text-thm" href="page-terms-and-policies.html">Terms & Conditions</a> And <a class="text-thm" href="page-terms-and-policies.html">Privacy Policy</a></label>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-dark">Register</button>

                                {{-- Social login here --}}
                                @include('partials.auth.social')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sign_up_modal modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                {{--<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="login_form">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="heading">
                                    <h3 class="text-center">Forgot Password</h3>
                                    <p class="text-center">If you have an account a reset link will be email to you.</p>
                                </div>
                                <div class="form-group">
                                    <input id="email" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm">Send Password Reset Link</button>

                                {{-- Social login here --}}
                                @include('partials.auth.social')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <img class="nav_logo_img img-fluid float-left mt25" src="/assets/images/header-logo.png" alt="header-logo.png">
                <a class="bg-thm" href="#menu"><span></span></a>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li><span>Home</span>
                    <ul>
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index2.html">Home Two</a></li>
                        <li><a href="index3.html">Home Three</a></li>
                        <li><a href="index4.html">Home Four</a></li>
                        <li><a href="index5.html">Home Five</a></li>
                        <li><a href="index6.html">Home Six</a></li>
                    </ul>
                </li>
                <li><span>Find A Job</span>
                    <ul>
                        <li><span>Job List</span>
                            <ul>
                                <li><a href="page-job-list-v1.html">List V1</a></li>
                                <li><a href="page-job-list-v2.html">List V2</a></li>
                                <li><a href="page-job-list-v3.html">List V3</a></li>
                                <li><a href="page-job-list-v4.html">List V4</a></li>
                                <li><a href="page-job-list-v5.html">List V5</a></li>
                            </ul>
                        </li>
                        <li><span>Job Single</span>
                            <ul>
                                <li><a href="page-job-single-v1.html">Single V1</a></li>
                                <li><a href="page-job-single-v2.html">Single V2</a></li>
                                <li><a href="page-job-single-v3.html">Single V3</a></li>
                                <li><a href="page-job-single-v4.html">Single V4</a></li>
                                <li><a href="page-job-single-v5.html">Single V5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Employer</span>
                    <ul>
                        <li><span>Employer List</span>
                            <ul>
                                <li><a href="page-employer-list-v1.html">List V1</a></li>
                                <li><a href="page-employer-list-v2.html">List V2</a></li>
                                <li><a href="page-employer-list-v3.html">List V3</a></li>
                            </ul>
                        </li>
                        <li><span>Employer Single</span>
                            <ul>
                                <li><a href="page-employer-single-v1.html">Single V1</a></li>
                                <li><a href="page-employer-single-v2.html">Single V2</a></li>
                                <li><a href="page-employer-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><span>Employer Admin</span>
                            <ul>
                                <li><a href="page-employer-dashboard.html">Dashboard</a></li>
                                <li><a href="page-employer-profile.html">Profile</a></li>
                                <li><a href="page-employer-post-job.html">Post Job</a></li>
                                <li><a href="page-employer-manage-job.html">Manage Job</a></li>
                                <li><a href="page-employer-resume.html">Resume</a></li>
                                <li><a href="page-employer-packages.html">Packages</a></li>
                                <li><a href="page-employer-transactions.html">Transactions</a></li>
                                <li><a href="page-employer-change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Candidates</span>
                    <ul>
                        <li><span>Candidates List</span>
                            <ul>
                                <li><a href="page-candidates-list-v1.html">List V1</a></li>
                                <li><a href="page-candidates-list-v2.html">List V2</a></li>
                                <li><a href="page-candidates-list-v3.html">List V3</a></li>
                            </ul>
                        </li>
                        <li><span>Candidates Single</span>
                            <ul>
                                <li><a href="page-candidates-single-v1.html">Single v1</a></li>
                                <li><a href="page-candidates-single-v2.html">Single v2</a></li>
                                <li><a href="page-candidates-single-v3.html">Single v3</a></li>
                            </ul>
                        </li>
                        <li><span>Candidates Admin</span>
                            <ul>
                                <li><a href="page-candidates-dashboard.html">Dashboard</a></li>
                                <li><a href="page-candidates-profile.html">Profile</a></li>
                                <li><a href="page-candidates-my-resume.html">My Resume</a></li>
                                <li><a href="page-candidates-applied-jobs.html">Applied Jobs</a></li>
                                <li><a href="page-candidates-cv-manager.html">Cv Manager</a></li>
                                <li><a href="page-candidates-favourite-jobs.html">Favourite Jobs</a></li>
                                <li><a href="page-candidates-message.html">Message</a></li>
                                <li><a href="page-candidates-review.html">Review</a></li>
                                <li><a href="page-candidates-job-alert.html">Job Alert</a></li>
                                <li><a href="page-candidates-change-password.html">Change Password</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><a href="page-about.html">About</a></li>
                        <li><span>Blog</span>
                            <ul>
                                <li><a href="page-blog-v1.html">Page Blog v1</a></li>
                                <li><a href="page-blog-grid.html">Blog Grid</a></li>
                                <li><a href="page-blog-list.html">Blog List</a></li>
                                <li><a href="page-blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.html">Contact Us</a></li>
                        <li><a href="page-error.html">404</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-how-it-works.html">How It Works</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-log-reg.html">Login/Register</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-terms-and-policies.html">Terms And Policies</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li><a href="#">Post a Job</a></li>
                <li><a class="text-thm" href="page-log-reg.html">Login/Register</a></li>
            </ul>
        </nav>
    </div>

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="breadcrumb_title float-left">Login/Register</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Our LogIn Register -->
    <section class="our-log-reg bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="login_form">
                        @include('forms.login')
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="sign_up_form">
                        <div class="heading">
                            <h3 class="text-center">Create New Account</h3>
                            <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                        </div>
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Candidate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Employer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                               @include('forms.register')
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                @include('forms.recruiter')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Top Area -->
    <section class="footer_top_area p0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-2 pb25 pt25">
                    <div class="logo-widget">
                        <img class="img-fluid" src="/assets/images/header-logo.png" alt="header-logo.png">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 pb25 pt25 pl60 pr40 brdr_left_right">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <div class="funfact_one">
                                <div class="timer">395</div>
                                <p>Jobs Added</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <div class="funfact_one">
                                <div class="timer">267</div>
                                <p>Jobs Posted</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <div class="funfact_one">
                                <div class="timer">95</div>
                                <p>Companies</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <div class="funfact_one">
                                <div class="timer">348</div>
                                <p>Freelancer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 pb25 pt25 pl30">
                    <div class="footer_social_widget mt15">
                        <p class="float-left mt10">Follow Us</p>
                        <ul>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer -->
    <section class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                    <div class="quick_link_widget">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            {{--<li><a href="#">Job Packages</a></li>--}}
                            <li><a href="#">Post New Job</a></li>
                            <li><a href="#">Jobs Listing</a></li>
                            {{--<li><a href="#">Jobs Style Grid</a></li>--}}
                            {{--<li><a href="#">Employer Listing</a></li>--}}
                            {{--<li><a href="#">Employers Grid</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                    <div class="candidate_widget">
                        <h4>For Candidates</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">User Dashboard</a></li>
                            <li><a href="#">CV Packages</a></li>
                            {{--<li><a href="#">Candidate Listing</a></li>--}}
                            {{--<li><a href="#">Candidates Grid</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-md-3 col-lg-3">
                    <div class="employe_widget">
                        <h4>For Employers</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Post New</a></li>
                            <li><a href="#">Job Employer Listing</a></li>
                            <li><a href="#">Employers Grid</a></li>
                            <li><a href="#">Job Packages</a></li>
                            {{--<li><a href="#">Jobs Listing</a></li>--}}
                            {{--<li><a href="#">Jobs Style Grid</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 col-md-3 col-lg-4">
                    <div class="newsletter_widget">
                        <h4>Newsletter</h4>
                        <p>Subscribe to Gyapom Recruit newsletter to get the latest posted jobs, candidates and be in the loop.</p>
                        <form class="form-inline mailchimp_form">
                            <label class="sr-only" for="footer-subscribe">Name</label>
                            <input type="email" class="form-control mb-2 mr-sm-2" id="footer-subscribe" placeholder="Enter your email address">
                            <button type="submit" class="btn btn-primary mb-2"><span class="fa fa-paper-plane-o"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Bottom Area -->
    <section class="footer_bottom_area p0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pb10 pt10">
                    <div class="copyright-widget tac-smd mt20">
                        <p>&copy; 2019 Gyapom Recruit. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-8 pb10 pt10">
                    <div class="footer_menu text-right mt10">
                        <ul>
                            <li class="list-inline-item"><a href="#">Site Map</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Terms of Service</a></li>
                            <li class="list-inline-item"><a href="#">Security & Privacy</a></li>
                            {{--<li class="list-inline-item">--}}
                                {{--<select class="selectpicker show-tick">--}}
                                    {{--<option>English</option>--}}
                                    {{--<option>Frenc</option>--}}
                                    {{--<option>Italian</option>--}}
                                    {{--<option>Spanish</option>--}}
                                    {{--<option>Turkey</option>--}}
                                {{--</select>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
</div>
<!-- Wrapper End -->

@include('layouts.partials.app.footer')

</body>
</html>
