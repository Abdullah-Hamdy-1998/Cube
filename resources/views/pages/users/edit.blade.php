@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label class="form-label" for="customFile">Upload Avatar</label>
        <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png" /></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >     <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
        <input class="form-control" type="text" id="job_title" name="job_title" value="{{ $user->job_title }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ $user->phone }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ $user->address }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >   <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ $user->note }}"></div>
        <div class="col-5 mb-3 d-inline-block mr-5"  >     <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input class="form-control" type="password" id="password" name="password"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >      <label for="confirm_password" class="col-sm-5 col-form-label">Confirm Password</label>
        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"></div>

        <br>
        <h6>Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input checkbox-coust" name="modules[]" value="users" id=""
                    @if (in_array('users', $modules)) checked @endif>
                Users </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="data" id=""
                    @if (in_array('data', $modules)) checked @endif> Data
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="shipments" id=""
                    @if (in_array('shipments', $modules)) checked @endif> Shipments
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="inventory" id=""
                    @if (in_array('inventory', $modules)) checked @endif>Inventory
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="reports" id=""
                    @if (in_array('reports', $modules)) checked @endif>Reports
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="trash" id=""
                    @if (in_array('trash', $modules)) checked @endif>Trash
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input checkbox-coust" type="checkbox" name="modules[]" value="settings" id=""
                    @if (in_array('settings', $modules)) checked @endif>Settings
            </label>
        </div>
        <br><br>
        <div class="form-check form-check-inline">
            <input type='hidden' name="access" value="read"> Read Only
            <input type="checkbox" name="access" value="write" id="switch" switch="none"
                @if ($access == 'write') checked @endif />
            <label for="switch"class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>Read & Write
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1">Save</button>
        <a href="{{ route('users.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </form>
    </div></div>
@endsection
