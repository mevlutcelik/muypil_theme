@push('styles')
    <style>
        .card {
            border-radius: 8px;
        }

        .btn-primary {
            background: rgba(0, 0, 0, 0.5);
            border: none;
        }

        .card-body {
            padding: 1rem;
        }

        .lineal-stroke {
            fill: #fff;
        }

        .lineal-fill {
            fill: rgba(255, 255, 255, 0.5);
        }

        .icon-list.bullet-bg li {
            color: rgba(255, 255, 255, 0.5);
        }

        .mx-card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 1rem;
            height: calc((var(--vh, 1vh) * 100) - 200px);
            max-height: calc((var(--vh, 1vh) * 100) - 200px);
            padding: 2rem;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .bg-blur {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        input {
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
            display: none;
        }

        .slider {
            background-color: rgba(255, 255, 255, 0.1);
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
        }

        .slider:before {
            background-color: #fff;
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

        input, select {
            background-color: rgba(255, 255, 255, 0.15) !important;
            color: #fff !important;
            width: auto;
        }

        select option{
            background-color: #121212;
        }

        input:focus {
            border-color: rgba(255, 255, 255, 0.5) !important;
        }

        .form-floating > label {
            color: #fff;
        }
    </style>
@endpush
<section class="wrapper">
    <div class="container pt-13 pb-18 pt-md-14 pb-md-22 text-center">
        <div class="row">
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n21 mt-md-n23 mx-card p-2 p-md-4 p-lg-8">
            <h3 class="text-white mb-6">{{__('theme2-dashboard-global.detection-rules')}}</h3>
            <div class="card bg-blur">
                <div class="card-blur p-6">
                    <h5 class="text-white">{{__('theme2-dashboard-global.detection-rules')}}</h5>
                    <p>{{__('theme2-dashboard-global.block-rules-list')}}</p>
                    {{--Input (Satır) Başlangıç--}}
                    @if(config('app.locale') === 'tr')
                        <div class="row p-2">
                            <div class="d-flex align-items-center">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label for="textInputExample" class="me-1 fs-14">Text Input</label>
                                <div class="form-floating col-sm-12 col-md-6 col-lg-4">
                                    <input id="textInputExample" type="text" class="form-control"
                                           placeholder="Text Input">
                                    <label for="textInputExample">Text Input</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.form-floating -->
                    @else
                    @endif
                    {{--Input (Satır) Bitiş--}}
                </div>
            </div>
            <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
</section>
@push('scripts')
    <script>
        console.clear();
        let checkboxPlan = document.querySelector('input[type="checkbox"]');
        checkboxPlan.addEventListener('click', function (e) {
            if (checkboxPlan.checked) {
                let priceShows = document.querySelectorAll('.price-show');
                let priceHides = document.querySelectorAll('.price-hide');
                priceShows.forEach(function (priceShow) {
                    priceShow.classList.remove('price-show');
                    priceShow.classList.add('price-hide');
                });
                priceHides.forEach(function (priceHide) {
                    priceHide.classList.remove('price-hide');
                    priceHide.classList.add('price-show');
                });
            } else {
                let priceShows = document.querySelectorAll('.price-show');
                let priceHides = document.querySelectorAll('.price-hide');
                priceShows.forEach(function (priceShow) {
                    priceShow.classList.remove('price-show');
                    priceShow.classList.add('price-hide');
                });
                priceHides.forEach(function (priceHide) {
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
