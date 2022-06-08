@extends('layouts.default')
@section('title')
    Shipments Info
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            @can('write-data')
                <a href="{{ route('infos.create') }}"> 
                    <button type="button" class="btn btn-primary border-radius-coust ml-3 col-1 waves-effect waves-light float-right"><i class="ti-plus"> </i> Add</button>  </a>         

            @endcan
            <table id="datatable-buttons" class="table mt-3 text-center bitable-bordered dt-responsive nowrap""
                        style=" border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th></th>
                        <th class="th-table-coust">ID <i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Type<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Name<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Modified<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust"></th>
                    </tr>
                </thead>


                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($shipments_info as $shipment_info)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                </div>
                            </td>
                            <td>{{ ++$i }}</td>
                            <td>{{ $shipment_info->type }}</td>
                            <td>{{ $shipment_info->updated_at }}</td>
                            <td>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <a href="{{ route('infos.show', $shipment_info) }}"> <button type="button"
                                                class="btn btn-primary"><i class="eva eva-eye-outline"></i></button></a>
                                        @can('write-data')
                                            <form action="{{ route('infos.destroy', $shipment_info) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="eva eva-trash"></i></button>
                                            </form>
                                        @endcan

                                    </div>
                                </div>
                            </td>
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
