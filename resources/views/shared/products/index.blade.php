<section class="py-5">
  <header>
    <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
    <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
  </header>
  <div class="row">
    {{-- begin:: Product --}}
    @for ($i = 0; $i < 8; $i++)
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
    @endfor
    {{-- end:: Product --}}
  </div>
</section>