@extends('layouts.default')
@section('title')
    Settings
@endsection
@section('content')
<div class="card ">
    <div class="card-body pl-4">
        <h5 class="mb-4">company info</h5>
        <input type="text" class="form-control mb-4 col-5" placeholder="name" id="floatinginput" >
        <input type="text" class="form-control mb-4 col-5" placeholder="delegate" id="floatinginput" >
        <input type="text" class="form-control mb-4 col-5" placeholder="address" id="floatinginput" >
        <input type="file" class="form-control mb-4 col-5" placeholder="logo" id="floatinginput" >
    </div>
</div>
<div class="card ">
    <div class="card-body pl-4">
        <h5 class="mb-4" >general</h5>
        <div class="d-flex col-5">
        <input type="number"min="0" style="display: block" oninput="this.value = Math.abs(this.value)" class="form-control mb-4 col-12" placeholder="name" id="floatinginput" >
        <button class="input-side-button height-100 border-radius-coust">min</button></div>
        <h5 >Default deletion mode</h5>
        <div class="mt-4">
        <input type="checkbox" name="access" value="write" class=""id="switch" switch="none" />soft delete
        <label for="switch" class="label-switch ml-2 mr-2 toogle-coust" data-on-label="" data-off-label=""></label>hard delete
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="mb-4">users</h5>
        <h6 class="mb-0">defalut Access Permissions</h6>
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
            <input type="checkbox" name="access" value="write" class=""id="switch" switch="none" /> read only
            <label for="switch" class="label-switch ml-2 mr-2 toogle-coust" data-on-label="" data-off-label=""></label>read & write
            </div>
    
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="mb-4">weight point</h5>
        <input type="number" class="form-control mb-4 col-5" placeholder="address" id="floatinginput" >

    </div>
</div>
<div class="card-body">
    <button type="submit"  class="btn btn-primary   waves-effect waves-light border-radius-coust col-1  mr-3">Save</button>
    <button type="submit" class="btn btn-secondary waves-effect waves-light border-radius-coust col-1  mr-3">Reset</button>
</div>
@endsection
