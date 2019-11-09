@extends('customer.master')
@section('content')
@include('customer.partials.header')


<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="bg-overlay black opacity-60"></div>
    <div class="container">
        <h1>Request Service</h1>
    </div>
</div>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">
    <section class="sidebar-overflow">
        <div class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="single-content-gap">
                            <!-- Request Form Start -->
                            <form action="{{ route('request_service.store') }}" method="post" id="contactusForm" novalidate="novalidate" class="rounded-field gray-field cmxform">
                                {{ csrf_field() }}
                                <div class="col">
                                    <input type="hidden" name="form5" class="form-control" placeholder="Your Name" value="5" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{ $user->fname }}" disabled>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Address<span class="text-danger">*</span></label>
                                        <select name="address" id="" class="form-control">

                                            @foreach($address as $add)

                                            <option value="{{ $add->address }}">{{ $add->address }}</option>

                                            @endforeach
                                        </select>


                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="email">Email<span class="text-danger">*</span></label>
                                        <input type="text" id="email" class="form-control" placeholder="" value="{{ $user->email }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                        <input type="text" name="phone5" name="phone" class="form-control" value="{{ $user->phone }}" disabled>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <fieldset>
                                    <h3 class="mb-3 h3-sm">Type Of Product You Interested<span class="text-danger">*</span></h3>
                                    <select name="service_name" id="" class="col-md-6">
                                        @foreach($services as $service)
                                        <option value="{{ $service->sname }}"><b>{{ $service->sname }}</b></option>
                                        @endforeach
                                    </select>

                                </fieldset>

                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Best_Time">Best Time<span class="text-danger">*</span></label>
                                        <select title="Please select any one" required name="service_time" id="Best_Time" class="custom-select" aria-invalid="false">
                                            <option value="09am-12pm">09 AM - 12 PM</option>
                                            <option value="12pm-03pm">12 PM - 03 PM</option>
                                            <option value="03pm-06pm">03 PM - 06 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Hear_About">Hear About Us<span class="text-danger">*</span></label>
                                        <select title="Please select any one" required="" name="hearAbout" id="Hear_About" class="custom-select" aria-invalid="false">
                                            <option value="">Please select</option>
                                            <option value="Friends">Friends</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Google">Google</option>
                                            <option value="Collegue">Collegue</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea rows="7" name="message" id="cment" placeholder="Describe your problem" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-center">

                                    <button name="contactForm" id="contactForm" type="submit" class="form-btn mx-auto btn-theme bg-pink large">Submit Now</button>
                                </div>
                            </form>
                            <!-- Request Form End -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 sidebar-right">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Search Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Search</h3>
                                    <form class="flex-nowrap col ml-auto sidebar-search p-0">
                                        <input type="text" class="form-control" placeholder="Search …">
                                        <button type="submit" class="btn"><i class="icofont-search p-0"></i></button>
                                    </form>
                                </div>
                                <!-- Search Widget End -->

                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                                    <div class="blog-list-footer">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_1.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Do Plumbers Install Gas Lines?</a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_2.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Plumbing Tips For Summer</a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="images/blog/post_thumb_3.jpg" alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#">Know Your Plumbing Pipe </a></h5>
                                                        <div class="comment-box">
                                                            <span>Jan 16, 2019</span>
                                                            <span><a href="#"><i class="icofont-comment"></i> 07</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center">
                                    <div class="emergency-service">
                                        <h3 class="h3-md fw-5 txt-orange mb-4 fw-6">Emergency Service</h3>
                                        <p>A team of plumbing professionals who are there when you need them, Just call.</p>
                                        <a href="#" class="btn-theme bg-pink oval mt-3">Call Us Now</a>
                                    </div>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Catagories</h3>
                                    <div class="blog-sidebar-links">
                                        <ul class="list-unstyled">
                                            <li class="active"><a href="href.html"><i class="icofont-rounded-right"></i> Business</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> Web Design</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> Graphics Design</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> E-Commerce</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> WordPress Theme</a></li>
                                            <li><a href="#"><i class="icofont-rounded-right"></i> HTML5/CSS3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Photostream Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Customer Testimonials</h3>
                                    <div class="owl-carousel owl-theme rounded-top-arrow" id="client-testimonials-sidebar">

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_1.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_2.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_3.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                        <!-- Client Testimonials Slider Item -->
                                        <div class="item">
                                            <div class="client-testimonial-2">
                                                <p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>
                                                <img src="images/team_1.jpg" alt="">
                                                <h3>John Morise <span>Founder</span></h3>
                                                <div class="rating">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span><i class="icofont-star"></i>
                                                        <i class="icofont-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Client Testimonials Slider Item -->

                                    </div>
                                </div>
                                <!-- Photostream Widget End -->

                                <!-- Text Widget Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Text Widget</h3>
                                    <p>Explain to you how all this mistaken idea of hovered link and praising pain was born and I will give you a complete count of the system expound</p>
                                </div>
                                <!-- Text Widget Widget End -->
                            </div>
                            <!-- Sidebar Secondary Start -->
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('customer.partials.footer')
@endsection