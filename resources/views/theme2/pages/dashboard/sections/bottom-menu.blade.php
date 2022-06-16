@push('styles')
    <style>
        .mobile-app-bar {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 3.5rem;
            background: #fff;
            box-shadow: rgba(0, 0, 0, 0.1) 0px -10px 12px -2px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        }
        .mobile-app-bar a{
            width: calc(100vw / 4);
            height: 3.5rem;
            color: #343f52;
            display: flex;
            flex-direction: column;
            font-size: 13px;
            font-weight: bold;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .mobile-app-bar a.active{
            color: #3f78e0;
            border-top: 3px solid #3f78e0;
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
    <a href="#" class="active">
        <i class="uil uil-brackets-curly"></i>
        <span>{{__('theme2-dashboard-global.terminal')}}</span>
    </a>
    <a href="#">
        <i class="uil uil-analytics"></i>
        <span>{{__('theme2-dashboard-global.analytics')}}</span>
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
