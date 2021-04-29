@extends('layouts.pagesLayout')

@section('content')
 <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <h2 class="inner-banner-title">Contact us</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    map -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="form-dark contact-form">
              <h4>Need assistance? please complete the contact form</h4>
              {{-- @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
              @endif --}}
                <form class="mt-4" method="POST">
                  {{ csrf_field() }}
                  <div class="form-row">
                    <div class="form-group col-12">
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-12">
                      <input type="email" class="form-control" name="email"  placeholder="Email">
                    </div>
                    <div class="form-group col-12 mb-0">
                      <textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                      <button class="btn btn-primary btn-block" type="submit" >Submit</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>
          <div class="col-md-8">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    map -->

    <!--=================================
    Service -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 ">
            <div class="section-title text-center">
              <h2 class="title">Let’s get in touch!</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-placeholder"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Address</h4>
                <span>1234 North Avenue Luke Lane South Bend, IN 360001</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-phone"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Phone</h4>
                <span>+0123 456 789</span>
                <span>+704 279 1249</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-envelope"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Email</h4>
                <span>support@sitter.com</span>
                <span>letstalk@sitter.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Service -->

 <script>
     document.title = "Nahtam | Contact Us";
     document.getElementsByTagName(
         "META"
     )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
     document.getElementsByTagName(
         "META"
     )[2].content = "This page is the Contact page for Nahtam site it let the user send his thoughts and opinions.";
 </script>

@endsection
