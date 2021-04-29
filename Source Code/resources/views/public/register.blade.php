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
              <li class="breadcrumb-item active">Login</li>
            </ol>
            <h2 class="inner-banner-title">Login</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Login -->
    <section class="space-ptb login">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-sm-10">
            <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                @if ($message = Session::get('Error'))
                    <p class='alert alert-danger'>{{ $message }}</p>
                @endif
                @if ($message = Session::get('failed'))
                <p class='alert alert-danger'>{{ $message }}</p>
                @endif
                <form class="form-row mt-4 align-items-center" action="login" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group col-sm-12">
                    <label>Email Address:</label>
                    <input type="email" name="email" value="{{old('email')}}"  class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                    @enderror
                  </div>
                    <label>Password:</label>
                  <div class="form-group d-flex col-sm-12">
                      <input name="password" id="myInput" type="password" class="form-control">
                      <i onclick="showPassword()" id="eye" class="fas fa-eye fa-2x align-self-center " aria-hidden="true" style="cursor: pointer;"></i>
                  </div>
                    @error('password')
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                    @enderror
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form class="form-row mt-4 mb-5 align-items-center" action="register" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group col-sm-12">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" >
                    @error('name')
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                    @enderror
                  </div>
                  <div class="form-group col-sm-12">
                    <label>Email Address:</label>
                    <input type="email" name="email" value="{{old('email')}}"  class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                    @enderror
                  </div>
                    <label>Password:</label>
                  <div class="form-group d-flex col-sm-12">
                      <input name="password" id="registerInput" type="password"  class="form-control">
                      <i onclick="showPassword()" class="fas fa-eye fa-2x align-self-center" style="cursor: pointer;"></i>
                  </div>
                    @error('password')
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                    @enderror
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->

    <script>
        document.title = "Nahtam | Register";
        document.getElementsByTagName(
            "META"
        )[1].content = `Nahtam, Care, Elderly care, Old men, Therapists, equipments, Supplies, products`;
        document.getElementsByTagName(
            "META"
        )[2].content = "This page is the registeration page for Nahtam site it let the users register to the website.";

        function showPassword(){
            var i = document.getElementById("myInput");
            var r = document.getElementById("registerInput");

            if ( i.type == "password"  || r.type == 'password'){
                i.type = "text";
                r.type = "text";

            }else{
                i.type='password'
                r.type='password'
            }
        }
    </script>

		@endsection
