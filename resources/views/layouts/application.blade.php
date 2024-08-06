<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-90680653-2");
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template" />
    <meta name="author" content="BootstrapDash" />

    <title>Union Aid Archieve System</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet" />
    <!-- <link href="{{ asset('assets/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" /> -->
    <!-- <link href="{{asset('assets/lib/pickerjs/picker.min.css')}}" rel="stylesheet" /> -->

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/azia.css')}}" />
</head>

<body>
    <!--  az-header-->
    @include('layouts.header')
    <!-- az-header -->


    @yield('content')



    @include('layouts.footer')
    <!-- az-footer -->

    <script src="{{ asset('assets/lib/jquery/jquery.min.js')}}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script> -->

    <script src="{{ asset('assets/lib/popper.js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/lib/ionicons/ionicons.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/lib/chart.js/Chart.bundle.min.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/lib/peity/jquery.peity.min.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/js/chart.flot.sampledata.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/js/dashboard.sampledata.js')}}"></script> -->
    <!-- <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script> -->
    <script src="{{ asset('assets/js/azia.js')}}"></script>
    <script src="{{ asset('assets/js/ajax.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('validator')
    @yield('custom-js')
</body>

</html>