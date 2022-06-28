@extends('layouts.default')
@section('title')
    Inventory
@endsection
@section('content')
    <div class="card border-radius-coust">
        <div class="card-body "style="min-width:100px;">
            <h5 class="mb-4">Item Stock</h5>
            <div class="text-center mb-3">
                <img src="{{ asset('images/avatars/' . $item->avatar) }}"style="max-height:40px;"class="d-inline">
                <p class="ml-5 d-inline font-weight-bold paragraph-coust mr-5" style="font-size: 18px !important;">
                    {{ $item->name }}</p>
                <p class="ml-5 d-inline  paragraph-coust ">Weight</p>
                <p class="ml-5 d-inline  paragraph-coust mr-5">{{ $item->weight }} Kg</p>
                <p class="ml-5 d-inline  paragraph-coust ">Quantity</p>
                <p class="ml-5 d-inline  paragraph-coust ">{{ $item->quantity }} U</p>
            </div>
        </div>
    </div>
    </div>
    <div class="card border-radius-coust">
        <div class="card-body ">
            <a href="{{ route('shipments.create') }}"> <button type="button"
                    class="btn btn-primary border-radius-coust col-1  waves-effect waves-light float-right"><i
                        class="ti-plus">
                    </i> New</button></a>
            <table id="datatable-buttons" class="table mt-3 text-center bitable-bordered dt-responsive nowrap""
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th class="th-table-coust">ID <i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Shipment Type <i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Cus.-Sup. <i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Description <i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Created <i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @foreach ($shipments as $shipment)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $shipment->shipmentInfo->type }}</td>
                        <td>{{ $shipment->shipmentable->name }}</td>
                        <td>{{ $shipment->description }}</td>
                        <td>{{ $shipment->created_at }}</td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
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
