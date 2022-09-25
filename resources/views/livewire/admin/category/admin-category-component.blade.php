<div>
    

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Course Categories</h4>
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
                        <button type="button" class="btn btn-outline-success waves-effect width-md float-right" data-toggle="modal" data-target="#modalAdd" data-overlaySpeed="200" data-animation="fadein" style="margin-bottom: 20px;">New Category</button>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap data-table-categories" width="100%">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Parent</th>
                            <th>Meta Tags</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach($allCategories as $key=>$value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <img src="{{ asset('') }}uploads/categories/{{ $value->name }}/{{ $value->image }}" alt="{{ $value->name }}" width="80">
                                </td>
                                <td>{{ $value->parents->name ?? 'Main' }}</td>
                                <td>{{ $value->meta_title }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning waves-effect width-md" data-toggle="modal" data-target="#modalEdit" data-overlaySpeed="200" data-animation="fadein" wire:click="getCategory('{{ $value->id }}')">Edit</button>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{ $allCategories->links() }}

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
                    <h4 class="modal-title">Add Category Form</h4>
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
                                <strong>Name:</strong>
                                <input type="text" class="form-control input-lg" name="name" placeholder="Name" required wire:model="name">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Main Category:</strong>
                                <select class="form-control input-lg" name="name" placeholder="parent" required wire:model="main_id">
                                    <option value="">Select Main Category</option>

                                    @foreach($main as $key_main=>$value_main)
                                        <option value="{{ $value_main->id }}">{{ $value_main->name }}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Parent:</strong>
                                <select class="form-control input-lg" name="name" placeholder="parent" required wire:model="sub_id">
                                    <option value="">Select Parent</option>

                                    @foreach($sub as $key_sub=>$value_sub)
                                        <option value="{{ $value_sub->id }}">{{ $value_sub->name }}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>
                          </div>

                          {{-- <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Parent:</strong>
                                <select class="form-control input-lg" name="name" placeholder="parent" required wire:model="parent_id">
                                    <option value="">Select Parent</option>

                                    @foreach($parents as $key_parent=>$value_parent)
                                        <option value="{{ $value_parent->id }}">{{ $value_parent->name }}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>
                          </div> --}}

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Meta Tags:</strong>
                                <input type="text" class="form-control input-lg" name="name" placeholder="Meta Tags" wire:model="meta_title">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Image:</strong>
                                <input type="file" wire:model="image">
                                <br>
                                        
                                @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="120">
                                @endif
                                
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
                    <h4 class="modal-title">Edit Category Form</h4>
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
                                <strong>Name:</strong>
                                <input type="text" class="form-control input-lg" name="e_name" placeholder="Name" required wire:model="e_name">
                              </div>
                            </div>
                          </div>

                          <div class="form-group" wire.ignore>          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Main Category:</strong>
                                <select class="form-control input-lg" name="e_main_id" placeholder="parent" required wire:model="e_main_id">
                                    <option value="">Select Main Category</option>

                                    @foreach($main as $key_main=>$value_main)
                                        <option value="{{ $value_main->id }}">{{ $value_main->name }}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group" wire.ignore>          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Parent:</strong>
                                <select class="form-control input-lg" name="e_sub_id" placeholder="parent" required wire:model="e_sub_id">
                                    <option value="">Select Parent</option>

                                    @foreach($sub as $key_sub=>$value_sub)
                                        <option value="{{ $value_sub->id }}">{{ $value_sub->name }}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Meta Tags:</strong>
                                <input type="text" class="form-control input-lg" name="e_meta_title" placeholder="Meta Tags" wire:model="e_meta_title">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">          
                            <div class="input-group">             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Image:</strong>
                                <input type="file" wire:model="new_image">
                                <br>
                                        
                                @if($new_image)
                                    <img src="{{ $new_image->temporaryUrl() }}" width="120">
                                @else
                                    <img src="{{ asset('') }}uploads/categories/{{ $e_name }}/{{ $e_image }}" width="120">
                                @endif
                                
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
