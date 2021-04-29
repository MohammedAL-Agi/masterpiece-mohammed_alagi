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
    <link rel="stylesheet" href=" {{ asset('assetss/css//datetimepicker/datetimepicker.min.css')}}" />

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

    <header class="header header-03">
      <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{asset('/')}}">
            <img class="img-fluid" src="{{ asset('assetss/images/logo-dark-nahtam.svg')}}" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="margin-left: 15rem;">
              <li class="nav-item dropdown {{ Request::path() == '/' ? 'active' : ''}}">
                <a class="nav-link" href="{{asset('/')}}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
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
          <div class="add-listing d-flex justify-content-around ">
              <ul class="list-unstyled d-flex justify-content-around mt-1">
                @if(!isset(session("loginUser")['id']))
                <li><a href="{{asset('login')}}">Login</a></li>
                @elseif(session("loginUser")['role']=='customer')
                <li><a href="{{asset('profile')}}">My Account</a></li>
                @else
                <li><a href="{{asset('admin')}}" class="mr-4" >Admin Dashboard</a></li>
                <li><a href="{{asset('logout')}}">Logout</a></li>
                @endif
              </ul>
            {{-- <div> --}}
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
              {{-- </div> --}}
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
    header -->

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
                      we've tucked the kids in at night. We know that the child care struggle is real, because we're parents too.
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
                      <li><i class="fa fa-map-signs"></i><span>594 E. Whitemarsh Street Mchenry, IL 60050</span></li>
                      <li><i class="fa fa-microphone"></i><span>(123) 345-6789</span></li>
                      <li><i class="fa fa-headphones"></i><span>support@sitters.com</span></li>
                  </ul>
              </div>

          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 text-center text-md-left">
              <a href="index-2.html"><img class="img-fluid footer-logo" src="{{ asset('assetss/images/logo-light-nahtam.svg')}}" alt=""></a>
            </div>
            <div class="col-md-2 text-center my-3 mt-md-0 mb-md-0">
              <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
            </div>
            <div class="col-md-5 text-center copyright text-md-right">
              <p class="mb-0 text-white"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="index-2.html"> Sitters </a> All Rights Reserved</p>
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
    <script src=" {{asset('assetss/js/datetimepicker/moment.min.js')}}"></script>
    <script src=" {{asset('assetss/js/datetimepicker/datetimepicker.min.js')}}"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="{{asset('assetss/js/custom.js')}}"></script>

  @include('sweetalert::alert');

  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/sitters/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 12:09:10 GMT -->
</html>
