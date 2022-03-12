@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input class="form-control" type="text" id="username" name="username">

        <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
        <input class="form-control" type="text" id="job_title" name="job_title">

        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone">

        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email">

        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address">

        <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note">

        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input class="form-control" type="password" id="password" name="password">

        <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
        <input class="form-control" type="password" id="confirm_password" name="confirm_password">

        <p>Access Permissions</p>

        <input type="checkbox" name="" id=""> Users
        <input type="checkbox" name="" id=""> Data
        <input type="checkbox" name="" id=""> Shipments
        <input type="checkbox" name="" id=""> Inventory
        <input type="checkbox" name="" id=""> Reports
        <input type="checkbox" name="" id=""> Trash
        <input type="checkbox" name="" id=""> Settings
        <br>
        <input type="checkbox" id="switch1" switch="none" checked />
        <label for="switch1" data-on-label="Write" data-off-label="Read"></label>
        <br>
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
        <button type="button" class="btn btn-danger waves-effect waves-light ">Cancel</button>
    </form>
@endsection
