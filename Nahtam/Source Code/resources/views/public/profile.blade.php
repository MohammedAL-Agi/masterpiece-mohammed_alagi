@extends('layouts.pagesLayout')
@section('content')

<section class="main_content_area my_account ptb-100 mt-5 mb-5">
	<div class="container">
		<div class="account_dashboard">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<!-- Nav tabs -->
					<div class="dashboard_tab_button nav nav-pills">
						<ul role="tablist" class="nav flex-column dashboard-list">
							<li>
								<a
									href="#dashboard"
									data-toggle="tab"
									class="nav-link active h4"
									>My Account</a
								>
							</li>
							<li>
								<a
									href="#shopHistory"
									data-toggle="tab"
									class="nav-link h4"
									>Order History</a
								>
							</li>
							<li>
								<a
									href="#account-details"
									data-toggle="tab"
									class="nav-link h4"
									>Account details</a
								>
							</li>
							<li><a href="{{asset('/logout')}}" class="nav-link h4">logout</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-9 col-lg-9">
					<!-- Tab panes -->
					<div class="tab-content dashboard_content">
						<div class="tab-pane fade show active" id="dashboard">
							{{-- <h3>Dashboard</h3> --}}
							<div class="col-sm-12 mb-5">
								<div class="team-single">
									<div class="team-single-detail d-flex ">
										<div class="team-single-img ml-4 mt-4 mb-4">
											<img class="img-fluid mfp-img-mobile" height='100px' width='150px' src="{{asset("images/{$customer[0]->image}")}}" alt="profile Image">
										</div>
										<ul class="list-unstyled">
										<li class="text-white h6">
											<span>Name:</span>
											<label>{{ $customer[0]->name }}</label>
										</li>
										<li class="text-white h6">
											<span>Email:</span>
											<label>{{ $customer[0]->email }}</label>
										</li>
										<li class="text-white h6">
											<span>Phone:</span>
											<label>{{ $customer[0]->phone }}</label>
										</li>
									</ul>
									</div>
								</div>
						</div>
						</div>
						<div class="tab-pane fade" id="account-details">
                <div class="col-sm-12 mb-5">
                    <div class="sitter-account">
                        <form class="form-row mt-4 align-items-center" method="POST" enctype="multipart/form-data">
													@csrf
													@method('PATCH')
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $customer[0]->name }}">
                                @error('name')
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" name="email" value="{{ $customer[0]->email }}">
                                @error('email')
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                @enderror
                              </div>
                            <div class="form-group col-sm-12">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Mobile number</label>
                                <input type="text" class="form-control" name="phone" value="{{ $customer[0]->phone}}">
																@error('phone')
																<p class="text-danger">{{ $errors->first('phone') }}</p>
																@enderror
                            </div>
                            <div class="col-12">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
													</form>
                    </div>
                </div>
						</div>
						<div class="tab-pane fade" id="shopHistory">
							<h3>Orders</h3>
							<div class="lion_table_area table-responsive">
								@foreach ($ordersTable as $order)
								<table class="table table-dark">
									<thead style="background-color: #214D63; color:#F6E368;">
										<tr>
											<th>Order ID</th>
											<th>Order Status</th>
											<th>Date Add</th>
											<th>Product Name</th>
											<th>Quantity</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										@foreach ($order["order_products"] as $key=> $order_product)
										<tr>
											<td>{{ $order["order"]->id }}</td>
											<td>{{ $order["order"]->status  }}</td>
											<td>{{ Str::substr($order["order"]->created_at,0, 10)}}</td>
											<td>{{ $order_product->name }}</td>
											<td>
												@if ($order_product->quantity!=1)
												{{ round($order_product->quantity) }} items
												@else
												{{round($order_product->quantity) }} item
												@endif
											</td>
											<td>$ {{ $order["order"]->total_price }}</td>
										</tr>
										@endforeach

										{{-- <tr>
											<td colspan="3" class="subtableCon">
												<table class="subtable">
													<tr>
														<th>Summary</th>
														<td>Order id :{{ $order["order"]->id }}</td>
														<td>Date:{{ Str::substr($order["order"]->created_at,0, 16)  }}</td>
														<td>Status: {{ $order["order"]->status  }}</td>
														<td>Total Price: {{ $order["order"]->total_price  }} JOD</td>
													</tr>
												</table>
											</td>
										</tr> --}}
									</tbody>
								</table>
								@endforeach

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Maincontent  -->

<script>
	document.title = "Nahtam | Profile";
	document.getElementsByTagName(
			"META"
	)[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
	document.getElementsByTagName(
			"META"
	)[2].content = "This page is the profile page for Nahtam site it shows information about the user his orders and profile.";
</script>

@endsection
