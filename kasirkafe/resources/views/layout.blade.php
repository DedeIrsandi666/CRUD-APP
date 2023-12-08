<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets')}}/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/typography.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- modernizr css -->
    <script src="{{ asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>

    @yield('css')
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets')}}/images/icon/logocoffee.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li class="settings-btn">
                                    {{-- <i class="ti-settings"></i> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="{{ asset('assets')}}/images/icon/user3.jpg" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name}}<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ url('logout') }}">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="{{ url('welcome') }}"><i class="ti-receipt"></i><span>Halaman Utama</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('menu.index') }}"><i class="ti-book"></i><span>Daftar Menu</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="{{ route('pemesanan.index') }}"><i class="ti-write"></i> <span>Pemesanan</span></a>
                                    </li>
            
                                    {{-- <li>
                                        <a href="javascript:void(0)"><i class="fa fa-table"></i>
                                            <span>Tables</span></a>
                                        <ul class="submenu">
                                            <li><a href="table-basic.html">basic table</a></li>
                                            <li><a href="table-layout.html">table layout</a></li>
                                            <li><a href="datatable.html">datatable</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li> --}}

                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-bar-chart-alt"></i><span>Halaman Admin</span></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('adminmenu.index') }}">Pengelolaan Daftar Menu</a></li>
                                            <li><a href="{{ route('keuangan.index') }}">Pengelolaan Keuangan</a></li>
                                            {{-- <li><a href="piechart.html">pie chart</a></li> --}}
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                   
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area end -->



        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            {{-- <div class="footer-area">
                <p>SELAMAT DATANG ! <br> DI <br> WANTU COFFEE</a></p>
            </div> --}}
        </footer>
        <!-- footer area end-->
        <div class="main-content-inner">
            <div class="container">

                @yield('content')
                
            </div>
        </div>

    </div>
    <footer>
        <div class="footer-area">
            <strong><p>Selamat Menikmati Minuman Kopi Kami<br>di <br>  Wantu Coffee 1.2</p></strong>
        </div>
    </footer>
    <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - WANTU COFFEE 1.2</div></div>
    </footer>
    <!-- main wrapper start -->
    
    <!-- jquery latest version -->
    <script src="{{ asset('assets')}}/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets')}}/js/popper.min.js"></script>
    <script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets')}}/js/metisMenu.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="{{ asset('assets')}}/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="{{ asset('assets')}}/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="{{ asset('assets')}}/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="{{ asset('assets')}}/js/maps.js"></script>
    <!-- others plugins -->
    <script src="{{ asset('assets')}}/js/plugins.js"></script>
    <script src="{{ asset('assets')}}/js/scripts.js"></script>
@yield('js')
</body>

</html>