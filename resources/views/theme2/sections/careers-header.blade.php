<section class="wrapper bg-navy pt-16" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),url({{asset('assets2/img/photos/bg21.png')}});background-repeat: no-repeat;background-size: cover;">
    <div class="container pt-10 pb-17 pt-md-14 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto mb-5">
                <h3 class="display-1 mb-6 text-white">{{__('theme2-global.careers')}}</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n16">
                <div class="card">
                    <div class="card-body p-11 text-center">
                        <h2 class="mb-3 text-start">{{__('theme2-global.careers-title')}}</h2>
                        <p class="lead mb-6 fs-16 text-start">{{__('theme2-global.careers-desc')}}</p>
                        <form class="text-start mb-3">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="{{__('theme2-global.first-name')}}" id="first_name">
                                <label for="first_name">{{__('theme2-global.first-name')}}</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="{{__('theme2-global.last-name')}}" id="last_name">
                                <label for="last_name">{{__('theme2-global.last-name')}}</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="tel" class="form-control" placeholder="{{__('theme2-global.phone')}}" id="phone">
                                <label for="phone">{{__('theme2-global.phone')}}</label>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">{{__('theme2-global.login')}}</a>
                        </form>
                        <!-- /form -->
                        <p class="mb-1"><a href="#" class="hover">{{__('theme2-global.forgot-password')}}</a></p>
                        <p class="mb-0">{{__('theme2-global.dont-account')}} <a href="./signup.html" class="hover">{{__('theme2-global.register')}}</a></p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@push('scripts')
    <script src="{{ asset('assets2/js/jquery/jquery.inputmask.min.js') }}"></script>
    <script>
        $(function () {
            $("#phone").inputmask({"mask": "(999) 999-9999"});
        });
    </script>
@endpush
