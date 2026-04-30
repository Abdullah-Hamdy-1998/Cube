@extends('layouts.default')
@section('title')
    Settings
@endsection
@section('content')

<div class="card border-radius-coust">
    <div class="card-body pl-4">
        <h5 class="mb-4">Company Info.</h5>
        <div class="inputField  mb-4 mt-3">
            <input type="text" class="form-control  col-5"  placeholder=" " required >
            <label  >Name</label>
          </div>

        <div class="inputField  mb-4 mt-3">
            <input type="text" class="form-control  col-5"  placeholder=" " required >
            <label  >Delegated</label>
          </div>
          <div class="inputField  mb-4 mt-3">
            <input type="text" class="form-control  col-5"  placeholder=" " required >
            <label  >Address</label>
          </div>
          
          <div class=" d-flex pl-0 mb-4  inputField col-5 ">
            <input type="" class="form-control border-radius-coust" 
                placeholder=" " required id="getFile" > <label>Logo</label><button class=" border-radius-coust col-4 input-button"onclick="document.getElementById('getFile').click()"style="background-color:#536270 !important; color:white" >        <input onclick="get();"type='file' id="getFile" style="display:none">      <i class="mdi mdi-image mr-1" ></i> Choose File
                </button> </div>
            </button>
               
        </div></div>

<div class="card border-radius-coust">
    <div class="card-body pl-3">
        <h5 class="mb-4 " >General</h5>
        <div class=" d-flex pl-0 mb-4  inputField col-5 ">
            <input type="number" class="form-control  border-radius-coust" 
                placeholder=" " required   > <label>Lock time</label><button class="mr-3 border-radius-coust input-button" style="max-width: 10px;" > min</button>
               
        </div>

          
        <h5 >Default Deletion Mode</h5>
        <div class="form-check form-check-inline ml-3">
            <input type='hidden' name="access" >Soft Delete 
            <input type="checkbox" name="access" value="write" id="switch" switch="none" />
            <label for="switch" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>Hard Delete
        </div>
    </div></div>
</div>
<div class="card border-radius-coust pl-3" >
    <div class="card-body">
        <h5 class="mb-4">Users</h5>
        <h6 class="mb-0">Defalut Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline ">
            <label class="form-check-label">
                <input type="checkbox" class=" checkbox-coust mr-1" name="modules[]" value="users" id=""> Users </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="data" id=""> Data
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="shipments" id=""> Shipments
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="inventory" id="">Inventory
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="reports" id="">Reports
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="trash" id="">Trash
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust mr-1" type="checkbox" name="modules[]" value="settings" id="">Settings
            </label>
        </div></div>
                <div class="form-check form-check-inline mb-4 ml-3">
            <input type='hidden' name="access" >Read only 
            <input type="checkbox" name="access" value="write" id="switch" switch="none" />
            <label for="switch" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>Read & Write
        </div>

    </div>
    
</div>
<div class="card mb-0 border-radius-coust">
    <div class="card-body">
        <h5 class="mb-4">Weight Point</h5>
        <div class="inputField  mb-4 mt-3">
            <input type="text" class="form-control  col-5"  placeholder=" " required >
            <label  >IP Address</label>
          </div>

    </div>
</div>
<div class="card-body pl-0">
    <button type="submit"  class="btn btn-primary   waves-effect waves-light border-radius-coust col-1  mr-3">Save</button>
    <button type="submit" class="btn btn-secondary waves-effect waves-light border-radius-coust col-1  mr-3">Reset</button>
</div>
@endsection
@section('plugins')

@endsection
