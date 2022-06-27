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

        select{
            /*background-image: url({{asset('assets2/img/icons/914-9148298_downarrow-white-down-arrow-icon-white.png')}})!important;*/
            background-size: calc(32px/3) calc(19px/3) !important;
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
        .table{border-color: transparent}
        .table tr{
            border-bottom-color: rgba(255,255,255,0.15);
        }
        .table td{
            max-width: initial;
            min-width: initial;
            width: initial;
            color: #fff;
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
    <div class="row g-6" style="
    height: calc((var(--vh, 1vh) * 100) - 140px);
    max-height: calc((var(--vh, 1vh) * 100) - 140px);
    overflow-y: auto;
    overflow-x: hidden;
    ">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{__('theme2-dashboard-global.payment-details')}}</h5>
                    <div class="form-floating mb-4">
                        <input id="card_owner" name="card_owner" type="text" class="form-control"
                               placeholder="{{__('theme2-dashboard-global.card-owner')}}" required>
                        <label for="card_owner">{{__('theme2-dashboard-global.card-owner')}}</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="card_number" name="card_owner" type="text" class="form-control"
                               placeholder="{{__('theme2-dashboard-global.card-number')}}" required>
                        <label for="card_number">{{__('theme2-dashboard-global.card-number')}}</label>
                    </div>
                    <div class="row">
                        <div class="form-select-wrapper mb-4 col-md-6 col-lg-4">
                            <select class="form-select"
                                    aria-label="{{\Illuminate\Support\Str::ucfirst(__('theme2-global.month'))}}">
                                <option
                                    selected>{{\Illuminate\Support\Str::ucfirst(__('theme2-global.month'))}}</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-select-wrapper mb-4 col-md-6 col-lg-4">
                            <select class="form-select"
                                    aria-label="{{\Illuminate\Support\Str::ucfirst(__('theme2-global.year'))}}">
                                <option selected>{{\Illuminate\Support\Str::ucfirst(__('theme2-global.year'))}}</option>
                                @for($y = date('Y'); $y <= date('Y') + 20; $y++)
                                    <option value="{{$y}}">{{$y}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-select-wrapper mb-4 col-md-6 col-lg-4">
                            <input id="cvc" name="cvc" type="text" class="form-control"
                                   placeholder="CVC" required>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <button id="pay-cancel" class="btn btn-navy me-2"><i
                                class="uil uil-trash-alt"></i> {{__('theme2-dashboard-global.cancel')}}</button>
                        <button type="submit" id="pay" class="btn btn-white">{{__('theme2-dashboard-global.pay')}} <i
                                class="uil uil-arrow-right"></i></button>
                    </div>
                    <!-- /.form-floating -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /column -->
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">{{__('theme2-dashboard-global.order-summary')}}</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>{{__('theme2-dashboard-global.packet-name')}}</td>
                            <td>Starter</td>
                        </tr>
                        <tr>
                            <td>{{__('theme2-dashboard-global.clicks-count')}}</td>
                            <td>10.000</td>
                        </tr>
                        <tr>
                            <td>{{__('theme2-dashboard-global.packet-price')}}</td>
                            <td>₺400</td>
                        </tr>
                        <tr>
                            <td>{{__('theme2-dashboard-global.type')}}</td>
                            <td>{{__('theme2-global.monthly')}}</td>
                        </tr>
                        <tr>
                            <td>{{__('theme2-dashboard-global.discount')}}</td>
                            <td>0%</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="d-flex align-items-center justify-content-end fs-26">{{__('theme2-dashboard-global.total')}}: <span class="ms-2 text-white">₺400</span></div>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
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
