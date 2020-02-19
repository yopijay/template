@extends('main-layout')
@section('title', 'Cards')
@section('content')
<div class= "row">
    <div class="col-md-6 offset-md-3 col-8 offset-2">
        <div class="card mb-3">
            <img src="{{ asset('img/dog.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img src="{{ asset('img/dog.jpg') }}" class="card-img-top" alt="...">
        </div>
    </div>
</div>
@endsection


<!-- <div class= "row">
    <div class= "col-sm-8 offset-sm-2 col-10 offset-1">
        <a href="#" class="btn btn-standard">Go somewhere</a>
    </div>
</div> -->