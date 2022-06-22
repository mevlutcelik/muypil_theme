<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, max-scale=1.0 min-scale=1.0">
    <meta name="description"
          content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
          content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>@yield('title', config('app.name'))</title>
    <link rel="shortcut icon" href="{{asset('assets2/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/animation-logo.css')}}">
    <link rel="stylesheet" href="@yield('theme-color', asset('assets2/css/colors/violet.css'))">
    <link rel="preload" href="{{asset('assets2/css/fonts/urbanist.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{asset('assets2/css/aquirebold.css')}}" as="style" onload="this.rel='stylesheet'">
    <meta name="theme-color" content="@yield('meta-color')">
    <script src="{{ asset('assets2/js/jquery/jquery.min.js') }}"></script>
    @stack('styles')
</head>
<body data-bs-spy="scroll" style="@yield('body-style')">
<div class="content-wrapper">
    @yield('content')
</div>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
@if(!Route::is('careers'))
    <script src="{{asset('assets2/js/plugins.js')}}"></script>
    <script src="{{asset('assets2/js/theme.js')}}"></script>
@endif
<script src="{{mix('js/app.js')}}"></script>
@stack('scripts')
</body>

</html>
