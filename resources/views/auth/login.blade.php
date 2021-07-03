@extends('layouts.loginRegisterLayout')

@section('title')
LOGIN
@endsection

@section('main_content')
    <div class="account-pages">
        <div class="account-box">
            <div class="account-logo-box">
                <h5 class="text-uppercase font-bold m-b-5 text-center" style="font-size: 24px">Log in</h5>
                <p class="m-b-0 text-center">Log in to your PATTHOBOI account</p>
            </div>
            <div class="account-content"> 
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="email">Email address</label>
                            <input id="email" type="email" placeholder="Enter your e-mail address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <a href="{{ route('password.request') }}" class="text-muted pull-right"><small>Forgot your password?</small></a>
                            <label for="password">Password</label>
                            <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">

                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember me
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                        </div>
                    </div>

                </form> 

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

 