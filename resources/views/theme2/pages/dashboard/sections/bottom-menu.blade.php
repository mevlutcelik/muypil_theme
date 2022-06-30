@push('styles')
    <style>
        .mobile-app-bar {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 3.25rem;
            background: #121212;
            -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px -10px 12px -2px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px -10px 12px -2px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            z-index: 6;
        }
        .mobile-app-bar a{
            width: calc(100vw / 4);
            height: 3rem;
            color: rgba(255,255,255,0.4);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            font-size: 12px;
            padding: 2px 0;
            font-weight: bold;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .mobile-app-bar a.active{
            color: #fff;
            border-top: 3px solid #fff;
            margin-top: -5px;
            padding-top: 5px;
        }
        .mobile-app-bar a:hover:not(.active){
            background-color: #333333;
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
        <span>{{__('theme2-dashboard-global.reports')}}</span>
    </a>
    {{--<a href="{{route('dashboard.packets')}}" {{Route::is('dashboard.packets') || Route::is('dashboard.packets-checkout') ? 'class=active' : null}}>
        <i class="uil uil-box"></i>
        <span>{{__('theme2-dashboard-global.packets')}}</span>
    </a>--}}
    <a href="{{route('dashboard.settings')}}" {{Route::is('dashboard.settings') ? 'class=active' : null}}>
        <i class="uil uil-setting"></i>
        <span>{{__('theme2-dashboard-global.rules')}}</span>
    </a>
    <a href="{{route('dashboard.profile')}}" {{Route::is('dashboard.profile') ? 'class=active' : null}}>
        <i class="uil uil-user"></i>
        <span>{{__('theme2-dashboard-global.my-profile')}}</span>
    </a>
</div>
