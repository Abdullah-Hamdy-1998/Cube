@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="row row-coust ">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="form-group row row-coust ">
                        <label class="form-group row  label-coust row-coust" for="custome">upload avatar</label>
                        <input type="file" class="form-control  " name="user avater" accept=".jpg,.jpeg,.png"/> 
                        <div class="form-group row form-group-coust row-coust">

                        <label for="example-text-input " class="col-sm-2 col-form-label label-coust">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-coust" type="text" placeholder="Username" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row  form-group-coust row-coust">
                        <label for="example-search-input " class="col-sm-2 col-form-label label-coust">Job title</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-coust" type="search" placeholder="Job title" id="example-search-input">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
                    <a > <button type="button"
                            class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
                    </div>
            </div>
            
        </div> <!-- end col -->
    </div></div> <!-- end row -->
@endsection

