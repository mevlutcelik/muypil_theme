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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
                        <tr mx-modal="true">
                            <td class="d-none d-md-initial"
                                data-label="{{__('theme2-dashboard-global.action')}}">
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
@endpush
