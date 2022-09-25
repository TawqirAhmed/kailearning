<div>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Edit Mentor</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="card-body">
        <div class="box-body">
            <div class="col-12">
                <div class="card-box">
                    
                    <form  role="form" method="post" enctype="multipart/form-data" wire:submit.prevent="Update()">
                    @csrf
                    <!--=====================================
                        MODAL HEADER
                    ======================================-->  
                      <div class="modal-header" style="color: white">
                        <h4 class="modal-title">Edit Mentor Form</h4>
                        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                        
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
                            <div class="row">

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Name:</strong>
                                            <input type="text" class="form-control input-lg" name="name" placeholder="Name" required wire:model="name">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Field:</strong>
                                            <input type="text" class="form-control input-lg" name="field" placeholder="Field" required wire:model="field">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                
                                

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group" wire:ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Description:</strong>
                                            
                                            <input type="hidden" id="id_description" value="{{ $description }}">

                                            <textarea class="form-control input-lg" id="description" placeholder="Description"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                
                                

                            </div>
                            <br>

                            


                              <div class="form-group">          
                                <div class="input-group">             
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <strong>Image:</strong>
                                    <input type="file" wire:model="new_image">
                                    <br>
                                    <br>
                                            
                                    @if($new_image)
                                        <img src="{{ $new_image->temporaryUrl() }}" width="120">
                                    @else
                                        <img src="{{ asset('') }}uploads/mentors/{{ $image }}" width="120">
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
                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                      </div>
                </form>




                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>


    @push('scripts')

        <script type="text/javascript">
            
            $(document).ready(function() {

                var des_class_timing = document.getElementById("id_description").value;

                $('#description').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,                 // set focus to editable area after initializing summernote
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('description', contents);
                        }
                    }
                }).summernote('code', des_class_timing);


                


              });

            

        </script>


    @endpush


</div>
