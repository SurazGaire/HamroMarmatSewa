@extends('customer.master')
@section('content')
@include('customer.partials.header')

<!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page" style="padding-bottom:25px;">
        <div class="bg-overlay black opacity-60"></div>
        <div class="container">
            <h1>About Us</h1>
        </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- About Us Section Start -->
        <section class="wide-tb-100" style="padding-bottom:50px; padding-top:60px;">
            <div class="container">
                <div class="row">
                    <!-- Tabbing Start -->
                    <div class="col-sm-12">
                        <div class="row no-gutters d-flex">
                            <div class="col-lg-5 col-md-12 mb-0" style="background: url({{ URL::to('/')}}/public/customer/images/tabbing_img.jpg) no-repeat top center; background-size: cover; min-height: 450px;">
                                &nbsp;
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="bg-navy-blue center-tabbing-dark h-100">
                                    <div class="p-5">
                                        <h2 class="h2-sm txt-white mb-4">With More Than 50 Years of Combined Experience</h2>
                                        <p>We partner with over 320 amazing seds projects worldwide, and have given over million in cash & product grants to other groups since 2015 our own dynamic suite.
                                        There anyone who loves or pursues or desires to obtain pain of it is because seds all occasionally circumstances.</p>

                                        <ul class="list-unstyled icons-listing theme-orange w-half mb-0 mt-5">
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;"><i class="icofont-check"></i>Plumbing sales</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="icofont-check"></i>Mainline clearing</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i class="icofont-check"></i>Fixture installation</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><i class="icofont-check"></i>Water jetting</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i class="icofont-check"></i>Faucets and sinks</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="icofont-check"></i>Plumbing repairs</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"><i class="icofont-check"></i>Heat pump services</li>
                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"><i class="icofont-check"></i>Garbage disposal services</li>

                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"><i class="icofont-check"></i>Sewer line service</li>

                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"><i class="icofont-check"></i>Leak detection</li>

                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"><i class="icofont-check"></i>Leak repairs</li>

                                            <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"><i class="icofont-check"></i>Trenchless piping</li>

                                            
                                        </ul>

                                        <div class="d-sm-flex align-items-center mt-4 pos-rel about-call-text">
                                            <a href="#" class="play-video about-video-link"><i class="icofont-play icofont-2x"></i></a>
                                            <div class="txt-white mx-4 fw-6">If you need any emergency plumbing service, 
                                            simply call our 24 hour emergency number</div>
                                            <a href="#" class="btn-theme bg-white bordered text-nowrap col-md-auto">(855) 982-2028</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabbing End -->
                </div>
            </div>
        </section>
        <!-- About Us Section End -->

        <!-- Statistics Counter Section Start -->
        <section class="wide-tb-100 bg-scroll bg-4 pos-rel">
            <div class="bg-overlay blue opacity-70"></div>
            <div class="container wide-tb-100" >
                <div class="row">
                    <!-- Heading Start -->
                    <div class="col-sm-12 text-center mb-4">
                        <div class="display-head">
                            <span class="txt-pink"> Some Of Our Facts</span>
                        </div>
                    </div>
                    <!-- Heading End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">1780</span>
                        <span>+</span>
                        <div>
                            Google Reviews
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">7890</span>
                        <span>+</span>
                        <div>
                            Happy Customers Served
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->                

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span class="counter">50</span>
                        <span>+</span>
                        <div>
                            Vehicle Owned
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6">
                        <span>A+</span>
                        <div>
                            BBB Rating
                        </div>
                    </div>
                    <!-- Counter Col End -->
                </div>
            </div>        
        </section>
        <!-- Statistics Counter Section End -->

        <!-- Why Choose Us Start -->
        <section class="wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="img-business-man">
                        <img src="{{ URL::to('/')}}/public/customer/images/plumbing-man.png" alt="">
                    </div>
                    <div class="col-sm-12 text-center">
                        <!-- Heading Start -->
                        <div class="display-head">
                            Few Reasons To Choose Us
                        </div>
                        <div class="display-lead txt-black">
                            More Than 50 Years of Combined Experience in Every Job
                        </div>
                        <!-- Heading End -->
                    </div>

                    <div class="col-md-12 col-lg-6 mt-5 ml-auto why-choose wow fadeInRight" data-wow-duration="0" data-wow-delay="0.6s">
                        <div class="row">
                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-clock-time"></i>
                                        </div>
                                        Always <br>Available
                                    </div>
                                    <p>Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>
                            </div>
                            <!-- Icon Box -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-users-alt-3"></i>
                                        </div>
                                        Qualified<br>Agents
                                    </div>
                                    <p>Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>              
                            </div>
                            <!-- Icon Box -->

                            <!-- Spacer For Medium -->
                            <div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>
                            <!-- Spacer For Medium -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-bullhorn"></i>
                                        </div>
                                        Best<br>Offers

                                    </div>
                                    <p>Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>              
                            </div>
                            <!-- Icon Box -->

                            <!-- Icon Box 2 -->
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">              
                                <div class="icon-box-2">
                                    <div class="icon-wrap d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icofont-dollar"></i>
                                        </div>
                                        Fair<br>Prices
                                    </div>
                                    <p>Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>              
                            </div>
                            <!-- Icon Box -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Why Choose Us End -->

        <!-- Callouts Start -->
        <section class="wide-tb-100 bg-fixed bg-1 pos-rel txt-white callout-style-1">
            <div class="bg-overlay black opacity-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>If you need any emergency plumbing service, simply call our 24 hour emergency number</p>
                        <div class="display-head">
                            Our Reliable Emergency Plumbing<br>Service with Fair rateslity
                        </div>
                        <a href="#" class="btn-theme bg-pink large">(855) 982-2028</a>
                    </div>
                </div>            
            </div>        
        </section>
        <!-- Callouts End -->

        <!-- Our Team Section Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Main Heading Start -->
                    <div class="col-sm-12">
                        <div class="heading-wrap d-flex align-items-center">
                            <div class="heading-main">
                                <span>Fast & Expert</span>
                                Our Team
                            </div>
                            <div class="sub-head-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                            </div>
                        </div>
                    </div>
                    <!-- Main Heading End -->

                    <!-- Team Members Start -->
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-one">
                            <img src="{{ URL::to('/')}}/public/customer/images/team/team_img_1.jpg" alt="">
                            <div class="team-social-one">
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-snapchat"></i></a>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </div>
                            <h3>John Morise</h3>
                            <p>Founder</p>
                        </div>
                    </div>
                    <!-- Team Members End -->

                    <!-- Team Members Start -->
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-one">
                            <img src="{{ URL::to('/')}}/public/customer/images/team/team_img_2.jpg" alt="">
                            <div class="team-social-one">
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-snapchat"></i></a>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </div>
                            <h3>Kevin Mash</h3>
                            <p>Head Plumber</p>
                        </div>
                    </div>
                    <!-- Team Members End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Team Members Start -->
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-one">
                            <img src="{{ URL::to('/')}}/public/customer/images/team/team_img_3.jpg" alt="">
                            <div class="team-social-one">
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-snapchat"></i></a>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </div>
                            <h3>Mike Douglos</h3>
                            <p>Head Plumber</p>
                        </div>
                    </div>
                    <!-- Team Members End -->

                    <!-- Team Members Start -->
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-one">
                            <img src="{{ URL::to('/')}}/public/customer/images/team/team_img_4.jpg" alt="">
                            <div class="team-social-one">
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-snapchat"></i></a>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </div>
                            <h3>Sara Jones</h3>
                            <p>Customer Support</p>
                        </div>
                    </div>
                    <!-- Team Members End -->

                </div>
            </div>
        </section>
        <!-- Our Team Section End -->

        <!-- Vision/Mission Section Start -->
        <section class="wide-tb-100 bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ul class="nav nav-pills theme-tabbing mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Our History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our Mission</a>
                            </li>
                        </ul>
                        <div class="tab-content theme-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4 class="h4-lg mb-4">Courtesy may not be the first thing people think of when it comes to plumbing, but for us, it's one of the most important tools we carry.</h4>
                                <p>We partner with over 320 amazing seds projects worldwide, and have given over million in cash & product grants to other groups since 2015 our own dynamic suite. There anyone who loves or pursues or desires to obtain pain of it is because seds all occasionally circumstances.</p>

                                <p class="mt-4">Need assistance dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4 class="h4-lg mb-4">Courtesy may not be the first thing people think of when it comes to plumbing, but for us, it's one of the most important tools we carry.</h4>
                                <p>We partner with over 320 amazing seds projects worldwide, and have given over million in cash & product grants to other groups since 2015 our own dynamic suite. There anyone who loves or pursues or desires to obtain pain of it is because seds all occasionally circumstances.</p>

                                <p class="mt-4">Need assistance dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Animated Skillbars Start -->
                    <div class="col-md-6 col-sm-12">
                      <h3 class="h3-sm fw-6 txt-blue mb-4">Our Expertise</h3>
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Outdoors Plumbing
                          </div>
                          <div class="skillbar" data-percent="95%">
                              <div class="skillbar-percent">95%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                      
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Commercial Plumbing
                          </div>
                          <div class="skillbar" data-percent="75%">
                              <div class="skillbar-percent">75%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                      
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Leak Detection
                          </div>
                          <div class="skillbar" data-percent="50%">
                              <div class="skillbar-percent">50%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                      
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Water Damage
                          </div>
                          <div class="skillbar" data-percent="95%">
                              <div class="skillbar-percent">95%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Availability
                          </div>
                          <div class="skillbar" data-percent="60%">
                              <div class="skillbar-percent">60%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                      <div class="skillbar-wrap">
                          <div class="clearfix">
                              Customer Support
                          </div>
                          <div class="skillbar" data-percent="95%">
                              <div class="skillbar-percent">95%</div>
                              <div class="skillbar-bar"></div>
                          </div>             
                      </div>
                  </div>
                  <!-- Animated Skillbars Start -->
                </div>
            </div>
        </section>
        <!-- Vision/Mission Section End -->

        <!-- Our Customer Section Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Main Heading Start -->
                    <div class="col-sm-12">
                        <div class="heading-wrap d-flex align-items-center">
                            <div class="heading-main">
                                <span>What Our</span>
                                Customer Say’s
                            </div>
                            <div class="sub-head-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                            </div>
                        </div>
                    </div>
                    <!-- Main Heading End -->

                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme rounded-top-arrow" id="home-client-testimonials">

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="{{ URL::to('/')}}/public/customer/images/team_1.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="images/team_2.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle">
                                            <img src="{{ URL::to('/')}}/public/customer/images/team_3.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <h3>John Morise</h3>
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                            <div class="rating">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span><i class="icofont-star"></i>
                                                <i class="icofont-star"></i></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Our Customer Section End -->

        <!-- Our Blog Section Start -->
        <section class="wide-tb-100 bg-navy-blue">
            <div class="container">
                <div class="row">
                    <!-- Main Heading Start -->
                    <div class="col-sm-12">
                        <div class="heading-wrap d-flex align-items-center light">
                            <div class="heading-main">
                                <span>From Our Blog</span>
                                Latest News
                            </div>
                            <div class="sub-head-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                            </div>
                        </div>
                    </div>
                    <!-- Main Heading End -->


                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-wrap-dark">
                            <a href="blog-single.html"><img src="{{ URL::to('/')}}/public/customer/images/blog/blog_post_1.jpg" alt=""></a>
                            <div class="blog-content">
                                <div class="meta-box">
                                    <span>Jan 16, 2019</span>
                                    <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                </div>
                                <h4 class="h4-md mb-3"><a href="blog-single.html">Mandating Solar Panels on New Homes</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>

                                <a href="blog-single.html" class="btn-theme bg-pink">Read More  <i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Items -->

                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-wrap-dark">
                            <a href="blog-single.html"><img src="{{ URL::to('/')}}/public/customer/images/blog/blog_post_2.jpg" alt=""></a>
                            <div class="blog-content">
                                <div class="meta-box">
                                    <span>Jan 16, 2019</span>
                                    <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                </div>
                                <h4 class="h4-md mb-3"><a href="blog-single.html">Radiant Heating Systems For Homes</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>

                                <a href="blog-single.html" class="btn-theme bg-pink">Read More  <i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Items -->

                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-wrap-dark">
                            <a href="blog-single.html"><img src="{{ URL::to('/')}}/public/customer/images/blog/blog_post_3.jpg" alt=""></a>
                            <div class="blog-content">
                                <div class="meta-box">
                                    <span>Jan 16, 2019</span>
                                    <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                </div>
                                <h4 class="h4-md mb-3"><a href="blog-single.html">Mandating Solar Panels on New Homes</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>

                                <a href="blog-single.html" class="btn-theme bg-pink">Read More  <i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Items -->

                </div>
            </div>
        </section>
        <!-- Our Blog Section End -->

        <!-- Our Partners Section Start -->
        <section class="wide-tb-50 bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner1.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner2.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner3.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner4.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner5.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ URL::to('/')}}/public/customer/images/partners/partner6.png" alt="">
                            </div>
                            <!-- Client Logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Partners Section End -->  
    </main>

   @include('customer.partials.footer')

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">    
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-md-1">
                        <i class="icofont-search"></i>
                    </div> 
                    <div class="col-10">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <div class="video-box">
        <!-- close-video -->
        <div class="close-video">
            <i class="icofont-close-line"></i>
        </div><!-- /close-video -->
    </div><!-- /video-box -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
    <!-- Back To Top End -->
@endsection