@extends('layouts.pagesLayout')
@section('content')

<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <div class="error-404-images">
          <img class="img-fluid" src="/assetss/images/svg/404.svg" alt="#">
        </div>
        <div class="error-404">
        <h1>Oops!</h1>
        <h4>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</h4>
        <a class="btn btn-lg btn-primary" href="{{asset('/')}}">Take me Home</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

