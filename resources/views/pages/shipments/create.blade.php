@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
  <!--  <style>
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

    </style>-->


    <div class="card shadow-sm pt-3 pl-2 " style="border-radius:10px;">
        <form class=" text-capitalize">
            <div class="form-group  d-inline-block col-5 w-50 ">
                <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
                <div class="div-coust">
                </div>
                <div class="selectField"> 
                <select id="dropdown1" class="form-control  select2 mb-3 " required="" value="default"
                    style=" border-radius: 10px  ">
                    <option value="" disabled selected style="min-height: 30%">Select </option>
                    <option>aya</option>
                    @foreach ($shipmentTypes as $shipmentType)
                        <option value="{{ $shipmentType->id }}">{{ $shipmentType->type }}</option>
                    @endforeach
                </select>
            
                <label >Select Shipment Type</label>
            </div></div>
            <div class="form-group  d-inline-block col-5 ml-5 ">
                <div class="div-coust">
                    <label class="placeholder-coustt">coustmer/supplier</label>
                </div>
                <div class="selectField">
                <select id="dropdown2" class="form-control  select2 " disabled style="border-radius: 12px   ">
                    <option disabled selected value="default">Select </option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                    <option>aya</option>
                </optgroup>

                </select>
                <label >coustmer/supplier</label>
            </div></div>
            <div class=" div-coust inputField mb-4  form-floating col-5">
                <input type="text" class="form-control " id="text" required placeholder=" " id="floatinginput type=" text""
                    style="border-radius: 12px;">
                    <label >Description</label>
            </div>
        </form>
    </div>
    </div>
    <div class="card border-radius-coust">
        <div class="card-body pt-0 shadow-sm">
            <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
            <form>
                <table class="table  text-center bitable-bordered dt-responsive nowrap" id="table" >
                    <thead>
                        <tr>
                            
                            <th class=" text-center " scope="col">ID<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                            <th scope="col">Avatar<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                            <th scope="col">Name<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                            <th scope="col">Weight<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                            <th scope="col">Quantity<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>
                            <th scope="col">Modified<i class="fas fa-sort-alpha-down ml-2  mt-1"></i></th>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </form>
        </div>
    </div>    <div class="row align-items-start">
        <div class="d-inline-block col-6  m-0">
            <div class="card   shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <label class="pb-1 label-coust" style="font-size: 19px;">Add shipment item</label>
                <form class=" text-capitalize" onchange="validate();" action="" method="post" id="submitform">
                    <div class="pl-0 col-12   ">
                        <div class="div-coust">
                        </div>
                        <div class="selectField">
                        <select id="submitagain" class="form-control  select2 mb-4  " style="border-radius: 12px  ">
                            <option value="" disabled selected> Select </option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <label  >shipment item</label>
                    </div></div>

                    <div class="div-coust pl-0  mb-4 inputField col-12">
                        <input type="number" class="form-control border-radius-coust"  required placeholder=" "
                            id="WSum">
                            <label>Weight</label>
                    </div>
                    <div class=" pl-0  mb-4 inputField col-12">
                        <input type="number" class="form-control border-radius-coust" required placeholder=" "
                            id="Quantity">
                            <label>Quantity</label>

                    </div>
                    <button type="button" onclick="table_again();" id="submit" disabled=true
                        class="btn  col-2 dropdown-coust  ml-1 border-radius-coust  mb-4 all-buttons-coust">Add</button>
                </form>
            </div>
            <div class="col-6 pl-0">
                <button onclick="json_obj()" type="submit"  id="submi_final"
                    disabled=true class="btn  col-4 d-inline border-radius-coust all-buttons-coust  ">Add</button>
                <button type="button" class="btn btn-danger border-radius-coust  ml-2  col-4 d-inline   ">Cancel</button>

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

               <!-- <div class=" f-flex pl-0 inputField mb-4   col-12">
                    <input type="text" class="form-control " required placeholder=" " id="floatinginput" id=" connect"
                        type="text" ><label>Scale Status</label><button class="input-button"><i
                            class="fas fa-redo"></i></button>
                     
                </div>-->
                <div class=" d-flex pl-0 mb-4  inputField col-12 ">
                    <input type="text" class="form-control  border-radius-coust" placeholder=" " required  > <label>Weight</label><button class="mr-3  border-radius-coust input-button" style="background-color: #536270">
                        <img src="{{ asset('images/refresh-outline.svg') }}" height="30" alt="logo" class="logo mx-auto "style="filter:invert(1)">
                    </button>
                       
                </div>

                <div class=" d-flex pl-0 mb-4  inputField col-12 ">
                    <input type="number" class="form-control text-center border-radius-coust" style="height: 70px;font-size:250%;font-family: 'Orbitron', sans-serif;"
                        placeholder=" " required id="myInput" id="AddedWeight" > <label>Weight</label><button class="mr-3 border-radius-coust input-button" > Kg</button>
                       
                </div>
                <label class=" label-coust all pt-4 pb-4 d-inline  " style="font-size: 19px;">Cumulative Weights 
                    <button onclick="Add_Sum();" type="button" class="btn ml-auto float-right mr-3 border-radius-coust all-buttons-coust col-2 d-inline  ">Add</button>
                </label>
                <table class="table " id="fetch" style="border-top-style: hidden">
                    <thead style="background-color: #f3f3f3">
                        <tr>
                            <th class=" text-center" scope="col">No</th>
                            <th scope="col" class="text-center" >Weight</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
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