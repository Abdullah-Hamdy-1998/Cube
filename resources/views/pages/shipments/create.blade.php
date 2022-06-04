@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
    <style>
     

    </style>


    <div class="card shadow-sm pt-3 pl-2 " style="border-radius:10px;">
        <form class=" text-capitalize">
            <div class="form-group mr-5 d-inline-block col-5 w-50 ">
                <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
                <div class="pl-0 col-12 form-floating  ">
                        
                    <select  id="dropdown1" value="default" class="form-select mb-4 field-coust" >
                        <option class=" field-label"value="" disabled selected>Select</option>
                        @foreach ($shipmentTypes as $shipmentType)
                        <option value="{{ $shipmentType->id }}">{{ $shipmentType->type }}</option>
                    @endforeach
                    <option>aya</option>

                    </select> 
                    <label>Shipment Type</label>
                </div>

            </div>
            <div class="pl-0 d-inline-block ml-5 col-5 form-floating  ">
                        
                <select  id="dropdown2" value="default" class="form-select mb-4 field-coust" >
                    <option class=" field-label"value="default" disabled selected>Select</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                <option>aya</option>

                </select> 
                <label> Customer /Supplier</label>
            </div>
            <div class="col-5">
            <div class=" mb-2 pb-4 pl-0 form-floating col-12">
                <input type="text" class="form-control field-coust " id="text" placeholder="Description"  id="floatinginput type=" text"">
                <label class="  field-label">Description</label>
            </div></div>
        </form>
    </div>
    </div>
    <div class="card" style="border-radius:10px;">
        <div class="card-body pt-0 shadow-sm">
            <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
            <form>
                <table class="table mt-3 text-center bitable-bordered dt-responsive nowrap" id="table" >
                    <thead>
                        <tr>
                            
                            <th class=" text-center " scope="col">ID</th>
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
                <label class="pb-1 label-coust mb-4" style="font-size: 19px;">Add shipment item</label>
                <form class=" text-capitalize" onchange="validate();" action="" method="post" id="submitform">
                    <div class="pl-0 col-12 form-floating  ">
                        
                            <select  id="submitagain" class="form-select mb-4 field-coust" >
                                <option class=" field-label field-label"value="" disabled selected>Select</option>
                                @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                            </select> 
                            <label class="field-label">Shipment Item</label>
                        </div>

                      <div class="pl-0 mt-4 mb-4 form-floating col-12">
                        <input type="number" class="form-control" placeholder="Weight" style="border-radius: 12px  " 
                            id="WSum">
                            <label class="field-label">Weight</label>
                    </div>

                    <div class=" pl-0  pb-4 form-floating col-12">
                        <input type="number" class="form-control" placeholder="Quantity" style="border-radius: 12px  " 
                            id="Quantity">
                            <label class="field-label">Quantity</label>
                    </div>
                    <button type="button" onclick="table_again();" id="submit" disabled=true
                        style="border-radius: 12px ;box-shadow: none;"
                        class="btn  col-2 dropdown-coust ml-1 add-button-coust mb-4">Add</button>
                </form>
            </div>
            <div class="col-6 pl-0">
                <button onclick="json_obj()" type="submit" style="border-radius: 12px ;box-shadow: none;" id="submi_final"
                    disabled=true class="btn  col-4 d-inline  add-button-coust ">Add</button>
                <button type="button" style="border-radius: 12px ;box-shadow: none;"
                    class="btn btn-danger   ml-2  col-4 d-inline   ">Cancel</button>

            </div>
        </div>
        <div class="d-inline-block col-6 ml-auto">
            <div class="card shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <div>
                    <label class="label-coust mb-4 pb-1 label-coust" style="font-size: 19px;">Weight Point</label>
                    <div class="form-check  form-check-inline ml-3 float-right">
                        <input type="checkbox" id="socket" switch="none" onclick="toggleSocket();" />
                        <label for="socket" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>
                    </div>
                </div>

                <div class=" f-flex form-floating pl-0 pb-4 form-floating col-12">
                    <input type="text" class="form-control" placeholder="Unknown" id="floatinginput" id=" connect"
                        type="text" style="border-radius: 12px;"></input type="text"><button class="button-coust"
                        style="height:70%; box-shadow: none;color:white;background-color:#6c757d;Top:1px;cursor: pointer"><i
                            class="fas fa-redo"></i></button>
                            <label class="field-label">Unknown</label>
                </div>
                <div class=" d-flex pl-0 form-floating pb-4 form-floating col-12 ">
                    <input type="number" class="form-control" style="height: 70px; border-radius: 12px;"
                        placeholder="Weight" id="myInput" id="AddedWeight" style="border-radius: 12px;"><button
                        class="ml-0 button-coust " style="box-shadow: none;height: 70px;  ">Kg</button>
                        <label class="field-label"> Weight</label>
                </div>
                <h5 class=" label-coust pt-4 pb-4 d-inline " style="">Cumulative Weights 
                <button onclick="Add_Sum();" type="button" style="border-radius: 12px ;box-shadow: none;"
                class="btn ml-auto  col-2 d-inline  add-button-coust float-right">Add</button></h5>

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
