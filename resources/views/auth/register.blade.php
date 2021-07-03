@extends('layouts.loginRegisterLayout')

@section('title')
LOGIN
@endsection

@section('main_content')
<div class="account-pages">
    <div class="account-box">
        <div class="account-logo-box"> 
            <h5 class="text-uppercase font-bold m-b-5 text-center" style="font-size: 24px">Register</h5>
            <p class="m-b-0 text-center">Create an account at PATTHOBOI</p>
        </div>
        <div class="account-content">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="name">Full Name</label>
                        <input id="name" placeholder="Your name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> 

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="text" placeholder="Enter your phone number" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-password">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="email">Email address</label>
                        <input id="email" type="email" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row m-b-20">
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Create a strong password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" placeholder="Password again" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row m-b-20">
                    <div class="col-12">

                        <div class="checkbox checkbox-success">
                            <input id="remember" type="checkbox" checked="">
                            <label for="remember">
                                I accept <a href="#">Terms and Conditions</a>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group row text-center m-t-10">
                    <div class="col-12">
                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                    </div>
                </div>

            </form> 

            <div class="row m-t-50">
                <div class="col-12 text-center">
                    <p class="text-muted">Already have an account?  <a href="{{ route('login') }}" class="text-dark m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- end card-box-->
</div>
@endsection
 