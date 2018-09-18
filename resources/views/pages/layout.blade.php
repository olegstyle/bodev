<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="img/ico" href="/favicon.ico">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4cc3bf">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4cc3bf">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4cc3bf">

    <title>@yield('title', 'BODev')</title>

    <!-- Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

@yield('content')

<footer>
    <p> <span>Made by Borysenko Oleh
                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;</span>
        Copyright © 2017 - {{ date("Y") }}
        &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
        All rights reserved
    </p>
</footer>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-92535217-1', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mixitup.pagination.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>

