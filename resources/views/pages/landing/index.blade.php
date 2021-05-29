{{-- begin:: style used by this page --}}
{{-- <link rel="stylesheet" href="/library/dropzone/dropzone.css"> --}}
{{-- end:: style used by this page --}}

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
        {{-- Newsletter --}}
        @include('shared.newsletter.index')

        {{-- Carousel Modal --}}
        @include('shared.modal.carousel')

        {{-- <form action="/file-upload" class="dropzone">
          <div class="fallback">
            <input name="file" type="file" multiple />
          </div>
        </form> --}}
  </div>
@include('common.footer')

<script>
  $(document).ready(() => {
    // Dropzone.options.myAwesomeDropzone = {
    //   paramName: "file",
    //   maxFilesize: 2,
    //   accept: function(file, done) {
    //     if (file.name == "justinbieber.jpg") {
    //       done("Naha, you don't.");
    //     }
    //     else { done(); }
    //   }
    // };
    
    $('#adsModal').modal('show');
  });
</script>

@endsection

{{-- begin:: script used by this page --}}
{{-- <script src="/library/dropzone/dropzone.js"></script> --}}
{{-- end:: script used by this page --}}