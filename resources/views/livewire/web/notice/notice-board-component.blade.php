<div>
    
    <!--====== Header End ======-->
    {{-- <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>Blog Grid</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="index.html">Home</a></li>
                  <li class="active" aria-current="page">blog</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section> --}}

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="row">


                        @foreach($notice_list as $key=>$value)

                        <div class="col-xl-6">
                            {{-- <a href="{{ route('web.notice_details',['id'=>$value->id]) }}"> --}}
                                <div class="blog-item mb-30">
                                    {{-- <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/blog1.png" alt="" class="img-fluid"></a>
                                    </div> --}}
                                    <div class="blog-content">
                                        <div class="post-meta">
                                            <span class="post-author">by {{ $value->author }}</span>
                                            <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $value->created_at }}</span>
                                        </div>
                                        <h3 class="post-title"> <a href="{{ route('web.notice_details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>
                                        
                                        <p>{{ $value->short_description }}</p>

                                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                                            <a href="{{ route('web.notice_details',['id'=>$value->id]) }}" class="btn btn-main-outline btn-radius btn-sm">Details <i class="fa fa-long-arrow-right"></i></a>
                                        </div>

                                    </div>

                                </div>
                            {{-- </a> --}}

                        </div>

                        @endforeach


                    </div>
                    
                    
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
        

                        <div class="widget widget_latest_post">
                            <h4 class="widget-title">Latest Notice</h4>
                            <div class="recent-posts">

                                @foreach($latest_notice_list as $key=>$value)
                                    <div class="single-latest-post">
                                        {{-- <div class="widget-thumb">
                                            <a href="blog-single.html"><img src="assets/images/blog/sm3.png" alt="" class="img-fluid"></a>
                                        </div> --}}
                                        <div class="widget-content">
                                            <h5> <a href="{{ route('web.notice_details',['id'=>$value->id]) }}">{{$value->title}}</a></h5>
                                            <span><i class="fa fa-calendar-times"></i>{{$value->created_at}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>


                        {{-- <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                              <li class="cat-item"><a href="#">Web Design</a>(4)</li>
                              <li class="cat-item"><a href="#">Wordpress</a>(14)</li>
                              <li class="cat-item"><a href="#">Marketing</a>(24)</li>
                              <li class="cat-item"><a href="#">Design & dev</a>(6)</li>
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">UX</a>
                            <a href="#">Marketing</a>
                            <a href="#">Tips</a>
                            <a href="#">Tricks</a>
                            <a href="#">Ui</a>
                            <a href="#">Free</a>
                            <a href="#">Wordpress</a>
                            <a href="#">bootstrap</a>
                            <a href="#">Tutorial</a>
                            <a href="#">Html</a>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
