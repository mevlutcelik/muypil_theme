@php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $iconTop = false;
    if(preg_match('/Chrome/i',$userAgent)){
        $iconTop = false;
    }else if(preg_match('/Firefox/i',$userAgent)){
        $iconTop = true;
    }
@endphp
<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
        <div class="container justify-content-between align-items-center">
            <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                <div class="navbar-brand" style="position: relative;">
                    <div class="logo logo-dark" style="position:relative;">
                        <a href="{{route('home')}}" style="font-size: 2px;position: initial;">
                            <h1 class="logo-text header-logo-text">MUYPIL</h1>
                            <section class="logo-container" {{$iconTop ? 'style=top:-60px;' : null}}>
                                <div class="logo-center header-logo-center"></div>
                                <div class="blue-ring logo-ring1">
                                    <div></div>
                                </div>
                                <div class="blue-ring logo-ring2">
                                    <div></div>
                                </div>
                                <div class="blue-ring logo-ring3">
                                    <div></div>
                                </div>
                            </section>
                        </a>
                    </div>
                    <div class="logo logo-light" style="margin-left: 1rem;position: relative;">
                        <a href="{{route('home')}}" class="d-flex justify-content-between"
                           style="font-size: 2px;position: relative;">
                            <section class="logo-container" style="top: 17px;left: -16px">
                                <div class="logo-center" style="left: 17px;"></div>
                                <div>
                                    <div class="logo-ring1">
                                        <div></div>
                                    </div>
                                    <div class="logo-ring2">
                                        <div></div>
                                    </div>
                                    <div class="logo-ring3">
                                        <div></div>
                                    </div>
                                </div>
                            </section>
                            <h1 class="footer-logo-text"
                                style="margin-left: 2rem;margin-bottom: 0;margin-right: -1rem;">MUYPIL</h1>
                        </a>
                    </div>
                </div>
                <div class="navbar-other ms-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.d-flex -->
            <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15" style="position: relative;">
                        {{--<a href="./index.html" class="transition-none d-none d-lg-flex"><img class="logo-dark" src="{{asset('assets2/img/logo-dark.png')}}" srcset="{{asset('assets2/img/logo-dark@2x.png 2x')}}" alt="" />
                            <img class="logo-light" src="{{asset('assets2/img/logo-light.png')}}" srcset="{{asset('assets2/img/logo-light@2x.png 2x')}}" alt="" /></a>--}}
                        <div class="logo logo-dark" style="position:relative;">
                            <a href="{{route('home')}}" style="font-size: 2px;position: initial;">
                                <h1 class="logo-text header-logo-text">MUYPIL</h1>
                                <section class="logo-container" {{$iconTop ? 'style=top:-60px;' : null}}>
                                    <div class="logo-center header-logo-center"></div>
                                    <div class="blue-ring logo-ring1">
                                        <div></div>
                                    </div>
                                    <div class="blue-ring logo-ring2">
                                        <div></div>
                                    </div>
                                    <div class="blue-ring logo-ring3">
                                        <div></div>
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="logo logo-light" style="position:relative;">
                            <a href="{{route('home')}}" class="d-flex justify-content-between"
                               style="font-size: 2px;position: relative;">
                                <section class="logo-container" style="top: 17px;left: -16px">
                                    <div class="logo-center" style="left: 17px;"></div>
                                    <div>
                                        <div class="logo-ring1">
                                            <div></div>
                                        </div>
                                        <div class="logo-ring2">
                                            <div></div>
                                        </div>
                                        <div class="logo-ring3">
                                            <div></div>
                                        </div>
                                    </div>
                                </section>
                                <h1 class="footer-logo-text"
                                    style="margin-left: 2rem;margin-bottom: 0;margin-right: -1rem;">MUYPIL</h1>
                            </a>
                        </div>
                        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="w-100 order-1 order-lg-0 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle {{Route::is('product') ? 'active' : null}}"
                                   href="{{route('product')}}">{{__('theme2-global.product')}}</a>
                                <!--/.dropdown-menu -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{Route::is('pricing') ? 'active' : null}}"
                                   href="{{route('pricing')}}">{{__('theme2-global.pricing')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{Route::is('comments') ? 'active' : null}}"
                                   href="{{route('comments')}}">{{__('theme2-global.comments')}}</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{Route::is('agencies') ? 'active' : null}}"
                                   href="{{route('agencies')}}">{{__('theme2-global.agencies')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#"
                                   data-bs-toggle="dropdown">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                <ul class="dropdown-menu">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li class="nav-item">
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle"
                                   href="{{route('login')}}">{{__('theme2-global.login')}}</a>
                                <!--/.dropdown-menu -->
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
<!-- /header -->
