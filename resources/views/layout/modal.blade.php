@extends('main-layout')
@section('title', 'Modals')
@section('content')
<div class= "row mt-3">
    <div class= "col-xl-2 col-sm-5 col-12">
        <button type= "button" class= "btn btn-standard w-100" data-toggle= "modal" data-target= "#exampleModal">Launch Demo Modal</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#staticBackdrop">Launch static backdrop modal</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalLong">Launch demo modal</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalScrollable">Launch demo modal</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalCenterScrollable">Launch demo modal</button>
        
        <button type="button" class="btn btn-standard w-100 mt-5" data-toggle="modal" data-target="#exampleModalVary" data-whatever="@mdo">Open modal for @mdo</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalVary" data-whatever="@fat">Open modal for @fat</button>
        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalVary" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

        <button type="button" class="btn btn-standard w-100 mt-3" data-toggle="modal" data-target="#exampleModalSize">Launch demo modal</button>
    </div>
    <div class= "col-xl-10 col-sm-7 col-12">
    
    </div>
</div>

@include('global.modal')
@endsection