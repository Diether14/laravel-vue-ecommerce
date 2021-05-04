<header class="header bg-white sticky-top shadow-sm">
    <div class="bg-dark p-1 d-flex justify-content-center">
      <span class="badge badge-primary" style="font-size: 68%;">Flash sale on February 14!</span>
    </div>
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
        <a href="index.php">
          <img src="assets/img/thegoodmob.png" class="logo" alt="The Good Mob">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">               
            <li class="nav-item"><a class="nav-link" href="/cart"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i><small class="text-gray">(2)</small></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 text-gray"></i>Login</a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link disabled" href="#"> <i class="mr-1 text-gray"></i>|</a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 text-gray"></i>Signup</a></li>
          </ul>
        </div>
      </nav>
    </div>
</header>

<script>
    const url = window.location.href;
    const newURL = url.split('/');

    if(newURL[newURL.length - 1].includes('products')) {
      $('.nav-link').removeClass('active');
      $('.nav-link[href="products.php"').addClass('active');
    }

    if(newURL[newURL.length - 1].includes('index') || newURL[newURL.length - 1] === '') {
      $('.nav-link').removeClass('active');
      $('.nav-link[href="index.php"').addClass('active');
    }

    if(newURL[newURL.length - 1].includes('cart')) {
      $('.nav-link').removeClass('active');
      $('.nav-link[href="cart.php"').addClass('active');
    }
 </script>