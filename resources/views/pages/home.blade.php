@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
<style>.text_anchor:hover {text-decoration: underline;}
        .text_anchor{color:#3B86FF !important;}
</style>

<div class="row align-items-start ml-1">
    <div class="home-card-coust col-3  mr-1 "><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2 d-inline" ><img src="{{ asset('images/person-add.svg') }}" class="mt-4 home-icon-coust">   <br>Add User</div></div></div>
    <div class="home-card-coust col-3 mr-1"><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2 d-inline" ><img src="{{ asset('images/shopping-bag.svg') }}" class="mt-4 home-icon-coust"><br>New Shipment</div></div></div>
    <div class="home-card-coust col-3 mr-1"><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2  d-inline" ><img src="{{ asset('images/smartphone.svg') }}" class="mt-4 home-icon-coust"><br>Weight Point</div></div></div>
</div>
<div class="card border-radius-coust" >
    <div class="card-body table-margin-coust"style="margin-top:-2px">
    <a ><p class="float-right text_anchor"  >View All</p></a>
    <table id="datatable-buttons"onload="setId();" class="table table-coust mt-3 text-center dt-responsive nowrap " style=" width: 100%; ">
    <thead class="thead-coust">
    <tr  >
    <th  class="th-table-coust  ">ID<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust"> Shipment Type<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">Cus.-Sup.<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">Description<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">Modified<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    </tr>
    </thead>

    <tbody>
    </tbody>
</table></div></div>
    
@endsection
@section('plugins')

@endsection 
