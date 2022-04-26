@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
    <a href="{{ route('suppliers.create') }}"> <button type="button"
            class="btn btn-primary waves-effect waves-light float-right">Add</button></a>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Delegate</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
        </thead>


        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                        </div>
                    </td>
                    <td>{{ ++$i }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->delegate }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->updated_at }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{ route('suppliers.show', $supplier) }}"> <button type="button"
                                        class="btn btn-primary"><i class="eva eva-eye-outline"></i></button></a>
                                <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="eva eva-trash"></i></button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
