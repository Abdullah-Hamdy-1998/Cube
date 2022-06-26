@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
    <div class="card border-radius-coust">
        <div class="card-body"id="card-body">
            @can('write-users')
                <a href="{{ route('users.create') }}">
                    <button type="button"
                        class="btn btn-primary ml-3 all-buttons-coust  border-radius-coust col-1 table-coust waves-effect waves-light float-right"><i
                            class="ti-plus"> </i> Add</button></a>
            @endcan
            {{-- button danger --}}

            <button class="btn btn-danger float-right col-1" id="mdelete-button" style="display: none">Delete</button>
            <button  onclick="window.print()" class="btn btn-primary ml-3 all-buttons-coust  border-radius-coust col-1 table-coust waves-effect waves-light float-right" id="mdelete-button" >print</button>
            <table id="datatable-buttons" class="table mt-3 text-center bitable-bordered dt-responsive nowrap"
                         style=" border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th></th>
                        <th class="th-table-coust">ID <i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Avatar<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Name<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Job Title<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Phone<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Email<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust">Modified<i class="fas fa-sort-alpha-down ml-2 mt-1"></i></th>
                        <th class="th-table-coust"></th>
                    </tr>
                </thead>


                <tbody>
                    @php
                        $i = 0;
                    @endphp

                    @foreach ($users as $user)
                        <tr class="row{{ $user->id }}">
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-coust table-checkbox" name=""
                                        id="row-checkbox" value="{{ $user->id }}" style="display: none">
                                </div>
                            </td>
                            <td>{{ ++$i }}</td>
                            <td> <img src="{{ asset('images/avatars/' . $user->avatar) }}" alt="user"
                                    class="rounded-circle img-fluid avater-table-coust">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->job_title }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-link" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @can('read-users')
                                            <a class="dropdown-item" href="{{ route('users.show', $user) }}">
                                                <i class="eva eva-eye m-2"></i> View</a>
                                        @endcan
                                        @can('write-users')
                                            <a class="dropdown-item" href="{{ route('users.edit', $user) }}">
                                                <i class="eva eva-edit m-2"></i> Edit</a>
                                        @endcan
                                        @can('write-users')
                                            <a class="dropdown-item delete_btn" href="#" data-id="{{ $user->id }}"
                                                data-route="user-delete">
                                                <i class="eva eva-trash-2 m-2"></i> Delete</a>
                                        @endcan
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
                    _method: 'DELETE'

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
    <script src="{{ asset('plugins/datatables/multiple_delete.js') }}"></script>
    <!--new file -->
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('pages/datatables.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>

@endsection
