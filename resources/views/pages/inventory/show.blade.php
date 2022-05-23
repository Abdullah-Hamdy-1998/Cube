@extends('layouts.default')
@section('title')
    Inventory
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body ">
      <h5 class="mb-4">item stock</h5>
    <div class="ml-5">
    <img src="{{ asset('images/tomato.WEBP') }}"style="max-height:30px;"class="ml-5  d-inline">
    <p class="ml-5 d-inline font-weight-bold paragraph-coust mr-5">tomato</p>
    <p class="ml-5 d-inline  paragraph-coust ">weight</p>   
    <p class="ml-5 d-inline  paragraph-coust mr-5">45 kg</p>
    <p class="ml-5 d-inline  paragraph-coust ">quantity</p>   
    <p class="ml-5 d-inline  paragraph-coust ">32 u</p>
    </div>
    </div>
    </div>
</div>
<div class="card border-radius-coust" >
<div class="card-body ">
  <button type="button" class="btn btn-primary border-radius-coust col-1 waves-effect waves-light float-right"><i class="ti-plus"> </i> New</button>
    <table id="datatable-buttons" class="table  mt-3 dt-responsive nowrap" style=" border-bottom:1px solid #F4F4F4; width: 100%; background-color: white;">
      <thead style="background-color: #f3f3f3 ; ">
      <tr>
          <th>id</th>
          <th>user</th>
          <th>module</th>
          <th>action</th>
          <th>data date</th>
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