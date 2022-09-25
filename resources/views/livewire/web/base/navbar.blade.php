<div>
    


    <header class="header-style-1"> 
        

        <div class="header-navbar navbar-sticky">
            <div class="container" style="max-width: 1440px;">
                {{-- <div> --}}
                <div class="d-flex align-items-center justify-content-between">
                    <div class="site-logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid" />
                        </a>
                    </div>

                    <div class="offcanvas-icon d-block d-lg-none">
                        <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a> 
                    </div>

                    
                    <ul class="primary-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-th me-2"></i>IT Courses</a>
                            <ul class="submenu">

                                {{-- <li><a href="#"><b>IT & Software</b></a></li> --}}

                                @foreach($category_list_it as $key=>$value)
                                
                                    @if($value->children->count() > 0)

                                        <li>
                                            <a href="#"><b>{{ $value->name }}</b></a>
                                            <ul class="submenu">
                                                @foreach($value->children as $key_2=>$value_2)
                                                    <li><a href="{{ route('web.courses',['id'=>$value_2->id]) }}">{{ $value_2->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    @else

                                        <li><a href="#">{{ $value->name }} </a></li>
                                        
                                    @endif
                                @endforeach

                                
                            </ul>
                        </li>

                    </ul>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <ul class="primary-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-th me-2"></i>Business Courses</a>
                            <ul class="submenu">

                                

                                {{-- <li><a href="#"><b>Business</b></a></li> --}}

                                @foreach($category_list_business as $key=>$value)
                                
                                    @if($value->children->count() > 0)

                                        <li>
                                            <a href="#"><b>{{ $value->name }}</b></a>
                                            <ul class="submenu">
                                                @foreach($value->children as $key_2=>$value_2)
                                                    <li><a href="{{ route('web.courses',['id'=>$value_2->id]) }}">{{ $value_2->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    @else

                                        <li><a href="#">{{ $value->name }} </a></li>
                                        
                                    @endif
                                @endforeach
                               
                            </ul>
                        </li>

                    </ul>


                    
            
                    <nav class="site-navbar ms-auto">
                        <ul class="primary-menu">
                            <li class="current">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('web.vendors') }}">Vendors</a>
                            </li>
                            <li>
                                <a href="{{ route('web.aboutus') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('web.contactus') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('web.notice') }}">Notice Board</a>
                            </li>
                            <li>
                                <a href="{{ route('web.calender') }}">Calender</a>
                            </li>

                        </ul>

                        <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                    </nav>

                    <div class="header-btn d-none d-xl-block">


                        @if(Route::has('login'))
                            @auth

                                @if(Auth::user()->user_type === 'ADMIN')

                                    <ul class="primary-menu">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i>&nbsp; Account</a>
                                            <ul class="submenu">
                                                <h4 style="text-align: center;">{{ Auth::user()->name }}</h4>
                                                <hr>

                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                </li>


                                                <hr>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    </ul>

                                    {{-- <a href="{{ route('login') }}" class="login">Login</a> --}}

                                @elseif(Auth::user()->user_type === 'USER')

                                    <ul class="primary-menu">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i>&nbsp; Account</a>
                                            <ul class="submenu">
                                                <h4 style="text-align: center;">{{ Auth::user()->name }}</h4>
                                                <hr>

                                                    <li>
                                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>

                                                <hr>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    </ul>

                                @else

                                    <ul class="primary-menu">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i>&nbsp; Account</a>
                                            <ul class="submenu">
                                                <h4 style="text-align: center;">{{ Auth::user()->name }}</h4>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    </ul>

                                @endif

                            @else

                                <a href="{{ route('login') }}" class="login">Login</a>
                                <a href="{{ route('register') }}" class="login">Sign up</a>
                            @endif
                        @endif


                        
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--====== Header End ======-->
    


</div>
