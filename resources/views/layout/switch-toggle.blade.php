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
        </div>
    </div>
</div>
@endsection