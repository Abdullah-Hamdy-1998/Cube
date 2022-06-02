@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
    <style>
        input[type=checkbox] {
            transform: scale(1.5);
        }

        button {
            background-color: #3B86FF;
            color: white;
            font-size: 16px;
        }

        button:disabled {
            background-color: #949595;
        }

        tr {
            background-color: white
        }

        th {
            background-color: #f3f3f3
        }

        .hover-table:hover {
            background-color: antiquewhite
        }

        ;

        .placeholder-coust {
            font-weight: normal
        }

        .label-coust {
            color: #656565
        }

        .placeholder-coust {
            color: #949595;
            position: absolute;
            left: 16px;
            top: 9px
        }

        .button-coust {
            position: absolute;
            right: 16px;
            border-radius: 12px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
            background-color: #E9ECEF;
            border-color: transparent;
            font-size: 20px;
            cursor: text;
            color: #384044
        }

        ;

        form {
            position: relative;
        }

        input:focus~label {
            transform: translateY(-10px);
            background-color: white;
            left: 11px;
            top: .5px;
            font-size: 12.5px;
            padding-left: 5px;
            padding-right: 5px;
            color: #3B86FF;
        }

        input:valid~label {
            transform: translateY(-10px);
            background-color: white;
            top: .5px;
            font-size: 12.5px;
            padding-left: 5px;
            padding-right: 5px;
            left: 11px;
        }

        .placeholder-coustt {
            background-color: white;
            position: absolute;
            bottom: 19.5px;
            font-size: 12.5px;
            padding-left: 5px;
            padding-right: 5px;
            left: 28px;
        }

        .placeholder-couust {
            bottom: 35px;
        }

        .div-coust {
            display: flex;
        }

    </style>


    <div class="card shadow-sm pt-3 pl-2 " style="border-radius:10px;">
        <form class=" text-capitalize">
            <div class="form-group  d-inline-block col-5 w-50 ">
                <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
                <div class="div-coust">
                    <label class="placeholder-coustt placeholder-couust">shipment type</label>
                </div>
                <select id="dropdown1" class="form-control  select2 mb-3 " required="" value="default"
                    style=" border-radius: 10px  ">
                    <option value="" disabled selected style="min-height: 30%">Select </option>
                    @foreach ($shipmentTypes as $shipmentType)
                        <option value="{{ $shipmentType->id }}">{{ $shipmentType->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group  d-inline-block col-5 ml-5 ">
                <div class="div-coust">
                    <label class="placeholder-coustt">coustmer/supplier</label>
                </div>
                <select id="dropdown2" class="form-control select2 " disabled style="border-radius: 12px   ">
                    <option disabled selected value="default">Select </option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                    </optgroup>
                </select>
            </div>
            <div class=" div-coust mb-2 pb-4 form-floating col-5">
                <input type="text" class="form-control pl-3" id="text" required="" id="floatinginput type=" text""
                    style="border-radius: 12px;"><label class=" placeholder-coust  ml-3 ">Description</label>
            </div>
        </form>
    </div>
    </div>
    <div class="card" style="border-radius:10px;">
        <div class="card-body pt-0 shadow-sm">
            <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
            <form>
                <table class="table table-coust" id="table" style=" border-top-style: hidden">
                    <thead>
                        <tr>

                            <th class="pl-5 " scope="col">ID</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Name</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Modified</th>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="d-inline-block col-6  m-0">
            <div class="card   shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <label class="pb-1 label-coust" style="font-size: 19px;">Add shipment item</label>
                <form class=" text-capitalize" onchange="validate();" action="" method="post" id="submitform">
                    <div class="pl-0 col-12   ">
                        <div class="div-coust">
                            <label class="placeholder-coustt " style="left:12px;">shipment item</label>
                        </div>
                        <select id="submitagain" class="form-control select2 mb-4  " style="border-radius: 12px  ">
                            <option value="" disabled selected> Select </option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="div-coust pl-0  pb-4 form-floating col-12">
                        <input type="number" class="form-control" style="border-radius: 12px  " placeholder="weight"
                            id="WSum">
                    </div>
                    <div class=" pl-0  pb-4 form-floating col-12">
                        <input type="number" class="form-control" style="border-radius: 12px  " placeholder="Quantity"
                            id="Quantity">
                    </div>
                    <button type="button" onclick="table_again();" id="submit" disabled=true
                        style="border-radius: 12px ;box-shadow: none;"
                        class="btn  col-2 dropdown-coust ml-1  mb-4">Add</button>
                </form>
            </div>
            <div class="col-6 pl-0">
                <button onclick="json_obj()" type="submit" style="border-radius: 12px ;box-shadow: none;" id="submi_final"
                    disabled=true class="btn  col-4 d-inline   ">Add</button>
                <button type="button" style="border-radius: 12px ;box-shadow: none;"
                    class="btn btn-danger  ml-2  col-4 d-inline   ">Cancel</button>

            </div>
        </div>
        <div class="d-inline-block col-6 ml-auto">
            <div class="card shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <div>
                    <label class="label-coust pb-1 label-coust" style="font-size: 19px;">Weight Point</label>
                    <div class="form-check form-check-inline ml-3 float-right">
                        <input type="checkbox" id="socket" switch="none" onclick="toggleSocket();" />
                        <label for="socket" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>
                    </div>
                </div>

                <div class=" f-flex pl-0 pb-4 form-floating col-12">
                    <input type="text" class="form-control" placeholder="Unknown" id="floatinginput" id=" connect"
                        type="text" style="border-radius: 12px;"></input type="text"><button class="button-coust"
                        style=" box-shadow: none;color:white;background-color:#6c757d;Top:1px;cursor: pointer"><i
                            class="fas fa-redo"></i></button>
                </div>
                <div class=" d-flex pl-0 pb-4 form-floating col-12 ">
                    <input type="number" class="form-control" style="height: 70px; border-radius: 12px;"
                        placeholder="Weight" id="myInput" id="AddedWeight" style="border-radius: 12px;"><button
                        class="ml-0 button-coust " style="box-shadow: none;height: 70px;  ">Kg</button>
                </div>
                <button onclick="Add_Sum();" type="button" style="border-radius: 12px ;box-shadow: none;"
                    class="btn ml-auto  col-2 d-inline  ">Add</button>
                <label class=" label-coust pt-4 pb-4 d-inline " style="font-size: 19px;">Cumulative Weights </label>
                <table class="table " id="fetch" style="border-top-style: hidden">
                    <thead style="background-color: #f3f3f3">
                        <tr>
                            <th class=" pl-5" scope="col">No</th>
                            <th scope="col">Weight</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>

                    </tbody>
                </table>


            </div>

        </div>
    </div>
@endsection
@section('plugins')
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/disable_dropdown.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('plugins/datatables/table_data.js') }}"></script>
    <!--new file -->
    <script src="{{ asset('plugins/datatables/table_create.js') }}"></script>
    <!--new file -->
    <script src="{{ asset('plugins/datatables/shipmets_socket.js') }}"></script>
    <!--new file -->
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
