@extends('layouts.default')
@section('title')
    Trash
@endsection
@section('content')
<div class="card border-radius-coust" >
<div class="card-body ">
  <button type="button" class="btn btn-primary all-buttons-coust  border-radius-coust col-1 table-coust waves-effect waves-light float-right"><i class="ti-plus"> </i> New</button>
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
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('pages/datatables.init.js') }}"></script>


@endsection  