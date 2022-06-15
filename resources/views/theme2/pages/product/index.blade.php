@extends('theme2.layout.master')
@section('title', 'Muypil - ' . __('theme2-global.product'))
@section('content')
    @include('theme2.sections.header-light')
    @include('theme2.sections.product-header')
    @include('theme2.sections.product-content')
    @include('theme2.sections.faq')
    @include('theme2.sections.footer')
@endsection
