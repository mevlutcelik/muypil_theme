@php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $iconTop = false;
    if(preg_match('/Chrome/i',$userAgent)){
        $iconTop = false;
    }else if(preg_match('/Firefox/i',$userAgent) || preg_match('/Safari/i',$userAgent)){
        $iconTop = true;
    }
@endphp
@if($iconTop)
    <style>
        .muypil-responsive-table.table thead tr {
            background: rgba(0, 0, 0, 0.6) !important;
            color: #fff !important;
            backdrop-filter: initial !important;
        }
    </style>
@endif
<section class="wrapper">
    <div class="py-13 py-md-16">
        <div class="row text-center">
            <div class="col-xl-10 mx-auto">
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div
                class="col-xl-10 mx-auto px-4 px-md-8 px-lg-10 px-xl-12 px-xxl-14 d-flex align-items-start flex-column">
                {{--Table Start--}}
                <div class="d-flex align-items-center justify-content-center justify-content-md-between">
                    <div class="fw-bold d-none d-md-block"
                         style="margin-bottom: 1rem;color: rgba(255,255,255,0.6);">{{__('theme2-dashboard-global.filter-message')}}
                    </div>
                </div>
                <p class="text-white-50 fw-bold d-none d-md-block">{{__('theme2-dashboard-global.double-click-for-copy')}}</p>

                <div class="table-responsive">
                    <table class="table table-bordered muypil-responsive-table"
                           style="border: 1px solid rgba(255,255,255,0.05);">
                        <thead>
                        <tr class="muypil-table-header"
                            style="background: rgba(255,255,255,0.15);color: #fff;backdrop-filter: blur(0.5rem)">
                            <th scope="col"
                                class="no-filter d-none d-md-initial">{{__('theme2-dashboard-global.action')}}</th>
                            <th scope="col"
                                class="no-filter d-initial d-md-none">{{__('theme2-global.full-name')}}</th>
                            <th scope="col" class="d-none d-md-initial">
                                <div class="form-floating">
                                    <input id="first-name" type="text" class="form-control mx-table-input"
                                           placeholder="{{__('theme2-global.first-name')}}">
                                    <label
                                        for="first-name">{{__('theme2-global.first-name')}}</label>
                                </div>
                            </th>
                            <th scope="col" class="d-none d-md-initial">
                                <div class="form-floating">
                                    <input id="last-name" type="text" class="form-control mx-table-input"
                                           placeholder="{{__('theme2-global.last-name')}}">
                                    <label
                                        for="last-name">{{__('theme2-global.last-name')}}</label>
                                </div>
                            </th>
                            <th scope="col" class="d-none d-md-initial">
                                <div class="form-floating">
                                    <input id="email" type="text" class="form-control mx-table-input"
                                           placeholder="{{__('theme2-global.email')}}">
                                    <label
                                        for="email">{{__('theme2-global.email')}}</label>
                                </div>
                            </th>
                            <th scope="col" class="d-none d-md-initial">
                                <div class="form-floating">
                                    <input id="phone" type="text" class="form-control mx-table-input"
                                           placeholder="{{__('theme2-global.phone')}}">
                                    <label
                                        for="phone">{{__('theme2-global.phone')}}</label>
                                </div>
                            </th>
                            <th scope="col"
                                class="no-filter d-none d-md-initial">{{__('theme2-dashboard-global.packet-count')}}</th>
                            <th scope="col"
                                class="no-filter d-none d-md-initial">{{__('theme2-dashboard-global.has-packet')}}</th>
                            <th scope="col"
                                class="no-filter d-none d-md-initial">{{__('theme2-dashboard-global.date')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--Todo: Tabloda gelen veri eğer boş ise "&nbsp;" koymak zorundayız. Aksi halde tasarım kayıyor.
                        Todo: Foreach ile gelen verileri listele--}}
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        <tr data-bs-toggle="modal"
                            data-bs-target="#modal-01" {{--TODO: #modal-01 yazan yeri gelen verinin idsi ile değiştirelim--}}>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.ip-city')}}">
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-pen"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-eye"></i></a>
                                <a style="background-color: rgba(255,255,255,0.15);border-color:transparent;" href="#"
                                   class="btn btn-circle btn-primary btn-sm"><i class="uil uil-users-alt"></i></a>
                            </td>
                            <td class="d-initial d-md-none"
                                data-label="{{__('theme2-global.full-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.first-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Jale
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.last-name')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Karatekin
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-global.email')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">jkaratekin2@gmail.com
                            </td>
                            <td class="d-none d-md-initial" data-label="{{__('theme2-global.phone')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                +905305706733
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.packet-count')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">
                                10
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.has-packet')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">Evet
                            </td>
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.date')}}"
                                title="{{__('theme2-dashboard-global.copy-column')}}">04/08/2021 22:02
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-md-end w-100 mt-4">
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.pagination -->
                    </nav>
                    <!-- /nav -->
                </div>
                {{--Modal Start--}}
                {{--TODO: Modali dinamik hale getirelim --}}
                <div class="modal fade" id="modal-01" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content text-center">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                <h2 class="mb-3 text-start">{{__('theme2-dashboard-global.detail')}}</h2>
                                <div class="table-responsive">
                                    <table class="table table-bordered muypil-responsive-table-mobile"
                                           style="border: 1px solid rgba(255,255,255,0.05)">
                                        <tbody>
                                        {{--Todo: Tabloda gelen veri eğer boş ise "&nbsp;" koymak zorundayız. Aksi halde tasarım kayıyor.--}}
                                        <tr>
                                            <td class="d-initial d-md-none"
                                                data-label="{{__('theme2-dashboard-global.action')}}"
                                                title="&nbsp;">
                                                <div>
                                                    <a style="background-color: rgba(0,0,0,0.15);border-color:transparent;color:#000;"
                                                       href="#" class="btn btn-circle btn-primary btn-sm"><i
                                                            class="uil uil-pen" data-bs-toggle="modal"
                                                            data-bs-target="#modal-02"></i></a> {{--TODO: #modal-edit-02 yazan yeri #modal-edit__USERID__ ile değiştirelim--}}
                                                    <a style="background-color: rgba(0,0,0,0.15);border-color:transparent;color:#000;"
                                                       href="#" class="btn btn-circle btn-primary btn-sm"><i
                                                            class="uil uil-eye"></i></a>
                                                    <a style="background-color: rgba(0,0,0,0.15);border-color:transparent;color:#000;"
                                                       href="#" class="btn btn-circle btn-primary btn-sm"><i
                                                            class="uil uil-users-alt"></i></a>
                                                </div>
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-global.first-name')}}">
                                                Jale
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-global.last-name')}}">
                                                Karatekin
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-global.email')}}">
                                                jkaratekin2@gmail.com
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-global.phone')}}">
                                                +905305706733
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-dashboard-global.packet-count')}}">
                                                10
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-dashboard-global.has-packet')}}">
                                                Evet
                                            </td>
                                            <td class="d-none d-md-initial"
                                                data-label="{{__('theme2-dashboard-global.date')}}">
                                                04/08/2021 22:02
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/.modal-content -->
                        </div>
                        <!--/.modal-body -->
                    </div>
                    <!--/.modal-dialog -->
                </div>
                <!--/.modal -->
                {{--Modal Finish--}}
                {{--Table Finish--}}
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@push('scripts')
    {{--Todo: Canvasların (Chart.js) script kodlarını buraya koyabiliriz.--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let allRows = document.querySelectorAll('tr:not(.muypil-table-header)');
        allRows.forEach(function (row) {
            window.addEventListener('resize', function (event) {
                if (window.innerWidth >= 768) {
                    row.removeAttribute('data-bs-target');
                }
            });
            if (screen.width >= 768) {
                row.removeAttribute('data-bs-target');
            }
            let columns = row.querySelectorAll('td');
            columns.forEach(function (column) {
                column.addEventListener('click', function () {
                    console.clear();
                });
                column.addEventListener('dblclick', function () {
                    if (this.innerHTML.trim() !== '&nbsp;' && this.innerHTML.trim() !== '') {
                        navigator.clipboard.writeText(this.innerHTML).then(function () {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: '{{__('theme2-dashboard-global.copied-successfuly')}}'
                            })
                        }, function (err) {
                            /*is->Err*/
                        });
                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'warning',
                            title: '{{__('theme2-dashboard-global.copied-null')}}'
                        })
                    }
                });
            });
        });
    </script>
@endpush
