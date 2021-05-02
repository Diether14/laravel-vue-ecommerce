@extends('app')
@section('content')
<div class="page-holder">
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
              <div class="col-lg-6">
                <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="p-5 my-md-4">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  </ul>
                  <h2 class="h4">Red digital smartwatch</h2>
                  <p class="text-muted">₱250</p>
                  <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                  <div class="row align-items-stretch mb-4">
                    <div class="col-sm-7 pr-sm-0">
                      <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                        <div class="quantity">
                          <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                          <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                          <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                  </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HERO SECTION-->
    <div class="container">
      <!-- CATEGORIES SECTION-->
      <section class="pt-5">
        <header class="text-center">
          <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
          <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="products.php"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""><strong class="category-item-title">Clothes</strong></a></div>
          <div class="col-md-4 mb-4 mb-md-0"><a class="category-item mb-4" href="products.php"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""><strong class="category-item-title">Shoes</strong></a><a class="category-item" href="products.php"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""><strong class="category-item-title">Watches</strong></a></div>
          <div class="col-md-4"><a class="category-item" href="products.php"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""><strong class="category-item-title">Electronics</strong></a></div>
        </div>
      </section>
      <!-- TRENDING PRODUCTS-->
      <section class="py-5">
        <header>
          <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
          <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
        </header>
        <div class="row">
          <!-- PRODUCT-->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white badge-primary">Sale</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white badge-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-3.jpg" alt="..."></a>
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white badge-info">New</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-4.jpg" alt="..."></a>
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white badge-danger">Sold</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-5.jpg" alt="..."></a>
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
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
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
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
        </div>
      </section>
      <!-- ADS -->
      <hr>
      <h5 class="text-uppercase text-center mb-4">Partners</h5>
      <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="ads text-center">
              <div class="position-relative mb-3">
                <a class="d-block" href="https://www.facebook.com/organicsfamph/" target="_blank">
                  <img class="img-fluid" style="max-height: 100px;" src="assets/img/organics.png" alt="Organics">
                </a>
                <div class="ads-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0">
                      <a class="btn btn-sm btn-dark" href="https://www.facebook.com/organicsfamph/" target="_blank">Visit Facebook Page</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="ads text-center">
              <div class="position-relative mb-3">
                <a class="d-block" href="https://www.facebook.com/thebrainchildco/" target="_blank">
                  <img class="img-fluid" style="max-height: 100px;" src="assets/img/thebrainchild.jpg" alt="The Brain Child">
                </a>
                <div class="ads-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0">
                      <a class="btn btn-sm btn-dark" href="https://www.facebook.com/thebrainchildco/" target="_blank">Visit Facebook Page</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="ads text-center">
              <div class="position-relative mb-3">
                <a class="d-block" href="https://www.facebook.com/Tribe.PositiveCreations/" target="_blank">
                  <img class="img-fluid" style="max-height: 100px;" src="assets/img/tribe.jpg" alt="Tribe - Positive Creations">
                </a>
                <div class="ads-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0">
                      <a class="btn btn-sm btn-dark" href="https://www.facebook.com/Tribe.PositiveCreations/" target="_blank">Visit Facebook Page</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
      <hr>
      <!-- NEWSLETTER-->
      <section class="py-5">
        <div class="container p-0">
          <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
              <h5 class="text-uppercase">Newsletter</h5>
              <p class="text-small text-muted mb-0">Subscribe to our Newsletter. Get discounts and updates.</p>
            </div>
            <div class="col-lg-6">
              <form action="#">
                <div class="input-group flex-column flex-sm-row mb-3">
                  <input class="form-control form-control-lg py-3" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection