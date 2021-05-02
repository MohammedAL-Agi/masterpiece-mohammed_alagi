@extends('layouts.app')
@section('content')

<h1 class="mb-5" >Welcome back, {{$admins[0]->name}}</h1>



    <div class="row mb-3">

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                <h5 class="text-muted">Admins</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{count($admins)}}</h1>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                        <i class="fa fa-user fa-fw fa-sm  text-primary"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                <h5 class="text-muted">Customers</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{count($customers)}}</h1>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end sales  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- new customer  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
            <h5 class="text-muted">Categories</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">{{count($categories)}}</h1>
            </div>
            <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                <i class="fas fa-fw fa-chart-pie fa-fw fa-sm text-secondary"></i>
            </div>
            </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- end new customer  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- visitor  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
            <h5 class="text-muted">Products</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">{{count($products)}}</h1>
            </div>
            <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                <i class="fas fa-box fa-2x text-brand"></i>
            </div>
            </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- end visitor  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
            <h5 class="text-muted">Total Orders</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">{{count($orders)}}</h1>
            </div>
            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                <i class="fas fa-calendar-alt fa-fw fa-sm text-info"></i>
            </div>
            </div>
        </div>
        </div>


        <!-- ============================================================== -->
        <!-- end total orders  -->
        <!-- ============================================================== -->
    </div>

    <div class="col-md-12">
        <div class="card">
        <h5 class="card-header">Recent Messages</h5>
        <div class="card-body p-0">
            <div class="table-responsive">
            <table class="table">
                <thead class="bg-light">
                <tr class="border-0">
                    <th class="border-0">#</th>
                    <th class="border-0">Customer Name</th>
                    <th class="border-0">Customer Email</th>
                    <th class="border-0">Customer Message</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->message}}</td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection
