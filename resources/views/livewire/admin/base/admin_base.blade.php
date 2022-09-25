<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ARC Learners</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <!-- jvectormap -->
        <link href="{{ asset('admin/assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
        
        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Toster -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

        <!-- Summernote css -->
        <link href="{{ asset('admin/assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" />
        

        @livewireStyles

    </head>

    <body  class="left-side-menu-dark enlarged" data-keep-enlarged="true">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    

	                @php

				    	$Sessionid=Auth::id();
				    	$Sessionuser=DB::table('users')->where('id',$Sessionid)->first();

				    @endphp
        
                    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/users/avatar-4.jpg') }}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ $Sessionuser->name }} <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    Welcome !
                                </h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('profile.show') }}" class="dropdown-item notify-item">
                                <i class="dripicons-user"></i>
                                <span>My Account</span>
                            </a>


                           

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
				              @csrf
				            </form>

                        </div>
                    </li>

                    

                </ul>

                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left">
                        <a href="{{ route('admin.dashboard') }}" class="logo">
                            <span class="logo-lg">
                                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </li>
                    <li class="float-left">
                        <a class="button-menu-mobile navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            	@include('livewire.admin.base.admin_navbar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        

                        {{ $slot }}
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                2018 - 2019 &copy; Greeva theme by <a href="">Coderthemes</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

        <!-- KNOB JS -->
        <script src="{{ asset('admin/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- Chart JS -->
        <script src="{{ asset('admin/assets/libs/chart-js/Chart.bundle.min.js') }}"></script>

        <!-- Jvector map -->
        <script src="{{ asset('admin/assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/jqvmap/jquery.vmap.usa.js') }}"></script>
        
        <!-- Datatable js -->
        <script src="{{ asset('admin/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        
        <!-- Dashboard Init JS -->
        <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

        <!--Toster-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!--Summernote js-->
        <script src="{{ asset('admin/assets/libs/summernote/summernote-bs4.min.js') }}"></script>

        @livewireScripts


        @stack('scripts')

        <script type="text/javascript">
          window.livewire.on('doSomething', () => {
              
              $('#modalAdd').modal('hide');
              $('#modalEdit').modal('hide');
              $('#modalDelete').modal('hide');

              

          });
        </script>

        <script>
            window.addEventListener('alert', event => { 
                         toastr[event.detail.type](event.detail.message, 
                         event.detail.title ?? ''), toastr.options = {
                                "closeButton": true,
                                "progressBar": true,
                            }
                        });
          </script>

    </body>
</html>

<style type="text/css">
    html {
      font-size: .80rem;
    }
</style>