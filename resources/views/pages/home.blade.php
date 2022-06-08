@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
<div class="row align-items-start mt-0  ml-0">
    <div class="home-card-coust  col-3 pl-0 mr-1 "><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2 d-inline" ><img src="{{ asset('images/person-add.svg') }}" class="mt-4 home-icon-coust">   <br>Add User</div></div></div>
    <div class="home-card-coust  col-3 mr-1"><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2 d-inline" ><img src="{{ asset('images/shopping-bag.svg') }}" class="mt-4 home-icon-coust"><br>New Shipment</div></div></div>
    <div class="home-card-coust  col-3 mr-1"><div class="card p-0  card-body col-12 border-radius-coust home-coust text-center "><div class=" mb-4 mt-2  d-inline" ><img src="{{ asset('images/smartphone.svg') }}" class="mt-4 home-icon-coust"><br>Weight Point</div></div></div>
</div>
<div class="card border-radius-coust" >
    <div class="card-body table-margin-coust">
        <a><p class="float-right">view all</p></a>
        <table id="datatable-buttons" class="table  mt-3 dt-responsive nowrap" style=" width: 100%; background-color: white;">
        <thead class="">
        <tr >
        <th></th>
        <th>iD</th>
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
