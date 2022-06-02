@extends('layouts.default')
@section('title')
    About
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card">
    <div class="card-body">
        <img src="{{ asset('images/cube_logo.svg') }}" height="77" alt="logo" class="logo mx-auto d-block" style="filter:brightness(0.5)">
        <h5 class="d-inline">cube system </h5><p class="d-inline">(version 1.0)</p>
        <p></p>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="d-inline">techX team </h5>
        <p></p>
        <div class="text-center">
        <div class=" d-inline mr-2"> <i class="fa fa-facebook"></i> </div>
        <div class=" d-inline mr-2"> <i class="fa fa-twitter"></i> </div>
        <div class=" d-inline mr-2"> <i class="fa fa-linkedin"></i> </div>
        </div>
        </div>
</div>

@endsection
