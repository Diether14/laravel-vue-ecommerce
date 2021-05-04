@extends('app')
@section('content')
@include('common.header')
    <div class="page-holder">
        <div class="container">
            @include('shared.cart.index')
    </div>
@include('common.footer')
@endsection