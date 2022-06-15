@extends('theme2.layout.master')
@section('title', 'Muypil - ' . __('theme2-global.comments'))
@section('content')
    @include('theme2.sections.header-light')
    @include('theme2.sections.terms-header')
    @include('theme2.sections.terms-content')
    @include('theme2.sections.footer')
@endsection
