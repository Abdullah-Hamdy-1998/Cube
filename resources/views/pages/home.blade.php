@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <a href="{{ route('users.create') }}">
        <div class="card  inventory-card-coust border-radius-coust home-card-coust mr-4 col-3 d-inline-block"
            style="max-width:260px; min-width:260px;">
            <div class="card-body home-coust  text-center ">
                <img src="{{ asset('images/person-add.svg') }}"class=" home-icon-coust">
                <p class="mb-0">Add a User</p>
            </div>
        </div>
    </a>
    <a href="{{ route('shipments.create') }}">
        <div class="card  inventory-card-coust border-radius-coust  mr-4 col-3 d-inline-block"
            style="max-width:260px; min-width:260px;">
            <div class="card-body home-coust text-center ">
                <img src="{{ asset('images/shopping-bag.svg') }}"class=" home-icon-coust">
                <p class="mb-0">New Shipment</p>
            </div>
        </div>
    </a>
    @can('read-shipments')
        <div class="card border-radius-coust">
            <div class="card-body table-margin-coust">
                <a href="{{ route('shipments.index') }}" class="float-right text_anchor">All Shipments</a>
                <h5 class="m-0 mb-4">Leatest
                    Shipments</h5>

                <table id="datatable-buttons" class="table table-striped mt-3 text-center bitable-bordered dt-responsive nowrap"
                    style=" border-bottom:1px solid #F4F4F4; width: 100%; background-color: white;">
                    <thead>
                        <tr>
                            <th class="th-table-coust">ID</i></th>
                            <th class="th-table-coust"> Shipment Type</i></th>
                            <th class="th-table-coust">Cus.Sup.</i></th>
                            <th class="th-table-coust">Description</i></th>
                            <th class="th-table-coust">Modified</i></th>
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
                                <td><a href="{{ route('shipments.show', $shipment) }}"><i class="eva eva-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    @endcan


    @can('read-reports')
        <div class="card border-radius-coust ">
            <div class="card-body table-margin-coust">
                <a>
                    <a href="{{ route('reports') }}" class="float-right text_anchor">All Activities</a>
                </a>
                <h5 class="m-0 mb-4">Recent Activities</h5>
                <table id="datatable-buttons" class="table table-striped mt-3 text-center bitable-bordered dt-responsive nowrap"
                    style=" border-bottom:1px solid #F4F4F4; width: 100%; background-color: white;">
                    <thead>
                        <tr>
                            <th class="th-table-coust">ID</th>
                            <th class="th-table-coust">User</th>
                            <th class="th-table-coust">Module</th>
                            <th class="th-table-coust">Action</th>
                            <th class="th-table-coust">Data</th>
                            <th class="th-table-coust">Logged At</th>
                        </tr>
                    </thead>
                    <tbody>
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

                    </tbody>
                </table>
            </div>
        </div>
    @endcan
@endsection
@section('plugins')
@endsection
