@extends('layouts.default')
@section('title')
    About
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card border-radius-coust">
    <div class="card-body">
        <img src="{{ asset('images/about-logo.svg') }}" height="90" alt="logo" class="logo mx-auto d-block" >
        <h5 class="d-inline mb-5">Cube System </h5><p class="d-inline">(Version 1.0)</p>
        <p class="mt-4 paragraph-coust">
            Vivamus sit amet viverra tortor. Phasellus finibus quam tellus, ac volutpat augue tincidunt vitae. Maecenas convallis id libero in gravida. Donec aliquam efficitur diam quis gravida. Cras vitae mi rutrum, facilisis nibh vitae, tempus mauris. Nunc tristique laoreet accumsan. Proin vitae condimentum nulla. Nullam et elementum risus.
        </p><p>
Copyright (C) 2022 TechX Team
        </p>

    </div>
</div>
<div class="card border-radius-coust border-radius-coust">
    <div class="card-body">
        <h5 class="d-inline">TechX Team </h5>
        <p class="mt-4">Lacinia quam aliquet pellentesque laoreet. Suspendisse eget nibh vitae massa vulputate luctus. Nullam porttitor magna non mi facilisis porttitor. Ut ultrices nulla non ante lobortis, vel ullamcorper dolor cursus. Vivamus ac lorem ex. Ut venenatis dignissim dui. Etiam pretium tellus eu nunc ultricies, volutpat rhoncus urna varius. Quisque eu eros ut nisi congue pellentesque in et sem.</p>
        <div class="text-center">
        <div class=" d-inline-block mr-4"> <img src="{{ asset('images/facebook (3).svg') }}" height="50" alt="logo" class="logo about-logo-coust d-inline mx-auto d-block" > </div>
        <div class=" d-inline-block mr-4"> <img src="{{ asset('images/twitter (3).svg') }}" height="50" alt="logo" class="logo d-inline mx-auto d-block" > </div>
        <div class=" d-inline-block mr-4"> <img src="{{ asset('images/linkdin.svg') }}" height="50" alt="logo" class="logo d-inline mx-auto d-block" > </div>
        </div>
        </div>
</div>

@endsection
