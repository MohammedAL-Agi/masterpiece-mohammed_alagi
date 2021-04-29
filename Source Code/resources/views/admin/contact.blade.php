@extends('layouts.app')
@section('content')
<div class="row m-t-30">
	<div class="col-md-12">
			<!-- DATA TABLE-->
			<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
							<thead>
							<tr class="table-dark" >
									<th>Name</th>
									<th>Email</th>
									<th>Message</th>
							</tr>
							</thead>
							<tbody>
							@foreach($contacts as $contact)
									<tr>
											<td>{{$contact->name}}</td>
											<td>{{$contact->email}}</td>
											<td>{{$contact->message}}</td>
									</tr>
							@endforeach
							</tbody>
					</table>
			</div>
			<!-- END DATA TABLE-->
	</div>
</div>
@endsection