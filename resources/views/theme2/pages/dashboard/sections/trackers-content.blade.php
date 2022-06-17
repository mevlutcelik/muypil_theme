@push('styles')
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.15);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush
<section class="wrapper bg-aquabg-pale-aqua">
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
                        <table class="muypil-responsive-table" id="myTable">
                            <thead>
                            <tr>
                                <th scope="col">{{__('theme2-dashboard-global.account')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.campaing')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.keyword')}}</th>
                                <th scope="col">IP</th>
                                <th scope="col">{{__('theme2-dashboard-global.ip-range')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.as-org')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.ip-country')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.ip-city')}}</th>
                                <th scope="col">Platform</th>
                                <th scope="col">{{__('theme2-dashboard-global.browser')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.device')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.clicks-count')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.time-spent')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.click-status')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.scroll-status')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.network')}}</th>
                                <th scope="col">Gclid</th>
                                <th scope="col">Redirect URL</th>
                                <th scope="col">User Agent</th>
                                <th scope="col">Host</th>
                                <th scope="col">{{__('theme2-dashboard-global.as-number')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.ip-region')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.ip-posta-code')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.first-click')}}</th>
                                <th scope="col">{{__('theme2-dashboard-global.last-click')}}</th>
                                <th scope="col">Javascript</th>
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
                            </tr>
                            </thead>
                            <tbody>
                            {{--Todo: Tabloda gelen veri eğer boş ise "&nbsp;" koymak zorundayız. Aksi halde tasarım kayıyor.--}}
                            {{--Todo: Foreach ile gelen verileri listele--}}
                            <tr>
                                <td data-label="{{__('theme2-dashboard-global.account')}}">359-318-6843</td>
                                <td data-label="{{__('theme2-dashboard-global.campaing')}}">47-Kızıltepe-12</td>
                                <td data-label="{{__('theme2-dashboard-global.keyword')}}">beyaz eşya servisleri</td>
                                <td data-label="IP">5.229.30.102</td>
                                <td data-label="{{__('theme2-dashboard-global.ip-range')}}">5.229.0.0/16<sup class="fs-14 d-inline-flex align-items-center justify-content-center"><span class="badge bg-blue rounded-pill">15.897</span></sup></td>
                                <td data-label="{{__('theme2-dashboard-global.as-org')}}">Vodafone Telekomunikasyon A.S.</td>
                                <td data-label="{{__('theme2-dashboard-global.ip-country')}}">Turkey</td>
                                <td data-label="{{__('theme2-dashboard-global.ip-city')}}">-</td>
                                <td data-label="Platform">AndroidOS 10</td>
                                <td data-label="{{__('theme2-dashboard-global.browser')}}">Chrome 87.0.4280.101</td>
                                <td data-label="{{__('theme2-dashboard-global.device')}}">Mobil</td>
                                <td data-label="{{__('theme2-dashboard-global.clicks-count')}}">1</td>
                                <td data-label="{{__('theme2-dashboard-global.time-spent')}}">-</td>
                                <td data-label="{{__('theme2-dashboard-global.click-status')}}">Hayır</td>
                                <td data-label="{{__('theme2-dashboard-global.scroll-status')}}">Hayır</td>
                                <td data-label="{{__('theme2-dashboard-global.network')}}">Google Search</td>
                                <td data-label="Gclid">Cj0KCQjwzLCVBhD3ARIsAPKYTcTd-Wdd9vtWoHsLPGbDyrLEJWN6QjBSfAPEcaFVEq5R8dqTdCI1urYaAji5EALw_wcB</td>
                                <td data-label="Redirect URL">-</td>
                                <td data-label="User Agent">Mozilla/5.0 (Linux; Android 10; M2006C3LG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36</td>
                                <td data-label="Host">176.33.90.255</td>
                                <td data-label="{{__('theme2-dashboard-global.as-number')}}">34984</td>
                                <td data-label="{{__('theme2-dashboard-global.ip-region')}}">Gaziantep</td>
                                <td data-label="{{__('theme2-dashboard-global.ip-postal-code')}}">27090</td>
                                <td data-label="{{__('theme2-dashboard-global.first-click')}}">2022-06-17 16:08:44</td>
                                <td data-label="{{__('theme2-dashboard-global.last-click')}}">2022-06-17 16:08:44</td>
                                <td data-label="Javascript">Bilinmeyen</td>
                                <td data-label="{{__('theme2-dashboard-global.software-version')}}">-</td>
                                <td data-label="{{__('theme2-dashboard-global.color-depth')}}">-</td>
                                <td data-label="{{__('theme2-dashboard-global.fonts')}}">-</td>
                                <td data-label="{{__('theme2-dashboard-global.local-storage')}}">Hayır</td>
                                <td data-label="{{__('theme2-dashboard-global.session-storage')}}">Hayır</td>
                                <td data-label="Cookie">Hayır</td>
                                <td data-label="{{__('theme2-dashboard-global.time-zone')}}">-</td>
                                <td data-label="Canvas"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAzMDAgNDcuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzAwIDQ3LjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDojRkFGQUZBO30KPC9zdHlsZT4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwMCw0Ni45TDAsNDcuMVY4LjljMCwwLDIxLjEsMTQuMyw2NS4yLDE0LjFjNDAuNi0wLjIsNzYuNC0yMywxMjgtMjNDMjQzLjMsMCwzMDAsMTYuNCwzMDAsMTYuNFY0Ni45eiIvPgo8L3N2Zz4K" alt="Canvas Print" height="32px"></td>
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
                            </tr>
                            </tbody>
                        </table>
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
        $(document).ready( function () {
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
        } );
    </script>
@endpush
