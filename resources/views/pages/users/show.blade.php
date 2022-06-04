@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <img src="{{ asset('images/avatars/' . $user->avatar) }}" alt="user" class="rounded-circle mx-auto d-block" style="max-width: 25% ;max-height: 100px;">

    <div class="col-5 mb-3 mt-3 form-floating d-inline-block mr-5"  > 
    <input class="form-control field-coust" type="text" id="name" placeholder="Name" name="name" value="{{ $user->name }}" disabled>
    <label for="username" class="col-sm-2 field-label ml-3 col-form-label">Username</label></div>

    <div class="col-5 mb-3 mt-3 form-floating d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text" id="job_title" placeholder="Job Title" name="job_title" value="{{ $user->job_title }}" disabled>
    <label for="job_title" class="col-sm-2 ml-3 field-label col-form-label">Job Title</label></div>

    <div class="col-5 mb-3 form-floating d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text" id="phone" name="phone" placeholder="Phone" value="{{ $user->phone }}" disabled>
    <label for="phone" class="col-sm-2 ml-3 field-label col-form-label">Phone</label></div>

    <div class="col-5 mb-3 form-floating d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text" id="email" name="email" placeholder="Email" value="{{ $user->email }}" disabled>
    <label for="email" class="col-sm-2 ml-3 field-label col-form-label">Email</label></div>

    <div class="col-5 mb-3 form-floating d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text" id="address" name="address"placeholder="Address" value="{{ $user->address }}" disabled>
    <label for="address" class="col-sm-2  field-label ml-3 col-form-label">Address</label></div>

    <div class="col-5 mb-3 form-floating d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text" id="note"placeholder="Note" name="note" value="{{ $user->note }}" disabled>
    <label for="note" class="col-sm-2 ml-3  field-label col-form-label">Note</label></div>

    <br>
    <h6>Access Permissions</h6>
    <br>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input checkbox-coust " name="modules[]" value="users" id="" disabled
                @if (in_array('users', $modules)) checked @endif>
            Users </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="data" id="" disabled
                @if (in_array('data', $modules)) checked @endif> Data
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="shipments" id="" disabled
                @if (in_array('shipments', $modules)) checked @endif> Shipments
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="inventory" id="" disabled
                @if (in_array('inventory', $modules)) checked @endif>Inventory
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="reports" id="" disabled
                @if (in_array('reports', $modules)) checked @endif>Reports
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="trash" id="" disabled
                @if (in_array('trash', $modules)) checked @endif>Trash
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="settings" id="" disabled
                @if (in_array('settings', $modules)) checked @endif>Settings
        </label>
    </div>
    <br><br>
    <div class="form-check form-check-inline">
        <input type='hidden' name="access" value="read" disabled> Read only
        <input type="checkbox" name="access" value="write" id="switch" switch="none" disabled
            @if ($access == 'write') checked @endif />
        <label for="switch" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label> Read & write
    </div>
    <br><br>
    @can('write-users')
    <a href="{{ route('users.edit', $user) }}"><button type="button"
        class="btn btn-primary waves-effect waves-light border-radius-coust mr-3 col-1">Edit</button></a>
    @endcan
    <a href="{{ route('users.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </div></div>
@endsection


