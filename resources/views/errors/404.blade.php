@extends('layouts.loginRegisterLayout')

@section('title')
ERROR
@endsection

@section('main_content')
<div class="wrapper-page text-center">
    <div class="account-pages">
        <div class="account-box">

            <div class="account-logo-box">
                <h5 class="text-uppercase font-bold m-b-5 text-center" style="font-size: 24px">ERROR</h5> 
            </div>

            <div class="account-content">
                <h1 class="text-error ">404</h1>
                <h2 class="text-uppercase text-danger m-t-30">Page Not Found</h2>
                <p class="text-muted m-t-30">It's looking like you may have taken a wrong turn. Don't worry... it
                    happens to the best of us. You might want to check your internet connection. Here's a
                    little tip that might help you get back on track.</p>

                <a class="btn btn-md btn-block btn-primary waves-effect waves-light m-t-20" href="{{ route('index') }}"> Return Home</a>
            </div>
        </div>
    </div> 
</div>
@endsection