<section class="wrapper bg-navy pt-16" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),url({{asset('assets2/img/photos/bg20.png')}});background-repeat: no-repeat;background-size: cover;">
    <div class="container pt-10 pb-17 pt-md-14 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto mb-5">
                <h3 class="display-1 mb-6 text-white">{{__('theme2-global.login')}}</h3>
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
                        <h2 class="mb-3 text-start">{{__('theme2-global.login-title')}}</h2>
                        <p class="lead mb-6 fs-16 text-start">{{__('theme2-global.login-desc')}}</p>
                        <form class="text-start mb-3">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="{{__('theme2-global.email')}}" id="email">
                                <label for="email">{{__('theme2-global.email')}}</label>
                            </div>
                            <div class="form-floating password-field mb-4">
                                <input type="password" class="form-control" placeholder="{{__('theme2-global.password')}}" id="password">
                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                <label for="password">{{__('theme2-global.password')}}</label>
                            </div>
                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">{{__('theme2-global.login')}}</a>
                        </form>
                        <!-- /form -->
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-1"><a href="{{route('reset-password')}}" class="hover">{{__('theme2-global.forgot-password')}}</a></p>
                            <p class="mb-0"><a href="{{route('register')}}" class="hover">{{__('theme2-global.register')}}</a></p>
                        </div>
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
