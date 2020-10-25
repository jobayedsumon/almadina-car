<div class="loader-outer">
    <div class="tj-loader">
        <img src="{{ asset('frontend/images/pre-loader.gif') }}" alt="">
        <h2>Loading...</h2>
    </div>
</div>

<header class="tj-header">
    <!--Header Content Start-->
    <div class="container">
        <div class="row">
            <!--Toprow Content Start-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!--Logo Start-->
                <div class="tj-logo">
                    <h1><a href="/"><img width="50%" src="{{ asset('frontend/images/logo.png') }}" alt=""></a></h1>
                </div>
                <!--Logo End-->
            </div>

            <!--Toprow Content End-->
        </div>
    </div>

    <div class="tj-nav-row">
        <div class="container">
            <div class="row">
                <!--Nav Holder Start-->
                <div class="tj-nav-holder">
                    <!--Menu Holder Start-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Navigation Content Start -->
                        <div class="collapse navbar-collapse" id="tj-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li> <a href="/" aria-haspopup="true" aria-expanded="false">HOME</a></li>
                                <li>
                                    <a href="{{ route('page', 'about-us') }}">ABOUT US</a>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OUR SERVICES<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        @forelse(\App\Service::all() as $service)
                                        <li><a href="{{ route('service', $service->slug) }}">{{ $service->name }}</a></li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OUR CARS<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        @forelse(\TCG\Voyager\Models\Category::all() as $category)
                                        <li><a href="{{ route('car-list', $category->slug) }}">{{ $category->name }}</a></li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACCOUNT<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        @auth()
                                            <li><a href="{{ route('user-account') }}">USER ACCOUNT</a></li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit">LOG OUT</button>
                                                </form>

                                            </li>
                                            @endauth
                                        @guest()
                                                <li><a href="{{ route('login') }}">LOGIN</a></li>
                                                <li><a href="{{ route('login') }}#register">REGISTER</a></li>
                                            @endguest


                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('contact-us') }}">CONTACT US</a>
                                </li>

                            </ul>
                        </div>
                        <!-- Navigation Content Start -->
                    </nav>
                    <!--Menu Holder End-->

                </div><!--Nav Holder End-->
            </div>
        </div>
    </div>
</header>
<!--Header Content End-->
