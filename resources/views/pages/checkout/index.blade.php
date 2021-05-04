@extends('app')
@section('content')
@include('common.header')
    <div class="page-holder">
        <div class="container">
            @include('shared.checkout.index')
    </div>
@include('common.footer')
@endsection