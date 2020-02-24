@extends('main-layout')
@section('title', 'Cards')
@section('content')
<div class= "row mt-5">
    <div class= "col-md-4 offset-md-4">
        <div class="card card-outline-success mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">Footer</div>
        </div>
        <div class="card card-success mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <!-- <div class="card-footer">Footer</div> -->
        </div>
    </div>
</div>
@endsection