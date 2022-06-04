@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            @can('write-data')
                <a href="{{ route('items.create') }}">
                    <button type="button" class="btn btn-primary waves-effect waves-light float-right"><i class="fa fa-plus"
                            style="margin:5px; font-size:14px;"></i> Add</button></a>
            @endcan

            <table id="datatable-buttons" class="table table-striped mt-3 text-center bitable-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                <thead class="">
                    <tr >
                    <th></th>
                    <th  class="th-table-coust">iD<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    <th  class="th-table-coust"> Avatar<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    <th  class="th-table-coust">Name<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    <th  class="th-table-coust">Description<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    <th  class="th-table-coust">Modified<i class="fas fa-sort-alpha-down  mt-1"></i></th>
                    </tr>
                    </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($items as $item)
                        <tr class="row{{ $item->id }}">
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                </div>
                            </td>
                            <td>{{ ++$i }}</td>
                            <td> <img src="{{ asset('images/avatars/' . $item->avatar) }}" alt="item"
                                    class="rounded-circle img-fluid avater-table-coust">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>

                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <a href="{{ route('items.show', $item) }}"> <button type="button"
                                                class="btn btn-primary"><i class="eva eva-eye-outline"></i></button></a>
                                        <button type="submit" class="btn btn-danger delete_btn"
                                            data-id="{{ $item->id }}" data-route="item-delete"><i
                                                class="eva eva-trash"></i></button>
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

@section('jquery')
    <script>
        $(document).on('click', '.delete_btn', function(e) {

            e.preventDefault();
            var id = $(this).data("id");
            var route = $(this).data("route");

            $.ajax({
                type: "POST",
                url: route,
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                    _method: "DELETE",
                },
                success: function() {
                    $('.row' + id).remove();
                },
            });
        });
    </script>
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
