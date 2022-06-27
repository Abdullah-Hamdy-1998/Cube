@extends('layouts.default')
@section('title')
    Reports
@endsection
@section('content')
    <div class="card card-body border-radius-coust">
        <table id="datatable-buttons" class="table   dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%; background-color: white;">
            <thead style="background-color: #f3f3f3 ; ">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Module</th>
                    <th>Action</th>
                    <th>Data</th>
                    <th>Logged At</th>
                </tr>
            </thead>

            @php
                $i = 0;
            @endphp
            @foreach ($logs as $log)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $log->user->name }}</td>
                    <td>
                        @if ($log->loggable_type == 'App\Models\Item')
                            Items
                        @elseif ($log->loggable_type == 'App\Models\Shipment')
                            Shipments
                        @endif
                    </td>
                    <td>
                        @if ($log->action == 'Create')
                            <span class="badge badge-pill badge-primary">{{ $log->action }}</span>
                        @elseif ($log->action == 'Update')
                            <span class="badge badge-pill badge-secondary">{{ $log->action }}</span>
                        @elseif ($log->action == 'Delete')
                            <span class="badge badge-pill badge-danger">{{ $log->action }}</span>
                        @endif
                    </td>
                    <td>{{ $log->data }}</td>
                    <td>{{ $log->created_at }}</td>
                </tr>
            @endforeach
            <tbody>
            </tbody>
        </table>
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
