@extends('layouts.app')

@section('content')
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

    <!-- Features Job List Design -->
    <section class="popular-job bgc-fa pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ulockd-main-title">
                        <h3 class="mt0">Featured Jobs</h3>
                        <a class="text-thm float-right" href="#">Browse All Jobs <i class="flaticon-right-arrow pl15"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12 col-lg-12">
                    <div class="fj_post">
                        <div class="details">
                            <h5 class="job_chedule text-thm mt0">Full Time</h5>
                            <div class="thumb fn-smd">
                                <img class="img-fluid" src="assets/images/partners/1.jpg" alt="1.jpg">
                            </div>
                            <h4>JEB Product Sales Specialist, Russia & CIS</h4>
                            <p>Posted 23 August by <a class="text-thm" href="#">Wiggle CRC</a></p>
                            <ul class="featurej_post">
                                <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
                                <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12">
                    <div class="fj_post">
                        <div class="details">
                            <h5 class="job_chedule text-thm mt0">Part Time</h5>
                            <div class="thumb fn-smd">
                                <img class="img-fluid" src="assets/images/partners/2.jpg" alt="2.jpg">
                            </div>
                            <h4>General Ledger Accountant</h4>
                            <p>Posted 23 August by <a class="text-thm" href="#">Robert Half Finance & Accounting</a></p>
                            <ul class="featurej_post">
                                <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">RG40, Wokingham</a></li>
                                <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="fj_post">
                        <div class="details">
                            <h5 class="job_chedule text-thm mt0">Full Time</h5>
                            <div class="thumb fn-smd">
                                <img class="img-fluid" src="assets/images/partners/3.jpg" alt="3.jpg">
                            </div>
                            <h4>Junior Digital Graphic Designer</h4>
                            <p>Posted 23 August by <a class="text-thm" href="#">Parkside Recruitment - Uxbridge Finance</a></p>
                            <ul class="featurej_post">
                                <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
                                <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="fj_post">
                        <div class="details">
                            <h5 class="job_chedule text-thm mt0">Full Time</h5>
                            <div class="thumb fn-smd">
                                <img class="img-fluid" src="assets/images/partners/4.jpg" alt="4.jpg">
                            </div>
                            <h4>UX/UI Designer</h4>
                            <p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
                            <ul class="featurej_post">
                                <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
                                <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Browse Local Jobs -->
    <section class="job-location pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ulockd-main-title">
                        <h3 class="mt0">Browse Local Jobs</h3>
                        <a class="text-thm float-right" href="#">Browse All Local Jobs <i class="flaticon-right-arrow pl15"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/9.jpg" alt="9.jpg"></div>
                        <div class="details">
                            <h4>London</h4>
                            <h5>152,141</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/10.jpg" alt="10.jpg"></div>
                        <div class="details">
                            <h4>Manchester</h4>
                            <h5>586,478</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/11.jpg" alt="11.jpg"></div>
                        <div class="details">
                            <h4>Liverpool</h4>
                            <h5>15,258</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/12.jpg" alt="12.jpg"></div>
                        <div class="details">
                            <h4>Istanbul</h4>
                            <h5>152,141</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/13.jpg" alt="13.jpg"></div>
                        <div class="details">
                            <h4>New York</h4>
                            <h5>586,478</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="job_loc_img_box">
                        <div class="thumb"><img class="img-fluid" src="assets/images/service/14.jpg" alt="14.jpg"></div>
                        <div class="details">
                            <h4>Los Angeles</h4>
                            <h5>15,258</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
