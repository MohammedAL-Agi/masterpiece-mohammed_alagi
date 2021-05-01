@extends('layouts.masterPage')

@section('content')
<section class="slider-01 bg-overlay-black-30 bg-holder mb-5">
	<div id="main-slider" class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url({{ asset('assetss/images/slider/home-02/01.jpg')}}); background-size: cover; background-position: center center;">
				<div class="swipeinner container">
					<div class="row">
						<div class="col-xl-9 col-md-10 col-sm-10">
							<div class="slider-1">
								<div class="banner-overlay-left animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
									<h1 class="animated text-white mt-0" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">All eldrly care equpments in one place…</h1>
									<a href="{{asset('shop')}}" class="animated4 btn btn-primary btn-arrow" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">Discover More <i class="flaticon-next"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-2 col-sm-2">
								<div class="banner-shap-right animated" data-swiper-animation="fadeInRight" data-duration="1s" data-delay="0.40s">
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url({{ asset('assetss/images/slider/home-02/02.jpg')}}); background-size: cover; background-position: center center;">
				<div class="swipeinner container">
					<div class="row justify-content-end">
					<div class="col-xl-3 col-md-2 col-sm-2">
								<div class="banner-shap-left animated" data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="0.40s">
						</div>
					</div>
						<div class="col-xl-9 col-md-10 col-sm-10">
							<div class="slider-1">
								<div class="banner-overlay-right animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
									<h1 class="animated text-white mt-0" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">We are the one You Can Trust</h1>
									<a href="#" class="animated4 btn btn-primary btn-arrow" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">Shop now <i class="flaticon-next"></i></a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pagination -->
	<div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left-arrow"></i>
	</div>
	<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-next"></i></div>
</section>


  <!--=================================
    category -->
    <section class="space-pb mt-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="section-title mb-0">
             <h2 class="title">Explore all the categories that we provide for you.</h2>
            </div>
          </div>
          <div class="col-md-7">
            <div class="category-section">
            <div class="owl-carousel owl-nav-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="2" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="2"  data-space="30" data-autoheight="true">
                @foreach ($Categories as $category)
                    <div class="item">
                        <div class="category-style-01">
                            <img class="img-fluid custom_image " src="{{asset("images/".$category->image)}}" alt="{{ $category->name }}">
                            <a href="shop/{{$category->id}}" class="category-contant">
                                <h5>{{ $category->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    category -->

 <!--=================================
About -->
<section class="space-pt bg-overlay-left mb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img class="img-fluid b-radius" src="{{ asset('/assetss/images/about/about-03.jpg')}}" alt="">
			</div>
			<div class="col-lg-6">
				<div class="section-contant">
				<div class="section-title">
					<h2 class="title">We think your loved ones justify the very best care.</h2>
{{--					<h6>Connect with our team if you and find the one that’s right for your baby.</h6>--}}
					<p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
				</div>
				<div class="row mb-3 mb-md-5">
					<div class="col-md-6">
						<div class="list">
							<ul>
								<li><i class="far fa-circle"></i> Company And Business Setup</li>
								<li><i class="far fa-circle"></i> Taxation Advisory</li>
								<li><i class="far fa-circle"></i> Tax Planning Preparation</li>
								<li><i class="far fa-circle"></i> Accounting Outsourcing</li>
								<li><i class="far fa-circle"></i> Investment Management</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						 <div class="list">
							<ul>
								<li><i class="far fa-circle"></i> Payroll Outsourcing</li>
								<li><i class="far fa-circle"></i> Company Management</li>
								<li><i class="far fa-circle"></i> Acquisitions Consulting</li>
								<li><i class="far fa-circle"></i> Wealth Management</li>
								<li><i class="far fa-circle"></i> Private Placement Consulting</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mt-3">
						<div class="author-signature">
							<img class="img-fluid" src="{{ asset('/assetss/images/about/signature.jpg')}}" alt="">
						</div>
					</div>
					<div class="col-md-6 mt-3">
						<h6 class="author-name">Mohammed Alagi</h6>
						<span class="author-designation">CEO & Founder</span>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
</section>
<!--=================================
About -->


<!--=================================
banner -->
<h2 class="text-center" >Featured products</h2>
<div class="d-flex flex-wrap justify-content-center container mt-5 mb-5 ">
	@foreach ($FeaturedProducts as $product)
	<div class="col-sm-3 mb-4">
		<div class="product ">
			 <div class="product-image">
					<img class="img-fluid custom_image" src="{{asset('images/'.$product->image)}}" alt="{{$product->name}}">
				</div>
				<div class="product-description">
					<div class="product-title">
						 <a href="product/{{$product['id']}}">{{$product->name}}</a>
					</div>
					<div class="product-price">
            @if($product->discount != 0 )
				<del>${{$product->price}}</del> <h5><ins>${{round(($product->price)-(($product->discount/100)*($product->price)))}}</ins></h5>
            @else
                <h5><ins>${{$product->price}}</ins></h5>
		        @endif
					</div>
			</div>
	 </div>
	</div>
	@endforeach

    <!--=================================
    Challenge-->
    <section class="mt-0 mt-lg-5 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="space-ptb">
            <div class="section-title">
              <h2 class="text-white">Excellent Senior supplies for Extraordinary Families</h2>
            </div>
            <ul class="list-unstyled mb-4 mb-lg-0">
              <li class="text-white mb-3 d-flex"> <i class="fas fa-check-circle font-xl text-primary mr-3"></i> Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</li>
              <li class="text-white mb-3 d-flex"> <i class="fas fa-check-circle font-xl text-primary mr-3"></i> Make a list of your achievements toward your long-term goal and remind yourself that intentions. </li>
              <li class="text-white mb-3 d-flex"> <i class="fas fa-check-circle font-xl text-primary mr-3"></i> Let success motivate you. Find a picture of what epitomizes success to you and then pull it out.</li>
              <li class="text-white d-flex"> <i class="fas fa-check-circle font-xl text-primary mr-3"></i> Reflect and experiment until you find the right combination of motivators for your personality.</li>
            </ul>
          </div>
          </div>
          <div class="col-lg-6 pb-5 pb-lg-0">
            <img class="mt-n5 img-fluid" src="{{ asset('assetss/images/service/02.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </section>

    <!--=================================
    Testimonial -->
        <section class="space-pt space-sm-pb container" >
            <div class="container">
                <div class="row m-0 justify-content-center">
                    <div class="col-md-12">
                        <div
                            class="owl-carousel testimonial-center owl-nav-bottom-center"
                            data-nav-arrow="true"
                            data-items="1"
                            data-md-items="1"
                            data-sm-items="1"
                            data-xs-items="1"
                            data-xx-items="1"
                            data-space="0"
                            data-autoheight="true"
                        >
                            <div class="item">
                                <div class="testimonial">
                                    <div class="avatar avatar-lg">
                                        <img
                                            class="img-fluid"
                                            src="/assetss/images/avatar/zoubie.png"
                                            alt="Profile picture"
                                        />
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            Excellent Customer support! These
                                            guys reply within minutes sometimes
                                            and really help you with when you
                                            need them. The theme itself is very
                                            extended as well. Happy with my
                                            purchase!
                                        </div>
                                        <div class="testimonial-name">
                                            <h6>Mohammed Alzoubi</h6>
                                            <span class="text-muted">- Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="avatar avatar-lg">
                                        <img
                                            class="img-fluid"
                                            src="/assetss/images/avatar/Anas.jpg"
                                            alt="Profile picture"
                                        />
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            I had a few things I needed help
                                            with on this theme... Their customer
                                            service was amazing and helped me
                                            out many times. One of the complete
                                            themes with different requirements.
                                        </div>
                                        <div class="testimonial-name">
                                            <h6>Anas Jawa</h6>
                                            <span class="text-muted">- CTO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="avatar avatar-lg">
                                        <img
                                            class="img-fluid"
                                            src="/assetss/images/avatar/suhibe.png"
                                            alt="Profile picture"
                                        />
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            One of the most complete service
                                            here the best of the best. Thanks a lot for such great
                                            features, products, feeling and home
                                            variations. And the best of all,
                                            great introductions prices.
                                        </div>
                                        <div class="testimonial-name">
                                            <h6>Suhieb Alabed</h6>
                                            <span class="text-muted">- Manager</span>
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
    Testimonial -->

        <script>
            document.title = "Nahtam | Home";
            document.getElementsByTagName(
                "META"
            )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products, Hospital`;
            document.getElementsByTagName(
                "META"
            )[2].content = "This page is the home page for Nahtam site it shows the features for all the website and the hottest products";
        </script>

@endsection
