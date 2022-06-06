@extends('layouts.default')
@section('title')
    Reports
@endsection
@section('content')
<div class="card card-body "style="border-radius:10px;">
<table id="datatable-buttons" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; background-color: white;">
    <thead class="">
        <tr >
        <th></th>
        <th  class="th-table-coust">ID<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th  class="th-table-coust"> Shipment Type<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th  class="th-table-coust">Cus.-Sup.<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th  class="th-table-coust">Weight<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th  class="th-table-coust">Quantity<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th  class="th-table-coust">Modified<i class="fas fa-sort-alpha-down  mt-1"></i></th>
        <th></th>
        </tr>
        </thead>


    <tbody>
    </tbody>
</table></div>
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

