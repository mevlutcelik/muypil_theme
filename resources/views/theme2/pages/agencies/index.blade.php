@extends('theme2.layout.master')
@section('title', 'Muypil - ' . __('theme2-global.agencies'))
@section('content')
    @include('theme2.sections.header-light')
    @include('theme2.sections.agencies-header')
    @include('theme2.sections.agencies-content')
    @include('theme2.sections.faq')
    @include('theme2.sections.footer')
@endsection
