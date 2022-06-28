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
    <div class="card border-radius-coust">
        <div class="card-body table-margin-coust">
            <a>
                <p class="float-right text_anchor">View All</p>
            </a>
            <table id="datatable-buttons"onload="setId();" class="table table-coust mt-3 text-center dt-responsive nowrap "
                style=" width: 100%; ">
                <h5 class="m-0 mb-4">Leatest Shipments</h5>
                <thead class="thead-coust">
                    <tr>
                        <th class="th-table-coust">ID<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Shipment Type<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Cus./Sup.<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Description<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Modified<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>



    <div class="card border-radius-coust ">
        <div class="card-body table-margin-coust">
            <a>
                <p class="float-right text_anchor">View All</p>
            </a>
            <h5 class="m-0 mb-4">Recent Activities</h5>
            <table id="datatable-buttons"onload="setId();" class="table table-coust mt-3 text-center dt-responsive nowrap "
                style=" width: 100%; ">
                <thead class="thead-coust">
                    <tr>
                        <th class="th-table-coust  ">ID<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust"> Shipment Type<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Cus./Sup.<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Description<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th class="th-table-coust">Modified<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('plugins')
@endsection
