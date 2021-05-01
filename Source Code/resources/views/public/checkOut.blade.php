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
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
            <h2 class="inner-banner-title">Checkout</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Checkout -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="checkout-info-coupon mb-5">
                  <p class="checkout-info"><strong>Have a coupon?</strong>
                    <a data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                      Click here to enter your code
                    </a>
                  </p>
                  <div class="collapse" id="collapse">
                    <div class="checkout-coupon">
                    <p>If you have a coupon code, please apply it below.</p>
                    <form class="form-row">
                    <div class="form-group col-sm-12">
                      <input type="text" class="form-control" id="coupon_code" placeholder="Coupon code">
                    </div>
                    </form>
                    <a href="#" class="btn btn-primary">Apply coupon</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="checkout">
                  <div class="section-title">
                    <h3 class="title">Billing details</h3>
                  </div>
                  <form class="form-row mt-4" method="POST">
                    @csrf
                    <div class="form-group col-sm-12">
                      <label>Name</label>
                    <p>  <strong>{{$customer->name}}</strong></p>

                    </div>
										<div class="form-group col-md-6">
											<label>Email</label>
                      <p> <strong>{{$customer->email}}</strong></p>
										</div>
										<div class="form-group col-md-6">
											<label>Phone Number</label>
                      @if ($customer->phone =='Add phone number')
                      <input type="text" class="form-control" name='phone' />
                      @if ($errors->has('phone'))
                      <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                      @endif
                      <input type="hidden" name="phoneRequired" value="1">
                      @else
                      <p>{{$customer->phone}}</p>
                      @endif
                    </div>
										<div class="form-group col-sm-12">
											<label>Address</label>
                      <input type="text" class="form-control" name="address" placeholder="City / st." />
                      @if ($errors->has('address'))
                      <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                      @endif
										</div>
										<div class="form-group col-md-12">
											<label>Anything else we should know?</label>
											<textarea class="form-control" name="note" rows="5"></textarea>
										</div>
                </div>
          </div>

          <div class="col-md-6 mt-5 mt-md-0">
                <div class="section-title">
                  <h3 class="title">Your Order</h3>
                </div>
                <div class="checkout-review">
                  <div class="table-responsive">
                    <table class="table cart">
                      <tbody>

                        <tr>
                          <th class="border-top-0 product-name" scope="row">Product</th>
                          <th class="border-top-0 product-total" scope="row">Price</th>
                        </tr>
                        @foreach ($cartDetails as $item)
                        <tr>
                          <td> {{$item["product"]->name}} × {{$item["qty"]}} </td>
                          <td> $ {{$item["product"]->price}} </td>
                        </tr>
                        @endforeach

                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="shipping">Payment</th>
                          <td>
                            <p>Cash On Delivery</p>
                        </td>
                        </tr>
                        <tr>
                          <th class="product-total" scope="row">Total</th>
                          <td class="product-total amount text-primary"><strong> $ {{$total}}</strong></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>

                  <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our<a href="#"> privacy policy.</a></p>
                  <div class="custom-control custom-checkbox my-4">
                    <input type="checkbox" class="custom-control-input" onclick="show()" id="agree">
                    <label class="custom-control-label" for="agree"> I have read and agree to the website <a href="#">terms and conditions</a></label>
                  </div>
                  <button type="submit" id="order" disabled class="btn btn-primary btn-block">Place Order</button>
                </div>
              </form>

          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Checkout -->
      <script>
        function show(){
          let agree = document.getElementById('agree').checked;
          let button= document.getElementById('order');
          if(!agree){
            button.disabled = true;
          }else{
            button.disabled = false;

          }
        }

      document.title = "Nahtam | Check Out";
      document.getElementsByTagName(
          "META"
      )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
      document.getElementsByTagName(
          "META"
      )[2].content = "This page is the Check Out page for Nahtam site it let the user continue the payment process.";

      </script>

@endsection
