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

    <header class="header-nav style_one navbar-scrolltofixed main-menu">
        <div class="container">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="/assets/images/header-logo.png" alt="header-logo.png">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="index.html" class="navbar_brand float-left dn-smd">
                    <img class="img-fluid mt10" src="/assets/images/header-logo.png" alt="header-logo.png">
                </a>

                {{-- mobile navigation menu and deskop version --}}
                @include('partials.navigation.header')

                <ul class="sign_up_btn pull-right dn-smd mt10">
                    <li>
                        <a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a>
                    </li>
                </ul><!-- Button trigger modal -->



            </nav>
            <!-- End of Responsive Menu -->
        </div>
    </header>

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
                                <hr>
                                <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div>
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
                                <hr>
                                <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div>
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
                <img class="nav_logo_img img-fluid float-left mt25" src="assets/images/header-logo.png" alt="header-logo.png">
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

    <!-- Home Design -->
    <section class="home-one parallax ulockd_bgih1" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row home-content">
                <div class="col-lg-8">
                    <div class="home-text">
                        <h2 class="fz40">Find The Job That Fits Your Life</h2>
                        <p class="color-silver">Each month, more than 7 million jobseekers turn to website in their search for work, making over 160,000 applications every day.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="home-job-search-box mt20 mb20">
                        <form class="form-inline">
                            <div class="search_option_one">
                                <div class="form-group">
                                    <label for="exampleInputName"><span class="flaticon-search"></span></label>
                                    <input type="text" class="form-control h70" id="exampleInputName" placeholder="Job Title or Keywords">
                                </div>
                            </div>
                            <div class="search_option_two">
                                <div class="form-group">
                                    <label for="exampleInputEmail"><span class="flaticon-location-pin"></span></label>
                                    <input type="text" class="form-control h70" id="exampleInputEmail" placeholder="Location">
                                </div>
                            </div>
                            <div class="search_option_button">
                                <button type="submit" class="btn btn-thm btn-secondary h70">Search</button>
                            </div>
                        </form>
                    </div>
                    <p class="color-silver"><span class="color-white">Trending Keywords:</span> DesignCer,  Developer,  Web,  IOS,  PHP,  Senior,  Engineer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Job Categories -->
    <section class="popular-job bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ulockd-main-title">
                        <h3 class="mt0">Popular Job Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg1" style="background-image: url(assets/images/service/1.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-pen"></span></div>
                            <div class="details">
                                <h5>Design, Art & Multimedia</h5>
                                <p>22 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg2" style="background-image: url(assets/images/service/2.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-mortarboard"></span></div>
                            <div class="details">
                                <h5>Education Training</h5>
                                <p>48 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg3" style="background-image: url(assets/images/service/3.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-bars"></span></div>
                            <div class="details">
                                <h5>Accounting / Finance</h5>
                                <p>97 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg4" style="background-image: url(assets/images/service/4.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-interview"></span></div>
                            <div class="details">
                                <h5>Human Resource</h5>
                                <p>17 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg5" style="background-image: url(assets/images/service/5.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-antenna"></span></div>
                            <div class="details">
                                <h5>Telecommunications</h5>
                                <p>60 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg6" style="background-image: url(assets/images/service/6.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-food"></span></div>
                            <div class="details">
                                <h5>Restaurant / Food Service</h5>
                                <p>22 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg7" style="background-image: url(assets/images/service/7.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-customer-support"></span></div>
                            <div class="details">
                                <h5>Construction / Facilities</h5>
                                <p>05 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="icon_hvr_img_box sbbg8" style="background-image: url(assets/images/service/8.jpg);">
                        <div class="overlay">
                            <div class="icon"><span class="flaticon-care"></span></div>
                            <div class="details">
                                <h5>Health</h5>
                                <p>10 Open Positions</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="pjc_all_btn text-center">
                        <a class="btn btn-transparent" href="#">Browse All Categories <span class="flaticon-right-arrow pl10"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It's Work -->
    <section class="popular-job">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ulockd-main-title">
                        <h3 class="mt0">How It Works?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 prpl5">
                    <div class="icon_box_hiw">
                        <div class="icon"><div class="list_tag float-right"><p>1</p></div><span class="flaticon-unlocked"></span></div>
                        <div class="details">
                            <h4>Create An Account</h4>
                            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                    <div class="icon_box_hiw">
                        <div class="icon middle"><div class="list_tag float-right"><p>2</p></div><span class="flaticon-job"></span></div>
                        <div class="details">
                            <h4>Search Jobs</h4>
                            <p>Browse profiles, reviews, and proposals then interview top candidates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                    <div class="icon_box_hiw">
                        <div class="icon"><div class="list_tag float-right"><p>3</p></div><span class="flaticon-trophy"></span></div>
                        <div class="details">
                            <h4>Save & Apply</h4>
                            <p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
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
