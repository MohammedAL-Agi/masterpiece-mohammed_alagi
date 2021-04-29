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
							<li class="breadcrumb-item active"><span>About us</span></li>
						</ol>
						<h2 class="inner-banner-title">About us</h2>
					</div>
				</div>
			</div>
		</section>
    <!--=================================
    banner -->

    <!--=================================
    Browse properties -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-sm-12">
            <div class="section-title">
              <h2 class="title">Professional senior care, whenever you need it</h2>
              <h6>We This is perhaps the single biggest obstacle that all of us must overcome successful.</h6>
              <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
            </div>
            <a class="about-video popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0">
              <div class="video">
                <img class="img-fluid" src="images/service/01.jpg" alt="">
                <span><i class="flaticon-play-button"></i></span>
              </div>
              <span>See our video</span>
            </a>
          </div>
          <div class="col-lg-7 mt-lg-0 mt-5">
            <div class="counter-section">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="counter">
                      <div class="counter-icon">
                        <i class="flaticon-planet-earth"></i>
                      </div>
                      <div class="counter-content">
                        <span class="timer" data-to="650" data-speed="1000">650</span>
                        <label>Worldwide Branches</label>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="counter">
                      <div class="counter-icon">
                        <i class="flaticon-miscellaneous"></i>
                      </div>
                      <div class="counter-content">
                        <span class="timer" data-to="100" data-speed="1000">100</span>
                        <label>Verified sitters</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="counter mb-sm-0 mb-4">
                      <div class="counter-icon">
                      <i class="flaticon-conversation"></i>
                    </div>
                      <div class="counter-content">
                        <span class="timer" data-to="30" data-speed="1000">30</span>
                        <label>Local Partners</label>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="counter mb-0">
                      <div class="counter-icon">
                      <i class="flaticon-care"></i>
                    </div>
                      <div class="counter-content">
                        <span class="timer" data-to="1500" data-speed="1000">1500</span>
                        <label>Happy client</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Browse properties -->

    <!--=================================
    feature-box -->
    <section class="space-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-box text-center bg-dark mb-4 mb-md-0">
              <div class="feature-info-icon text-white">
                <i class="flaticon-target"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-white">Our Mission</h4>
                <p class="m-0 text-white">Remind yourself you have nowhere to go you have already been at the bottom.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-box text-center bg-primary mb-4 mb-md-0">
              <div class="feature-info-icon">
                <i class="flaticon-eye"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-dark">Our Vision</h4>
                <p class="m-0">Give yourself the power Remind yourself the only thing stopping you is yourself.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-box text-center">
              <div class="feature-info-icon">
                <i class="flaticon-business-and-finance"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-dark">Our Company</h4>
                <p class="m-0">What drives me? The thing that drives me most is the desire to find my extend them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    feature-box -->

    <script>
        document.title = "Nahtam | About";
        document.getElementsByTagName(
            "META"
        )[1].content = `categories, Nahtam, Add, Buy, Order`;
        document.getElementsByTagName(
            "META"
        )[2].content = "This page is dedicated to displaying products for each category";
    </script>
@endsection
