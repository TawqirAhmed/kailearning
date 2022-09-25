<div>
    
<!-- Banner Section Start -->
<section class="banner banner-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content">
                    <h1>Distant learning for further expansion </h1>
                    <p>The ultimate planning solution for people who want to reach their personal goals Effortless comfortable.</p>
                    
                    <div class="banner-form me-5">
                        <form action="#" class="form">
                            <input type="text" class="form-control" placeholder="What do you want to learn?">
                            <a href="#"> Search<i class="far fa-search"></i></a>
                        </form>
                    </div>
                   <div class="category-name">
                       <span>Popular:</span>
                       <a href="#">Design ,</a>
                       <a href="#">Development ,</a>
                       <a href="#">Marketing ,</a>
                       <a href="#">Affiliate</a>
                   </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6  owl-carousel owl-theme" style="width:50%">

                {{-- <div class="banner-img-round mt-5 mt-lg-0">
                    <img src="assets/images/banner/banner_img.png" alt="" class="img-fluid">
                </div>
                <div class=""><h4>1</h4></div> --}}

                @foreach($banners as $key=>$value)
                    <div class="banner-img-round mt-5 mt-lg-0">
                        <img src="{{ asset('') }}uploads/banners/{{ $value->image }}" alt="" class="img-fluid">
                    </div>
                @endforeach

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

{{-- <section class="banner banner-style-1">
    <div class="container" style="max-width: 1333px;">
        <div class="row align-items-center">
            

            <div class="col-md-12 col-xl-12 col-lg-12 owl-carousel owl-theme">
                <div class="banner-img-round mt-5 mt-lg-0 item" style="width:600px">
                    <img src="assets/images/banner/banner_img.png" alt="" class="img-fluid"">
                </div>
                <div class="banner-img-round mt-5 mt-lg-0 item">
                    <img src="assets/images/banner/abcd.jpg" alt="" class="img-fluid"">
                </div>
                <div class=""><h4>1</h4></div>
                <div class="item"><h4>2</h4></div>
                <div class="item"><h4>3</h4></div>
                <div class="item"><h4>4</h4></div>
                <div class="item"><h4>5</h4></div>
                <div class="item"><h4>6</h4></div>
                <div class="item"><h4>7</h4></div>
                <div class="item"><h4>8</h4></div>
                <div class="item"><h4>9</h4></div>
                <div class="item"><h4>10</h4></div>
                <div class="item"><h4>11</h4></div>
                <div class="item"><h4>12</h4></div>
            </div>

        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> --}}
<!-- Banner Section End -->

<!--  Feature Intro Start -->
<section class="features-intro">
    <div class="container">
        <div class="feature-inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4 ">
                    <div class="feature-item feature-style-left">
                        <div class="feature-icon icon-bg-1">
                            <i class="fad fa-users"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Live Courses</h4>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="feature-item feature-style-left">
                        <div class="feature-icon icon-bg-2">
                            <i class="far fa-file-certificate"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Short Courses</h4>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="feature-item feature-style-left">
                        <div class="feature-icon icon-bg-3">
                            <i class="fa fa-video"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Pre-Recorded Courses</h4>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Feature Intro End -->




<!--  Course category -->
<section class="section-padding">
    <div class="container-fluid container-grid">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-50 text-center">
                    <span class="subheading">Top Categories</span>
                    <h2>Browse Courses By Category</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2 mb-20">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Data Science & Analytics</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Web Development</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Artificial Intellegence</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon2.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Digital marketing</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2 ">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Artificial Intellegence</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Web Development</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Data Science & Analytics</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Health & Fitness</a>
                        </h4>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Marketing</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Web Development</a>
                        </h4>
                    </div>
                </div>
            </div>

             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Photography</a>
                        </h4>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2 ">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Data Science</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Course category End -->
<!-- Counter Section start -->
<section class="counter-section-2">
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-xl-5 pr-xl-5 col-lg-8">
                <div class="section-heading mb-5 mb-xl-0 text-center text-xl-start">
                     <span class="subheading">10,000+ Trusted Clients All Over The World</span>
                     <h2 class="font-lg">Some reasons why Start Your Online Learning with Us</h2>
                </div>
             </div>

            <div class="col-xl-7">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-1 mb-4 mb-lg-0">
                            <i class="flaticon-man"></i>
                            <div class="count">
                                <span class="counter h2">2</span><span>k</span>
                            </div>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-2 mb-4 mb-lg-0">
                            <i class="flaticon-infographic"></i>
                            <div class="count">
                                <span class="counter h2">120</span><span>+</span>
                            </div>
                            <p>Online Courses</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-3">
                            <i class="flaticon-satisfaction"></i>
                            <div class="count">
                                <span class="counter h2">100</span><span>%</span>
                            </div>
                            <p>Satisfaction</p>     
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- COunter Section End -->



    <!-- IT course section start-->

    @livewire('web.home.course.it.all-it-courses-component')

    <!-- IT course section end-->

    <!-- Business course section start-->
    
    @livewire('web.home.course.business.all-business-courses-component')

    <!-- Business course section end-->

    <!-- Business course section start-->
       
    @livewire('web.home.course.careertrack.all-career-track-courses-component')
    
    <!-- Career Track course section end-->




<!-- Section cta start -->
<section class="cta-intro section-padding-btm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-12">
                <div class="cta-inner-wrapper">
                   <div class="row justify-content-between align-items-center">
                       <div class="col-xl-8 col-lg-8 col-md-6">
                            <div class="section-heading mb-3 mb-lg-0 text-center text-md-start">
                                <span class="text-color">Let Us Help</span>
                                <h4>Finding Your Right Courses</h4>
                            </div>
                       </div>

                       <div class="col-xl-4 col-lg-4 col-md-6">
                           <div class="text-center text-md-end">
                                <a href="#" class="btn btn-main rounded">Get started</a>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section cta End -->
<!-- Work Process Section Start -->
<section class="work-process-section">
    <div class="container">
        <div class="row mb-70 justify-content-between">
            <div class="col-xl-5">
                <div class="section-heading text-center text-lg-start mb-4 mb-xl-0">
                    <span class="subheading">How to Start</span>
                    <h2 class="font-lg">4 steps start your journey with us</h2>
                </div>
            </div>
            <div class="col-xl-6">
                <p class="text-center text-lg-start">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. 
                    Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="step-wrapper">
                    <div class="step-item ">
                        <div class="step-number bg-1">01</div>
                        <div class="step-text">
                            <h5>Signup with all info</h5>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3  col-lg-6 col-md-6">
                <div class="step-wrapper">
                    <div class="step-item">
                        <div class="step-number bg-2">02</div>
                        <div class="step-text">
                            <h5>Take your Admission</h5>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3  col-lg-6 col-md-6">
                <div class="step-wrapper">
                    <div class="step-item">
                        <div class="step-number bg-3">03</div>
                        <div class="step-text">
                            <h5>Learn from online </h5>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3  col-lg-6 col-md-6">
                <div class="step-wrapper">
                    <div class="step-item">
                        <div class="step-number bg-2">04</div>
                        <div class="step-text">
                            <h5>Get certificate</h5>
                            <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->


@push('scripts')

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        items:1
    });
</script>

@endpush

</div>
