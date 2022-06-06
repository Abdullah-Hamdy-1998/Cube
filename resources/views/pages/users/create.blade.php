@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body">
        <h5>add new user</h5>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('users.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
    <div class="col-5 mb-3 d-inline-block mr-5"  > 
        <input type="file" class="form-control  " name="image" accept=".jpg,.jpeg,.png" />
        <label class="form-label   " for="customFile">Upload Avatar</label></div>

    <div class="col-5 d-inline-block form-floating ml-5">  
        <input class="form-control field-coust" type="text" id="name"placeholder="User Name" name="name" value="{{ old('name') }}">
        <label for="username" class="col-sm-2 field-label ml-3 col-form-label">Username</label></div>

        <div class="col-5 mb-3 form-floating d-inline-block mr-5"  >  
        <input class="form-control field-coust"  type="text" id="job_title" name="job_title"placeholder="job title" value="{{ old('job_title') }}">
        <label for="job_title" class="col-sm-2 ml-3 field-label col-form-label">Job Title</label></div>

        <div class="col-5 form-floating ml-3 d-inline-block ml-5"  >  
        <input class="form-control field-coust" type="text" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}">
         <label for="phone" class="col-sm-2 ml-3 field-label col-form-label">Phone</label></div>

        <div class="col-5 mb-3  form-floating d-inline-block mr-5"  >  
        <input class="form-control field-coust" type="text" id="email"placeholder="Email" name="email" value="{{ old('email') }}">
        <label for="email" class="col-sm-2 ml-3 field-label col-form-label">Email</label></div>

        <div class="col-5 form-floating d-inline-block ml-5"  >    
        <input class="form-control field-coust" type="text" id="address" name="address"placeholder="aya" value="{{ old('address') }}">
        <label for="address" class="col-sm-2 col-form-label ml-3 field-label">Address</label></div>

        <div class="col-5 mb-3 form-floating d-inline-block mr-5"  >      
        <input class="form-control field-coust" type="text" id="note" name="note"placeholder="Note" value="{{ old('note') }}">
        <label for="note" class="col-sm-2 field-label ml-3 col-form-label">Note</label></div>

        <div class="col-5 d-inline-block form-floating ml-5"  >   
        <input class="form-control field-coust" type="password" placeholder="Password" id="password" name="password">
        <label for="password" class="col-sm-2 field-label ml-3 col-form-label">Password</label></div>

        <div class="col-5 mb-3 form-floating d-inline-block mr-5"  >   
        <input class="form-control field-coust" type="password" id="password_confirmation"placeholder="Confirm Password" name="password_confirmation">
        <label for="confirm_password" class="col-sm-5  ml-3 field-label col-form-label">Confirm Password</label></div>
        <br>
        <h6 class="ml-3">Access Permissions</h6>
        <br>
        <div class="form-check form-check-inline ml-3">
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
                <input class=" checkbox-coust"  type="checkbox" name="modules[]" value="inventory" id="">Inventory
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
        <br><br>
        <div class="form-check form-check-inline ml-3">
            <input type='hidden' name="access" >Read only 
            <input type="checkbox" name="access" value="write" id="switch" switch="none" />
            <label for="switch" class="label-switch ml-3 mr-3" data-on-label="" data-off-label=""></label>Read & Write
        </div>
  
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 mb-3 mt-1 ml-3 mr-3">Add</button>
        <a href="{{ route('users.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1 mb-3 ml-3">Cancel</button></a>
    </form>
    </div></div>
@endsection
