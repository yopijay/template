@extends('main-layout')
@section('title', 'Switch Toggles')
@section('content')
<div class= "row mt-5 mb-5">
    <div class= "col-md-6 offset-md-3">
        <div class= "row">
            <div class= "col-md-3">
                <div class= "toggle toggle-light t-primary">
                    <input type= "checkbox" id= "toggle-light1">
                    <label for= "toggle-light1"></label>
                </div>
                <div class= "toggle toggle-light t-success">
                    <input type= "checkbox" id= "toggle-success">
                    <label for= "toggle-success"></label>
                </div>
                <div class= "toggle toggle-light t-danger">
                    <input type= "checkbox" id= "toggle-danger">
                    <label for= "toggle-danger"></label>
                </div>
                <div class= "toggle toggle-light t-warning">
                    <input type= "checkbox" id= "toggle-warning">
                    <label for= "toggle-warning"></label>
                </div>
                <div class= "toggle toggle-light t-info">
                    <input type= "checkbox" id= "toggle-info">
                    <label for= "toggle-info"></label>
                </div>
                <div class= "toggle toggle-light t-light">
                    <input type= "checkbox" id= "toggle-light">
                    <label for= "toggle-light"></label>
                </div>
                <div class= "toggle toggle-light t-dark">
                    <input type= "checkbox" id= "toggle-dark">
                    <label for= "toggle-dark"></label>
                </div>
            </div>
            <div class= "col-md-3">
                <div class= "toggle toggle-ios t-primary">
                    <input type= "checkbox" id= "toggle-ios1">
                    <label for= "toggle-ios1"></label>
                </div>
                <div class= "toggle toggle-ios t-success">
                    <input type= "checkbox" id= "toggle-ios2">
                    <label for= "toggle-ios2"></label>
                </div>
                <div class= "toggle toggle-ios t-danger">
                    <input type= "checkbox" id= "toggle-ios3">
                    <label for= "toggle-ios3"></label>
                </div>
                <div class= "toggle toggle-ios t-warning">
                    <input type= "checkbox" id= "toggle-ios4">
                    <label for= "toggle-ios4"></label>
                </div>
                <div class= "toggle toggle-ios t-info">
                    <input type= "checkbox" id= "toggle-ios5">
                    <label for= "toggle-ios5"></label>
                </div>
                <div class= "toggle toggle-ios t-light">
                    <input type= "checkbox" id= "toggle-ios6">
                    <label for= "toggle-ios6"></label>
                </div>
                <div class= "toggle toggle-ios t-dark">
                    <input type= "checkbox" id= "toggle-ios7">
                    <label for= "toggle-ios7"></label>
                </div>
            </div>
            <div class= "col-md-3">
                <div class= "toggle toggle-skewed t-primary">
                    <input type= "checkbox" id= "toggle-s1">
                    <label for= "toggle-s1" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-success">
                    <input type= "checkbox" id= "toggle-s2">
                    <label for= "toggle-s2" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-danger">
                    <input type= "checkbox" id= "toggle-s3">
                    <label for= "toggle-s3" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-warning">
                    <input type= "checkbox" id= "toggle-s4">
                    <label for= "toggle-s4" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-info">
                    <input type= "checkbox" id= "toggle-s5">
                    <label for= "toggle-s5" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-light">
                    <input type= "checkbox" id= "toggle-s6">
                    <label for= "toggle-s6" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-skewed t-dark">
                    <input type= "checkbox" id= "toggle-s7">
                    <label for= "toggle-s7" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
            </div>
            <div class= "col-md-3">
                <div class= "toggle toggle-flat t-primary">
                    <input type= "checkbox" id= "toggle-f1">
                    <label for= "toggle-f1" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-success">
                    <input type= "checkbox" id= "toggle-f2">
                    <label for= "toggle-f2" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-danger">
                    <input type= "checkbox" id= "toggle-f3">
                    <label for= "toggle-f3" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-warning">
                    <input type= "checkbox" id= "toggle-f4">
                    <label for= "toggle-f4" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-info">
                    <input type= "checkbox" id= "toggle-f5">
                    <label for= "toggle-f5" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-light">
                    <input type= "checkbox" id= "toggle-f6">
                    <label for= "toggle-f6" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flat t-dark">
                    <input type= "checkbox" id= "toggle-f7">
                    <label for= "toggle-f7" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
            </div>
            <div class= "col-md-4 offset-md-4 mt-5">
                <div class= "toggle toggle-flip t-primary">
                    <input type= "checkbox" id= "toggle-fl1">
                    <label for= "toggle-fl1" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-success">
                    <input type= "checkbox" id= "toggle-fl2">
                    <label for= "toggle-fl2" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-danger">
                    <input type= "checkbox" id= "toggle-fl3">
                    <label for= "toggle-fl3" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-warning">
                    <input type= "checkbox" id= "toggle-fl4">
                    <label for= "toggle-fl4" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-info">
                    <input type= "checkbox" id= "toggle-fl5">
                    <label for= "toggle-fl5" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-light">
                    <input type= "checkbox" id= "toggle-fl6">
                    <label for= "toggle-fl6" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
                <div class= "toggle toggle-flip t-dark">
                    <input type= "checkbox" id= "toggle-fl7">
                    <label for= "toggle-fl7" data-tg-off= "OFF" data-tg-on= "ON"></label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection