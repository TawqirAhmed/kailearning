<div>
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Courses</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 


    <div class="card-body">
        <div class="box-body">
            <div class="col-12">
                <div class="card-box">
                    {{-- <h4 class="header-title">All Users</h4> --}}
                    <div>
                        <a type="button" href="{{ route('admin.add_courses') }}" class="btn btn-outline-success waves-effect width-md float-right" data-overlaySpeed="200" data-animation="fadein" style="margin-bottom: 20px;">New Course</a>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap data-table-categories" width="100%">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Class Time</th>
                            <th>Category</th>
                            <th>Mentor</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>On Sale</th>
                            <th>Published</th>
                            <th>Career Track</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach($allCourses as $key=>$value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <img src="{{ asset('') }}uploads/courses/{{ $value->name }}/{{ $value->image }}" alt="{{ $value->name }}" width="80">
                                </td>
                                <td>{!! $value->class_timing !!}</td>
                                <td>{{ $value->category->name ?? 'Main' }}</td>
                                <td>{{ $value->mentor->name }}</td>
                                <td>{{ $value->price }}</td>
                                <td>{{ $value->sale_price }}</td>
                                <td>{{ $value->on_sale }}</td>
                                <td>{{ $value->published }}</td>
                                <td>{{ $value->career_track }}</td>
                                <td>
                                    <a href="{{ route('admin.edit_courses',['id'=>$value->id]) }}" type="button" class="btn btn-outline-warning waves-effect width-md" data-overlaySpeed="200" data-animation="fadein">Edit</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{ $allCourses->links() }}

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>

</div>
