@extends('dashboard.header')
@include('dashboard.footer')
@include('dashboard.body')

@section('content') 
    @yield('header')
        @yield('body')
    @yield('footer')           
@endsection