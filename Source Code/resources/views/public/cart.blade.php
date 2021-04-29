@extends('layouts.pagesLayout')
@section('content')
<!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item active">Cart</li>
            </ol>
            <h2 class="inner-banner-title">CART</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->
    <!--=================================
    Compare properties -->
    <section class="space-ptb bg-holder">
      <form action="{{asset('update')}}" method="post">
        @csrf
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="cart-table">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="product-remove">&nbsp;</th>
                      <th class="product-thumbnail">&nbsp;</th>
                      <th class="product-name">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-subtotal">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cartDetails as $item)
                    <tr>
                      <td class="product-remove"><a <a href="{{asset('cart/delete/'.$item["product"]->id)}}"><i class="far fa-trash-alt"></i></a></td>
                      <td class="product-thumbnail"><a href="#"><img src="{{asset('images/'.$item["product"]->image)}}" alt="{{$item["product"]->name}}"></a></td>
                      <td class="product-name" style="max-width:70px;" ><a href="#">{{$item["product"]->name}}</a></td>
                      <td class="product-price"><span class="amount">$ {{$item["product"]->price}}</span></td>
                      <td class="product-quantity">
                            <input type="number" class="form-control" name="{{$item["product"]->id}}" value="{{$item["qty"]}}"/>
                      </td>
                      <td class="product-subtotal"><span class="subtotal">$ {{$item["product"]->price * $item["qty"]}}</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            <div class="actions">
                  {{-- <div class="coupon">
                    <form>
                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                        <a class="btn btn-primary" href="#"> Apply coupon</a>
                    </form>
                  </div> --}}
                  <button class="btn btn-primary update-cart" type="submit">
                    Update cart
                  </button>
                </form>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cart-totals">
              <h4 class="cart-totals-title">Cart totals</h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr class="order-total">
                      <th>Total</th>
                      <td>
                        <span class="amount">$ {{$total}}</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center">
                <a href="{{asset('checkout')}}" class="btn btn-dark checkout-button">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Compare properties -->
    <script>
      document.title = "Nahtam | Cart";
      document.getElementsByTagName(
          "META"
      )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
      document.getElementsByTagName(
          "META"
      )[2].content = "This page is the cart page for Nahtam site it shows the products that been added via single user.";
  </script>

@endsection