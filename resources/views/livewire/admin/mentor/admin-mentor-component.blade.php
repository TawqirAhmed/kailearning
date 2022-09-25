<div>
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Mentors</h4>
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
                        <a type="button" href="{{ route('admin.add_mentors') }}" class="btn btn-outline-success waves-effect width-md float-right" data-overlaySpeed="200" data-animation="fadein" style="margin-bottom: 20px;">New Mentor</a>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap data-table-categories" width="100%">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Field</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach($allMrntors as $key=>$value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <img src="{{ asset('') }}uploads/mentors/{{ $value->image }}" alt="{{ $value->name }}" width="80">
                                </td>
                                <td>{{ $value->field }}</td>
                                <td>
                                    <a href="{{ route('admin.edit_mentors',['id'=>$value->id]) }}" type="button" class="btn btn-outline-warning waves-effect width-md" data-overlaySpeed="200" data-animation="fadein">Edit</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{ $allMrntors->links() }}

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>

</div>
