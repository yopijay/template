@extends('main-layout')
@section('title', 'Breadcrumbs')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Side Nav</a></li>
    <li class="breadcrumb-item active" aria-current="page">Login Page</li>
</ol>
@endsection