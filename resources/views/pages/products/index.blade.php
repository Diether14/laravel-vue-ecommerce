@extends('app')
@section('content')
@include('common.header')

    @include('shared.modal.index')
    <div class="container">
        <section class="py-5">
        <div class="container p-0">
            <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Fashion &amp; Acc</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="/products">Women's T-Shirts</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Men's T-Shirts</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Dresses</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Novelty socks</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Women's sunglasses</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Men's sunglasses</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="/products">Shavers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">bags</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Cosmetic</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Nail Art</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Skin Masks &amp; Peels</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Korean cosmetics</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
                <li class="mb-2"><a class="reset-anchor" href="/products">Electronics</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">USB Flash drives</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Headphones</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Portable speakers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Cell Phone bluetooth headsets</a></li>
                <li class="mb-2"><a class="reset-anchor" href="/products">Keyboards</a></li>
                </ul>
            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        {{-- <p class="text-small text-muted mb-0">Showing 1???12 of 53 results</p> --}}
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                        <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                        <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                        <li class="list-inline-item">
                            <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                            <option value="default">Default sorting</option>
                            <option value="popularity">Popularity</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                            </select>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row products-container">
                    {{-- begin:: Product --}}
                    {{-- @for ($i = 0; $i < 12; $i++)
                        <div class="col-lg-4 col-sm-6">
                            @include('shared.products.index')
                        </div>
                    @endfor --}}
                    {{-- end:: Product --}}
                </div>
                {{-- begin:: Pagination --}}
                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center justify-content-lg-end">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">??</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">??</span></a></li>
                    </ul>
                </nav> --}}
                {{-- end:: Pagination --}}
            </div>
            </div>
        </div>
        </section>
    </div>

@include('common.footer')
<script>
    $(document).ready(() => {
        const Product = {
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
                        $('.products-container').append(`<div class="col-lg-4 col-sm-6">${template}</div>`);
                    }
                }
            },
            template: (product) => {
                return `<div class="product text-center">
                            <div class="position-relative mb-3">
                                <div class="badge text-white badge-"></div><a class="d-block" href="/product-details"><img class="img-fluid w-100" src="/storage/${product.product_photos[0].photo}" style="height: 200px; object-fit: cover;" alt="..."></a>
                                <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add-to-wishlist" href="#" data-id="${product.product_photos[0].id}"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark add-to-cart" href="#" data-id="${product.product_photos[0].id}">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal" data-id="${product.product_photos[0].id}"><i class="fas fa-expand"></i></a></li>
                                </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="/product/detail">${product.name}</a></h6>
                            <p class="small text-muted">??? ${product.price}</p>
                        </div>`;
            }
        };

        Product.showAll();
    });
</script>
@endsection