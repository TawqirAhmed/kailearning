<div>
    

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Notices</h4>
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
                        <button type="button" class="btn btn-outline-success waves-effect width-md float-right" data-toggle="modal" data-target="#modalAdd" data-overlaySpeed="200" data-animation="fadein" style="margin-bottom: 20px;">New Notice</button>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap data-table-categories" width="100%">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Created</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach($allNotices as $key=>$value)

                            <input type="hidden" id="{{ $value->id }}hi_des" value="{{ $value->body }}">

                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->short_description }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    <a onclick="editFunction('{{ $value->id }}')" type="button" class="btn btn-outline-warning waves-effect width-md" data-toggle="modal" data-target="#modalEdit" data-overlaySpeed="200" data-animation="fadein" wire:click="getItem('{{ $value->id }}')">Edit</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{ $allNotices->links() }}

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>



    <!--==========================
      =  Modal window for Add   =
      ===========================-->
<div wire:ignore.self id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  role="form" method="post" enctype="multipart/form-data" wire:submit.prevent="Store()">
                @csrf
                <!--=====================================
                    MODAL HEADER
                ======================================-->  
                  <div class="modal-header" style="color: white">
                    <h4 class="modal-title">Add Notice Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
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

                        <!-- TAKING NAME  -->
                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Title:</strong>
                                <input type="text" class="form-control input-lg" name="title" placeholder="Title" required wire:model="title">
                              </div>
                            </div>
                          </div>

                          
                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Short Description:</strong>
                                <textarea class="form-control input-lg" id="id_short_description" name="short_description" placeholder="Short Description" required wire:model="short_description"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="form-group" wire:ignore>          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Notice Body:</strong>
                                <textarea class="form-control input-lg" id="id_body" name="body" placeholder="Notice Body" required></textarea>
                              </div>
                            </div>
                          </div>
                      
                    </div>
                  </div>
                  <!--=====================================
                    MODAL FOOTER
                  ======================================-->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
            </form>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--====  End of module Modal window for Add  ====-->


    <!--==========================
      =  Modal window for Add   =
      ===========================-->
<div wire:ignore.self id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  role="form" method="post" enctype="multipart/form-data" wire:submit.prevent="Update()">
                @csrf
                <!--=====================================
                    MODAL HEADER
                ======================================-->  
                  <div class="modal-header" style="color: white">
                    <h4 class="modal-title">Edit Notice Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
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

                        <!-- TAKING NAME  -->
                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Title:</strong>
                                <input type="text" class="form-control input-lg" name="e_title" placeholder="Title" required wire:model="e_title">
                              </div>
                            </div>
                          </div>

                          
                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Short Description:</strong>
                                <textarea class="form-control input-lg" id="id_short_description" name="short_description" placeholder="Short Description" required wire:model="e_short_description"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="form-group" wire:ignore>          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Notice Body:</strong>
                                <textarea class="form-control input-lg" id="id_e_body" name="e_body" placeholder="Notice Body" required></textarea>
                              </div>
                            </div>
                          </div>

                      
                    </div>
                  </div>
                  <!--=====================================
                    MODAL FOOTER
                  ======================================-->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
            </form>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--====  End of module Modal window for Add  ====-->


@push('scripts')

    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#id_body').summernote({
                height: 400,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false,                 // set focus to editable area after initializing summernote
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('body', contents);
                    }
                }
            });


          });

        function editFunction(id) {
              var des = document.getElementById(id+"hi_des").value;
                // console.log(id);
                // console.log(des);

                $('#id_e_body').summernote({
                    // focus: true,
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('e_body', contents);
                        }
                    }
                }).summernote('code', des);
            }


    </script>

@endpush


</div>
