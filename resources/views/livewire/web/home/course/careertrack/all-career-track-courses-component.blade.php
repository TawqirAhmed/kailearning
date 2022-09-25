<div>

@if($allCareerCourses->count() > 0)

    <section class="section-padding course-filter-section" id="careerCourses">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-30">
                <div class="col-xl-12">
                    <div class="heading text-center mb-40">
                        {{-- <span class="subheading">Course Trending</span> --}}
                        <h2 class="font-lg">Explore popular Career Track courses</h2>
                    </div>
                
                    <div class="filter-wrap text-center">
                        <ul class="course-filter ">
                            {{-- <li class="active"><a href="#" data-filter="*"> All</a></li>
                            <li><a href="#" data-filter=".cat1">printing</a></li>
                            <li><a href="#" data-filter=".cat2">Web</a></li>
                            <li><a href="#" data-filter=".cat3">illustration</a></li>
                            <li><a href="#" data-filter=".cat4">media</a></li>
                            <li><a href="#" data-filter=".cat5">crafts</a></li> --}}

                            {{-- <li @if($course_filter_it == 0)class="active"@endif><a href="#itCourses" wire:click="filterIT(0)"> All</a></li>

                            <li @if($course_filter_it == 1)class="active"@endif><a href="#itCourses" wire:click="filterIT(1)"> Web Development</a></li>

                            <li @if($course_filter_it == 2)class="active"@endif><a href="#itCourses" wire:click="filterIT(2)"> Mobile Application</a></li> --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container-fluid container-padding" wire:ignore>        
            <div class="row course-gallery justify-content-center">
         
                @foreach($allCareerCourses as $key=>$value)
                                <div class="course-item col-lg-3 col-md-6 col-sm-6">
                                    <div class=" course-style-5 bg-white">
                                        <div class="course-header">
                                            <div class="course-thumb">
                                                <img src="{{ asset('') }}uploads/courses/{{ $value->name }}/{{ $value->image }}" alt="" class="img-fluid" style="height:223px; width: 340px;">
                                                {{-- <div class="course-price">$300</div> --}}
                                            </div>
                                        </div>

                                        <div class="course-content">
                                            <div class="course-meta meta-style-1">
                                                <span class="lessons"><i class="far fa-play-circle me-2"></i>{{ $value->no_of_class }} Lectures</span>
                                                <span class="label">{{ $value->lavel }}</span>
                                            </div>
                                            <h4> <a href="{{ route('web.course_details',['id'=>$value->id]) }}">{{ $value->name }}</a> </h4>
                                        
                                            <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                                                {{-- <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span> --}}
                                                <span class="students"><span class="students"></span></span>
                                                <a href="#" class="rounded-btn"><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                @endforeach

            </div>
        </div>
        <!--course-->


    </section>

@endif

</div>
