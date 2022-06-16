@extends('theme2.layout.master')
@section('title', 'Muypil - Terminal - ' . 'Ad Soyad') {{--TODO: Ad Soyad yazan kısım kullanıcının adı ve soyadı olarak güncellenecek--}}
@section('meta-color', '#e4f1f6')
@section('theme-color', '')
@section('body-class', 'bg-pale-aqua')
@section('content')
    @include('theme2.pages.dashboard.sections.header-light')
    @include('theme2.pages.dashboard.sections.terminal-content')
    @include('theme2.pages.dashboard.sections.bottom-menu')
@endsection
