@extends('layouts.default')
@section('title')
    Settings
@endsection
@section('content')

<div class="card border-radius-coust">
    <div class="card-body pl-4">
        <h5 class="mb-4">Company Info.</h5>
        <div class="form-floating  mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
            <label  class="field-label">Name</label>
          </div>
          <div class="form-floating  mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
            <label  class="field-label">Delegated</label>
          </div>
          <div class="form-floating  mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
            <label  class="field-label">Address</label>
          </div>
          
          <div class="form-floating d-flex mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
        <label  class="field-label">Logo</label><button class="input-side-button col-3 border-radius-coust" onclick="document.getElementById('getFile').click()" style="background-color: #536270 !important;max-width: 15%;left:26.7%; color:white;">
      <i class="mdi mdi-image mr-1" ></i> Choose File
        <input onclick="get();"type='file' id="getFile" style="display:none"></div>
</div></div>
<div class="card border-radius-coust">
    <div class="card-body pl-4">
        <h5 class="mb-4" >General</h5>
        <div class="form-floating d-flex mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
            <label  class="field-label">Address</label>
            <button class="input-side-button height-100 border-radius-coust">min</button></div>

          
        <h5 >Default Deletion Mode</h5>
        <div class="mt-4">
        <input type="checkbox" name="access" value="write" class=""id="switch" switch="none" />Soft Delete
        <label for="switch" class="label-switch ml-2 mr-2 toogle-coust" data-on-label="" data-off-label=""></label>Hard Delete
        </div>
    </div>
</div>
<div class="card border-radius-coust" >
    <div class="card-body">
        <h5 class="mb-4">Users</h5>
        <h6 class="mb-0">Defalut Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline ">
            <label class="form-check-label">
                <input type="checkbox" class=" checkbox-coust" name="modules[]" value="users" id=""> Users </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="data" id=""> Data
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="shipments" id=""> Shipments
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="inventory" id="">Inventory
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="reports" id="">Reports
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="trash" id="">Trash
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class=" checkbox-coust" type="checkbox" name="modules[]" value="settings" id="">Settings
            </label>
        </div>
        <div class="mt-4">
            <input type="checkbox" name="access" value="write" class=""id="switch" switch="none" /> Read only
            <label for="switch" class="label-switch ml-2 mr-2 toogle-coust" data-on-label="" data-off-label=""></label>Read & Write
            </div>
    
    </div>
</div>
<div class="card mb-0 border-radius-coust">
    <div class="card-body">
        <h5 class="mb-4">Weight Point</h5>
        <div class="form-floating  mb-4 mt-3">
            <input type="text" class="form-control field-coust col-5"  placeholder="Name"  >
            <label  class="field-label">IP Address</label>
          </div>

    </div>
</div>
<div class="card-body pl-0">
    <button type="submit"  class="btn btn-primary   waves-effect waves-light border-radius-coust col-1  mr-3">Save</button>
    <button type="submit" class="btn btn-secondary waves-effect waves-light border-radius-coust col-1  mr-3">Reset</button>
</div>
@endsection
@section('plugins')
<script src="{{ asset('plugins/datatables/addclass.js') }}"></script>

@endsection
