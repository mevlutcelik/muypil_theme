@push('styles')
    <style>
        .card {
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.5);
        }

        ::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        ::-moz-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        :-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        ::-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        ::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        ::-moz-placeholder {
            color: rgba(255, 255, 255, 0.5) !important
        }

        .card-title {
            color: #fff;
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
            border-radius: 2px;
            height: calc((var(--vh, 1vh) * 100) - 244px);
            max-height: calc((var(--vh, 1vh) * 100) - 244px);
            padding: 2rem;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .bg-blur {
            background: rgba(255, 255, 255, 0.15);
        }

        input, select {
            background-color: rgba(255, 255, 255, 0.15) !important;
            color: #fff !important;
        }

        select {
            background-image: url({{asset('assets2/img/icons/914-9148298_downarrow-white-down-arrow-icon-white.png')}}) !important;
            background-size: calc(32px / 3) calc(19px / 3) !important;
        }

        option {
            background-color: #121212;
        }

        .form-control:focus {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .form-floating > label {
            color: rgba(255, 255, 255, 0.7);
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

        .table {
            border-color: transparent
        }

        .table tr {
            border-bottom-color: rgba(255, 255, 255, 0.15);
        }

        .table td {
            max-width: initial;
            min-width: initial;
            width: initial;
            color: #fff;
        }

        .tab-content {
            overflow: hidden;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
        }

        .bg-blur {
            border-radius: 2px;
        }

        .tab-centered-with {
            width: 100%;
            margin: 0 auto;
        }

        @media all and (min-width: 768px) {
            .tab-centered-with {
                width: 80%;
                margin: 0 auto;
            }
        }
        @media all and (min-width: 1024px) {
            .tab-centered-with {
                width: 60%;
                margin: 0 auto;
            }
        }
    </style>
@endpush
<section class="wrapper">
    <div class="container pt-13 pb-2 pt-md-14 pb-md-8 text-center">
        <div class="row">
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper container">
    <div class="row g-6 pe-1">
        <div class="col-lg-12"
             style="max-height: calc((var(--vh, 1vh) * 100) - 260px);overflow-y: auto;overflow-x: hidden">
            <div class="d-flex align-items-center justify-content-center">
                <ul class="nav nav-tabs muypil-top-bar nav-pills pb-0 pb-md-4 pb-lg-4 pb-xl-4 mt-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#topbar-personal-information">
                            <i class="uil uil-user-circle pe-1"></i>
                            <span>{{__('theme2-dashboard-global.personal-information')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-change-password">
                            <i class="uil uil-lock-alt pe-1"></i>
                            <span>{{__('theme2-dashboard-global.change-password')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-personal-settings">
                            <i class="uil uil-setting pe-1"></i>
                            <span>{{__('theme2-dashboard-global.settings')}}</span>
                        </a>
                    </li>
                    {{--<li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#!">
                            <i class="uil uil-check-circle pe-1"></i>
                            <span>{{__('theme2-dashboard-global.accounts-accesses')}}</span>
                        </a>
                    </li>--}}
                </ul>
                <!-- /.nav-tabs -->
            </div>
            <div class="tab-content tab-centered-with">
                <div class="tab-pane fade show active card" style="background: transparent;box-shadow: none;"
                     id="topbar-personal-information">
                    <div class="bg-blur p-6">
                        <h5 class="text-white">{{__('theme2-dashboard-global.personal-information')}}</h5>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="textInputExample" type="text" class="form-control" autocomplete="off"
                                           placeholder="{{__('theme2-global.first-name')}}"
                                           value="Ad"> {{--TODO: Input value değerine kullanıcının adını yazalım--}}
                                    <label for="textInputExample">{{__('theme2-global.first-name')}}</label>
                                </div>
                                <!-- /.form-floating -->
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="textInputExample" type="text" class="form-control" autocomplete="off"
                                           placeholder="{{__('theme2-global.last-name')}}"
                                           value="Soyad"> {{--TODO: Input value değerine kullanıcının soyadını yazalım--}}
                                    <label for="textInputExample">{{__('theme2-global.last-name')}}</label>
                                </div>
                                <!-- /.form-floating -->
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="textInputExample" type="text" class="form-control" autocomplete="off"
                                           placeholder="{{__('theme2-global.email')}}"
                                           value="name@domain.com"> {{--TODO: Input value değerine kullanıcının e-posta adresini yazalım--}}
                                    <label for="textInputExample">{{__('theme2-global.email')}}</label>
                                </div>
                                <!-- /.form-floating -->
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end mt-4">
                            <a href="#" class="btn btn-light text-dark btn-sm rounded"><i
                                    class="uil uil-save me-2"></i> {{__('theme2-dashboard-global.save-rule')}}</a>
                        </div>
                    </div>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade card me-2" style="background: transparent;box-shadow: none;"
                     id="topbar-change-password">
                    <div class="bg-blur p-6">
                        <h5 class="text-white">{{__('theme2-dashboard-global.change-password')}}</h5>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control" id="current_password"
                                           placeholder="{{__('theme2-dashboard-global.current-password')}}">
                                    <span class="password-toggle text-white"><i class="uil uil-eye"></i></span>
                                    <label
                                        for="current_password">{{__('theme2-dashboard-global.current-password')}}</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control" id="new_password"
                                           placeholder="{{__('theme2-dashboard-global.new-password')}}">
                                    <span class="password-toggle text-white"><i class="uil uil-eye"></i></span>
                                    <label for="new_password">{{__('theme2-dashboard-global.new-password')}}</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control" id="password_confirmation"
                                           placeholder="{{__('theme2-dashboard-global.password-confirmation')}}">
                                    <span class="password-toggle text-white"><i class="uil uil-eye"></i></span>
                                    <label
                                        for="password_confirmation">{{__('theme2-dashboard-global.password-confirmation')}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end mt-4">
                            <a href="#" class="btn btn-light text-dark btn-sm rounded"><i
                                    class="uil uil-save me-2"></i> {{__('theme2-dashboard-global.save-rule')}}</a>
                        </div>
                    </div>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade card me-2" style="background: transparent;box-shadow: none;"
                     id="topbar-personal-settings">
                    <div class="bg-blur p-6">
                        <h5 class="text-white">{{__('theme2-dashboard-global.settings')}}</h5>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-white">{{__('theme2-dashboard-global.local-time-zone')}}</p>
                                <p class="fs-14 text-white-50 mt-n4">{{__('theme2-dashboard-global.local-time-zone-desc')}}</p>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" aria-label="Default select example">
                                    {{--TODO: Moment'ten TimeZone'lar listelenecek--}}
                                    <option selected value="1">Europe/Istanbul</option>
                                    <option value="2">Europe/Istanbul</option>
                                    <option value="3">Europe/Istanbul</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-white">{{__('theme2-dashboard-global.currency')}}</p>
                                <p class="fs-14 text-white-50 mt-n4">{{__('theme2-dashboard-global.currency-desc')}}</p>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select">
                                    {{--TODO: Para birimlerinin value değerini değiştirelim--}}
                                    <option selected value="1">Türk Lirası</option>
                                    <option value="2">Dollar</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-white">{{__('theme2-dashboard-global.language')}}</p>
                                <p class="fs-14 text-white-50 mt-n4">{{__('theme2-dashboard-global.language-desc')}}</p>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select">
                                    {{--TODO: Dilleri LaravelLocalization ile listeleyelim--}}
                                    <option selected value="1">Türkçe</option>
                                    <option value="2">İngilizce</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-white">{{__('theme2-dashboard-global.freezing-account')}}</p>
                                <p class="fs-14 text-white-50 mt-n4">{{__('theme2-dashboard-global.freezing-account-desc')}}</p>
                            </div>
                            <a href="#"
                               class="btn btn-navy text-white btn-sm">{{__('theme2-dashboard-global.freeze-account')}}</a>
                        </div>
                    </div>
                </div>
                <!--/.tab-pane -->
            </div>
        </div>
        <!-- /column -->
    </div>
</section>
@push('scripts')
    <script src="{{ asset('assets2/js/jquery/jquery.inputmask.min.js') }}"></script>
    <script>
        console.clear();
        $(function () {
            $("#card_number").inputmask({"mask": "9999 9999 9999 9999"});
            $("#cvc").inputmask({"mask": "999"});
        });

        function appHeight() {
            const e = document.documentElement;
            e.style.setProperty("--vh", .01 * window.innerHeight + "px")
        }

        window.addEventListener("resize", appHeight), appHeight();
    </script>
@endpush
