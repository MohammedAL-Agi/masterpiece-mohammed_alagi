<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/sitters/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 12:07:27 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products" />
  <meta name="description" content="Nahtam is a website provides all the supplies for elderly and senior care" />
  <meta name="author" content="Mohammed Alagi" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nahtam</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assetss/images/favicon.ico')}}"/>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&amp;display=swap" >

  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="{{ asset('assetss/css/font-awesome/all.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/flaticon/flaticon.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/bootstrap/bootstrap.min.css')}}" />

  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
  <link rel="stylesheet" href="{{ asset('assetss/css/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/range-slider/ion.rangeSlider.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/magnific-popup/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/swiper/swiper.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assetss/css/animate/animate.min.css')}}"/>

  <!-- Template Style -->
  <link rel="stylesheet" href="{{ asset('assetss/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('adminAssets/mycss.css')}}">
</head>

<body>

    <!--=================================
    preloader -->
    <div id="pre-loader">
      <img src="{{ asset('assetss/images/pre-loader/loader-01.svg')}}" alt="">
    </div>
    <!--=================================
    preloader -->
    <!--=================================
    header -->
    <header class="header default">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-3 d-inline-block">
                  <a href="mailto:gethelp@sitters.com"><i class="far fa-envelope mr-2 fa-flip-horizontal"></i>support@nahtam.org</a>
                </div>
                <div class="mr-auto d-inline-block">
                  <a href="tel:1-800-555-1234"><i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>+962-77887-2380</a>
                </div>
                <div class="d-inline-block mr-3">
                  <ul class="list-unstyled">
                    @if(!isset(session("loginUser")['id']))
                    <li><a href="{{asset('login')}}">Login</a></li>
                    @elseif(session("loginUser")['role']=='customer')
                    <li><a href="{{asset('profile')}}">My Account</a></li>
                    @else
                    <li><a href="{{asset('admin')}}">Admin Dashboard</a></li>
                    <li><a href="{{asset('logout')}}">Logout</a></li>
                    @endif
                  </ul>

                </div>
                <div class="social d-inline-block">
                  <ul class="list-unstyled">
                    <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"> <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"> <i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{asset('/')}}">
            <img class="img-fluid logo" src="{{ asset('assetss/images/logo-nahtam.svg')}}" alt="Main logo">
            <img class="img-fluid logo-sticky" src="{{ asset('assetss/images/logo-dark-nahtam.svg')}}" alt="Logo responsive and sticky">
          </a>
          <div class="navbar-collapse collapse justify-content-center">
            <ul class="nav navbar-nav">
              <li class="nav-item dropdown {{ Request::path() == '/' ? 'active' : ''}}" >
                <a class="nav-link"  href="{{asset('/')}}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
              </li>
              <li class="dropdown nav-item {{ Request::path() == 'shop' ? 'active' : ''}}">
                <a class="nav-link" href="{{asset('shop')}}">Shop</a>
              </li>
              <li class="dropdown nav-item {{ Request::path() == 'blog' ? 'active' : ''}}">
                <a class="nav-link" href="{{asset('blog')}}">Blog</a>
              </li>
              <li class="dropdown nav-item {{ Request::path() == 'about' ? 'active' : ''}}">
                <a class="nav-link" href="{{asset('about')}}" >About</a>
              </li>
              <li class="nav-item dropdown {{ Request::path() == 'contact' ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" href="{{asset('contact')}}">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="add-listing">
            @if (!isset(session("loginUser")['id'])||session("loginUser")['role']=='customer')
              <a href="{{asset('cart')}}">
                <i class="fa fa-shopping-cart fa-2x" style="color:#FCDB02; cursr:pointer;" aria-hidden="true"></i>
                <?php
                $cart= session()->get("cart");
                if ($cart)
                $count = count($cart);
                else
                $count = 0;
                ?>
                <span class="mb-5">{{$count}}</span>
              </a>
              @endif
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
    header -->
    <!--=================================
    banner -->
    <main>
      @yield('content')
    </main>
    <!--=================================
    footer-->
    <footer class="footer footer-01 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
              <div class="footer-recent-List">
                  <h5 class="text-primary">About Us</h5>
                  <p class="text-white">
                      It's something we think about from the time our feet hit the Legos® on the floor, until after
                      we've tucked the kids in at night. We know that the Elderly care struggle is real, because we're human too.
                  </p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
              <h5 class="text-primary">Our Vision</h5>
              <div class="footer-subscribe">
                  <p class="text-white">
                      Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.
                      Although each is successful separately, the right combination of both is the most powerful motivational
                      force known to humankind.
                  </p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">

              <div class="footer-link">
                  <h5 class="text-primary">Useful Links</h5>
                  <ul class="list-unstyled mb-0">
                      <li><a href="{{asset('shop')}}">Shop</a></li>
                      <li><a href="{{asset('blog')}}">Blog</a></li>
                      <li><a href="{{asset('about')}}">About Us </a></li>
                      <li><a href="{{asset('contact')}}">Contact Us</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="footer-contact-info">
                  <h5 class="text-primary">Contact Information</h5>
                  <p class="text-white">Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
                  <ul class="list-unstyled mb-0" style="background-image: url({{asset('assetss/images/google-map.png')}});">
                      <li><i class="fa fa-map-signs"></i><span>594 E. Alnuzha Street Amman, IL 60050</span></li>
                      <li><i class="fa fa-microphone"></i><span>(+962) 7788-72380</span></li>
                      <li><i class="fa fa-headphones"></i><span>support@Nahtam.com</span></li>
                  </ul>
              </div>

          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 text-center text-md-left">
              <a href="{{asset('/')}}"><img class="img-fluid footer-logo" src="{{ asset('assetss/images/logo-light-nahtam.svg')}}" alt=""></a>
            </div>
            <div class="col-md-2 text-center my-3 mt-md-0 mb-md-0">
              <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
            </div>
            <div class="col-md-5 text-center copyright text-md-right">
              <p class="mb-0 text-white"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="{{asset('/')}}"> Nahtam </a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{asset('assetss/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assetss/js/popper/popper.min.js')}}"></script>
    <script src="{{asset('assetss/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{asset('assetss/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assetss/js/counter/jquery.countTo.js')}}"></script>
    <script src="{{asset('assetss/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assetss/js/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('assetss/js/swiperanimation/SwiperAnimation.min.js')}}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{asset('assetss/js/custom.js')}}"></script>
  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/sitters/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 12:09:10 GMT -->
</html>

