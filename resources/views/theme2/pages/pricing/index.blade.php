@extends('theme2.layout.master')
@section('title', 'Muypil - ' . __('theme2-global.product'))
@section('content')
    @include('theme2.sections.header-light')
    @include('theme2.sections.pricing-header')
    @include('theme2.sections.plans')
    @include('theme2.sections.comments')
    @include('theme2.sections.footer')
@endsection
