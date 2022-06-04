<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Cube | Login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('images/about-logo.svg') }}">

    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('icons/eva-icons/style/eva-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!-- Background -->
    <div class="account-pages">
        <div style="background-color: black ;width: 100% ;height:100% ;filter: opacity(.6)"></div>
    </div>
    <!-- Begin page -->
    <div class="wrapper-page content-coust">
        <img src="{{ asset('images/cube_logo.svg') }}" height="77" alt="logo" class="logo mx-auto d-block">

        <h5 class="text-center m-0 text-white mb-4">Cube</h5>

        <div class="card border-radius-coust  mx-auto d-flex justify-content-center col-10">
            <div class="card-body">
                <img src="{{ asset('images/avatars/user-default.png') }}" height="90" alt="logo" class="logo mx-auto mt-4 d-block"style="filter:opacity(.3)">


                <div class="p-3">
                    <form  action="{{ route('login') }}" method="POST"
                        autocomplete="off">
                        @csrf
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control field-coust" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                            <label for="email" class="field-label">Email</label>
                          </div>

                        @error('email')
                            {{ $message }}
                        @enderror

                        <div class="form-floating mb-3 mt-3">
                            <input type="password" name="password" class="form-control  border-radius-coust field-coust" id="userpassword"
                                placeholder="Enter password">
                                <label for="userpassword"class="field-label">Password</label>

                        </div>

                        @error('password')
                            {{ $message }}
                        @enderror

                        <div class="form-group row m-t-20   ">
                            <div class="col-8 text-right ">
                                <button class="btn btn-primary w-md waves-effect  waves-light border-radius-coust mt-3" type="submit"style="border-radius:12px">Log
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="text-center mt-3">
            <img src="{{ asset('images/facebook.svg') }}"style="max-height:40px;filter:invert(1)"class="mt-5" >
            <img src="{{ asset('images/twitter.svg') }}"style="max-height:40px;filter:invert(1)"class="mt-5" >
            <img src="{{ asset('images/linkedin.svg') }}"style="max-height:40px;filter:invert(1)" class="mt-5">
                    </div>    
        <div class=" text-center mt-1">
            <p class="text-white text-stroke"> Powered By TechX Team 2021  ©
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
