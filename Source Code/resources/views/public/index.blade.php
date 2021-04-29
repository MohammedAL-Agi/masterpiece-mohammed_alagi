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
             <p class="mb-0">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right most powerful motivational.</p>
            </div>
          </div>
          <div class="col-md-7">
            <div class="category-section">
            <div class="owl-carousel owl-nav-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="2" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="2"  data-space="30" data-autoheight="true">
                @foreach ($Categories as $category)
                    <div class="item">
                        <div class="category-style-01">
                            <img class="img-fluid custom_image " src="{{asset("images/".$category->image)}}" alt="">
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
banner -->
<h2 class="text-center" >Featured products</h2>
<div class="d-flex flex-wrap justify-content-center container mt-5 mb-5 ">
	@foreach ($FeaturedProducts as $product)
	<div class="col-md-3 mb-4">
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
				<del>${{$product->price}}</del> <ins>${{round(($product->price)-(($product->discount/100)*($product->price)))}}</ins>
            @else
                <ins>${{$product->price}}</ins>
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
              <h2 class="text-white">Excellent Senior Care for Extraordinary Families</h2>
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
    Challenge-->
{{--        <section class="space-pb">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="title mb-5">--}}
{{--                            <h4>Hot Products</h4>--}}
{{--                        </div>--}}
{{--                        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="4" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2" data-autoplay="false">--}}
{{--                            @foreach ($HotProducts as $product)--}}
{{--                                <div class="item">--}}
{{--                                    <div class="product">--}}
{{--                                        <div class="product-image">--}}
{{--                                            <img class="img-fluid pro_image mx-auto" src="{{asset("images/". $product->image)}}" alt="product Image">--}}
{{--                                        </div>--}}
{{--                                        <div class="product-description">--}}
{{--                                            <div class="product-title">--}}
{{--                                                <a href="{{asset('product/'.$product->id)}}" >{{$product->name}}</a>--}}
{{--                                            </div>--}}

{{--                                            <div class="product-price">--}}
{{--                                                @if($product->discount != 0 )--}}
{{--                                                    <del>${{$product->price}}</del> <ins>${{round(($product->price)-(($product->discount/100)*($product->price)))}}</ins>--}}
{{--                                                @else--}}
{{--                                                    <ins>${{$product->price}}</ins>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <div class="owl-carousel owl-nav-bottom-center mt-5" data-nav-dots="false" data-nav-arrow="false" data-items="4" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="2"  data-space="30" data-autoheight="true">
            @foreach ($HotProducts as $product)
                <div class="item">
                    <div class="product-description">
                        <img class="img-fluid custom_image " src="{{asset("images/".$product->image)}}" alt="product Image">
                    </div>
                    <div class="product-title">
                        <a href="{{asset('product/'.$product->id)}}" >{{$product->name}}</a>
                    </div>
                    <div class="product-price">
                        @if($product->discount != 0 )
                            <del>${{$product->price}}</del> <ins>${{round(($product->price)-(($product->discount/100)*($product->price)))}}</ins>
                        @else
                            <ins>${{$product->price}}</ins>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <script>
            document.title = "Nahtam | Home";
            document.getElementsByTagName(
                "META"
            )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
            document.getElementsByTagName(
                "META"
            )[2].content = "This page is the home page for Nahtam site it shows the features for all the website ";
        </script>

@endsection
