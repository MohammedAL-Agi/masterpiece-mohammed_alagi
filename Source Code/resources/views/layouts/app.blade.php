<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link href="{{asset('adminAssets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('adminAssets/libs/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/charts/chartist-bundle/chartist.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/charts/morris-bundle/morris.css')}}">
  <link rel="stylesheet"
    href="{{asset('adminAssets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/charts/c3charts/c3.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
  <title>Nahtam Dashboard </title>
  {{-- ========================= --}}
  <link rel="stylesheet" href="{{asset('adminAssets/mycss.css')}}">
</head>

<body>
  <!-- ============================================================== -->
  <!-- main wrapper -->
  <!-- ============================================================== -->
  <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg bg-white fixed-top ">
        <a href="{{asset('/')}}"><img src="{{asset('adminAssets/images/logo-dark-.svg')}}" width="200px" height="70px" class="ml-3" alt="Nahtam logo"></a>
        <ul class="navbar-nav ml-auto navbar-right-top">
          <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/default.png" alt="profile image" class="user-avatar-md rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
              <div class="nav-user-info" style="background-color:#DFC90F !important">
              </div>
              <a class="dropdown-item" href="{{asset('/logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    
    <div class="nav-left-sidebar sidebar-dark">
      <div class="menu-list" style="background-color:#214D63;">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
              <li class="nav-divider text-light">
                Dashboard
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/index' ? 'active' : ''}}"  href="{{asset('/admin/index')}}"><i class="fas fa-heart mb-2"></i>Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'admin/orders' ? 'active' : ''}}"  href="{{asset('/admin/orders')}}"><i class="fas fa-calendar-alt mb-2"></i>Manage Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'admin/blogs' ? 'active' : ''}}"  href="{{asset('/admin/blogs')}}"><i class="fab fa-blogger ml-1 mb-2"></i>Manage Blogs
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/admin' ? 'active' : ''}}"  href="{{asset('/admin/admin')}}"><i class="fa fa-fw fa-user-circle mb-2"></i>Manage Admins
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/Customer' ? 'active' : ''}}"  href="{{asset('/admin/Customer')}}"><i class="fas fa-users mb-2"></i>Manage Customers
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/category' ? 'active' : ''}}"  href="{{asset('/admin/category')}}"><i class="fas fa-fw fa-chart-pie mb-2"></i>Manage
                  Categories </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/products' ? 'active' : ''}}"  href="{{asset('/admin/products')}}"><i class="fas fa-box mb-2"></i>Manage Products
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::path() == 'admin/contacts' ? 'active' : ''}}"  href="{{asset('/admin/contacts')}}"><i class="fas fa-envelope"></i>Manage Contacts
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>
    {{-- ======== --}}
    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          @yield('content')
        </div>
      </div>
      {{-- <div class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              Copyright © 2018 Concept. All rights reserved. Dashboard by <a
                href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="text-md-right footer-links d-none d-sm-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>

  </div>
  <!-- ============================================================== -->
  <!-- end main wrapper  -->
  <!-- ============================================================== -->
  <!-- Optional JavaScript -->
  <!-- jquery 3.3.1 -->
  <script src="{{asset('adminAssets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
  <!-- bootstap bundle js -->
  <script src="{{asset('adminAssets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <!-- slimscroll js -->
  <script src="{{asset('adminAssets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
  <!-- main js -->
  <script src="{{asset('adminAssets/libs/js/main-js.js')}}"></script>
  <!-- chart chartist js -->
  <script src="{{asset('adminAssets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
  <!-- sparkline js -->
  <script src="{{asset('adminAssets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
  <!-- morris js -->
  <script src="{{asset('adminAssets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
  <script src="{{asset('adminAssets/vendor/charts/morris-bundle/morris.js')}}"></script>
  <!-- chart c3 js -->
  <script src="{{asset('adminAssets/vendor/charts/c3charts/c3.min.js')}}"></script>
  <script src="{{asset('adminAssets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
  <script src="{{asset('adminAssets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
  <script src="{{asset('adminAssets/libs/js/dashboard-ecommerce.js')}}"></script>
  
  @include('sweetalert::alert');


   <!-- chartjs js-->
   <script src="/adminAssets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
   <script src="/adminAssets/vendor/charts/charts-bundle/chartjs.js"></script>
  
   <!-- main js-->
   <script src="/adminAssets/libs/js/main-js.js"></script>
   <!-- jvactormap js-->
   <script src="/adminAssets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
   <script src="/adminAssets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
   <!-- sparkline js-->
   <script src="/adminAssets/vendor/charts/sparkline/jquery.sparkline.js"></script>
   <script src="/adminAssets/vendor/charts/sparkline/spark-js.js"></script>
    <!-- dashboard sales js-->
   <script src="/adminAssets/libs/js/dashboard-sales.js"></script>
</body>

</html>
<!-- end document-->