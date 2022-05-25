@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
<div class="row align-items-start ml-1">
    <div class="home-card-coust ml-2 mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class="carddd d-inline" ><i class="ion-person-add mx-auto d-block home-icon-coust"></i>add user</div></div></div>
    <div class="home-card-coust ml-2 mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class="carddd d-inline" ><i class="ion-person-add mx-auto d-block home-icon-coust"></i>new shipment</div></div></div>
    <div class="home-card-coust ml-2 mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class="carddd d-inline" ><i class="ion-person-add mx-auto d-block home-icon-coust"></i>weight point</div></div></div>
    <div class="home-card-coust ml-2 mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class="carddd d-inline" ><i class="ion-person-add mx-auto d-block home-icon-coust"></i>weight point</div></div></div>
</div>
<div class="card border-radius-coust" >
    <div class="card-body ">
        <a><p class="float-right">view all</p></a>
        <table id="datatable-buttons" class="table  mt-3 dt-responsive nowrap" style=" width: 100%; background-color: white;">
        <thead style="background-color: #f3f3f3 ; ">
        <tr>
        <th></th>
        <th>id</th>
        <th>shipment type</th>
        <th>cus.-sup.</th>
        <th>description</th>
        <th>modified</th>
        </tr>
        </thead>
    
        <tbody>
        </tbody>
    </table></div></div>

@endsection
@section('plugins')
<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('pages/datatables.init.js') }}"></script>
@endsection 
