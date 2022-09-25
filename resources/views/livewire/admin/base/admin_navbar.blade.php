<div>


    @if(Route::has('login'))

        @auth

            @if(Auth::user()->user_type === 'ADMIN')

                {{-- For Admin --}}
                <!-- ========== Left Sidebar Start ========== -->
                    <div class="left-side-menu">

                        <div class="slimscroll-menu">

                            <!--- Sidemenu -->
                            <div id="sidebar-menu">

                                <ul class="metismenu" id="side-menu">

                                    <li class="menu-title">Navigation</li>

                                    <li>
                                        <a href="{{ route('admin.dashboard') }}">
                                            <i class="dripicons-meter"></i>
                                            <span> Dashboard </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.categories') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Course Categories </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.courses') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Courses </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.mentors') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Mentors </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.vendors') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Vendors </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.events') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Events </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.notices') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Notices </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.banners') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Banners </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.popular_courses') }}">
                                            <i class="dripicons-meter"></i>
                                            <span>Popular Courses </span>
                                        </a>
                                    </li>
                                    

                                </ul>

                            </div>
                            <!-- End Sidebar -->

                            <div class="clearfix"></div>

                        </div>
                        <!-- Sidebar -left -->

                    </div>
                <!-- Left Sidebar End -->


            @else



                {{-- For Instructor --}}
                <!-- ========== Left Sidebar Start ========== -->
                    <div class="left-side-menu">

                        <div class="slimscroll-menu">

                            <!--- Sidemenu -->
                            <div id="sidebar-menu">

                                <ul class="metismenu" id="side-menu">

                                    <li class="menu-title">Navigation</li>

                                    <li>
                                        <a href="#">
                                            <i class="dripicons-meter"></i>
                                            <span> Dashboard </span>
                                        </a>
                                    </li>

                                    

                                </ul>

                            </div>
                            <!-- End Sidebar -->

                            <div class="clearfix"></div>

                        </div>
                        <!-- Sidebar -left -->

                    </div>
                <!-- Left Sidebar End -->



            @endif

        @endif

    @endif
    
    

</div>
