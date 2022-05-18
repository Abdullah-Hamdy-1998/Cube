@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
<style>
        .hover-table:hover ~ #checkbox {visibility: visible}

        #checkbox{visibility: hidden;}
        .hover-table:hover{background-color: antiquewhite};
    .placeholder-coust{font-weight: normal}
    .label-coust{color:#656565}
    .placeholder-coust{color:#949595;position: absolute;left:16px; top:9px}
    .button-coust{position: absolute;right: 16px;border-radius: 12px;  border-bottom-left-radius: 0px ;border-top-left-radius: 0px ;background-color: #E9ECEF; border-color:transparent;font-size: 20px;cursor: text ;color: #384044};
    form{position: relative;}
    input:focus ~ label {
    transform:translateY(-10px); 
    background-color: white; 
    left:11px;
    top: .5px;
    font-size: 12.5px;
    padding-left: 5px;
    padding-right: 5px;
    color: #3B86FF;
    }
    input:valid ~ label {
    transform:translateY(-10px); 
    background-color: white; 
    top:.5px;
    font-size: 12.5px;
    padding-left: 5px;
    padding-right: 5px;
    left:11px;
  }
 
    .placeholder-coustt{ background-color: white; 
    position: absolute;
        bottom:19.5px;
    font-size: 12.5px;
    padding-left: 5px;
    padding-right: 5px;
    left:28px;}
    .placeholder-couust{bottom:35px;}
    .div-coust{display: flex;}
    


    </style>
<div  class="card shadow-sm pt-3 pl-2 "style="border-radius:10px;" > 
    <form  class=" text-capitalize">
        <div  class="form-group  d-inline-block col-5 w-50 " >
            <label class="label-coust control-label mb-3 mt-2" style="font-size: 19px;">shipment basic info</label>
            <div  class="div-coust">
                <label  class="placeholder-coustt placeholder-couust" >shipment type</label></div> 
            <select id="time"  class="form-control  select2 mb-3 " style=" border-radius: 10px  ">
                    <option style="min-height: 30%">Select </option>
                    <option  value="">aya</option>
                    <option value="">mohammed</option>
                    <option value="">abdallah</option>

                </optgroup></select></div>
                <div class="form-group  d-inline-block col-5 ml-5 ">
                    <div class="div-coust">
                    <label class="placeholder-coustt" >coustmer/supplier</label></div> 
                    <select id="submit" id="timeagain"  class="form-control select2 "style="border-radius: 12px   ">
                            <option>Select  </option>
                            <option value=""></option>
                            <option value=""></option>
                        </optgroup></select></div>
                        <div class=" div-coust mb-2 pb-4 form-floating col-5">
                            <input type="text" class="form-control pl-3" id="text"  required="" id="floatinginput type="text"" style="border-radius: 12px; "><label class=" placeholder-coust  ml-3 ">Description</label>
                        </div></form></div></div>
<div class="card"style="border-radius:10px;">
    <div class="card-body pt-0 shadow-sm">
        <label class="label-coust pt-4 pb-4 " style="font-size: 19px;">Shipment Items</label>
        <table class="table  " style=" border-top-style: hidden">
            <thead style="background-color: #f3f3f3 ; ">
            <tr >
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Weight</th>
                <th scope="col">Quantity</th>
                <th scope="col">Modified</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody >
            <tr class="border-bottom hover-table " >
                <th scope="row"></th>
            <div class="try"> <td> <input type="checkbox" class="form-check-input" name="" id="checkbox" value="checkedValue" ></td></div>
                <td class="tryr">aya</td>
                <td>mohammed</td>
                <td>abdallah</td>
                <td>aya</td>
                <td>mohammed</td>
                <td>abdallah</td>
                <td><i class="ion-ios7-trash-outline icon" style="color: red; font-size: 24px "></i></td>
            
            </tr>
                
            </tbody>
        </table>
    </div></div>
    <div class="row align-items-start">
    <div class="d-inline-block col-6  m-0">
<div class="card   shadow-sm p-3 pl-4 pt-4"style="border-radius:10px;" >
            <label class="pb-1 label-coust" style="font-size: 19px;">Add shipment item</label>
            <form class=" text-capitalize">
                <div class="pl-0 col-12   " >
                    <div class="div-coust">
                        <label class="placeholder-coustt " >shipment type</label></div> 
                    <select id="submitagain"  class="form-control select2 mb-4  " style="border-radius: 12px  ">
                            <option > Select  </option>
                            <option value="1"></option>
                            <option value="2"></option>
                        </optgroup></select></div></form>
                        <div class="div-coust pl-0  pb-4 form-floating col-12">
                            <input type="text"class="form-control" placeholder="Sum" id="WSum">
                        </div>
                        <div class=" pl-0  pb-4 form-floating col-12">
                            <input type="text" class="form-control" id="text"  required=""  id="floatinginput type="text"" style="border-radius: 12px;"><button class="ml-0 button-coust "style="top:1px">Unit</button><label class="placeholder-coust placeholder-coust">Quantity</label>
                        </div>
                        <button type="button" style="border-radius: 12px ;box-shadow: none;" class="btn btn-secondary col-2 dropdown-coust ml-1  mb-4" disabled>Add</button>
        </div> 
        <div  class="col-6 pl-0">
            <button type="button" style="border-radius: 12px ;box-shadow: none;" class="btn btn-secondary col-4 d-inline   " disabled>Add</button>
            <button type="button" style="border-radius: 12px ;box-shadow: none;"class="btn btn-danger  ml-2  col-4 d-inline   " >Cancel</button>

                </div></div>
        <div class="d-inline-block col-6 ml-auto" >
            <div class="card   shadow-sm p-3 pl-4 pt-4"style="border-radius:10px;" >
                        <label class="label-coust pb-1 label-coust" style="font-size: 19px;">weight point</label>
                                    <div class=" f-flex pl-0 pb-4 form-floating col-12">
                                        <input type="text" class="form-control" placeholder="Unknown" id="floatinginput type="text"" style="border-radius: 12px;"></input type="text"><button class="button-coust"style=" box-shadow: none;color:white;background-color:#6c757d;Top:1px;cursor: pointer"><i class="fas fa-redo"></i></button>
                                    </div>
                                    <div class=" d-flex pl-0 pb-4 form-floating col-12 " >
                                        <input type="text" class="form-control" style="height: 70px; border-radius: 12px;" placeholder="Weight" id="floatinginput type="text"" style="border-radius: 12px;"><button class="ml-0 button-coust "style="box-shadow: none;height: 70px;  ">Kg</button>
                                    </div>
                    <label class=" label-coust pt-4 pb-4 "style="font-size: 19px;">Cumulative Weights</label>  
                    <input type="text" placeholder="Type something..." id="myInput">
                    <button type="button" onclick="Add_Sum()">Get Value</button>
                    <table class="table "id="fetch" style="border-top-style: hidden">
                        <thead style="background-color: #f3f3f3">
                        <tr>
                            <th scope="col">No</th>
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
           
        </div>  </div>
        

    <script>

    var weights = [];
    var wSum = 0;

    function Add_Sum(){

        var input = document.getElementById('myInput').value;

        weights = [[parseInt(input)]];        
        for(var i=0 ; i<weights.length ; i++){
            wSum += parseInt(weights[i]);
        }
        document.getElementById('WSum').value = wSum;
    }
            </script>
@endsection




