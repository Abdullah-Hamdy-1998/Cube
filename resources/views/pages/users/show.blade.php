@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
    <img src="{{ asset('images/avatars/' . $user->avatar) }}" alt="user" class="rounded-circle mx-auto d-block" style="max-width: 25%">

    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" disabled>

    <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
    <input class="form-control" type="text" id="job_title" name="job_title" value="{{ $user->job_title }}" disabled>

    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <input class="form-control" type="text" id="phone" name="phone" value="{{ $user->phone }}" disabled>

    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}" disabled>

    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <input class="form-control" type="text" id="address" name="address" value="{{ $user->address }}" disabled>

    <label for="note" class="col-sm-2 col-form-label">Note</label>
    <input class="form-control" type="text" id="note" name="note" value="{{ $user->note }}" disabled>

    <br>
    <h6>Access Permissions</h6>
    <br>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="modules[]" value="users" id="" disabled
                @if (in_array('users', $modules)) checked @endif>
            Users </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="data" id="" disabled
                @if (in_array('data', $modules)) checked @endif> Data
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="shipments" id="" disabled
                @if (in_array('shipments', $modules)) checked @endif> Shipments
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="inventory" id="" disabled
                @if (in_array('inventory', $modules)) checked @endif>Inventory
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="reports" id="" disabled
                @if (in_array('reports', $modules)) checked @endif>Reports
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="trash" id="" disabled
                @if (in_array('trash', $modules)) checked @endif>Trash
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="modules[]" value="settings" id="" disabled
                @if (in_array('settings', $modules)) checked @endif>Settings
        </label>
    </div>
    <br><br>
    <div class="form-check form-check-inline">
        <input type='hidden' name="access" value="read" disabled>
        <input type="checkbox" name="access" value="write" id="switch" switch="none" disabled
            @if ($access == 'write') checked @endif />
        <label for="switch" data-on-label="Write" data-off-label="Read"></label>
    </div>
    <br><br>
    @can('write-users')
    <a href="{{ route('users.edit', $user) }}"><button type="button"
        class="btn btn-primary waves-effect waves-light ">Edit</button></a>
    @endcan
    <a href="{{ route('users.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
@endsection
