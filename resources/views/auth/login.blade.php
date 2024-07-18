<!DOCTYPE html>
<html lang="en">

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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Union Aid Archieve System</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('')}}assets/css/azia.css">

</head>

<body class="az-body">

    <div class="az-signin-wrapper">
        <div class="az-card-signin">
            <h1 class="az-logo ">
                <img src="{{ asset('assets/img/logo.jpg')}}" class="mx-auto d-block" width="150px;" alt="">
            </h1>
            <div class="az-signin-header">
                <h2 class="text-center">Union Aid Archieve</h2>


                <form method="POST" action="{{ route('login') }}">
                @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <!-- <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your Email"
                            value="{{ old('email')}}" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->


                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                    </div><!-- form-group -->




                    <!-- Password -->
                    <div class="form-group">


                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />


                        <!-- <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password"
                            value="thisisademo"> -->
                    </div><!-- form-group -->


                    <x-primary-button class="btn btn-az-primary btn-block">
                {{ __('Log in') }}
                     </x-primary-button>

                </form>
            </div><!-- az-signin-header -->
            <div class="az-signin-footer">

            
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
                <p>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                </p>
                <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
            </div><!-- az-signin-footer -->
        </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="{{ asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/azia.js')}}"></script>
    <script>
        $(function () {
            'use strict'
        });
    </script>
</body>

</html>