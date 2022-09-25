<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Popular Courses</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="card-body">
        <div class="box-body">
            <div class="col-12">
                <div class="card-box">
                    {{-- <h4 class="header-title">Popular IT Courses</h4> --}}
                    
                    <form  role="form" method="post" enctype="multipart/form-data" wire:submit.prevent="Update()">
                @csrf
                <!--=====================================
                    MODAL HEADER
                ======================================-->  
                  {{-- <div class="modal-header" style="color: white">
                    <h4 class="modal-title">Edit Category Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div> --}}
                  <!--=====================================
                    MODAL BODY
                  ======================================-->
                  <div class="modal-body">
                    <div class="box-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        
                        <div class="row">


                            <div class="col-4">
                                <h4 class="header-title">Popular IT Courses</h4>
                                <br>

                                @foreach($it_courses_array as $key_it=>$value_it)

                                    <div class="form-group" wire.ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Position {{ $key_it +1 }}:</strong>
                                            <select class="form-control input-lg" required wire:model="it_courses_array.{{ $key_it }}">
                                                <option value="null">Select Course</option>

                                                @foreach($allITCourses as $key_course_it=>$value_course_it)
                                                    <option value="{{ $value_course_it->id }}">{{ $value_course_it->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>



                            <div class="col-4">
                                <h4 class="header-title">Popular Business Courses</h4>
                                <br>

                                @foreach($business_courses_array as $key_bu=>$value_bu)

                                    <div class="form-group" wire.ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Position {{ $key_bu +1 }}:</strong>
                                            <select class="form-control input-lg" required wire:model="business_courses_array.{{ $key_bu }}">
                                                <option value="null">Select Course</option>

                                                @foreach($allBusinessCourses as $key_course_business=>$value_course_business)
                                                    <option value="{{ $value_course_business->id }}">{{ $value_course_business->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                            <div class="col-4">
                                <h4 class="header-title">Career Track Courses</h4>
                                <br>

                                @foreach($career_courses_array as $key_ca=>$value_ca)

                                    <div class="form-group" wire.ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Position {{ $key_ca +1 }}:</strong>
                                            <select class="form-control input-lg" required wire:model="career_courses_array.{{ $key_ca }}">
                                                <option value="null">Select Course</option>

                                                @foreach($allCareerCourses as $key_course_career=>$value_course_career)
                                                    <option value="{{ $value_course_career->id }}">{{ $value_course_career->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        </div>

                      
                    </div>
                  </div>
                  <!--=====================================
                    MODAL FOOTER
                  ======================================-->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                  </div>
            </form>

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>


</div>
