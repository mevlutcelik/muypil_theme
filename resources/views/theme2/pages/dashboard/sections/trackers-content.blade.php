<section class="wrapper">
    <div class="py-13 py-md-16">
        <div class="row text-center">
            <div class="col-xl-10 mx-auto">
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xl-10 mx-auto d-flex align-items-center flex-column">
                <ul class="nav nav-tabs muypil-top-bar nav-pills px-2 px-md-4 px-lg-6 p-xxl-8">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#topbar-statistics">
                            <i class="uil uil-analytics pe-1"></i>
                            <span>{{__('theme2-dashboard-global.statistics')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-countries">
                            <i class="uil uil-globe pe-1"></i>
                            <span>{{__('theme2-dashboard-global.countries')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-keywords">
                            <i class="uil uil-text-size pe-1"></i>
                            <span>{{__('theme2-dashboard-global.keywords')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-multi-clicks">
                            <i class="uil uil-mouse pe-1"></i>
                            <span>{{__('theme2-dashboard-global.multi-clicks')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-ip-ranges">
                            <i class="uil uil-chart-growth-alt pe-1"></i>
                            <span>{{__('theme2-dashboard-global.ip-ranges')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-cidr">
                            <i class="uil uil-chart-bar-alt pe-1"></i>
                            <span>{{__('theme2-dashboard-global.cidr')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#topbar-blocked-ips">
                            <i class="uil uil-cloud-block pe-1"></i>
                            <span>{{__('theme2-dashboard-global.blocked-ips')}}</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav-tabs -->

                <div class="tab-content">
                    <div class="tab-pane fade show active mx-2 mx-md-4 mx-lg-6 mx-xl-8" id="topbar-statistics">
                        {{--Table Start--}}
                        <div class="d-flex align-items-center justify-content-center justify-content-md-between">
                            {{--Todo: Dil dosyasından "filter"i kaldır. Yerine "Filtreleri göster/gizle" ekle--}}
                            <div class="fw-bold d-none d-md-block"
                                 style="margin-bottom: 1rem;color: rgba(255,255,255,0.6);">Filtrele
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-date">
                                    <label class="text-white-50"
                                           for="">{{__('theme2-dashboard-global.started_at')}}</label>
                                    <input type="date" id="datepicker-start" name="trip-start"
                                           value="{{date("Y-m-d")}}"
                                           min="2015-01-01" max="{{date('Y')}}-12-31">
                                </div>
                                <div class="input-date">
                                    <label class="text-white-50"
                                           for="">{{__('theme2-dashboard-global.finished_at')}}</label>
                                    <input type="date" id="datepicker-start" name="trip-start"
                                           value="{{date("Y-m-d")}}"
                                           min="2015-01-01" max="{{date('Y')}}-12-31">
                                </div>
                            </div>
                            <!-- /.form-floating -->
                        </div>
                        {{--<div class="mx-filter-box">

                            <div class="form-floating mb-4 me-2">
                                <input id="campaing" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.campaing')}}">
                                <label for="campaing">{{__('theme2-dashboard-global.campaing')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="keyword" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.keyword')}}">
                                <label for="keyword">{{__('theme2-dashboard-global.keyword')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip" type="text" class="form-control mx-filter"
                                       placeholder="IP">
                                <label for="ip">IP</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip-range" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.ip-range')}}">
                                <label for="ip-range">{{__('theme2-dashboard-global.ip-range')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="cidr" type="text" class="form-control mx-filter"
                                       placeholder="CIDR">
                                <label for="cidr">CIDR</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="as-org" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.as-org')}}">
                                <label for="as-org">{{__('theme2-dashboard-global.as-org')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip-country" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.ip-country')}}">
                                <label for="ip-country">{{__('theme2-dashboard-global.ip-country')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip-city" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.ip-city')}}">
                                <label for="ip-city">{{__('theme2-dashboard-global.ip-city')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="Platform" type="text" class="form-control mx-filter"
                                       placeholder="Platform">
                                <label for="Platform">Platform</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="browser" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.browser')}}">
                                <label for="browser">{{__('theme2-dashboard-global.browser')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="device" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.device')}}">
                                <label for="device">{{__('theme2-dashboard-global.device')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fs-11 mb-1">{{__('theme2-dashboard-global.clicks-count')}}</div>
                                    <div class="d-flex align-items-center">
                                        <input id="clicks-count-start" type="text"
                                               style="max-width: 3.5rem;height: 1.75rem;font-size: 11px;padding: 0 0.375rem;margin-top: -0.5rem;"
                                               class="form-control mx-filter"
                                               placeholder="{{__('theme2-dashboard-global.started_at')}}">
                                        <input id="clicks-count-finish" type="text"
                                               style="max-width: 3.5rem;height: 1.75rem;font-size: 11px;padding: 0 0.375rem;margin-top: -0.5rem;"
                                               class="form-control mx-filter"
                                               placeholder="{{__('theme2-dashboard-global.finished_at')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fs-11 mb-1">{{__('theme2-dashboard-global.time-spent')}}</div>
                                    <div class="d-flex align-items-center">
                                        <input id="clicks-count-start" type="text"
                                               style="max-width: 3.5rem;height: 1.75rem;font-size: 11px;padding: 0 0.375rem;margin-top: -0.5rem;"
                                               class="form-control"
                                               placeholder="{{__('theme2-dashboard-global.started_at')}}">
                                        <input id="clicks-count-finish" type="text"
                                               style="max-width: 3.5rem;height: 1.75rem;font-size: 11px;padding: 0 0.375rem;margin-top: -0.5rem;"
                                               class="form-control"
                                               placeholder="{{__('theme2-dashboard-global.finished_at')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-select-wrapper mb-4 me-2">
                                <select class="form-select" aria-label="{{__('theme2-dashboard-global.click-status')}}">
                                    <option selected>{{__('theme2-dashboard-global.click-status')}}</option>
                                    <option value="1">{{__('theme2-dashboard-global.all')}}</option>
                                    <option value="2">{{__('theme2-dashboard-global.yes')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.no')}}</option>
                                </select>
                            </div>
                            <div class="form-select-wrapper mb-4 me-2">
                                <select class="form-select"
                                        aria-label="{{__('theme2-dashboard-global.scroll-status')}}">
                                    <option selected>{{__('theme2-dashboard-global.scroll-status')}}</option>
                                    <option value="1">{{__('theme2-dashboard-global.all')}}</option>
                                    <option value="2">{{__('theme2-dashboard-global.yes')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.no')}}</option>
                                </select>
                            </div>
                            <div class="form-select-wrapper mb-4 me-2">
                                <select class="form-select" aria-label="{{__('theme2-dashboard-global.network')}}">
                                    <option selected>{{__('theme2-dashboard-global.network')}}</option>
                                    <option value="1">{{__('theme2-dashboard-global.all')}}</option>
                                    <option value="2">{{__('theme2-dashboard-global.google-search')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.search-partner')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.display-network')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.smart-shopping-campaign')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.youtube-videos')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.youtube-search')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.google-video')}}</option>
                                </select>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="gclid" type="text" class="form-control mx-filter"
                                       placeholder="Gclid">
                                <label for="gclid">Gclid</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="redirect-url" type="text" class="form-control mx-filter"
                                       placeholder="Redirect URL">
                                <label for="redirect-url">Redirect URL</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="user-agent" type="text" class="form-control mx-filter"
                                       placeholder="User Agent">
                                <label for="user-agent">User Agent</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="host" type="text" class="form-control mx-filter"
                                       placeholder="Host">
                                <label for="host">Host</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="as-number" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.as-number')}}">
                                <label for="as-number">{{__('theme2-dashboard-global.as-number')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip-region" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.ip-region')}}">
                                <label for="ip-region">{{__('theme2-dashboard-global.ip-region')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="ip-postal-code" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.ip-postal-code')}}">
                                <label for="ip-postal-code">{{__('theme2-dashboard-global.ip-postal-code')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="first-click" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.first-click')}}">
                                <label for="first-click">{{__('theme2-dashboard-global.first-click')}}</label>
                            </div>
                            <div class="form-floating mb-4 me-2">
                                <input id="last-click" type="text" class="form-control mx-filter"
                                       placeholder="{{__('theme2-dashboard-global.last-click')}}">
                                <label for="last-click">{{__('theme2-dashboard-global.last-click')}}</label>
                            </div>
                            <div class="form-select-wrapper mb-4 me-2">
                                <select class="form-select" aria-label="Javascript">
                                    <option selected>Javascript</option>
                                    <option value="1">{{__('theme2-dashboard-global.all')}}</option>
                                    <option value="2">{{__('theme2-dashboard-global.yes')}}</option>
                                    <option value="3">{{__('theme2-dashboard-global.no')}}</option>
                                </select>
                            </div>
                        </div>--}}
                        <div class="table-responsive">
                            <table class="table table-bordered muypil-responsive-table"
                                   style="border: 1px solid rgba(255,255,255,0.05)">
                                <thead>
                                <tr style="background: rgba(255,255,255,0.15);color: #fff;">
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="account" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.account')}}">
                                            <label
                                                for="account">{{__('theme2-dashboard-global.account')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="campaing" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.campaing')}}">
                                            <label
                                                for="campaing">{{__('theme2-dashboard-global.campaing')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="keyword" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.keyword')}}">
                                            <label
                                                for="keyword">{{__('theme2-dashboard-global.keyword')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip" type="text" class="form-control mx-table-input"
                                                   placeholder="IP">
                                            <label
                                                for="ip">IP</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip-range" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.ip-range')}}">
                                            <label
                                                for="ip-range">{{__('theme2-dashboard-global.ip-range')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="as-org" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.as-org')}}">
                                            <label
                                                for="as-org">{{__('theme2-dashboard-global.as-org')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip-country" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.ip-country')}}">
                                            <label
                                                for="ip-country">{{__('theme2-dashboard-global.ip-country')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip-city" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.ip-city')}}">
                                            <label
                                                for="ip-city">{{__('theme2-dashboard-global.ip-city')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="platform" type="text" class="form-control mx-table-input"
                                                   placeholder="Platform">
                                            <label
                                                for="platform">Platform</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="browser" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.browser')}}">
                                            <label
                                                for="browser">{{__('theme2-dashboard-global.browser')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="device" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.device')}}">
                                            <label
                                                for="device">{{__('theme2-dashboard-global.device')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col" style="font-size: 14px;padding: 0.6rem 1rem;">
                                        {{__('theme2-dashboard-global.clicks-count')}}
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="time-spent" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.time-spent')}}">
                                            <label
                                                for="time-spent">{{__('theme2-dashboard-global.time-spent')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="click-status" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.click-status')}}">
                                            <label
                                                for="click-status">{{__('theme2-dashboard-global.click-status')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="scroll-status" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.scroll-status')}}">
                                            <label
                                                for="scroll-status">{{__('theme2-dashboard-global.scroll-status')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="network" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.network')}}">
                                            <label
                                                for="network">{{__('theme2-dashboard-global.network')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="gclid" type="text" class="form-control mx-table-input"
                                                   placeholder="Gclid">
                                            <label
                                                for="gclid">Gclid</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="redirect-url" type="text" class="form-control mx-table-input"
                                                   placeholder="Redirect URL">
                                            <label
                                                for="redirect-url">Redirect URL</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="user-agent" type="text" class="form-control mx-table-input"
                                                   placeholder="User Agent">
                                            <label
                                                for="user-agent">User Agent</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="host" type="text" class="form-control mx-table-input"
                                                   placeholder="Host">
                                            <label
                                                for="host">Host</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="as-number" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.as-number')}}">
                                            <label
                                                for="as-number">{{__('theme2-dashboard-global.as-number')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip-region" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.ip-region')}}">
                                            <label
                                                for="ip-region">{{__('theme2-dashboard-global.ip-region')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="ip-postal-code" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.ip-postal-code')}}">
                                            <label
                                                for="ip-postal-code">{{__('theme2-dashboard-global.ip-postal-code')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="first-click" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.first-click')}}">
                                            <label
                                                for="first-click">{{__('theme2-dashboard-global.first-click')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-floating">
                                            <input id="last-click" type="text" class="form-control mx-table-input"
                                                   placeholder="{{__('theme2-dashboard-global.last-click')}}">
                                            <label
                                                for="last-click">{{__('theme2-dashboard-global.last-click')}}</label>
                                        </div>
                                    </th>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">{{__('theme2-dashboard-global.software-version')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.color-depth')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.fonts')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.local-storage')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.session-storage')}}</th>
                                    <th scope="col">Cookie</th>
                                    <th scope="col">{{__('theme2-dashboard-global.time-zone')}}</th>
                                    <th scope="col">Canvas</th>
                                    <th scope="col">{{__('theme2-dashboard-global.app-code-name')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.app-name')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.app-version')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.cookie-enabled')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.device-memory')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.do-not-track')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.hardware-concurrency')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.language')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.languages')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.on-line')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.product')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.product-sub')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.vendor')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.vendor-sub')}}</th>
                                    <th scope="col">{{__('theme2-dashboard-global.web-driver')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--Todo: Tabloda gelen veri eğer boş ise "&nbsp;" koymak zorundayız. Aksi halde tasarım kayıyor.
                                Todo: Foreach ile gelen verileri listele--}}
                                <tr>
                                    <td data-label="&nbsp;"><a href="#" class="btn btn-sm btn-soft-red">Engelle</a></td>
                                    <td data-label="{{__('theme2-dashboard-global.account')}}">359-318-6843</td>
                                    <td data-label="{{__('theme2-dashboard-global.campaing')}}">47-Kızıltepe-12</td>
                                    <td data-label="{{__('theme2-dashboard-global.keyword')}}">beyaz eşya servisleri
                                    </td>
                                    <td data-label="IP">5.229.30.102</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-range')}}">
                                        <div>5.229.0.0/16<sup
                                                class="fs-14 d-inline-flex align-items-center justify-content-center"><span
                                                    class="badge bg-blue rounded-pill">15.897</span></sup></div>
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.as-org')}}">Vodafone Telekomunikasyon
                                        A.S.
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-country')}}">Turkey</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-city')}}">&nbsp;</td>
                                    <td data-label="Platform">AndroidOS 10</td>
                                    <td data-label="{{__('theme2-dashboard-global.browser')}}">Chrome 87.0.4280.101</td>
                                    <td data-label="{{__('theme2-dashboard-global.device')}}">Mobil</td>
                                    <td data-label="{{__('theme2-dashboard-global.clicks-count')}}">1</td>
                                    <td data-label="{{__('theme2-dashboard-global.time-spent')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.click-status')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.scroll-status')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.network')}}">Google Search</td>
                                    <td data-label="Gclid">
                                        Cj0KCQjwzLCVBhD3ARIsAPKYTcTd-Wdd9vtWoHsLPGbDyrLEJWN6QjBSfAPEcaFVEq5R8dqTdCI1urYaAji5EALw_wcB
                                    </td>
                                    <td data-label="Redirect URL">&nbsp;</td>
                                    <td data-label="User Agent">Mozilla/5.0 (Linux; Android 10; M2006C3LG)
                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36
                                    </td>
                                    <td data-label="Host">176.33.90.255</td>
                                    <td data-label="{{__('theme2-dashboard-global.as-number')}}">34984</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-region')}}">Gaziantep</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-postal-code')}}">27090</td>
                                    <td data-label="{{__('theme2-dashboard-global.first-click')}}">2022-06-17 16:08:44
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.last-click')}}">2022-06-17 16:08:44
                                    </td>
                                    <td data-label="Javascript">Bilinmeyen</td>
                                    <td data-label="{{__('theme2-dashboard-global.software-version')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.color-depth')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.fonts')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.local-storage')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.session-storage')}}">Hayır</td>
                                    <td data-label="Cookie">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.time-zone')}}">&nbsp;</td>
                                    <td data-label="Canvas"><img
                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAzMDAgNDcuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzAwIDQ3LjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDojRkFGQUZBO30KPC9zdHlsZT4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwMCw0Ni45TDAsNDcuMVY4LjljMCwwLDIxLjEsMTQuMyw2NS4yLDE0LjFjNDAuNi0wLjIsNzYuNC0yMywxMjgtMjNDMjQzLjMsMCwzMDAsMTYuNCwzMDAsMTYuNFY0Ni45eiIvPgo8L3N2Zz4K"
                                            alt="Canvas Print" height="32px"></td>
                                    <td data-label="{{__('theme2-dashboard-global.app-code-name')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.app-name')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.app-version')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.cookie-enabled')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.device-memory')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.do-not-track')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.hardware-concurrency')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.language')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.languages')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.on-line')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.product')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.product-sub')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.vendor')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.vendor-sub')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.web-driver')}}">Hayır</td>
                                </tr>
                                <tr>
                                    <td data-label="&nbsp;"><a href="#" class="btn btn-sm btn-soft-red">Engelle</a></td>
                                    <td data-label="{{__('theme2-dashboard-global.account')}}">359-318-6843</td>
                                    <td data-label="{{__('theme2-dashboard-global.campaing')}}">47-Kızıltepe-12</td>
                                    <td data-label="{{__('theme2-dashboard-global.keyword')}}">beyaz eşya servisleri
                                    </td>
                                    <td data-label="IP">5.229.30.102</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-range')}}">
                                        <div>5.229.0.0/16<sup
                                                class="fs-14 d-inline-flex align-items-center justify-content-center"><span
                                                    class="badge bg-blue rounded-pill">15.897</span></sup></div>
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.as-org')}}">Vodafone Telekomunikasyon
                                        A.S.
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-country')}}">Turkey</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-city')}}">&nbsp;</td>
                                    <td data-label="Platform">AndroidOS 10</td>
                                    <td data-label="{{__('theme2-dashboard-global.browser')}}">Chrome 87.0.4280.101</td>
                                    <td data-label="{{__('theme2-dashboard-global.device')}}">Mobil</td>
                                    <td data-label="{{__('theme2-dashboard-global.clicks-count')}}">1</td>
                                    <td data-label="{{__('theme2-dashboard-global.time-spent')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.click-status')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.scroll-status')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.network')}}">Google Search</td>
                                    <td data-label="Gclid">
                                        Cj0KCQjwzLCVBhD3ARIsAPKYTcTd-Wdd9vtWoHsLPGbDyrLEJWN6QjBSfAPEcaFVEq5R8dqTdCI1urYaAji5EALw_wcB
                                    </td>
                                    <td data-label="Redirect URL">&nbsp;</td>
                                    <td data-label="User Agent">Mozilla/5.0 (Linux; Android 10; M2006C3LG)
                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36
                                    </td>
                                    <td data-label="Host">176.33.90.255</td>
                                    <td data-label="{{__('theme2-dashboard-global.as-number')}}">34984</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-region')}}">Gaziantep</td>
                                    <td data-label="{{__('theme2-dashboard-global.ip-postal-code')}}">27090</td>
                                    <td data-label="{{__('theme2-dashboard-global.first-click')}}">2022-06-17 16:08:44
                                    </td>
                                    <td data-label="{{__('theme2-dashboard-global.last-click')}}">2022-06-17 16:08:44
                                    </td>
                                    <td data-label="Javascript">Bilinmeyen</td>
                                    <td data-label="{{__('theme2-dashboard-global.software-version')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.color-depth')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.fonts')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.local-storage')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.session-storage')}}">Hayır</td>
                                    <td data-label="Cookie">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.time-zone')}}">&nbsp;</td>
                                    <td data-label="Canvas"><img
                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAzMDAgNDcuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzAwIDQ3LjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDojRkFGQUZBO30KPC9zdHlsZT4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwMCw0Ni45TDAsNDcuMVY4LjljMCwwLDIxLjEsMTQuMyw2NS4yLDE0LjFjNDAuNi0wLjIsNzYuNC0yMywxMjgtMjNDMjQzLjMsMCwzMDAsMTYuNCwzMDAsMTYuNFY0Ni45eiIvPgo8L3N2Zz4K"
                                            alt="Canvas Print" height="32px"></td>
                                    <td data-label="{{__('theme2-dashboard-global.app-code-name')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.app-name')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.app-version')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.cookie-enabled')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.device-memory')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.do-not-track')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.hardware-concurrency')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.language')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.languages')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.on-line')}}">Hayır</td>
                                    <td data-label="{{__('theme2-dashboard-global.product')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.product-sub')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.vendor')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.vendor-sub')}}">&nbsp;</td>
                                    <td data-label="{{__('theme2-dashboard-global.web-driver')}}">Hayır</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        {{--Table Finish--}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade mx-2 mx-md-4 mx-lg-6 mx-xl-8" id="topbar-countries">
                        {{--Todo: Chart.js ülkeler canvası buraya eklenecek
                        Örnek kullanım <canvas class="bg-white p-4 shadow-lg" id="myChart"></canvas>
                        Kullanmak zorunda olunan classlar => "bg-white p-4 shadow-lg"
                        --}}
                        {{__('theme2-dashboard-global.countries')}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="topbar-keywords">
                        {{__('theme2-dashboard-global.keywords')}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="topbar-multi-clicks">
                        {{__('theme2-dashboard-global.multi-clicks')}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="topbar-ip-ranges">
                        {{__('theme2-dashboard-global.ip-ranges')}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="topbar-cidr">
                        {{__('theme2-dashboard-global.cidr')}}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="topbar-blocked-ips">
                        {{__('theme2-dashboard-global.blocked-ips')}}
                    </div>
                    <!--/.tab-pane -->
                </div>
                <!-- /.tab-content -->
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
    <script>
        /*$(document).ready(function () {
            $('.muypil-responsive-table').DataTable({
                language: {
                    lengthMenu: "{{__('theme2-dashboard-global.per-page-records')}}",
                    zeroRecords: "{{__('theme2-dashboard-global.search-not-records')}}",
                    search: "{{__('theme2-dashboard-global.search-in-table')}}",
                    paginate: {
                        previous: "{{__('theme2-dashboard-global.previous')}}",
                        next: "{{__('theme2-dashboard-global.next')}}",
                    }
                },
                info: false,
            });
        });*/
    </script>
@endpush
