@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
<div class="card shadow-sm pt-3 pl-2 " style="border-radius:10px;">
    <form class=" text-capitalize">
        <div class="form-group  d-inline-block col-5 w-50 ">
            <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
            <div class="div-coust">
            </div>
            <div class="selectField">
                <select id="shipment_type" class="form-control  select2 mb-3 " 
                    style="border-radius: 10px">
                    <option style="min-height: 30%" selected >Select </option>
                    <option>aya</option>

                </select>

                <label>Select Shipment Type</label>
            </div>
        </div>
        <div class="form-group  d-inline-block col-5 ml-5 ">
            <div class="div-coust">
                <label class="placeholder-coustt">customer/supplier</label>
            </div>
            <div class="selectField">
                <select id="shipmentable" class="form-control  select2" style="border-radius: 12px" >
                    <option  selected value="default">Select</option>
                    <option>aya</option>

                </select>
                <label>customer/supplier</label>
            </div>
        </div>
        <div class=" div-coust inputField mb-4  form-floating col-5">
            <input type="text" class="form-control " id="description" placeholder=" " style="border-radius: 12px;" required>
            <label>Description</label>
        </div>
    </form>
</div>
</div>
<div class="card border-radius-coust">
    <div class="card-body pt-0 ">
        <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
        <table class="table text-center nowrap" id="shipment_items">
            <thead>
                <tr>
                    <th class=" text-center " scope="col">#</th>
                    <th scope="col">Avatar<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    <th scope="col">Name<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    <th scope="col">Weight<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    <th scope="col">Quantity<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    <th scope="col">Modified<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>
    </div>
    
</div>
<button type="button"  class="btn  col-1 dropdown-coust  ml-1 mr-3 border-radius-coust  mb-4 all-buttons-coust">Add</button>
<button type="button"  class="btn   btn-danger col-1 dropdown-coust  ml-1 border-radius-coust  mb-4 ">Cancel</button>

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
