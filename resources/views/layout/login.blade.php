@extends('main-layout')
@section('title', 'Login')
@section('content')
    <div class= "row">
        <div class= "col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
            <div class= "agm-standard-login text-center">
                <h1>WELCOME</h1>
                <img src= "{{ asset('img/man.png') }}" class= "shadow-sm"/>
                <form class= "standard-form text-left">
                    <div class= "form-group">
                        <label>Email, Username or Mobile number:</label>
                        <input type= "text" class= "form-control"/>
                    </div>
                    <div class= "form-group">
                        <label>Password</label>
                        <input type= "password" class= "form-control"/>
                    </div>
                </form>
                <a href= "#" class= "link-standard mb-5 float-right">Forgot password?</a>
                <button type= "button" class= "btn btn-standard w-100">Login</button>
                <a href= "#" class= "link-standard">Create an account?</a>
                <div class= "row mt-5">
                    <hr class= "col-md-4 col-3 px-0"/>
                    <p class= "col-md-4 col-6 px-0 text-uppercase">Sign in with</p>
                    <hr class= "col-md-4 col-3 px-0"/>
                </div>
                <div class= "row standard-btn-group">
                    <button type= "button" class= "btn col-md-6 col-6 standard-btn-rounded-left text-uppercase">Facebook</button>
                    <button type= "button" class= "btn col-md-6 col-6 standard-btn-rounded-right text-uppercase">Gmail</button>
                </div>
            </div>
        </div>
    </div>
@endsection