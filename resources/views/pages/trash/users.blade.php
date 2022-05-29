@extends('layouts.default')
@section('title')
    Trash
@endsection
@section('content')
    <div class="card border-radius-coust">
        <div class="card-body ">
            <button type="button"
                class="btn btn-primary all-buttons-coust  border-radius-coust col-1 table-coust waves-effect waves-light float-right"><i
                    class="ti-plus"> </i> New</button>
            <table id="datatable-buttons" class="table  mt-3 dt-responsive nowrap"
                style=" width: 100%; background-color: white;">
                <thead style="background-color: #f3f3f3 ; ">
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

                    @foreach ($deletedUsers as $user)
                        <tr class="row{{ $user->id }}">
                            <td>
                                <div class="form-check ">
                                    <input type="checkbox" class="form-check-input checkbox-coust table-checkbox" name=""
                                        id="" value="checkedValue">
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
                                <div class="d-flex">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-primary data_btn mr-2 border-radius-coust"
                                            data-id="{{ $user->id }}" data-route="user-restore"><i
                                                class="eva eva-trash-outline"></i></button>
                                    </div>
                                    <div class="d-inline">
                                        @can('write-users')
                                            <button class="btn btn-danger data_btn border-radius-coust"
                                                data-id="{{ $user->id }}" data-route="user-delete"><i
                                                    class="eva eva-trash"></i></button>
                                        @endcan
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('jquery')
    <script>
        $(document).on('click', '.btn', function() {
            var id = $(this).data('id');
            var route = $(this).data('route');
            var method = '';

            if (route == 'user-delete') {
                method = 'DELETE';
            } else if (route == 'user-restore') {
                method = 'POST';
            }

            $.ajax({
                url: route,
                type: 'POST',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}",
                    "_method": method
                },
                success: function() {
                    $('.row' + id).remove();
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
    <script src="{{ asset('plugins/datatables/selected_delete.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('pages/datatables.init.js') }}"></script>
@endsection
