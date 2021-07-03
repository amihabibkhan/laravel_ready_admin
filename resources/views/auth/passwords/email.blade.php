@extends('layouts.loginRegisterLayout')

@section('title')
RESET PASSWORD
@endsection

@section('main_content')
<div class="account-pages">
    <div class="account-box">
        <div class="text-center account-logo-box">
            <h5 class="text-uppercase font-bold m-b-5 text-center" style="font-size: 24px">Reset password</h5>
            <p class="m-b-0 text-center">Forgot your password? Reset here</p> 
        </div>
        <div class="account-content"> 
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="text-center m-b-20">
                <p class="text-muted m-b-0">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
            </div> 
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="emailaddress">Email address</label>
                        <input id="emailaddress" type="email" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row text-center m-t-10">
                    <div class="col-12">
                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Reset Password</button>
                    </div>
                </div>

            </form>

            <div class="clearfix"></div>

            <div class="row m-t-40">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Back to <a href="{{ route('index') }}" class="text-dark m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>

        </div>

    </div>
    <!-- end card-box-->
</div>
@endsection



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
