@extends('layouts.pagesLayout')
@section('content')
<div class='d-flex justify-content-center'>
	<img class="img-fluid" height="400px" width="600px" src="/assetss/images/empty.svg"></img>
</div>
<div class="text-center mt-5 mb-5">
	<h2>It seems that there is just empty boxes here!</h2>
	<div class="row justify-content-center mt-md-5 mt-0">
		<a href="{{asset('shop')}}" class="btn btn-primary btn-arrow">Shop Now <i class="flaticon-next"></i></a>
	</div>
</div>
@endsection
