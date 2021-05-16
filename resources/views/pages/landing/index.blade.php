@extends('app')
@section('content')
@include('common.header')
  <div class="page-holder">
      {{-- modal --}}
      @include('shared.modal.index')
      <div class="container">
        {{-- Categories --}}
        @include('shared.categories.index')
      
        {{-- begin:: Products --}}
        <section class="py-5">
            <header>
              <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
              <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
            </header>
            <div class="row">
              @for ($i = 0; $i < 8; $i++)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    @include('shared.products.index')
                </div>
              @endfor
            </div>
        </section>
        {{-- end:: Products --}}

        <hr>
        {{-- Partners --}}
        @include('shared.partners.index')

        <hr>
        <!-- NEWSLETTER-->
        @include('shared.newsletter.index')
  </div>
@include('common.footer')
@endsection