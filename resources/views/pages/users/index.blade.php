@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
    <a href="{{ route('users.create') }}"> <button type="button"
            class="btn btn-primary waves-effect waves-light float-right">Add</button></a>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Job Title</th>
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
            @foreach ($users as $user)
                <tr class="userRow{{ $user->id }}">
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                        </div>
                    </td>
                    <td>{{ ++$i }}</td>
                    <td> <img src="{{ asset('images/avatars/' . $user->avatar) }}" alt="user"
                            class="rounded-circle img-fluid">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->job_title }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{ route('users.show', $user) }}"> <button type="button"
                                        class="btn btn-primary"><i class="eva eva-eye-outline"></i></button></a>
                                <button class="btn btn-danger delete_btn" data-id="{{ $user->id }}"
                                    data-route="user-delete/"><i class="eva eva-trash"></i></button>
                            </div>
                        </div>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
                success: function(data) {

                    $('.userRow' + id).remove();
                }

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
