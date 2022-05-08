<!doctype html>
<html lang="en">

<head>
    
    @include('includes.head')
    
</head>

<body>
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left topbar-left-dark">
                <a href="{{ route('home') }}" class="logo">
                    <span>
                        <img src="{{ asset('images/cube_logo.svg') }}" alt="" height="77">
                    </span>
                    <i>
                        <img src="{{ asset('images/cube_logo.svg') }}" alt="" height="22">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                @include('includes.header')
            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu side-menu-dark">
            <div class="slimscroll-menu" id="remove-scroll">
                @include('includes.sidebar')
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-content-wrapper">
                        
                        <div class="row">
                            <div class="col-12">
                                
                                    
                                    <div >
                                        
                                        <!-- Demo purpose only -->
                                        <div >
                                            <p class="page label"></p>
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page content-->

                </div> <!-- container-fluid -->

            </div> <!-- content -->


            <footer class="footer">
                @include('includes.footer')
            </footer>
        </div>

        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/waves.min.js') }}"></script>

        <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('icons/eva-icons/eva.min.js') }}"></script>
        <script src="{{ asset('icons/eva-icons/eva.js') }}"></script>
        @yield('plugins')
</body>

</html>
