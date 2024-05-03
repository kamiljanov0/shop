<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>


<!-- Header End -->
<body>
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">

            <div class="container">
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Market</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">uz</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form method="POST" action="{{route('products.search')}}">
                @csrf
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">

        @auth

            <div class="bg-primary  rounded-pill float-right col-lg-4 font-weight-bolder py-0 ">
                <a  class="btn "  href="{{route('user.index')}}">
                    <img width="48" height="48" src="https://img.icons8.com/fluency-systems-filled/48/guest-male.png" alt="guest-male"/>
                    <span class="h5"> Kabinet </span>
                </a>
            </div>
        @else
            <a href="{{route('login')}}" class="btn btn-primary ml-5 d-none d-block">Kirish / Ro'yxatdan o'tish</a>

        @endauth
        </div>

    </div>
        <div class="navbar-nav mr-4  d-lg-block float-right">
            <a href="{{route('favorites.index')}}" class="  btn px-0">
                <img width="40" height="40" src="https://img.icons8.com/ios/50/FAB005/like--v1.png" alt="like--v1"/>
                <span class="badge text-primary border border-primary rounded-circle" style="padding-bottom: 2px;">@auth{{auth()->user()->favorites()->count()}}@endauth</span><br>
                <span class="text-primary"> Saralangan </span>
            </a>
        </div>
        <div class="navbar-nav  text-primary mr-5 float-right d-lg-block ">
            <a href="{{route('cart.index')}}" class="btn px-0 ml-3">
                <img width="40" height="40" src="https://img.icons8.com/parakeet-line/48/FAB005/shopping-cart.png" alt="shopping-cart"/><span class="badge text-primary border border-primary rounded-circle" style="padding-bottom: 2px;">{{count((array)session('cart'))}}</span><br>
                <span class="text-primary"> Savatcha </span>
            </a>
        </div>
</div>

@include('components.layouts.navbar')
<!-- Topbar End -->
  {{$slot}}
  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
          <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
              <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
              <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
              <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
              <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
              <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
              <br><br>
              @auth
                  <form action="{{route('logout')}}" method="post">
                      @csrf
                      <button class="btn btn-danger mr-3 d-lg-block">Akkountdan Chiqish</button>
                  </form>
              @endauth
          </div>
          <div class="col-lg-8 col-md-12">
              <div class="row">
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                      <div class="d-flex flex-column justify-content-start">
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                          <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                      <div class="d-flex flex-column justify-content-start">
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                          <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                      <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                      <form action="">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Your Email Address">
                              <div class="input-group-append">
                                  <button class="btn btn-primary">Sign Up</button>
                              </div>
                          </div>
                      </form>
                      <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                      <div class="d-flex">
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
          <div class="col-md-6 px-xl-0">
              <p class="mb-md-0 text-center text-md-left text-secondary">
                  &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                  by
                  <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
              </p>
          </div>
          <div class="col-md-6 px-xl-0 text-center text-md-right">
              <img class="img-fluid" src="img/payments.png" alt="">
          </div>
      </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="/mail/jqBootstrapValidation.min.js"></script>
  <script src="/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="/js/app.js"></script>
  <script src="/js/main.js"></script>
</body>


  <!-- Back to Top -->
  <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="/mail/jqBootstrapValidation.min.js"></script>
  <script src="/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="/js/main.js"></script>
</body>
