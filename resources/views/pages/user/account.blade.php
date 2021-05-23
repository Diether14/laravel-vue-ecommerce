@extends('app')
@section('content')
@include('common.header')
    <div class="page-holder">
        <div class="container">
            @include('shared.order.index')
            @include('shared.account.index')
    </div>
@include('common.footer')
@endsection