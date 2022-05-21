@extends('layouts.default')
@section('title')
    Inventory
@endsection
@section('content')
<style>
    .p-coust{opacity: 70%;}
</style>
<div class="card card-body col-3  pl-5 d-inline-block mr-3">
   <div class="mt-0 pt-0 mb-4 ml-5"> <img src="{{ asset('images/tomato.WEBP') }}" class="d-inline"style="max-height:30px;" ><p class="d-inline ml-4 ">tomato</p></div>
    <div> <p class="d-inline p-coust ml-5">weight</p> <p class="d-inline ml-4 p-coust">74 kg</p></div>
    <div class="mt-2 ml-5"> <p class="d-inline p-coust">Quantity</p> <p class="d-inline ml-4 p-coust">32 u</p></div></div>
   
    
@endsection
