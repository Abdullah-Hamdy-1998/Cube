<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Cube | Login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('images/cube_logo.svg') }}">

    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('icons/eva-icons/style/eva-icons.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Background -->
    <div class="account-pages">
        <div style="background-color: black ;width: 100% ;height:100% ;filter: opacity(.7)"></div>
    </div>
    <!-- Begin page -->
    <div class="wrapper-page  mb-0">
        <img src="{{ asset('images/cube_logo.svg') }}" height="120" alt="logo" class="logo mb-4 mx-auto d-block">

        <div class="card border-radius-coust  mx-auto d-flex justify-content-center col-10">
            <div class="card-body">
                <img src="{{ asset('images/avatars/user-default.png') }}" height="110" alt="logo" class="logo mx-auto mt-4 d-block"style="filter:opacity(.3)">

                <div class="p-3">
                    <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST"
                        autocomplete="off">
                        @csrf
                        <div class="form-group inputField mb-4">
                            <input type="text" name="email" class="form-control border-radius-coust" id="email" placeholder=" "
                                value="{{ old('email') }}">
                                <label for="email">Email</label>

                        </div>

                        @error('email')
                            {{ $message }}
                        @enderror

                        <div class="form-group inputField ">
                            <input type="password" name="password" class="form-control border-radius-coust" id="userpassword"
                                placeholder=" ">
                            <label for="userpassword">Password</label>

                        </div>

                        @error('password')
                            {{ $message }}
                        @enderror

                        <div class="form-group row m-t-20   ">
                            <div class="col-8 ml-2  text-right ">
                                <button class="btn btn-primary all-buttons-coust w-md waves-effect  waves-light border-radius-coust mt-3" type="submit"style="border-radius:12px">Log
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="text-center mt-3">
            <img src="{{ asset('images/facebook.svg') }}"style="max-height:40px;filter:invert(1)"class="mt-5 mr-1" >
            <img src="{{ asset('images/twitter.svg') }}"style="max-height:40px;filter:invert(1)"class="mt-5 mr-1" >
            <img src="{{ asset('images/linkedin.svg') }}"style="max-height:40px;filter:invert(1)" class="mt-5" >
                    </div>    
        <div class=" text-center mb-4">
            <p class="text-white text-stroke mb-0"> Powered By TechX Team 2021  ©
                </p>
        </div>
    </div>

    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>

    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
