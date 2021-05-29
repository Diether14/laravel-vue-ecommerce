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
        <!-- NEWSLETTER-->
        @include('shared.newsletter.index')

        {{-- <form action="/file-upload" class="dropzone">
          <div class="fallback">
            <input name="file" type="file" multiple />
          </div>
        </form> --}}
        <div class="modal fade bd-example-modal-lg" id="testModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              {{-- begin::carousel --}}
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/test1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/test2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/test3.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              {{-- end::carousel --}}
            </div>
          </div>
        </div>
  </div>
@include('common.footer')
@endsection

{{-- begin:: script used by this page --}}
{{-- <script src="/library/dropzone/dropzone.js"></script> --}}
{{-- end:: script used by this page --}}

<script>
  // $(document).ready(() => {
  //   Dropzone.options.myAwesomeDropzone = {
  //     paramName: "file",
  //     maxFilesize: 2,
  //     accept: function(file, done) {
  //       if (file.name == "justinbieber.jpg") {
  //         done("Naha, you don't.");
  //       }
  //       else { done(); }
  //     }
  //   };
  // });
</script>