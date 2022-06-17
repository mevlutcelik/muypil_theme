@php
$words_tr = 'Botlardan, Rakiplerinizden, Kötü Yazılımlardan, Tıklama Çiftliklerinden, Tıklama Sahtekarlıklarından';
$words_en = 'Bots, Competitors, Malware, Click Farms, Click Fraud';
$headerTitle = __('theme2-global.header-title');
$spanOrDiv = config('app.locale') === 'tr' ? "<div>" : '<span>';
$spanOrDivClose = config('app.locale') === 'tr' ? "</div>" : '</span>';
$headerTitle = str_replace("__underline",$spanOrDiv. __('theme2-global.header-title-underline') .$spanOrDivClose,$headerTitle);
$words = '<div class="mt-3 mb-3"><span class="typer text-white underline-3 style-2 yellow" data-delay="100" data-words="'. (config('app.locale') === "tr" ? $words_tr : $words_en) .'"></span><span class="cursor text-white" data-owner="typer"></span></div>';
$headerTitle = str_replace("__word", $words ,$headerTitle);
@endphp
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="{{asset('assets2/img/photos/bg16.png')}}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
        <div class="row">
            <div class="col-lg-9 col-xl-9 col-xxl-9 mx-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-48 mb-3 {{config('app.locale') === 'tr' ? "mt-2" : "mt-12"}} px-md-15 px-lg-0">{!! $headerTitle !!}</h1>
                <br><p class="lead fs-17 text-white lh-sm mb-6 mx-md-13 mx-lg-10">{!! __('theme2-global.header-desc') !!}</p>
                <div>
                    <a href="{{route('register')}}" class="btn btn-white rounded mb-4 mb-xxl-4">{{__('theme2-global.header-button')}}</a>
                    <p class="text-white fs-14"><span><i class="uil uil-check"></i> {{__('theme2-global.quick-installation')}}</span> <span><i class="uil uil-check"></i> {{__('theme2-global.7-days-free-return')}}</span></p>
                </div>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
            </svg>
        </div>
    </div>
</section>
<!-- /section -->
