@push('styles')
    <style>
        input{
            -webkit-appearance: auto !important;
        }
        .theme-switch-wrapper {
            display: flex;
            margin-top: 0;
            align-items: center;
            /*margin-left: 2em;*/
        }
        .theme-switch {
            display: inline-block;
            height: 28px;
            position: relative;
            width: 48px;
        }

        .theme-switch input {
            display:none;
        }

        .slider {
            background-color: rgba(30,34,40,.07);
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
        }

        .slider:before {
            background-color: #3f78e0;
            bottom: calc((28px / 2) - (20px / 2));
            content: "";
            height: 20px;
            left: calc((28px / 2) - (20px / 2));
            position: absolute;
            transition: .4s;
            width: 20px;
        }

        input:checked + .slider {
            /*background-color: #66bb6a;*/
        }

        input:checked + .slider:before {
            transform: translateX(20px);
        }

        .slider.round {
            border-radius: 28px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endpush
<section class="wrapper bg-pale-aqua">
    <div class="container pt-13 pb-18 pt-md-14 pb-md-22 text-center">
        <div class="row">
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
                {{--<div class="pricing-switchers">
                    <div class="pricing-switcher pricing-switcher-active"></div>
                    <div class="pricing-switcher"></div>
                    <div class="switcher-button bg-primary"></div>
                </div>--}}
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <p class="mb-0 ps-3">{{__('theme2-global.yearly')}}</p>
                <span style="margin-left: 0.5rem" class="badge bg-pale-blue text-blue rounded-pill">{{__('theme2-global.cheaper')}}</span>
            </div>
            <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/shopping-basket.svg')}}" class="icon-svg icon-svg-sm text-primary mb-3" alt="">
                            <h4 class="card-title">Starter</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">400</span> <span class="price-duration">ay</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 3.840</span><sup class="text-muted" style="text-decoration: line-through">4.800</sup></span> <span class="price-duration">yıl</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start fs-13">
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
                            <a href="#" class="btn btn-sm btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4 popular">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/home.svg')}}" class="icon-svg icon-svg-sm text-primary mb-3" alt="">
                            <h4 class="card-title">Plus</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">800</span> <span class="price-duration">ay</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 7.680</span><sup class="text-muted" style="text-decoration: line-through">9.600</sup></span> <span class="price-duration">yıl</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start fs-13">
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
                            <a href="#" class="btn btn-sm btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="pricing card shadow-lg text-center">
                        <div class="card-body">
                            <img src="{{asset('assets2/img/icons/lineal/briefcase-2.svg')}}" class="icon-svg icon-svg-sm text-primary mb-3" alt="">
                            <h4 class="card-title">Gold</h4>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">1.600</span> <span class="price-duration">ay</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 15.360</span><sup class="text-muted" style="text-decoration: line-through">19.200</sup></span> <span class="price-duration">yıl</span></div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start fs-13">
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
                            <a href="#" class="btn btn-sm btn-primary rounded">{{__('theme2-global.choose-plan')}}</a>
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
@push('scripts')
    <script>
        let checkboxPlan = document.querySelector('input[type="checkbox"]');
        let priceShows = document.querySelectorAll('.prices-show');
        let priceHides = document.querySelectorAll('.prices-hide');
        priceShows.forEach(function(e){
            console.log()
        });
        priceShows
        checkboxPlan.addEventListener('click', function(e){
            checkboxPlan.checked ? console.log('check edildi.') : console.log('check edilmedi.');
        });
    </script>
@endpush
