<div>
    

    <section class="tutori-course-single tutori-course-layout-3 page-wrapper">
        <div class="container">

                <div class="course-header-wrapper mb-0 bg-transparent">
                      <h1 class="mb-3">{{ $course_info->name }}</h1>
                </div>


            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="tutori-course-content">
                        <nav class="course-single-tabs learn-press-nav-tabs">
                            <div class="nav nav-tabs course-nav" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home-tab" aria-selected="true">Overview</a>
                                <a class="nav-item nav-link" id="nav-topics-tab" data-bs-toggle="tab" href="#nav-topics" role="tab" aria-controls="nav-topics-tab" aria-selected="false">Curriculam</a>
                                <a class="nav-item nav-link" id="nav-instructor-tab" data-bs-toggle="tab" href="#nav-instructor" role="tab" aria-controls="nav-instructor-tab" aria-selected="false">Instructor</a>
                                {{-- <a class="nav-item nav-link" id="nav-feedback-tab" data-bs-toggle="tab" href="#nav-feedback" role="tab" aria-controls="nav-feedback-tab" aria-selected="false">Reviews</a> --}}
                            </div>
                        </nav>
                        <div class="tab-content tutori-course-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="single-course-details ">
                                    {!! $course_info->overview !!}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                                <div class="tutori-course-curriculum" >
                                    <div class="curriculum-scrollable">
                                        <ul class="curriculum-sections">


                                            {{-- <li class="section">
                                                <div class="section-header">
                                                    <div class="section-left">
                                                        <h5 class="section-title">Change simplification</h5>
                                                        <p class="section-desc">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                                                    </div>
                                                </div>
                                  
                                                <ul class="section-content">

                                                    <li class="course-item has-status course-item-lp_lesson">
                                                      <a class="section-item-link" href="#">
                                                        <span class="item-name">The importance of data nowsaday</span>
                                                        <div class="course-item-meta">
                                                          <span class="item-meta duration">10.30 min</span>
                                                          <i class="item-meta course-item-status"></i>
                                                        </div>
                                                      </a>
                                                    </li>

                                                    <li class="course-item has-status course-item-lp_lesson">
                                                        <a class="section-item-link" href="#">
                                                            <span class="item-name">Why my organization should know about data</span>
                                                            <div class="course-item-meta">
                                                            <span class="item-meta duration">20.30 min</span>
                                                            <i class="item-meta course-item-status" ></i>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    
                                                </ul>
                                            </li>
                                            <!-- section end --> --}}

                                            <li class="section">
                                                <div style="padding-left: 20px;">
                                                {!! $course_info->curriculam !!}
                                                </div>
                                            </li>
                                            <!-- section end -->
                                            
                                        </ul>
                                        <!-- Main ul end -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab">
                                <!-- Course instructor start -->
                                <div class="courses-instructor">
                                    <div class="single-instructor-box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4">
                                                <div class="instructor-image">
                                                    <img src="{{ asset('') }}uploads/mentors/{{ $course_info->mentor->image }}" alt="" class="img-fluid" style="height: 350px;width: 350px;">
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-md-8">
                                                <div class="instructor-content">
                                                    <h4><a href="#">{{ $course_info->mentor->name }}</a></h4>
                                                    <span class="sub-title">{{ $course_info->mentor->field }}</span>
                                                    
                                                    <p>{!! $course_info->mentor->description !!}</p>
                                                    
                                                    <div class="intructor-social-links">
                                                        <span class="me-2">Follow Me: </span>
                                                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"> <i class="fab fa-twitter"></i></a>
                                                        <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                                                        <a href="#"> <i class="fab fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Conurse  instructor end -->
                            </div>

                            {{-- <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                                <div id="course-reviews">
                                    <ul class="course-reviews-list">

                                       <li>
                                           no review!!!!
                                       </li>

                                        <li>
                                            <div class="course-review">
                                                <div class="course-single-review">
                                                    <div class="user-image">
                                                        <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                                    </div>

                                                    <div class="user-content user-review-content">
                                                       <div class="review-header mb-10">
                                                            <h4 class="user-name">Tutori</h4>
                                                            <p class="review-title">Cover all topicc  </p>
                                                            <div class="rating review-stars-rated">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <div class="review-content">
                                                            The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>   
                                                   
                                    </ul>
                                </div>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                         <!-- Course Sidebar start -->
                    <div class="course-sidebar course-sidebar-3 mt-5 mt-lg-0">
                        <div class="course-widget course-details-info ">
                            <div class="course-thumbnail">
                                <img src="{{ asset('') }}uploads/courses/{{ $course_info->name }}/{{ $course_info->image }}" alt="" class="img-fluid w-100">
                            </div>

                            <div class="course-sidebar-details">
                                <div class="price-header">
                                    <h2 class="course-price">TK{{ $course_info->sale_price }} <span>TK{{ $course_info->price }}</span></h2>
                                    <span class="course-price-badge onsale">39% off</span>
                                </div>
                                <ul class="course-sidebar-list">
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><i class="far fa-sliders-h"></i>Level</span>
                                            {{ $course_info->lavel }}
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><i class="fas fa-play-circle"></i>Duretion</span>
                                            {{ $course_info->duration }}
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><i class="fas fa-play-circle"></i>Lectures</span>
                                            {{ $course_info->no_of_class }}
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><i class="fas fa-play-circle"></i>Timing</span>
                                            {{-- {{ $course_info->class_timing }} --}}
                                            {!! $course_info->class_timing !!}
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><i class="far fa-calendar"></i>Updated </span>
                                            {{ $course_info->updated_at }}
                                        </div>
                                    </li>
                                </ul>

                                <div class="buy-btn">
                                    <button class="button button-enroll-course btn btn-main rounded">
                                        <i class="far fa-shopping-cart me-2"></i> Enroll Course 
                                    </button>
                                </div>

                                {{-- <div class="course-meterial">
                                    <h4 class="mb-3">Material Includes</h4>
                                    <ul class="course-meterial-list">
                                        <li><i class="fal fa-long-arrow-right"></i>Videos</li>
                                        <li><i class="fal fa-long-arrow-right"></i>Files For Development</li>
                                        <li><i class="fal fa-long-arrow-right"></i>Documentation Files</li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Course Sidebar end -->
                    <div class="course-latest">
                        <h4 class="mb-4">Popular Courses</h4>
                        <ul class="recent-posts course-popular">
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#"><img src="assets/images/course/course-1.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-post-body">
                                    <h6> <a href="#">Wordpress Theme Development</a></h6>
                                    <h5>$120</h5>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#"><img src="assets/images/course/course-2.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-post-body">
                                    <h6> <a href="#">mastering Photoshop for beginners</a></h6>
                                    <h5>$100</h5>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#"><img src="assets/images/course/course-3.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-post-body">
                                    <h6> <a href="#">Photography mastering adobe tool</a></h6>
                                    <h5>$100</h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    
               </div>
            </div>
        </div>
    </section>

</div>
