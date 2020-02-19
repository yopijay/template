@extends('main-layout')
@section('title', 'Login')
@section('content')
    <div class= "row">
        <div class= "col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
            <div class= "agm-standard-login">
                <h1>WELCOME</h1>
                <img src= "{{ asset('img/man.png') }}" class= "shadow-sm"/>
                <form class= "standard-form">
                    <div class= "form-group">
                        <label>Email, Username or Mobile number:</label>
                        <input type= "text" class= "form-control"/>
                    </div>
                    <div class= "form-group">
                        <label>Password</label>
                        <input type= "password" class= "form-control"/>
                    </div>
                </form>
                <a href= "#" class= "standard-forgot mb-5">Forgot password?</a>
                <button type= "button" class= "btn btn-standard">Login</button>
                <a href= "#" class= "standard-register">Create an account?</a>
                <div class= "row">
                    <hr class= "col-md-4 col-3 px-0 divider"/>
                    <p class= "col-md-4 col-6 px-0">SIGN IN WITH</p>
                    <hr class= "col-md-4 col-3 px-0 divider"/>
                </div>
                <div class= "row standard-btn-group">
                    <button type= "button" class= "btn col-md-6 col-6 standard-btn-rounded-left">Facebook</button>
                    <button type= "button" class= "btn col-md-6 col-6 standard-btn-rounded-right">Gmail</button>
                </div>
            </div>
        </div>
    </div>
@endsection