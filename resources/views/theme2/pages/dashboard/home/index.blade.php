@extends('theme2.layout.master')

@section('title', 'Muypil - '. __('theme2-dashboard-global.terminal') .' - ' . 'Ad Soyad') {{--TODO: Ad Soyad yazan kısım kullanıcının adı ve soyadı olarak güncellenecek--}}
@section('meta-color', '#343f52') {{--Browser theme color--}}

{{--Muypil theme color. Default: asset('assets2/css/colors/violet.css') Eğer boş değer gönderilirse tema mavi olur.--}}
@section('theme-color', asset('assets2/css/colors/orange.css'))

@push('styles')
    <style>
        html, body {
            overflow: hidden;
        }
        ::-webkit-scrollbar {
            width: 2px;
            height: 2px;
        }
    </style>
@endpush

@section('body-style', 'background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('.asset("assets2/img/photos/bg16.png").')')

@section('content')

    {{--Plugins Start--}}
    @include('theme2.pages.dashboard.plugins.muypil-top-bar')
    @include('theme2.pages.dashboard.plugins.chart-js')
    @include('theme2.pages.dashboard.plugins.muypil-table')
    {{--Plugins Finish--}}

    @include('theme2.pages.dashboard.sections.header-light')
    @include('theme2.pages.dashboard.sections.terminal-content')
    @include('theme2.pages.dashboard.sections.bottom-menu')
@endsection
