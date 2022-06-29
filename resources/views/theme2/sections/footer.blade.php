@php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $iconTop = false;
    if(preg_match('/Chrome/i',$userAgent)){
        $iconTop = false;
    }else if(preg_match('/Firefox/i',$userAgent)){
        $iconTop = true;
    }
@endphp
<footer class="bg-light">
    <div class="container pb-13 mt-12 pb-md-15">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14"
             data-image-src="{{asset('assets2/img/photos/bg16.png')}}">
            <div class="card-body p-10 p-xl-12">
                <div class="row text-center">
                    <div class="col-xl-11 col-xxl-9 mx-auto">
                        <h2 class="fs-16 text-uppercase text-white mb-3">{{__('theme2-global.join-community')}}</h2>
                        <h3 class="display-3 mb-8 px-lg-8 text-white">{!! __('theme2-global.join-community-desc') !!}</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="d-flex justify-content-center">
                    <span><a href="{{route('register')}}" class="btn btn-white rounded">{{__('theme2-global.header-button')}}</a></span>
                </div>
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <div class="logo logo-dark" style="margin-left: -8rem;margin-bottom: 1.5rem;position: relative;">
                        <a href="/" style="font-size: 2px;position: initial;">
                            <h1 class="logo-text header-logo-text">MUYPIL</h1>
                            <section class="logo-container" {{$iconTop ? 'style=top:-64px;' : null}}>
                                <div class="logo-center header-logo-center"></div>
                                <article class="blue-ring logo-ring1">
                                    <div></div>
                                </article>
                                <article class="blue-ring logo-ring2">
                                    <div></div>
                                </article>
                                <article class="blue-ring logo-ring3">
                                    <div></div>
                                </article>
                            </section>
                        </a>
                    </div>
                    <p class="mb-4">&copy; 2021 Cyber Defense Inc. <br class="d-none d-lg-block"/>{{__('theme2-global.all-rights-reserved')}}</p>
                    <nav class="nav social ">
{{--                        <a href="#"><i class="uil uil-twitter"></i></a>--}}
                        <a href="https://www.facebook.com/muypil"><i class="uil uil-facebook-f"></i></a>
{{--                        <a href="#"><i class="uil uil-dribbble"></i></a>--}}
                        <a href="https://www.instagram.com/muypil"><i class="uil uil-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UC76D6t2NrdlkVLeZ5lH8auw"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{{__('theme2-global.pages')}}</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="{{route('product')}}">{{__('theme2-global.product')}}</a></li>
                        <li><a href="{{route('pricing')}}">{{__('theme2-global.pricing')}}</a></li>
                        <li><a href="{{route('comments')}}">{{__('theme2-global.comments')}}</a></li>
                        <li><a href="{{route('agencies')}}">{{__('theme2-global.agencies')}}</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{{__('theme2-global.policies')}}</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="{{route('policies')}}#{{__('theme2-global.routes-policies-privacy')}}">{{__('theme2-global.privacy-policy')}}</a></li>
                        <li><a href="{{route('policies')}}#{{__('theme2-global.routes-policies-user')}}">{{__('theme2-global.user-policy')}}</a></li>
                        <li><a href="{{route('careers')}}">{{__('theme2-global.careers')}}</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{!! __('theme2-global.join-community') !!}</h4>
                    <p class="mb-5">{!! __('theme2-global.join-community-desc') !!}</p>
                    <div class="newsletter-wrapper mb-3">
                        <a href="{{route('register')}}" class="btn btn-expand btn-soft-primary rounded">
                            <i class="uil uil-arrow-right"></i>
                            <span>{{__('theme2-global.header-button')}}</span>
                        </a>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
