@push('styles')
    <style>
        .mobile-app-bar {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 3.25rem;
            background: #fff;
            box-shadow: rgba(0, 0, 0, 0.1) 0px -10px 12px -2px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        }
        .mobile-app-bar a{
            width: calc(100vw / 5);
            height: 3rem;
            color: #343f52;
            display: flex;
            flex-direction: column;
            font-size: 12px;
            padding: 2px 0;
            font-weight: bold;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .mobile-app-bar a.active{
            color: #3f78e0;
            border-top: 3px solid #3f78e0;
            margin-top: -5px;
            padding-top: 5px;
        }
        .mobile-app-bar a:hover:not(.active){
            background-color: #f5f5f5;
        }
        .mobile-app-bar a i{
            font-size: 24px;
        }
    </style>
@endpush
<div class="mobile-app-bar d-sm-flex d-lg-none">
    <a href="{{route('dashboard.home')}}" {{Route::is('dashboard.home') ? 'class=active' : null}}>
        <i class="uil uil-brackets-curly"></i>
        <span>{{__('theme2-dashboard-global.terminal')}}</span>
    </a>
    <a href="{{route('dashboard.trackers')}}" {{Route::is('dashboard.trackers') ? 'class=active' : null}}>
        <i class="uil uil-analytics"></i>
        <span>{{__('theme2-dashboard-global.analytics')}}</span>
    </a>
    <a href="#">
        <i class="uil uil-box"></i>
        <span>{{__('theme2-dashboard-global.packets')}}</span>
    </a>
    <a href="#">
        <i class="uil uil-setting"></i>
        <span>{{__('theme2-dashboard-global.settings')}}</span>
    </a>
    <a href="#">
        <i class="uil uil-user"></i>
        <span>{{__('theme2-dashboard-global.my-profile')}}</span>
    </a>
</div>
