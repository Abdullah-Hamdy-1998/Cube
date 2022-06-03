@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
<div class="row align-items-start ml-1">
    <div class="home-card-coust  mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class=" mb-4 d-inline" ><img src="{{ asset('images/person-add.svg') }}" class="mt-4 home-icon-coust">   <br>     add user</div></div></div>
    <div class="home-card-coust  mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class=" mb-4 d-inline" ><img src="{{ asset('images/shopping-bag.svg') }}" class="mt-4 home-icon-coust"><br>new shipment</div></div></div>
    <div class="home-card-coust  mr-4"><div class="card p-0  card-body col-3 border-radius-coust home-coust text-center "><div class=" mb-4 d-inline" ><img src="{{ asset('images/smartphone.svg') }}" class="mt-4 home-icon-coust"><br>weight point</div></div></div>
</div>
<div class="card border-radius-coust" >
    <div class="card-body table-margin-coust"style="margin-top:-2px">
    <a ><p class="float-right">view all</p></a>
    <table id="datatable-buttons"onload="setId();" class="table table-striped mt-3 text-center bitable-bordered dt-responsive nowrap" style=" width: 100%; background-color: white;">
    <thead class="">
    <tr >
    <th></th>
    <th  class="th-table-coust">iD<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust"> shipment type<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">cus.-sup.<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">description<i class="fas fa-sort-alpha-down  mt-1"></i></th>
    <th  class="th-table-coust">modified<i class="fas fa-sort-alpha-down  mt-1"></i></th>
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
<script src="{{ asset('plugins/datatables/addclass.js') }}"></script>


<!-- Datatable init js -->
<script src="{{ asset('pages/datatables.init.js') }}"></script>
@endsection 
