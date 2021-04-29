@extends('layouts.pagesLayout')
@section('content')



    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Shop</li>
            </ol>
            <h2 class="inner-banner-title">Shop</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    product -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="col-lg-12  form-group">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="search" class="search-field " placeholder="Search products…" name="search">
                        </form>
                    </div>

              <div class="widget">

                <div class="widget-title">
                  <h5>Categories</h5>
                </div>
                <div class="widget-categories">
                  <ul class="list-unstyled list-style mb-0">
                    <li><a href="{{asset('shop')}}">All Products</a></li>
                    @foreach ($Categories as $Category)
                    <li> <a href="{{asset('shop/'.$Category->id)}}">{{$Category->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>

            <div class="row col-lg-9 mt-lg-0">
              @foreach ($Products as $product)
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                      <img class="img-fluid pro_image" src="{{asset("images/".$product->image)}}" alt="{{$product->name}}">
                    </div>
                    <div class="product-description">
                      <div class="product-title">
                        <a href="{{asset('product/'.$product['id'])}}">{{$product->name}}</a>
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

                 <div class="links col-sm-10">
                     {{$Products->links()}}
                 </div>
            </div>
            </div>
          </div>

    </section>


    <!--=================================
    product -->
    <script>
      document.title = "Nahtam | Shop";
      document.getElementsByTagName(
          "META"
      )[1].content = `categories, Nahtam, Add, Buy, Order`;
      document.getElementsByTagName(
          "META"
      )[2].content = "This page is dedicated to displaying products for each category";
  </script> 
@endsection
