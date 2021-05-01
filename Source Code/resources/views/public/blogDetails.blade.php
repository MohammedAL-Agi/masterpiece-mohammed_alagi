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
              <li class="breadcrumb-item"><a href="{{asset('blog')}}">blog</a></li>
              <li class="breadcrumb-item active">{{$blog->heading}}</li>
            </ol>
            <h2 class="inner-banner-title">{{$blog->heading}}</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">

          <!-- Blog Sidebar -->
          <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="blog-sidebar">
              <!-- Search -->
              <div class="widget">
                <div class="widget-title">
                  <h4>Search Something</h4>
                </div>
                <div class="search">
                    <i class="fas fa-search"></i>
                    <form action="{{asset("blog/search")}}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="search" placeholder="Search here...">
                       <i class="fas fa-search"></i>
                    </form>

                </div>
              </div>
              <!-- Search -->
              <div class="widget">
                <div class="widget-title">
                </div>
                <div class="widget-categories">
               <img src="/images/orange.jpg" alt="Advertisement">
                </div>
              </div>
            </div>
          </div>
          <!-- Blog Sidebar -->

          <!-- Blog Detail -->
          <div class="col-lg-8">
            <div class="blog-detail">
              <div class="blog-post">

                <div class="blog-post-image">
                    <img class="img-fluid" src="{{asset('images/'.$blog->image)}}" alt="{{$blog->heading}}">
                </div>
                <div class="blog-post-content">
                  <div class="blog-post-date">{{$blog->name}} / {{Str::substr($blog->created_at,0,10)}}</div>
                    <h3>{{$blog->heading}}</h3>
                </div>
              </div>
              <div class="blog-post-description text-center">
                  <p>
                  <?php
                  echo str_replace("&nbsp;"," ",$blog->body);
                  ?>
                  </p>
              </div>

                <hr>

              <div class="row mt-5">
                  <div class="col-12">
                      @foreach ($comments as $comment)
                    <div class="comments-01">
                      <div class="comment-author">
                          <img src="{{asset("images/{$comment->image}")}}"  />
                      </div>
                      <div class="comment-content">
                        <div class="reviews">
                          <p class="meta">
                            <strong>{{ $comment->name }} </strong>{{Str::substr($comment->created_at, 0, 10)}}
                          </p>  
                        </div>
                        <p>{{ $comment->comment }}</p>
                      </div>
                    </div>
                      @endforeach
                    <div class="mt-5">
                      <h4>Leave a comment</h4>
                    </div>
                     @if (isset(session("loginUser")['id'])&& session("loginUser")['role']=='customer')
                      <form class="form-row mt-4 align-items-center" action="{{asset("blog/addComment")}}" method="post">
                          @csrf
                      <div class="form-group col-sm-12">
                        <label>Your comment *</label>
                        <div class="form-group">
                            <textarea placeholder="Type Your Comment *" rows="5" class="form-control" name="comment"></textarea>
                            @error('comment')
                            <p class="text text-danger">{{ $errors->first('comment') }}</p>
                            @enderror
                        </div>
                      </div>
                          <input type="hidden" name="id" value="{{$blog->id}}">
                          <button class="btn btn-primary btn-md mt-4"  type="submit">Submit Comment</button>
                  </form>
              @else
                              <a href="{{asset('login')}}">Sign In</a>  to here your thoughts
                 @endif

                  </div>
                </div>
            </div>
          </div>
          <!-- Blog Detail -->

        </div>
      </div>
    </section>
    <!--=================================
    Blog -->
    <script>
      document.title = "Nahtam | Blog ";
      document.getElementsByTagName(
          "META"
      )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
      document.getElementsByTagName(
          "META"
      )[2].content = "This page is the blog detail page for Nahtam site it shows the blog content and let the users know about the athor users articals";
  </script>

@endsection
