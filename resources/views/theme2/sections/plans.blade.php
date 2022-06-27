<section class="wrapper bg-soft-primary">
    <div class="container pt-14 pb-18 pt-md-17 pb-md-22 text-center">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h3 class="display-4 mb-15 mb-md-6 px-lg-10">{{__('theme2-global.plans-title')}}</h3>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem; transform: translate3d(0px, 68px, 0px);"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem; transform: translate3d(0px, 108px, 0px);"></div>
            <div class="pricing-switcher-wrapper switcher">
                <p class="mb-0 pe-3">{{__('theme2-global.monthly')}}</p>
                <div class="pricing-switchers">
                    <div class="pricing-switcher pricing-switcher-active"></div>
                    <div class="pricing-switcher"></div>
                    <div class="switcher-button bg-primary"></div>
                </div>
                <p class="mb-0 ps-3">{{__('theme2-global.yearly')}}</p>
                <span style="margin-left: 0.5rem" class="badge bg-pale-violet text-violet rounded">{{__('theme2-global.cheaper')}}</span>
            </div>
            <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/shopping-basket.svg')}}" class="icon-svg icon-svg-md text-primary mb-3" alt="">
                            <h4 class="card-title">Starter</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value">400</span> <span class="price-duration">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value"><span> 3.840</span><sup class="text-muted" style="text-decoration: line-through">4.800</sup></span> <span class="price-duration">{{__('theme2-global.year')}}</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check bg-pale-yellow text-yellow"></i><span>{!! __('theme2-global.plan-line-1') !!} <strong>10.000</strong></span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-2') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-3') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-4') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-5') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-6') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-7') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-8') !!}</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span>{!! __('theme2-global.plan-line-9') !!}</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span>{!! __('theme2-global.plan-line-10') !!}</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span>{!! __('theme2-global.plan-line-11') !!}</span></li>
                            </ul>
                            <a href="#" class="btn btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4 popular">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/home.svg')}}" class="icon-svg icon-svg-md text-primary mb-3" alt="">
                            <h4 class="card-title">Plus</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value">800</span> <span class="price-duration">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value"><span> 7.680</span><sup class="text-muted" style="text-decoration: line-through">9.600</sup></span> <span class="price-duration">{{__('theme2-global.year')}}</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check bg-pale-yellow text-yellow"></i><span>{!! __('theme2-global.plan-line-1') !!} <strong>25.000</strong></span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-2') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-3') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-4') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-5') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-6') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-7') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-8') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-9') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-10') !!}</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span>{!! __('theme2-global.plan-line-11') !!}</span></li>
                            </ul>
                            <a href="#" class="btn btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/briefcase-2.svg')}}" class="icon-svg icon-svg-md text-primary mb-3" alt="">
                            <h4 class="card-title">Gold</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value">1.600</span> <span class="price-duration">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value"><span> 15.360</span><sup class="text-muted" style="text-decoration: line-through">19.200</sup></span> <span class="price-duration">{{__('theme2-global.year')}}</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-1') !!} <strong>100.000</strong></span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-2') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-3') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-4') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-5') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-6') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-7') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-8') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-9') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-10') !!}</span></li>
                                <li><i class="uil uil-check bg-pale-green text-green"></i><span>{!! __('theme2-global.plan-line-11') !!}</span></li>
                            </ul>
                            <a href="#" class="btn btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
</section>
