@push('styles')
    <style>
        .card{
            border-radius: 8px;
        }
        .btn-primary{
            background: rgba(0,0,0,0.5);
            border: none;
        }
        .card-body{
            padding: 1rem;
        }
        .lineal-stroke{
            fill: #fff;
        }
        .lineal-fill{
            fill: rgba(255,255,255,0.5);
        }
        .icon-list.bullet-bg li{
            color: rgba(255,255,255,0.5);
        }
        .mx-card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 2px;
            height: calc((var(--vh, 1vh) * 100) - 244px);
            max-height: calc((var(--vh, 1vh) * 100) - 244px);
            padding: 2rem;
            overflow-y: auto;
            overflow-x: hidden;
        }
        .bg-blur{
            background: rgba(255,255,255,0.15);
        }
        input{
            -webkit-appearance: auto !important;
        }
        .theme-switch-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
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
            background-color: rgba(255,255,255,0.1);
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: .4s;
            -o-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            background-color: #fff;
            bottom: calc((28px / 2) - (20px / 2));
            content: "";
            height: 20px;
            left: calc((28px / 2) - (20px / 2));
            position: absolute;
            -webkit-transition: .4s;
            -o-transition: .4s;
            transition: .4s;
            width: 20px;
        }

        input:checked + .slider {
            /*background-color: #66bb6a;*/
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
        }

        .slider.round {
            border-radius: 28px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .icon-list.bullet-bg i{
            top: 0;
        }
    </style>
@endpush
<section class="wrapper">
    <div class="pb-18 pt-12 pt-md-17 pb-md-20">
        {{----}}
    </div>
    <!-- /.container -->
</section>
<section class="wrapper">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n21 mt-md-n23 mx-card px-0 px-md-2 px-lg-4 py-6 py-md-4">
            <div class="pricing-switcher-wrapper switcher">
                <p class="mb-0 pe-3 text-white-50">{{__('theme2-global.monthly')}}</p>
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
                <p class="mb-0 ps-3 text-white-50">{{__('theme2-global.yearly')}}</p>
                <span style="margin-left: 0.5rem" class="badge bg-navy text-white rounded">{{__('theme2-global.cheaper')}}</span>
            </div>
            <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card bg-blur shadow-lg text-center">
                        <div class="card-body">
                            <svg class="icon-svg icon-svg-sm mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 412.9"><path class="lineal-fill" d="M453.8 238.1l-9.6 76.3H67.8l-9.6-76.3z"></path><circle class="lineal-fill" cx="178.1" cy="149.9" r="35.1"></circle><circle class="lineal-fill" cx="333.9" cy="149.9" r="35.1"></circle><path class="lineal-stroke" d="M498.6 136.5h-60.2c-7.4-.2-13.6 5.7-13.8 13.1-.2 7.4 5.7 13.6 13.1 13.8h11.8l-7.5 61.3H70.1l-7.5-61.3h68.9c7.4 25.7 34.3 40.6 60 33.1 16-4.6 28.5-17.1 33.1-33.1h62.6c7.4 25.7 34.3 40.6 60 33.2 25.7-7.4 40.6-34.3 33.2-60-4.9-17.1-18.9-30.1-36.3-33.9l-39-94.2c-2.8-6.9-10.7-10.1-17.6-7.3s-10.1 10.7-7.3 17.6l35.7 86.2c-14 5.5-24.6 17.2-28.8 31.6h-62.6c-4.2-14.4-14.8-26.1-28.8-31.7l35.7-86.2c2.8-6.9-.4-14.7-7.3-17.6s-14.7.4-17.6 7.3l-39.1 94.2c-17.4 3.8-31.3 16.9-36.2 33.9H13.4C6 136.7.1 142.9.3 150.3c.2 7.1 5.9 12.9 13.1 13.1h22.1l29.8 237.8c.9 6.7 6.6 11.8 13.3 11.8h354.8c6.8 0 12.5-5 13.3-11.8l29.8-237.8h22c7.4-.2 13.3-6.4 13.1-13.8-.2-7.2-5.9-12.9-13-13.1zm-165-8.2c.4 0 .9.1 1.3.1h.7c11.9.9 20.8 11.3 19.9 23.2-.9 11.9-11.3 20.8-23.2 19.9-11.9-.9-20.8-11.3-19.9-23.2.8-11.1 10-19.7 21.2-20zm-157.1.1h.7c.4 0 .9-.1 1.3-.1 11.9.2 21.4 10 21.3 22-.2 11.9-10 21.4-22 21.3-11.9-.2-21.4-10-21.3-22 .2-11.2 8.9-20.4 20-21.2zm-103 123.1h365.1l-6.3 49.5H79.7l-6.2-49.5zM90.4 386L83 327.9h345.9l-7.4 58.1H90.4z"></path></svg>
                            <h4 class="card-title text-white">Starter</h4>
                            <div class="prices text-white">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">400</span> <span class="price-duration text-white-50">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 3.840</span><sup class="text-muted" style="text-decoration: line-through">4.800</sup></span> <span class="price-duration text-white-50">{{__('theme2-global.year')}}</span></div>
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
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card bg-blur shadow-lg text-center">
                        <div class="card-body">

                            <svg class="icon-svg icon-svg-sm mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 479.8 512"><path class="lineal-stroke" d="M308 512H61.9c-8 0-14.4-6.5-14.4-14.4V227.2c0-4.3 2-8.4 5.4-11.2l178-143.7c5.3-4.3 12.8-4.3 18.1 0L427 216c3.4 2.7 5.4 6.9 5.4 11.2v269.6c-.2 8-6.8 14.3-14.8 14-7.7-.2-13.8-6.4-14-14V234.1L239.9 102 76.3 234.1v249.1H308c8 .2 14.3 6.8 14 14.8-.2 7.6-6.3 13.8-14 14z"/><path class="lineal-stroke" d="M465.4 209.8c-3.3 0-6.4-1.1-9-3.2L239.9 32.9 23.5 206.7c-6.2 5-15.3 4-20.3-2.2s-4-15.3 2.2-20.3l225.5-181c5.3-4.2 12.8-4.2 18.1 0l225.5 181c6.2 5 7.2 14.1 2.2 20.3-2.8 3.3-6.9 5.3-11.3 5.3z"/><ellipse transform="rotate(-80.781 239.904 207.686)" class="lineal-fill" cx="239.9" cy="207.7" rx="42.9" ry="43"/><path class="lineal-stroke" d="M239.9 265.1c-31.7 0-57.4-25.7-57.4-57.4s25.7-57.4 57.4-57.4 57.4 25.7 57.4 57.4c-.1 31.7-25.7 57.3-57.4 57.4zm0-85.9c-15.8 0-28.5 12.8-28.5 28.5s12.8 28.5 28.5 28.5 28.5-12.8 28.5-28.5c0-15.8-12.8-28.5-28.5-28.5z"/><path class="lineal-fill" d="M171.8 325.7h136.1v171.9H171.8z"/><path class="lineal-stroke" d="M308 512H171.8c-8 0-14.4-6.5-14.4-14.4V325.7c0-8 6.5-14.4 14.4-14.4H308c8 0 14.4 6.5 14.4 14.4v171.9c0 7.9-6.4 14.4-14.4 14.4zm-121.8-28.9h107.3v-143H186.2v143zm234.2-317.7c-7.9 0-14.4-6.5-14.4-14.4V73.3h-28.6c-8 0-14.4-6.5-14.4-14.4s6.5-14.4 14.4-14.4h43c8 0 14.4 6.5 14.4 14.4v92c0 8-6.4 14.4-14.4 14.5 0-.1 0 0 0 0z"/></svg>
                            <h4 class="card-title text-white">Plus</h4>
                            <div class="prices text-white">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">800</span> <span class="price-duration text-white-50">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 7.680</span><sup class="text-muted" style="text-decoration: line-through">9.600</sup></span> <span class="price-duration text-white-50">{{__('theme2-global.year')}}</span></div>
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
                    <div class="pricing card bg-blur shadow-lg text-center">
                        <div class="card-body">

                            <svg class="icon-svg icon-svg-sm mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 380.8"><path class="lineal-stroke" d="M299.9 104.7h-23.8V56.5c0-18.1-14.6-32.7-32.7-32.7h-77.2c-18 0-32.7 14.7-32.7 32.7v48.2h-23.8V56.5C109.8 25.3 135 0 166.2 0h77.2c31.2 0 56.4 25.3 56.5 56.5v48.2z"/><path class="lineal-stroke" d="M360.5 380.8H49.1c-27.1 0-49-22-49.1-49.1V119.1C0 92 22 70 49.1 70h311.5c27.1 0 49 22 49.1 49.1v212.7c-.1 27.1-22.1 49-49.2 49zM49.1 93.8c-14 0-25.3 11.3-25.3 25.3v212.7c0 14 11.3 25.3 25.3 25.3h311.5c14 0 25.3-11.3 25.3-25.3V119.1c0-14-11.3-25.3-25.3-25.3H49.1z"/><path class="lineal-fill" d="M49.2 81.7c-18.4 0-33.3 14.8-33.3 33.2 0 2.7.3 5.3.9 7.9C35.4 197.9 103.6 254 184.2 254h41.2c80.6 0 148.8-56.1 167.3-131.2 4.3-17.8-6.6-35.8-24.5-40.2-2.6-.6-5.2-.9-7.9-.9H49.2z"/><path class="lineal-stroke" d="M225.4 265.9h-41.2c-41.5-.1-81.8-14.2-114.3-40C38 200.5 15.3 165.2 5.4 125.6-.5 101.4 14.3 77 38.6 71.1c3.5-.9 7.1-1.3 10.7-1.3h311.1c24.9 0 45.2 20.2 45.2 45.1 0 3.6-.4 7.2-1.3 10.7-9.9 39.6-32.6 74.8-64.5 100.2-32.6 25.9-72.9 40-114.4 40.1zM49.2 93.6c-6.6 0-12.9 3-16.9 8.2-4.1 5.1-5.5 11.8-3.9 18.2 17.6 71.8 81.9 122.3 155.8 122.2h41.2c73.9.1 138.3-50.4 155.8-122.2 1.6-6.3.1-13-3.9-18.1-4.1-5.2-10.3-8.3-16.9-8.2l-311.2-.1z"/><path class="lineal-fill" d="M128.5 288.5h-13.8c-8.9 0-16.1-7.2-16.1-16.1v-48.3c0-8.9 7.2-16.1 16.1-16.1h13.8c8.9 0 16.1 7.2 16.1 16.1v48.3c0 8.9-7.2 16.1-16.1 16.1z"/><path class="lineal-stroke" d="M128.5 300.4h-13.8c-15.5 0-28-12.5-28-28v-48.3c0-15.5 12.5-28 28-28h13.8c15.5 0 28 12.5 28 28v48.3c0 15.5-12.5 28-28 28zm-13.8-80.5c-2.3 0-4.2 1.9-4.2 4.2v48.3c0 2.3 1.9 4.2 4.2 4.2h13.8c2.3 0 4.2-1.9 4.2-4.2v-48.3c0-2.3-1.9-4.2-4.2-4.2h-13.8z"/><path class="lineal-fill" d="M294.9 288.5h-13.8c-8.9 0-16.1-7.2-16.1-16.1v-48.3c0-8.9 7.2-16.1 16.1-16.1h13.8c8.9 0 16.1 7.2 16.1 16.1v48.3c0 8.9-7.2 16.1-16.1 16.1z"/><path class="lineal-stroke" d="M294.9 300.4h-13.8c-15.5 0-28-12.5-28-28v-48.3c0-15.5 12.5-28 28-28h13.8c15.5 0 28 12.5 28 28v48.3c0 15.5-12.5 28-28 28zm-13.8-80.5c-2.3 0-4.2 1.9-4.2 4.2v48.3c0 2.3 1.9 4.2 4.2 4.2h13.8c2.3 0 4.2-1.9 4.2-4.2v-48.3c0-2.3-1.9-4.2-4.2-4.2h-13.8z"/></svg>
                            <h4 class="card-title text-white">Gold</h4>
                            <div class="prices text-white">
                                <div class="price price-show"><span class="price-currency">₺</span><span class="price-value fs-40">1.600</span> <span class="price-duration text-white-50">{{__('theme2-global.month')}}</span></div>
                                <div class="price price-hide"><span class="price-currency">₺</span><span class="price-value fs-40"><span> 15.360</span><sup class="text-muted" style="text-decoration: line-through">19.200</sup></span> <span class="price-duration text-white-50">{{__('theme2-global.year')}}</span></div>
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
        checkboxPlan.addEventListener('change', function(e){
            if(checkboxPlan.checked){
                let priceShows = document.querySelectorAll('.price-show');
                let priceHides = document.querySelectorAll('.price-hide');
                priceShows.forEach(function(priceShow){
                    priceShow.classList.remove('price-show');
                    priceShow.classList.add('price-hide');
                });
                priceHides.forEach(function(priceHide){
                    priceHide.classList.remove('price-hide');
                    priceHide.classList.add('price-show');
                });
            }else{
                let priceShows = document.querySelectorAll('.price-show');
                let priceHides = document.querySelectorAll('.price-hide');
                priceShows.forEach(function(priceShow){
                    priceShow.classList.remove('price-show');
                    priceShow.classList.add('price-hide');
                });
                priceHides.forEach(function(priceHide){
                    priceHide.classList.remove('price-hide');
                    priceHide.classList.add('price-show');
                });
            }
        });
        function appHeight() {
            const e = document.documentElement;
            e.style.setProperty("--vh", .01 * window.innerHeight + "px")
        }

        window.addEventListener("resize", appHeight), appHeight();
    </script>
@endpush
