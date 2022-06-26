@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
    <div class="card shadow-sm pt-3 pl-2 " style="border-radius:10px;">
        <form class=" text-capitalize">
            <div class="form-group  d-inline-block col-5 w-50 ">
                <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
                <div class="div-coust">
                </div>
                <div class="selectField">
                    <select id="shipment_type" class="form-control  select2 mb-3 " required="" value="default"
                        style="border-radius: 10px">
                        <option style="min-height: 30%" selected disabled>Select </option>
                        @foreach ($shipmentTypes as $shipmentType)
                            <option value="{{ $shipmentType->id }}">{{ $shipmentType->type }}</option>
                        @endforeach

                    </select>

                    <label>Select Shipment Type</label>
                </div>
            </div>
            <div class="form-group  d-inline-block col-5 ml-5 ">
                <div class="div-coust">
                    <label class="placeholder-coustt">customer/supplier</label>
                </div>
                <div class="selectField">
                    <select id="shipmentable" class="form-control  select2" style="border-radius: 12px" disabled>
                        <option disabled selected value="default">Select</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}" data-type="customer">{{ $customer->name }}</option>
                        @endforeach
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}" data-type="supplier">{{ $supplier->name }}</option>
                        @endforeach

                    </select>
                    <label>customer/supplier</label>
                </div>
            </div>
            <div class=" div-coust inputField mb-4  form-floating col-5">
                <input type="text" class="form-control " id="description" placeholder=" " style="border-radius: 12px;"
                    disabled>
                <label>Description</label>
            </div>
        </form>
    </div>
    </div>
    <div class="card border-radius-coust">
        <div class="card-body pt-0 ">
            <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
            <table class="table text-center nowrap" id="shipment_items">
                <thead>
                    <tr>
                        <th class=" text-center " scope="col">#</th>
                        <th scope="col">Avatar<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th scope="col">Name<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th scope="col">Weight<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                        <th scope="col">Quantity<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="d-inline-block col-6  m-0">
            <div class="card   shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <label class="pb-1 label-coust" style="font-size: 19px;">Add shipment item</label>

                <div class="pl-0 col-12   ">
                    <div class="div-coust">
                    </div>
                    <div class="selectField">
                        <select id="items" class="form-control  select2 mb-4" style="border-radius: 12px;" disabled>
                            <option disabled selected> Select </option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        <label>shipment item</label>
                    </div>
                </div>

                <div class="div-coust pl-0  mb-4 inputField col-12">
                    <input type="text" class="form-control border-radius-coust" required placeholder=" " id="cum_weight"
                        disabled>
                    <label>Weight</label>
                </div>
                <div class=" pl-0  mb-4 inputField col-12">
                    <input type="text" class="form-control border-radius-coust" required placeholder=" " id="quantity"
                        disabled>
                    <label>Quantity</label>

                </div>
                <button type="button" onclick="insert_item();"
                    class="btn  col-2 dropdown-coust  ml-1 border-radius-coust  mb-4 all-buttons-coust">Add</button>
            </div>
            <div class="col-6">
                <button id="submit" class="btn  col-4 d-inline border-radius-coust all-buttons-coust  ">Add</button>
                <a href="{{ route('shipments.index') }}"> 
                    <button type="button"
                        class="btn btn-danger border-radius-coust  ml-2  col-4 d-inline">Cancel</button></a>
            </div>
        </div>
        <div class="d-inline-block col-6 ml-auto">
            <div class="card shadow-sm p-3 pl-4 pt-4 border-radius-coust">
                <div>
                    <label class="label-coust pb-1 label-coust" style="font-size: 19px;">Weight Point</label>
                    <div class="form-check form-check-inline ml-3 float-right">
                        <input type="checkbox" id="socket" switch="none" onclick="toggleSocket();" />
                        <label for="socket" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>
                    </div>
                </div>

                <div class=" d-flex pl-0 mb-4  inputField col-12 ">
                    <input type="text" class="form-control  border-radius-coust" placeholder=" " required disabled
                        id="socket_ip">
                    <label>Weight</label><button class="mr-3  border-radius-coust input-button"
                        style="background-color: #536270">
                        <img src="{{ asset('images/refresh-outline.svg') }}" height="30" alt="logo"
                            class="logo mx-auto " style="filter:invert(1)">
                    </button>

                </div>

                <div class=" d-flex pl-0 mb-4  inputField col-12 ">
                    <input type="text" class="form-control text-center border-radius-coust"
                        style="height: 70px;font-size:250%;font-family: 'Orbitron', sans-serif;" placeholder=" " required
                        id="socket_weight" disabled>
                    <label>Weight</label><button class="mr-3 border-radius-coust input-button">Kg</button>

                </div>
                <label class=" label-coust all pt-4 pb-4 d-inline  " style="font-size: 19px;">Cumulative Weights
                    <button onclick="calculate_cumulative_sum()" type="button"
                        class="btn ml-auto float-right mr-3 border-radius-coust all-buttons-coust col-2 d-inline">Add</button>
                </label>
                <table class="table text-center nowrap" id="cum_weights">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col" class="text-center">Weight</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr></tr>
                    </tbody>
                </table>


            </div>

        </div>
    </div>
@endsection
@section('jquery')
    <script>
        $(document).on('click', '#submit', function(e) {
            e.preventDefault();
            var shipment = getData();
            if (shipment.length > 0) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('shipments.store') }}",
                    data: {
                        shipment: JSON.stringify(shipment),
                        _token: "{{ csrf_token() }}",
                    },
                    success: function() {
                        window.location = '{{ route('shipments.index') }}'
                        alert("Shipment Created");
                    },
                });
            }
        });
    </script>
@endsection
@section('plugins')
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/enable_inputs.js') }}"></script>
    <!-- Insert Shipment Items -->
    <script src="{{ asset('plugins/datatables/shipment_items.js') }}"></script>
    <!-- Insert Cumulative Weights -->
    <script src="{{ asset('plugins/datatables/cumulative_weights.js') }}"></script>
    <!-- Socket -->
    <script src="{{ asset('plugins/datatables/socket.js') }}"></script>
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
    <!-- Create Shipment -->
    <script src="{{ asset('plugins/datatables/create_shipment.js') }}"></script>
@endsection
