<div>
    
    {{-- <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>Course Layout 3</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="index.html">Home</a></li>
                  <li class="active" aria-current="page">Courses</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section> --}}
    
    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p><b>{{ $page_link }}</b></p>
                    </div>
    
                    <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text"  placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">        
            <div class="row justify-content-center">

                @if($course_list->count() > 0)
                @foreach($course_list as $key=>$value)
                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="course-grid course-style-3">
                        <div class="course-header">
                            <a href="{{ route('web.course_details',['id'=>$value->id]) }}">
                                <div class="course-thumb">
                                    <img src="{{ asset('') }}assets/images/course/img_01.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                        </div>
        
                        <div class="course-content">
                            <div class="course-meta d-flex justify-content-between mb-20">
                                <span class="category">{{ $value->category->name }}</span>
                                <span class="label"><i class="fas fa-signal me-2"></i>Intermediate</span>
                            </div>
                            <h3 class="course-title mb-20"> <a href="{{ route('web.course_details',['id'=>$value->id]) }}">{{ $value->name }} </a> </h3>
                         
                            <div class="course-meta-info">
                                <div class="d-flex align-items-center">
                                    <div class="author me-3">
                                        <img src="{{ asset('') }}assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                        By <a href="#">{{ $value->mentor->name }}</a>
                                    </div>
                                    <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                                </div>
                            </div>
    
                           <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                                <div class="course-price">TK{{ $value->price }}</div>
                                <a href="#" class="btn btn-main-outline btn-radius btn-sm">Buy Now <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                 </div>
                <!-- COURSE END -->
    
                @endforeach

                @else

                <div>
                    <h1>No course Found!!!</h1>
                </div>

                @endif

            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->

</div>
