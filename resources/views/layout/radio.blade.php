@extends('main-layout')
@section('title', 'Radio Buttons')
@section('content')
<div class= "row">
    <div class= "col-md-4 offset-md-4">
        <div class= "radio-group mt-5 mb-5">
            <div class= "radio-simple r-primary">
                <input type= "radio" id= "radio-1" name= "theme">
                <span></span>
                <label for= "radio-1">Primary</label>
            </div>
            <div class= "radio-simple r-success">
                <input type= "radio" id= "radio-2" name= "theme">
                <span></span>
                <label for= "radio-2">Success</label>
            </div>
            <div class= "radio-simple r-danger">
                <input type= "radio" id= "radio-3" name= "theme">
                <span></span>
                <label for= "radio-3">Danger</label>
            </div>
            <div class= "radio-simple r-warning">
                <input type= "radio" id= "radio-4" name= "theme">
                <span></span>
                <label for= "radio-4">Warning</label>
            </div>
            <div class= "radio-simple r-info">
                <input type= "radio" id= "radio-5" name= "theme">
                <span></span>
                <label for= "radio-5">Info</label>
            </div>
            <div class= "radio-simple r-light">
                <input type= "radio" id= "radio-6" name= "theme">
                <span></span>
                <label for= "radio-6">Light</label>
            </div>
            <div class= "radio-simple r-dark">
                <input type= "radio" id= "radio-7" name= "theme">
                <span></span>
                <label for= "radio-7">Dark</label>
            </div>
        </div>
        <div class= "radio-group mt-5 mb-5">
            <div class= "radio-icon">
                <input type= "radio" id= "icon-1" name= "icon">
                <span><i class= "far fa-smile"></i></span>
                <label for= "icon-1">Primary</label>
            </div>
        </div>
    </div>
</div>
@endsection