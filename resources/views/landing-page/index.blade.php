@extends('app')
@section('content')
@include('common.header')
<div class="page-holder">
    {{-- modal --}}
    @include('modal.index')
    <div class="container">
      {{-- Categories --}}
      @include('categories.index')
     
      {{-- Products --}}
      @include('products.index')

      <hr>
      {{-- Partners --}}
      @include('partners.index')

      <hr>
      <!-- NEWSLETTER-->
      @include('newsletter.index')
</div>
@include('common.footer')
@endsection