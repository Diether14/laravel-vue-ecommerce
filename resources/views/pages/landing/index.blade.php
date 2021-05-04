@extends('app')
@section('content')
@include('common.header')
  <div class="page-holder">
      {{-- modal --}}
      @include('shared.modal.index')
      <div class="container">
        {{-- Categories --}}
        @include('shared.categories.index')
      
        {{-- Products --}}
        @include('shared.products.index')

        <hr>
        {{-- Partners --}}
        @include('shared.partners.index')

        <hr>
        <!-- NEWSLETTER-->
        @include('shared.newsletter.index')
  </div>
@include('common.footer')
@endsection