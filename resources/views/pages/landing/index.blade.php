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
        
        {{-- begin::carousel --}}
        <style>
          .carousel-inner {
              /* max-height: 500px!important; */
          }
          </style>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/img/ads1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads3.png" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads4.png" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads5.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads6.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/ads7.png" alt="Fifth slide">
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

        {{-- Categories --}}
        @include('shared.categories.index')
      
        {{-- begin:: Products --}}
        <section class="py-5">
            <header>
              <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
              <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
            </header>
            <div class="row products-container">
              {{-- @for ($i = 0; $i < 8; $i++)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    @include('shared.products.index')
                </div>
              @endfor --}}
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
        {{-- @include('shared.modal.carousel') --}}

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
    const Product = {
        addToCart: (e) => {
          const item = localStorage.getItem('productCart');
          const id = $(e.currentTarget).attr('data-id');

          if (item === null) {
            const productArr = []
            productArr.push(id);
            localStorage.setItem('productCart', productArr);
            console.log(localStorage.getItem('productCart'));
          } else {
            
          }

          console.log(item);
          // alert('added to cart');
          e.preventDefault();
        },
        get: () => {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: '/owner/api/products',
                    method: 'GET',
                    success: (res) => {
                        resolve(res);
                    }
                });
            });
        },
        showAll: async () => {
            const product = JSON.parse(await Product.get());
            
            if (product.data.length > 0) {
                for (let i = 0; i < product.data.length; i++) {
                    const template = Product.template(product.data[i]);
                    $('.products-container').append(`<div class="col-xl-3 col-lg-4 col-sm-6">${template}</div>`);
                }
            }
        },
        template: (product) => {
            return `<div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white badge-"></div><a class="d-block" href="product-details"><img class="img-fluid w-100" src="/storage/${product.product_photos[0].photo}" style="height: 200px; object-fit: cover;" alt="..."></a>
                            <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add-to-wishlist" href="javascript:void(0);" data-id="${product.product_photos[0].id}"><i class="far fa-heart"></i></a></li>
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark add-to-cart" href="javascript:void(0);" data-id="${product.product_photos[0].id}">Add to cart</a></li>
                                <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal" data-id="${product.product_photos[0].id}"><i class="fas fa-expand"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="/product/detail">${product.name}</a></h6>
                        <p class="small text-muted">₱ ${product.price}</p>
                    </div>`;
        }
    };

    Product.showAll();
    
    // $('#adsModal').modal('show');
    $(document).on('click', '.add-to-cart', (e) => Product.addToCart(e));
  });
</script>

@endsection

{{-- begin:: script used by this page --}}
{{-- <script src="/library/dropzone/dropzone.js"></script> --}}
{{-- end:: script used by this page --}}