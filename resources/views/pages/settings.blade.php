@extends('layouts.default')
@section('title')
    Settings
@endsection
@section('content')
<script>

</script>
<div class="card border-radius-coust">
    <div class="card-body pl-4">
        <h5 class="mb-4">Company Info.</h5>
        <input type="text" class="form-control mb-4 col-5" placeholder="name" id="floatinginput" >
        <input type="text" class="form-control mb-4 col-5" placeholder="delegate" id="floatinginput" >
        <input type="text" class="form-control mb-4 col-5" placeholder="address" id="floatinginput" >
      <div class="d-flex  mb- col-5 pl-0" >  <input type="" class="form-control mb-4 col-12" placeholder="logo" id="input-coust"id="floatinginput" ><button class="input-side-button col-3 border-radius-coust" onclick="document.getElementById('getFile').click()" style="background-color: #536270 !important; color:white;">
      <i class="mdi mdi-image mr-1" ></i> Choose File
        <input onclick="get();"type='file' id="getFile" style="display:none"></div>
    </div>
</div>
<div class="card border-radius-coust">
    <div class="card-body pl-4">
        <h5 class="mb-4" >General</h5>
        <div class="d-flex pl-0 col-5">
        <input type="number"min="0" style="display: block" oninput="this.value = Math.abs(this.value)" class="form-control mb-4 ml-0 col-12" placeholder="name" id="floatinginput" >
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
                <input type="checkbox" class="form-check-input checkbox-coust" name="modules[]" value="users" id=""> Users </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="data" id=""> Data
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="shipments" id=""> Shipments
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="inventory" id="">Inventory
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="reports" id="">Reports
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="trash" id="">Trash
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="settings" id="">Settings
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
        <input type="" class="form-control mb-4 col-5" placeholder="IP Address" id="floatinginput" >

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
