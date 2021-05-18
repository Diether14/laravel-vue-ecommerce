@extends('app')
@section('content')
    <div class="container">
        <section class="py-5">
        <div class="container p-0">
            <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Fashion &amp; Acc</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#">Women's T-Shirts</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Men's T-Shirts</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Dresses</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Novelty socks</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Women's sunglasses</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Men's sunglasses</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#">Shavers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">bags</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Cosmetic</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Nail Art</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Skin Masks &amp; Peels</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Korean cosmetics</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
                <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">USB Flash drives</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Headphones</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Portable speakers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Cell Phone bluetooth headsets</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Keyboards</a></li>
                </ul>
            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
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
                <div class="row">
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-1.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Kui Ye Chen’s AirPods</a></h6>
                    <p class="small text-muted">₱250</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Air Jordan 12 gym red</a></h6>
                    <p class="small text-muted">₱300</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-primary">New</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-3.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Cyan cotton t-shirt</a></h6>
                    <p class="small text-muted">₱25</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-4.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Timex Unisex Originals</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-info">Sale</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-5.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Red digital smartwatch</a></h6>
                    <p class="small text-muted">₱250</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-6.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Nike air max 95</a></h6>
                    <p class="small text-muted">₱300</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-7.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Joemalone Women prefume</a></h6>
                    <p class="small text-muted">₱25</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-8.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Apple Watch</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-danger">Sold</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-9.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Men silver Byron Watch</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-primary">New</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-10.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Ploaroid one step camera</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-11.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Gray Nike running shoes</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                    <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-12.jpg" alt="..."></a>
                        <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.php">Black DSLR lense</a></h6>
                    <p class="small text-muted">₱351</p>
                    </div>
                </div>
                </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </section>
    </div>
@endsection