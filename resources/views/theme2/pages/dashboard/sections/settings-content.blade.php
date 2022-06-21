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

        select option {
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
            <ul class="nav nav-tabs muypil-top-bar nav-pills pb-0 pb-sm-0 pb-md-0 pb-lg-0 pb-xl-4">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#topbar-detection-rules">
                        <i class="uil uil-clipboard pe-1"></i>
                        <span>{{__('theme2-dashboard-global.detection-rules')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#topbar-keywords">
                        <i class="uil uil-text-size pe-1"></i>
                        <span>{{__('theme2-dashboard-global.keywords')}}</span>
                        <span class="badge gradient-2 ms-1">Yeni</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#topbar-countries">
                        <i class="uil uil-robot pe-1"></i>
                        <span>{{__('theme2-dashboard-global.countries')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#topbar-multi-clicks">
                        <i class="uil uil-browser pe-1"></i>
                        <span>{{__('theme2-dashboard-global.multi-clicks')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#topbar-ip-ranges">
                        <i class="uil uil-user-square pe-1"></i>
                        <span>{{__('theme2-dashboard-global.ip-ranges')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#topbar-cidr">
                        <i class="uil uil-eye pe-1"></i>
                        <span>{{__('theme2-dashboard-global.cidr')}}</span>
                    </a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-pane fade show active card bg-blur" id="topbar-detection-rules">
                <div class="card-blur p-6">
                    <h5 class="text-white">{{__('theme2-dashboard-global.detection-rules')}}</h5>
                    <p>{{__('theme2-dashboard-global.block-rules-list')}}</p>
                    {{--Input (Satır) Başlangıç--}}
                    @if(config('app.locale') === 'tr')
                        {{--Satır başlangıcı--}}
                        <div class="row p-2">
                            <div class="d-flex align-items-center flex-wrap">
                                <label class="mx-1 fs-14">Aynı</label>
                                <select class="form-select" aria-label="IP"
                                        style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                    <option value="ip">IP</option>
                                    <option value="2">Cidr</option>
                                    <option value="3">IP Aralığı</option>
                                </select>
                                <input id="textInputExample" value="1" type="text" class="form-control"
                                       style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                <select class="form-select" aria-label="Gün"
                                        style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                    <option value="day">Gün</option>
                                    <option value="hours">Saat</option>
                                    <option value="minute">Dakika</option>
                                </select>
                                <label class="mx-1 fs-14">içinde</label>
                                <div class="d-flex align-items-center">
                                    <input id="textInputExample" value="1" type="text" class="form-control"
                                           style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                </div>
                                <label class="mx-1 fs-14">defa tıklayabilir.</label>
                                <a href="#" class="btn btn-circle btn-soft-primary btn-sm ms-4"><i
                                        class="uil uil-trash-alt"></i></a>
                            </div>
                        </div>
                        {{--Satır bitişi--}}
                    @else
                        {{--Satır başlangıcı--}}
                        <div class="row p-2">
                            <div class="d-flex align-items-center flex-wrap">
                                <label class="mx-1 fs-14">Allow up to</label>
                                <input id="textInputExample" value="1" type="text" class="form-control"
                                       style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                <label class="mx-1 fs-14">ads clicks within</label>
                                <input id="textInputExample" value="1" type="text" class="form-control"
                                       style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                <select class="form-select" aria-label="Gün"
                                        style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                    <option value="day">Day</option>
                                    <option value="hours">Hour</option>
                                    <option value="minute">Minute</option>
                                </select>
                                <label class="mx-1 fs-14">defa tıklayabilir.</label>
                                <select class="form-select" aria-label="IP"
                                        style="padding: 0.25rem 0.5rem;font-size: 13px;width: 4rem;">
                                    <option value="ip">IP</option>
                                    <option value="2">Cidr</option>
                                    <option value="3">IP Range</option>
                                </select>
                                <a href="#" class="btn btn-circle btn-soft-primary btn-sm ms-4"><i
                                        class="uil uil-trash-alt"></i></a>
                            </div>
                        </div>
                        {{--Satır bitişi--}}
                    @endif
                    <div class="d-flex align-items-center justify-content-end mt-4">
                        <a href="#" class="hover-2 text-white">{{__('theme2-dashboard-global.add-rule')}}</a>
                    </div>
                    {{--Input (Satır) Bitiş--}}
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade card bg-blur" id="topbar-countries">
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
            <!--/.tab-pane -->
        </div>
        <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
</section>
@push('scripts')
    <script>
        console.clear();

        function appHeight() {
            const e = document.documentElement;
            e.style.setProperty("--vh", .01 * window.innerHeight + "px")
        }

        window.addEventListener("resize", appHeight), appHeight();
    </script>
@endpush
