<div>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    
                </div>
                <h4 class="page-title">Add New Courses</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="card-body">
        <div class="box-body">
            <div class="col-12">
                <div class="card-box">
                    
                    <form  role="form" method="post" enctype="multipart/form-data" wire:submit.prevent="Store()">
                    @csrf
                    <!--=====================================
                        MODAL HEADER
                    ======================================-->  
                      <div class="modal-header" style="color: white">
                        <h4 class="modal-title">Add Course Form</h4>
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
                                            <strong>Tags:</strong>
                                            <input type="text" class="form-control input-lg" name="name" placeholder="Tags" required wire:model="tags">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>price:</strong>
                                            <input type="number" class="form-control input-lg" name="price" placeholder="price" required wire:model="price">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Sale Price:</strong>
                                            <input type="text" class="form-control input-lg" name="sale_price" placeholder="Sale Price" required wire:model="sale_price">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Lavel:</strong>
                                            <select class="form-control input-lg" required wire:model="lavel">
                                                <option value="">Select Lavel</option>
                                                <option value="Beginnner">Beginnner</option>
                                                <option value="Advanced">Advanced</option>
                                                <option value="Expart">Expart</option>
                                                
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Vendor:</strong>
                                             <select class="form-control input-lg" required wire:model="vendor_id">
                                                <option value="">Select Vendor</option>
                                                
                                                @foreach($allVendors as $ven_key=>$ven_value)
                                                    <option value="{{ $ven_value->id }}">{{ $ven_value->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Mentor:</strong>
                                             <select class="form-control input-lg" required wire:model="mentor_id">
                                                <option value="">Select Mentor</option>

                                                @foreach($allMentors as $men_key=>$men_value)
                                                    <option value="{{ $men_value->id }}">{{ $men_value->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <br>

                            <div class="row">
                                
                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Main Category:</strong>
                                             <select class="form-control input-lg" required wire:model="main_id">
                                                <option value="">Select Main Category</option>
                                                
                                                @foreach($main as $main_key=>$main_value)
                                                    <option value="{{ $main_value->id }}">{{ $main_value->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Sub-Category:</strong>
                                             <select class="form-control input-lg" required wire:model="sub_id">
                                                <option value="">Select Sub-Category</option>
                                                
                                                @foreach($sub as $sub_key=>$sub_value)
                                                    <option value="{{ $sub_value->id }}">{{ $sub_value->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Category:</strong>
                                             <select class="form-control input-lg" required wire:model="category_id">
                                                <option value="">Select Category</option>
                                                
                                                @foreach($category as $cat_key=>$cat_value)
                                                    <option value="{{ $cat_value->id }}">{{ $cat_value->name }}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Duration:</strong>
                                            <input type="text" class="form-control input-lg" name="duration" placeholder="Duration" required wire:model="duration">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>No Of Classes:</strong>
                                            <input type="number" class="form-control input-lg" name="no_of_class" placeholder="No Of Classes" required wire:model="no_of_class">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Vendor Exam:</strong>
                                            <input type="text" class="form-control input-lg" name="vendor_exam" placeholder="Vendor Exam" wire:model="vendor_exam">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Branch:</strong>
                                            <input type="text" class="form-control input-lg" name="branch" placeholder="Branch" wire:model="branch">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <br>
                              
                            <div class="row">

                                <div class="col-3">
                                    <div class="form-group" wire:ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Class Timing:</strong>
                                            
                                            <input type="hidden" id="id_class_timing" value="{{ $class_timing }}">

                                            <textarea class="form-control input-lg" id="class_timing" placeholder="Class Timing"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group" wire:ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Overview:</strong>
                                            
                                            <input type="hidden" id="id_overview" value="{{ $overview }}">

                                            <textarea class="form-control input-lg" id="overview" placeholder="Overview"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group" wire:ignore>          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Curriculam:</strong>
                                            
                                            <input type="hidden" id="id_curriculam" value="{{ $curriculam }}">

                                            <textarea class="form-control input-lg" id="curriculam" placeholder="Curriculam"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                
                            </div>
                            <br>

                            <div class="row">
                                
                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>On Sale:</strong>
                                             <select class="form-control input-lg" required wire:model="on_sale">
                                                <option value="">Select</option>
                                                
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Sale End:</strong>
                                                <input type="date" class="form-control input-lg" wire:model="sale_end">
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Published:</strong>
                                             <select class="form-control input-lg" required wire:model="published">
                                                <option value="">Select</option>
                                                
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">          
                                        <div class="input-group">             
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <strong>Career Track:</strong>
                                             <select class="form-control input-lg" required wire:model="career_track">
                                                <option value="">Select</option>
                                                
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
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
                                    <input type="file" wire:model="image">
                                    <br>
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

                var des_class_timing = document.getElementById("id_class_timing").value;

                $('#class_timing').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,                 // set focus to editable area after initializing summernote
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('class_timing', contents);
                        }
                    }
                }).summernote('code', des_class_timing);


                var des_overview = document.getElementById("id_overview").value;

                $('#overview').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,                 // set focus to editable area after initializing summernote
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('overview', contents);
                        }
                    }
                }).summernote('code', des_overview);


                var des_curriculam = document.getElementById("id_curriculam").value;

                $('#curriculam').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,                 // set focus to editable area after initializing summernote
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('curriculam', contents);
                        }
                    }
                }).summernote('code', des_curriculam);


              });

            

        </script>


    @endpush


</div>
