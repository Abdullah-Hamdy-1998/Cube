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

    <div class="col-5 d-inline-block inputField ml-5">  
        <input class="form-control field-coust" type="text" id="name"placeholder=" "Required name="name" value="{{ old('name') }}">
        <label for="username" class="   ">Username</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >  
        <input class="form-control field-coust"  type="text" id="job_title" name="job_title"Required placeholder=" " value="{{ old('job_title') }}">
        <label for="job_title" class="">Job Title</label></div>

        <div class="col-5 inputField ml-3 d-inline-block ml-5"  >  
        <input class="form-control field-coust" type="text" id="phone" name="phone" Required placeholder=" " value="{{ old('phone') }}">
         <label for="phone" class="">Phone</label></div>

        <div class="col-5 mb-3  inputField d-inline-block mr-5"  >  
        <input class="form-control field-coust" type="text"Required id="email" Required placeholder=" " name="email" value="{{ old('email') }}">
        <label for="email" class="">Email</label></div>

        <div class="col-5 inputField d-inline-block ml-5"  >    
        <input class="form-control field-coust" type="text" id="address"Required name="address"placeholder=" " value="{{ old('address') }}">
        <label for="address" class="">Address</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >      
        <input class="form-control field-coust" type="text" id="note"Required name="note"placeholder=" " value="{{ old('note') }}">
        <label for="note" class="">Note</label></div>

        <div class="col-5 d-inline-block inputField ml-5"  >   
            <input class="form-control field-coust" type="password"Required placeholder=" " id="password" name="password">
            <label for="password" class=" ">Password</label></div>

            <div class="col-5 d-inline-block inputField "  >   
                <input class="form-control field-coust" type="password"Required placeholder=" " id="password_confirmation" name="password_confirmation">
                <label for="password_confirmation" class=" ">confirmation</label></div>
       
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
