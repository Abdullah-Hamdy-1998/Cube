@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('users.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <label class="form-label" for="customFile">Upload Avatar</label>
        <input type="file" class="form-control" name="user-avatar" accept=".jpg,.jpeg,.png" />

        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">

        <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
        <input class="form-control" type="text" id="job_title" name="job_title" value="{{ old('job_title') }}">

        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}">

        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">

        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ old('address') }}">

        <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ old('note') }}">

        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input class="form-control" type="password" id="password" name="password">

        <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
        <br>
        <h6>Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="modules[]" value="users" id=""> Users </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="data" id=""> Data
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="shipments" id=""> Shipments
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="inventory" id="">Inventory
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="reports" id="">Reports
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="trash" id="">Trash
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="modules[]" value="settings" id="">Settings
            </label>
        </div>
        <br><br>
        <div class="form-check form-check-inline">
            <input type='hidden' name="access" value="read">
            <input type="checkbox" name="access" value="write" id="switch" switch="none" />
            <label for="switch" data-on-label="Write" data-off-label="Read"></label>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
        <a href="{{ route('users.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
    </form>
@endsection
