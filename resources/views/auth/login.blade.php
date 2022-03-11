<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

    <!-- Background -->
    <div class="account-pages"></div>
    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <img src="{{ asset('images/cube_logo.svg') }}" height="77" alt="logo" class="logo">
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in to continue to Cube.</p>

                    <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST"
                        autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email"
                                value="{{ old('email') }}">
                        </div>

                        @error('email')
                            {{ $message }}
                        @enderror

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" name="password" class="form-control" id="userpassword"
                                placeholder="Enter password">
                        </div>

                        @error('password')
                            {{ $message }}
                        @enderror

                        <div class="form-group row m-t-20">
                            <div class="col-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p class="text-white text-stroke">© {{ now()->year }} Cube. Crafted with <i class="mdi mdi-heart text-danger"></i>
                by
                TechX</p>
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
