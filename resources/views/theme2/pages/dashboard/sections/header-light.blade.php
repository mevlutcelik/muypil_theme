@push('styles')
    <style>
        .st0{fill:#3C8BD9;}
        .st1{fill:#FABC04;}
        .st2{fill:#34A852;}
        .st3{fill:#E1C025;}
        /*.dropdown-menu{
            background-color: #121212;
        }
        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item{
            color: rgba(255,255,255,0.8);
        }*/
        #accounts .google-ads-icon {
            width: 1.75rem;
            height: 1.75rem;
            padding: 0.125rem;
            border-radius: 0.375rem;
            background-color: rgba(200, 220, 255, 0.2);
            margin-left: 0.5rem;
            transition: all 0.3s;
        }
    </style>
@endpush
<header class="wrapper">
    <nav class="navbar navbar-expand-lg center-logo d-flex align-items-center justify-content-center position-absolute navbar-dark">
        <div class="justify-content-center align-items-center justify-content-center w-100">
            <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none shadow-lg" style="height: 3rem;box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                <div class="navbar-brand">
                    <div class="logo logo-light ps-4 pe-2" style="margin-left: 1rem;">
                        <a href="{{route('dashboard.home')}}" class="d-flex justify-content-between" style="font-size: 2px;position: relative;">
                            <section class="logo-container" style="top: 17px;left: -16px">
                                <div class="logo-center" style="left: 17px;"></div>
                                <div>
                                    <article class="logo-ring1">
                                        <div></div>
                                    </article>
                                    <article class="logo-ring2">
                                        <div></div>
                                    </article>
                                    <article class="logo-ring3">
                                        <div></div>
                                    </article>
                                </div>
                            </section>
                            <h1 class="footer-logo-text" style="margin-left: 2rem;margin-bottom: 0;margin-right: -1rem;">MUYPIL</h1>
                        </a>
                    </div></div>
                <div class="navbar-other" style="margin-right: 1rem;">
                    <ul class="navbar-nav flex-row align-items-center d-flex align-items-center">
                        <li class="nav-item dropdown language-select">
                            <a
                                style="margin-top: -2px;color: rgba(255,255,255,0.75) !important;"
                                class="nav-link dropdown-toggle d-flex align-items-center fs-16"
                                href="#"
                                id="accounts"
                                data-bs-toggle="dropdown">359-318-6843 {{--TODO: "359-318-6843" bu alan hesap id si ile değişecek --}}
                                <svg class="google-ads-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="-393 31 500 500" style="enable-background:new -393 31 500 500;"
                                     xml:space="preserve">
                                        <g>
                                            <path class="st0" d="M-201.3,156.2c3.5-9.3,8.4-17.8,15.6-24.7c28.8-28.1,76.4-21,96,14.3c14.7,26.8,30.3,52.9,45.4,79.4
		c25.3,44,50.9,87.9,75.9,132c21,36.9-1.8,83.5-43.5,89.8c-25.6,3.8-49.5-7.9-62.8-30.9c-22.2-38.7-44.5-77.3-66.7-115.8
		c-0.4-0.9-1-1.6-1.6-2.4c-2.4-1.9-3.4-4.7-4.9-7.2c-9.8-17.3-20-34.5-29.8-51.7c-6.3-11.2-12.9-22.2-19.3-33.4
		c-5.7-10-8.4-20.9-8.1-32.3C-204.7,167.4-203.9,161.5-201.3,156.2"/>
                                            <path class="st1" d="M-201.3,156.2c-1.3,5.3-2.5,10.6-2.8,16.2c-0.4,12.3,2.6,23.8,8.8,34.5c16.2,27.8,32.3,55.7,48.4,83.6
		c1.5,2.5,2.6,5,4.1,7.3c-8.8,15.3-17.6,30.4-26.6,45.7c-12.3,21.3-24.7,42.8-37.2,64.1c-0.6,0-0.7-0.3-0.9-0.7
		c-0.1-1.2,0.3-2.2,0.6-3.4c6-22,1-41.6-14.1-58.4c-9.3-10.1-21-15.9-34.5-17.8c-17.6-2.5-33.2,2.1-47.2,13.1
		c-2.5,1.9-4.1,4.7-7.1,6.2c-0.6,0-0.9-0.3-1-0.7c7.1-12.2,14-24.4,21-36.6c29.1-50.6,58.2-101.1,87.5-151.6
		C-202,157.3-201.6,156.8-201.3,156.2"/>
                                            <path class="st2" d="M-310.2,346.5c2.8-2.5,5.4-5.1,8.4-7.5c35.7-28.2,89.4-7.8,97.2,36.9c1.9,10.7,0.9,21-2.4,31.3
		c-0.1,0.9-0.3,1.6-0.6,2.5c-1.3,2.4-2.5,4.9-4,7.2c-13.1,21.6-32.3,32.3-57.6,30.7c-29-2.1-51.7-23.8-55.7-52.6
		c-1.9-14,0.9-27,8.1-39.1c1.5-2.6,3.2-5,4.9-7.6C-311.2,347.6-311.5,346.5-310.2,346.5"/>
                                            <path class="st1"
                                                  d="M-310.2,346.5c-0.6,0.6-0.6,1.6-1.6,1.8c-0.1-1,0.4-1.6,1-2.4L-310.2,346.5"/>
                                            <path class="st3"
                                                  d="M-207.6,409.7c-0.6-1,0-1.8,0.6-2.5c0.1,0.1,0.4,0.4,0.6,0.6L-207.6,409.7"/>
                                        </g>
</svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                                        href="#">{{__('theme2-dashboard-global.all-account')}}</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Hesap 1</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Hesap 2</a></li>
                                {{--TODO: Hesaplar listelenecek--}}
                            </ul>
                        </li>
                        {{--<li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>--}}
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.d-flex -->
            <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                        {{--<a href="./index.html" class="transition-none d-none d-lg-flex"><img class="logo-dark" src="{{asset('assets2/img/logo-dark.png')}}" srcset="{{asset('assets2/img/logo-dark@2x.png 2x')}}" alt="" />
                            <img class="logo-light" src="{{asset('assets2/img/logo-light.png')}}" srcset="{{asset('assets2/img/logo-light@2x.png 2x')}}" alt="" /></a>--}}

                        <div class="logo logo-light">
                            <a href="{{route('dashboard.home')}}" class="d-flex justify-content-between" style="font-size: 2px;position: relative;">
                                <section class="logo-container" style="top: 17px;left: -16px">
                                    <div class="logo-center" style="left: 17px;"></div>
                                    <div>
                                        <article class="logo-ring1">
                                            <div></div>
                                        </article>
                                        <article class="logo-ring2">
                                            <div></div>
                                        </article>
                                        <article class="logo-ring3">
                                            <div></div>
                                        </article>
                                    </div>
                                </section>
                                <h1 class="footer-logo-text" style="margin-left: 2rem;margin-bottom: 0;margin-right: -1rem;">MUYPIL</h1>
                            </a>
                        </div>
                        {{--<button type="button" class="btn-close btn-close-black d-lg-none" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>--}}
                    </div>
                    <div class="w-100 order-1 order-lg-0 d-lg-flex offcanvas-body" style="margin-left: 35px;">
                        <ul class="navbar-nav ms-lg-auto">
                            {{--TODO: navbardaki linklere href="{{route('NAME')}}" eklenecek--}}
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link {{Route::is('dashboard.home') ? 'active' : null}}"
                                   href="#">{{__('theme2-dashboard-global.terminal')}}</a>
                                <!--/.dropdown-menu -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{Route::is('dashboard.administration') ? 'active' : null}}"
                                   href="#"
                                   data-bs-toggle="dropdown">{{__('theme2-dashboard-global.administration')}}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item"
                                           href="#">{{__('theme2-dashboard-global.all-packets')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.currencies')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.tasks')}}</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.contact-messages')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.careers')}}</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.discounts')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{Route::is('dashboard.membership') ? 'active' : null}}"
                                   href="#"
                                   data-bs-toggle="dropdown">{{__('theme2-dashboard-global.membership')}}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.users')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.incomplete-user')}}</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.personals')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.roles')}}</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.customers')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.personal-report')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    style="margin-top: -2px;"
                                    class="nav-link dropdown-toggle d-flex align-items-center"
                                    href="#"
                                    id="accounts"
                                    data-bs-toggle="dropdown">359-318-6843 {{--TODO: "359-318-6843" bu alan hesap id si ile değişecek --}}
                                    <svg class="google-ads-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="-393 31 500 500" style="enable-background:new -393 31 500 500;"
                                         xml:space="preserve">
                                        <g>
                                            <path class="st0" d="M-201.3,156.2c3.5-9.3,8.4-17.8,15.6-24.7c28.8-28.1,76.4-21,96,14.3c14.7,26.8,30.3,52.9,45.4,79.4
		c25.3,44,50.9,87.9,75.9,132c21,36.9-1.8,83.5-43.5,89.8c-25.6,3.8-49.5-7.9-62.8-30.9c-22.2-38.7-44.5-77.3-66.7-115.8
		c-0.4-0.9-1-1.6-1.6-2.4c-2.4-1.9-3.4-4.7-4.9-7.2c-9.8-17.3-20-34.5-29.8-51.7c-6.3-11.2-12.9-22.2-19.3-33.4
		c-5.7-10-8.4-20.9-8.1-32.3C-204.7,167.4-203.9,161.5-201.3,156.2"/>
                                            <path class="st1" d="M-201.3,156.2c-1.3,5.3-2.5,10.6-2.8,16.2c-0.4,12.3,2.6,23.8,8.8,34.5c16.2,27.8,32.3,55.7,48.4,83.6
		c1.5,2.5,2.6,5,4.1,7.3c-8.8,15.3-17.6,30.4-26.6,45.7c-12.3,21.3-24.7,42.8-37.2,64.1c-0.6,0-0.7-0.3-0.9-0.7
		c-0.1-1.2,0.3-2.2,0.6-3.4c6-22,1-41.6-14.1-58.4c-9.3-10.1-21-15.9-34.5-17.8c-17.6-2.5-33.2,2.1-47.2,13.1
		c-2.5,1.9-4.1,4.7-7.1,6.2c-0.6,0-0.9-0.3-1-0.7c7.1-12.2,14-24.4,21-36.6c29.1-50.6,58.2-101.1,87.5-151.6
		C-202,157.3-201.6,156.8-201.3,156.2"/>
                                            <path class="st2" d="M-310.2,346.5c2.8-2.5,5.4-5.1,8.4-7.5c35.7-28.2,89.4-7.8,97.2,36.9c1.9,10.7,0.9,21-2.4,31.3
		c-0.1,0.9-0.3,1.6-0.6,2.5c-1.3,2.4-2.5,4.9-4,7.2c-13.1,21.6-32.3,32.3-57.6,30.7c-29-2.1-51.7-23.8-55.7-52.6
		c-1.9-14,0.9-27,8.1-39.1c1.5-2.6,3.2-5,4.9-7.6C-311.2,347.6-311.5,346.5-310.2,346.5"/>
                                            <path class="st1"
                                                  d="M-310.2,346.5c-0.6,0.6-0.6,1.6-1.6,1.8c-0.1-1,0.4-1.6,1-2.4L-310.2,346.5"/>
                                            <path class="st3"
                                                  d="M-207.6,409.7c-0.6-1,0-1.8,0.6-2.5c0.1,0.1,0.4,0.4,0.6,0.6L-207.6,409.7"/>
                                        </g>
</svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">{{__('theme2-dashboard-global.all-account')}}</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Hesap 1</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Hesap 2</a></li>
                                    {{--TODO: Hesaplar listelenecek--}}
                                </ul>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link {{Route::is('dashboard.trackers') ? 'active' : null}}"
                                   href="{{route('dashboard.trackers')}}">{{__('theme2-dashboard-global.analytics')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link {{Route::is('dashboard.packets') ? 'active' : null}}"
                                   href="{{route('dashboard.packets')}}">{{__('theme2-dashboard-global.packets')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link"
                                   href="#">{{__('theme2-dashboard-global.settings')}}</a>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link"
                                   href="#">{{__('theme2-dashboard-global.my-profile')}}</a>
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
