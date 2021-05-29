<style>
.carousel-inner {
    max-height: 500px!important;
}
</style>

  <div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="padding: 0; border: 0;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip"
                title="Close ads"
                style="position: absolute;
                right: 0;
                padding-right: 17px;
                z-index: 999999!important;
                padding-top: 13px;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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