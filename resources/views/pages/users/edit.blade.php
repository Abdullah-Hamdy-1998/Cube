@extends('layouts.default')
@section('title')
    Users
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body">
        <h5 class="mb-5 ml-3"> Edit User Details</h5>

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input type="file" class="form-control field-coust" required name="image" accept=".jpg,.jpeg,.png" />
        <label  for="customFile">Upload Avatar</label> </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  > 
        <input class="form-control field-coust" type="text"placeholder=" "  required id="name" name="name" value="{{ $user->name }}">
        <label for="username">Username</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control field-coust" type="text"placeholder=" " required id="job_title" name="job_title" value="{{ $user->job_title }}">
        <label for="job_title" >Job Title</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >    
        <input class="form-control field-coust" type="text"placeholder=" " required id="phone" name="phone" value="{{ $user->phone }}">
        <label for="phone" >Phone</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >    
        <input class="form-control field-coust" type="text" id="email" required placeholder=" " name="email" value="{{ $user->email }}">
        <label for="email">Email</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >    
        <input class="form-control field-coust" type="text" id="address"required placeholder=" " name="address" value="{{ $user->address }}">
        <label for="address" >Address</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control field-coust" type="text" id="note" required placeholder=" " name="note" value="{{ $user->note }}">
        <label for="note" >Note</label></div>
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >    
        <input class="form-control field-coust" type="password"required placeholder=" " id="password" name="password">
        <label for="password" >Password</label></div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >      
        <input class="form-control field-coust" type="password"required placeholder=" " id="password_confirmation" name="password_confirmation">
        <label for="confirm_password" >Confirmation </label></div>

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
        <button type="submit" class="btn btn-primary waves-effect waves-light mr-3 border-radius-coust col-1">Save</button>
        <a href="{{ route('users.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </form>
    </div></div>
@endsection
