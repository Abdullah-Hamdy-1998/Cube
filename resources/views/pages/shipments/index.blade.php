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

        .hover-table:hover~#checkbox {
            visibility: visible
        }

        #checkbox {
            visibility: hidden;
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
                <select id="myselect" class="form-control  select2 mb-3 " style=" border-radius: 10px  ">
                    <option style="min-height: 30%">Select </option>
                    <option value="">aya</option>
                    <option value="">mohammed</option>
                    <option value="">abdallah</option>

                    </optgroup>
                </select>
            </div>
            <div class="form-group  d-inline-block col-5 ml-5 ">
                <div class="div-coust">
                    <label class="placeholder-coustt">coustmer/supplier</label>
                </div>
                <select id="mytext" id="timeagain" class="form-control select2 " style="border-radius: 12px   ">
                    <option>Select </option>
                    <option value=""></option>
                    <option value=""></option>
                    </optgroup>
                </select>
            </div>
            <div class=" div-coust mb-2 pb-4 form-floating col-5">
                <input type="text" class="form-control pl-3" id="text" required="" id="floatinginput type=" text""
                    style="border-radius: 12px; "><label class=" placeholder-coust  ml-3 ">Description</label>
            </div>
        </form>
    </div>
    </div>
    <div class="card" style="border-radius:10px;">
        <div class="card-body pt-0 shadow-sm">
            <label class="label-coust pt-4 pb-4 " style="font-size: 19px; ">Shipment Items</label>
            <table class="table" id="fetchch" style=" border-top-style: hidden">
                <thead style="background-color: #f3f3f3 ; ">
                    <tr>

                        <th class="pl-5 " scope="col">ID</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Modified</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom hover-table ">
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="d-inline-block col-6  m-0">
            <div class="card   shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <label class="pb-1 label-coust" style="font-size: 19px;">Add shipment item</label>
                <form class=" text-capitalize">
                    <div class="pl-0 col-12   ">
                        <div class="div-coust">
                            <label class="placeholder-coustt " style="left:12px;">shipment item</label>
                        </div>
                        <select id="submitagain" class="form-control select2 mb-4  " style="border-radius: 12px  ">
                            <option> Select </option>
                            <option value="1"></option>
                            <option value="2"></option>
                            </optgroup>
                        </select>
                    </div>
                </form>
                <div class="div-coust pl-0  pb-4 form-floating col-12">
                    <input type="number" class="form-control" style="border-radius: 12px  " placeholder="weight"
                        id="WSum">
                </div>
                <div class=" pl-0  pb-4 form-floating col-12">
                    <input type="number" class="form-control" style="border-radius: 12px  " placeholder="Quantity"
                        id="Quantity">
                </div>
                <button type="button" onclick="table_again();" style="border-radius: 12px ;box-shadow: none;"
                    class="btn  col-2 dropdown-coust ml-1  mb-4">Add</button>
            </div>
            <div class="col-6 pl-0">
                <button type="button" style="border-radius: 12px ;box-shadow: none;" class="btn  col-4 d-inline   "
                    disabled>Add</button>
                <button type="button" style="border-radius: 12px ;box-shadow: none;"
                    class="btn btn-danger  ml-2  col-4 d-inline   ">Cancel</button>

            </div>
        </div>
        <div class="d-inline-block col-6 ml-auto">
            <div class="card   shadow-sm p-3 pl-4 pt-4" style="border-radius:10px;">
                <div>
                    <button class="btn btn-danger" onclick="SocketOff();" style="float: right;: 70%">off</button>
                    <button class="btn" onclick="SocketOn();" style="float: right;">on</button>
                    <label class="label-coust pb-1 label-coust" style="font-size: 19px;">weight point</label>
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


    <script>
        var weights = [];
        var wSum = 0;
        var str = 0;

        function Add_Sum() {

            var input = document.getElementById('myInput').value;

            weights = [
                [parseInt(input)]
            ];
            str++;
            wSum += parseInt(weights);

            document.getElementById('WSum').value = wSum;
            var table = document.getElementById('fetch');
            var newRow = table.insertRow();
            var newCell1 = newRow.insertCell(0);
            var newCell2 = newRow.insertCell(1);
            var newText1 = document.createTextNode(str);
            var newText2 = document.createTextNode(input);
            newCell1.appendChild(newText1);
            newCell2.appendChild(newText2);

        }

        function table_again() {
            var w = document.getElementById('WSum').value;
            var Quantity = document.getElementById('Quantity').value;
            var tableagain = document.getElementById('fetchch');
            var newcolumn = tableagain.insertRow();
            var newCelll1 = newcolumn.insertCell(0);
            var newCelll2 = newcolumn.insertCell(1);
            var newCelll3 = newcolumn.insertCell(1);
            var newCelll4 = newcolumn.insertCell(1);
            var newCelll5 = newcolumn.insertCell(1);
            var newCelll6 = newcolumn.insertCell(1);
            var newTextt1 = document.createTextNode("");
            var newTextt2 = document.createTextNode("");
            var newTextt3 = document.createTextNode(Quantity);
            var newTextt4 = document.createTextNode(w);
            var newTextt5 = document.createTextNode("");
            var newTextt6 = document.createTextNode("");
            newCelll1.appendChild(newTextt1);
            newCelll2.appendChild(newTextt2);
            newCelll3.appendChild(newTextt3);
            newCelll4.appendChild(newTextt4);
            newCelll5.appendChild(newTextt5);
            newCelll6.appendChild(newTextt6);

        }





        // socket creating
        let socket;

        // socket connecting
        function SocketOn() {
            socket = new WebSocket('ws://192.168.43.235/');
            socket.onopen = function(e) {
                getElementById(connect).innerHTML("connected-192.168.43.235 ")
            };

            // messages detecting & recognizing
            socket.onmessage = function(event) {
                let data = event.data;
                console.log(data);
                // cases of messages
                if (data.includes("IP")) {
                    document.getElementById('ip').innerHTML = data;
                } else if (data.includes("Test")) {
                    // Not Req.
                } else {
                    document.getElementById('myInput').value = data;
                }
            };
        }

        // socket disconnecting
        function SocketOff() {
            socket.close();
            socket.onclose = function(event) {
                if (event.wasClean) {
                    alert(`[close] Connection closed cleanly`);
                } else {
                    alert('[close] Connection died');
                }
            };
            socket.onerror = function(error) {
                alert(`[error] ${error.message}`);
            };
            document.getElementById('ip').innerHTML = "IP : UNKNOWN";
            document.getElementById('weight').innerHTML = "off";
            document.getElementById('AddedWeight').innerHTML = "Added Weights : ";
        }

        // send for ip
        function aIP() {
            socket.send("ip");
        }

        // testing send
        function test() {
            socket.send("test");
        }

        // save spacific weights
        function AddWeight() {
            var paragraph = document.getElementById("AddedWeight");
            var text = document.createTextNode(" (" + document.getElementById('weight').innerHTML + ") ");
            paragraph.appendChild(text);
        }

        window.addEventListener("beforeunload", function(e) {
            SocketOff();
        }, false);
    </script>
@endsection
