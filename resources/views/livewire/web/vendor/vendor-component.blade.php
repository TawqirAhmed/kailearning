<div>
    
    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        {{-- <p>Showing 1-6 of 8 results</p> --}}
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
            <div class="row ">

                @foreach($vendor_list as $key=>$value)

                    <div class="course-item col-lg-6 col-md-6">
                        <div class="single-course style-2 bg-shade border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5">
                                    {{-- <div class="course-thumb" style="background:url(../assets/images/course/img_01.jpg)"> --}}
                                    <div class="course-thumb" >
                                        {{-- <span class="category">Design</span> --}}
                                        <img src="{{ asset('') }}uploads/vendors/{{ $value->image }}" style="height: 250px;width: 250px;">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-content py-4 pt-xl-0">
                                        {{-- <div class="course-price">$300</div> --}}
                                        <h3 class="course-title"> <a href="#"> {{ $value->name }} </a> </h3>
                                        <div class="course-meta d-flex align-items-center">
                                            {{-- <div class="author">
                                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                              <a href="#">Josephin</a>
                                            </div> --}}
                                            <span class="students"><i class="far fa-user-alt"></i>51 Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                {{ $vendor_list->links() }}
                

            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->


</div>
