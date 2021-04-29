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
              <li class="breadcrumb-item active">Blog</li>
            </ol>
            <h2 class="inner-banner-title">Blog</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

 @if (isset(session("loginUser")['id'])&& session("loginUser")['role']=='customer')

     <div class="d-flex justify-content-center pt-60">
         <div >
             <button class="btn btn-primary mt-5" type="submit">
                 <a href="{{asset("blog/add")}}" style="color: white;">
{{-- <div id="div1" class="fa" style="font-size: 1.4rem; margin: 0rem 0.6rem 0rem 0rem;"></div>--}}
                     Add Blog
                        </a>
             </button>
             <script>
                 function hand() {
                     var a;
                     a = document.getElementById("div1");
                     a.innerHTML = " &#xf055;";
                     setTimeout(function () {
                         a.innerHTML = "&#xf0fe;";
                     }, 300);
                     setTimeout(function () {
                         a.innerHTML = "&#xf055;";
                         //   &#xf057;
                         // &#xf00d;
                     }, 600);
                     setTimeout(function () {
                         a.innerHTML = "&#xf0fe;";
                     }, 900);
                 }
                 hand();
                 setInterval(hand, 1800);
             </script>
         </div>
     </div>
     @endif
     <!--End Add Bolg -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
          <div class="col-lg-4 col-md-6 mb-0 mb-lg-3">
            <div class="blog-post"  >
              <div class="blog-post-image">
                  <a href="/blog/{{$blog->id}}"><img class="img-fluid" src="{{asset('images/'.$blog->image)}}" alt="{{$blog->heading}}"></a>
              </div>
              <div class="blog-post-content" style="{{$blog->status == "Pending" ? "background-color:#fcffa1" :""}}" >
                <div class="blog-post-date">{{$blog->name}}</div>
                <h6 class="blog-post-title" ><a href="/blog/{{$blog->id}}">{{$blog->heading}}{{$blog->status == "Pending" ? " | Pending" :""}}</a></h6>
              </div>
            </div>
          </div>
            @endforeach

        </div>
      </div>
    </section>
    <!--=================================
    Blog -->

 <script>
     document.title = "Nahtam | Blog";
     document.getElementsByTagName(
         "META"
     )[1].content = `categories, Nahtam, Add, Buy, Order`;
     document.getElementsByTagName(
         "META"
     )[2].content = "This page is dedicated to displaying products for each category";
 </script>
@endsection
