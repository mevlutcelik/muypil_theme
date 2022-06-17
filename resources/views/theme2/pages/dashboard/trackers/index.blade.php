@extends('theme2.layout.master')

@section('title', 'Muypil - '. __('theme2-dashboard-global.analytics') .' - ' . 'Ad Soyad') {{--TODO: Ad Soyad yazan kısım kullanıcının adı ve soyadı olarak güncellenecek--}}
@section('meta-color', '#343f52') {{--Browser theme color--}}

{{--Muypil theme color. Default: asset('assets2/css/colors/violet.css') Eğer boş değer gönderilirse tema mavi olur.--}}
@section('theme-color', '')

@push('styles')
    <style>
        html, body {
            overflow: hidden;
        }
    </style>
@endpush

@section('body-class', 'bg-pale-aqua') {{--Body elementinin içerisine eklemek istediğimiz classları buraya yazabiliriz--}}

@section('content')

    {{--Plugins Start--}}
    @include('theme2.pages.dashboard.plugins.muypil-top-bar')
    @include('theme2.pages.dashboard.plugins.chart-js')
    @include('theme2.pages.dashboard.plugins.muypil-table')
    {{--Plugins Finish--}}

    @include('theme2.pages.dashboard.sections.header-light')
    @include('theme2.pages.dashboard.sections.trackers-content')
    @include('theme2.pages.dashboard.sections.bottom-menu')
@endsection
