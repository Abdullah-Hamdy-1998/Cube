@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
    <div class="card border-radius-coust">
        <div class="card-body ">
            @can('write-shipments')
                <a href="{{ route('shipments.create') }}"> <button type="button"
                        class="btn btn-primary border-radius-coust ml-3 col-1 waves-effect waves-light float-right"><i
                            class="ti-plus"> </i> New</button></a>
            @endcan

            <table id="datatable-buttons" class="table table-striped mt-3 text-center bitable-bordered dt-responsive nowrap"
                style=" border-bottom:1px solid #F4F4F4; width: 100%; background-color: white;">
                <thead class="">
                    <tr>
                        <th class="th-table-coust">ID<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust"> Shipment Type<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Cus.-Sup.<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Description<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th class="th-table-coust">Modified<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp

                    @foreach ($shipments as $shipment)
                        <tr class="row{{ $shipment->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $shipment->shipmentInfo->type }}</td>
                            <td>{{ $shipment->shipmentable->name ?? '' }}</td>
                            <td>{{ $shipment->description }}</td>
                            <td>{{ $shipment->updated_at }}</td>
                            <td><a href="{{ route('shipments.show', $shipment) }}"><i class="eva eva-eye"></i></a></td>
                        </tr>
                    @endforeach

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
