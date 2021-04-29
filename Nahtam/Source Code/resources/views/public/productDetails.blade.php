@extends('layouts.pagesLayout')
@section('content')
<!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="{{asset('/shop')}}"> Shop </a></li>
              <li class="breadcrumb-item active">Product-Detail</li>
            </ol>
            <h2 class="inner-banner-title">Product</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    product -->
    <section class="space-ptb shop-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
							<div class="col-md-6 col-lg-4 mb-4">
                <div class="product">
                   <div class="product-image">
                      <img class="img-fluid mx-auto" src="{{asset("images/".$Product->image)}}" alt="">
                    </div>
               </div>
              </div>
              <div class="col-md-7">
                <div class="product-detail">
                  <h4>{{$Product->name}}</h4>
                  <div class="product-price-rating mb-3">
                    {!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $averageRate) !!}
                    {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $averageRate) !!}
                    <a href="#reviews" class="text-dark ml-2" rel="nofollow">(<span class="count">{{count($reviews)}}</span> customer reviews)</a>
                    </div>
                    <div class="product-price">
                      @if ($Product->discount != 0)
                      <span> {{$Product->discount}} %</span>
                      <h5>
                        <del class="mr-2" >${{$Product->price}}</del>
                      <ins>${{round($Product->price - (($Product->discount * $Product->price)/100))}}</ins>
                    </h5>
                      @else
                      <h5>${{$Product->price}}</h5>
                      @endif
                    </div>
                  </div>
                  <p>{{$Product->description}}</p>
                  @if (!isset(session("loginUser")['id'])||session("loginUser")['role']=='customer')
                  <form method="post" action="{{asset('addToCart')}}" class=" d-flex align-items-center">
                    @csrf
                    <div class="d-flex mt-5
                    mt-2">
                    <input type="hidden" name="id" value="{{$Product->id}}">
                      <div class="input-group  col-sm-4">
                        <input type="number" name="qty" class="form-control input-number" value="1" min="1" max="10">
                      </div>
                      <button class="btn btn-primary col-sm-12" type="submit">
                        <i class="fas fa-shopping-cart"></i> Add To Cart
                      </button>
                    </div>
                  </form>
                  @endif
                  <div class="mt-5">
                    <h6>Categories:</h6>
                    <span>
                      <ul class="list-unstyled" >
                        <li><a href="{{asset('shop/'.$Product->category_id)}}">{{$Product->category_name}}</a></li>
                      </ul>
                    </span>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<div class="container">
      <div class="row mt-5">
          <div class="col-lg-12">
            <ul class="nav nav-tabs nav-tabs-02" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
              </li>
                @if (isset(session('loginUser')['id']) && session("loginUser")['role']=='customer')
                <li class="nav-item">
                <a class="nav-link" id="tab-reviews" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews ({{count($reviews)}})</a>
              </li>
                @endif
            </ul>
            <div class="tab-content mt-5 " id="myTabContent">
              <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="row">
                  <div class="col-sm-12">
                  <h5>So why do we do it?</h5>
                  <p class="mb-4"> The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
                  <h5>Does it need to be done at all?</h5>
                  <p class="mb-4">Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no, you may want to reconsider doing it at that time.</p>
                  <h5>Can it be done by someone else?</h5>
                  <p>The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing to do with luck, coincidence or fate. It really comes down to understanding the steps in the process and then executing on those steps.</p>
                  <p class="mb-4">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.</p>
                  <h5>Can the particular activity be done later?</h5>
                  <p class="mb-4">What is the exact sequence of events that will take you to where you want to be? Have a think consciously of what you need to do. Every outcome begins with the first step. When you decide you want to have a romantic meal for two, there are many steps that you need to perform in order for that to happen. (Check the fridge, do you have what you want to serve up? No? Find keys, open garage door, drive car to the supermarket etc. etc.) You need to determine the exact sequence of events and write it down. Begin with the outcome in mind. Write without stopping. 10 years from now, I plan to be living in a… at…. With…. Get really detailed about it. Why? Because you are hooking up the neural connections in your brain. You must improve upon, clarify and make clear just exactly who and what you are going to be doing, experiencing, living and having in 10 years. This is the first step of the process! Key: Notice how you felt excited and optimistic when you did this? The reason is simple. It’s the life you are designing instead of the one that was given you and that you have lived with less intention and purpose to date.</p>
                </div>
              </div>
                <div class="row mt-4">
                  <div class="col-md-4">
                    <div class="feature-info left-icon mb-5 mb-md-0">
                      <div class="feature-info-icon">
                        <i class="flaticon-truck"></i>
                      </div>
                      <div class="feature-info-content">
                        <h5 class="feature-info-title">Free shipping</h5>
                        <p>Free Shipping on orders $199.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature-info left-icon mb-5 mb-md-0">
                      <div class="feature-info-icon">
                        <i class="flaticon-conversation"></i>
                      </div>
                      <div class="feature-info-content">
                        <h5 class="feature-info-title">24/7 Support</h5>
                        <p>Online and phone support 24 / 7</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature-info left-icon mb-0">
                      <div class="feature-info-icon">
                        <i class="flaticon-reload"></i>
                      </div>
                      <div class="feature-info-content">
                        <h5 class="feature-info-title">30 Days return</h5>
                        <p>30 days money-back guarantee.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="tab-reviews">
                <div class="row">
                  <div class="col-12">
                    <h5 class="mb-4"> {{count($reviews)}} Reviews for {{$Product->name}}</h5>
                      @foreach ($reviews as $review)
                    <div class="commentlist">
                      <div class="comment-author">
                          <img src="{{asset("images/{$review->image}")}}" class="rounded" width="100px" alt="customer Image"/>
                      </div>
                      <div class="comment-content">
                        <div class="reviews">
                          <p class="meta">
                            <strong>{{ $review->name }} </strong>({{Str::substr($review->created_at,0, 10)}})
                          </p>
                          <div class="rating">
                             {!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->rate) !!}
                             {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $review->rate) !!}
                          </div>
                        </div>
                        <p>{{ $review->comment }}</p>
                      </div>
                    </div>
                      @endforeach
                    <div class="mt-4">
                      <h5>Add a review</h5>
                    </div>
                    <form class="form-row mt-4 align-items-center" method="POST">
                        @csrf
                      <div class="form-group col-sm-12">
                        <label>Your review *</label>
                        <div class="product-rating">
                            <label>
                                <select class="form-control" name="rate" >
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </label>
                        </div>
                    </div>
                      <div class="form-group col-sm-12">
                        <label>Your review *</label>
                        <div class="form-group">
                            <label for="comment"></label><textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
                        </div>
                      </div>
                      <button class="btn btn-primary btn-md mt-4" type="submit"> Submit </button>
                  </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    product -->

<section class="space-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title mb-5">
                    <h4>Related products</h4>
                </div>
                <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="4" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2" data-autoplay="false">
                    @foreach ($relatedProducts as $product)
                    <div class="item">
                        <div class="product">
                            <div class="product-image">
                                <img class="img-fluid pro_image mx-auto" src="{{asset("images/". $product->image)}}" alt="product Image">
                            </div>
                            <div class="product-description">
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
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Related products -->
<script>
      document.title = "Nahtam | Product";
      document.getElementsByTagName(
          "META"
      )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
      document.getElementsByTagName(
          "META"
      )[2].content = "This page is the products page for Nahtam site it shows the single product and more information about it.";
  </script>

@endsection
