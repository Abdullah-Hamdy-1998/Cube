@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5>add new user</h5>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('users.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
    <div class="col-5 mb-3 d-inline-block mr-5"  >  <label class="form-label " for="customFile">Upload Avatar</label>
        <input type="file" class="form-control " name="image" accept=".jpg,.jpeg,.png" /></div>

    <div class="col-5 d-inline-block ml-5"  <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >  <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
        <input class="form-control" type="text" id="job_title" name="job_title" value="{{ old('job_title') }}"></div>

        <div class="col-5 d-inline-block ml-5"  >   <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >   <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}"></div>

        <div class="col-5 d-inline-block ml-5"  >    <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ old('address') }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >      <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ old('note') }}"></div>

        <div class="col-5 d-inline-block ml-5"  >   <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input class="form-control" type="password" id="password" name="password"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="confirm_password" class="col-sm-5 col-form-label">Confirm Password</label>
        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"></div>
        <br>
        <h6 class="ml-3">Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline ml-3">
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
        <br><br>
        <div class="form-check form-check-inline ml-3">
            <input type='hidden' name="access" >Read only 
            <input type="checkbox" name="access" value="write" id="switch" switch="none" />
            <label for="switch" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>Read & Write
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 ml-3 mr-3">Add</button>
        <a href="{{ route('users.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1 ml-3">Cancel</button></a>
    </form>
    </div></div>
@endsection
