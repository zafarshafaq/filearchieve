<html>

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Union Aid Archieve System</title>
    <!-- vendor css -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/2.1.2/css/dataTables.bootstrap4.css') }}">

    <!-- <link href="{{ asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/lib/pickerjs/picker.min.css')}}" rel="stylesheet"> -->

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/azia.css')}}">
</head>

<body>


    <div class="az-header">
        <div class="container">
            <div class="az-header-left">
                <a href="index.html" class="az-logo"><span>Union</span> <span style="color: #000;">Aid</span> </a>

                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="index.html" class="az-logo"><span></span> azia</a>
                    <a href="" class="close">&times;</a>
                </div><!-- az-header-menu-header -->
                <ul class="nav">
                    <li class="nav-item active show">
                        <a href="user_index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i>
                            Dashboard</a>
                    </li>


                </ul>
            </div><!-- az-header-menu -->
            <div class="az-header-right">
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="../assets/img/faces/face1.jpg" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="../assets/img/faces/face1.jpg" alt="">
                            </div><!-- az-img-user -->
                            <h6>Aziana Pechon</h6>
                            <span>Premium Member</span>
                        </div><!-- az-header-profile -->

                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                                    class="typcn typcn-power-outline"></i> Sign
                                Out</a>

                        </form>


                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->



    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
        <div class="container">

            <div class="az-content-body pd-lg-l-40 d-flex flex-column">

                @yield('content')

                <div class="ht-40"></div>
                <div class="az-footer ht-40">
                    <div class="container ht-100p pd-t-0-f">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            <span style="color: #0099d4;">Union</span>&nbsp; <span
                                style="color: black; font-weight: bold;">Aid</span>
                            2024</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Developed By <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> <span
                                    style="color: black;">IT Department at</span></a>

                            <span style="color: #0099d4;">Union</span>&nbsp; <span
                                style="color: black; font-weight: bold;">Aid</span>
                        </span>
                    </div><!-- container -->
                </div><!-- az-footer -->


            </div>


        </div>
    </div>










    <script src="{{ asset('assets/lib/jquery/jquery.min.js')}}"></script>


    <script src="{{ asset('assets/lib/popper.js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('https://cdn.datatables.net/2.1.2/js/dataTables.js')}}"></script>
    <script src="{{ asset('https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap4.js')}}"></script>




    <script src="{{ asset('assets/js/azia.js')}}"></script>

    @yield('script')
</body>

</html>