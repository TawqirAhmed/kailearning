<div>
    

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Events</h4>
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
                        <button type="button" class="btn btn-outline-success waves-effect width-md float-right" data-toggle="modal" data-target="#modalAdd" data-overlaySpeed="200" data-animation="fadein" style="margin-bottom: 20px;">New Event</button>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap data-table-categories" width="100%">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Title</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Created</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach($allEvents as $key=>$value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->start }}</td>
                                <td>{{ $value->end }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning waves-effect width-md" data-toggle="modal" data-target="#modalEdit" data-overlaySpeed="200" data-animation="fadein" wire:click="getItem('{{ $value->id }}')">Edit</button>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{ $allEvents->links() }}

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
                    <h4 class="modal-title">Add Event Form</h4>
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
                                <strong>Start:</strong>
                                <input type="datetime-local" class="form-control input-lg" name="start" placeholder="Start" required wire:model="start">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>End:</strong>
                                <input type="datetime-local" class="form-control input-lg" name="end" placeholder="End" required wire:model="end">
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
                    <h4 class="modal-title">Edit Event Form</h4>
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
                                <strong>Start:</strong>
                                <input type="datetime-local" class="form-control input-lg" name="e_start" placeholder="Start" required wire:model="e_start">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>End:</strong>
                                <input type="datetime-local" class="form-control input-lg" name="e_end" placeholder="End" required wire:model="e_end">
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

</div>
