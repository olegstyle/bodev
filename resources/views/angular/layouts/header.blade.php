<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <base href="/">
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

        <title>{{ $seo_title }}</title>
        <meta property="og:title" content="{{ $seo_title }}" />
        <meta name="title" content="{{ $seo_title }}" />
        <meta itemprop="name" content="{{ $seo_title }}">

        <meta name="description" content="{{ $seo_description }}" />
        <meta property="og:description" content="{{ $seo_description }}" />
        <meta itemprop="description" content="{{ $seo_description }}">

        <meta name="keywords" content="{{ $seo_keywords }}" />
        <meta property="og:keywords" content="{{ $seo_keywords }}" />
        <meta itemprop="keywords" content="{{ $seo_keywords }}">

        <link rel="image_src" href="{{ $seo_image }}" />
        <meta property="og:image" content="{{ $seo_image }}" />
        <meta itemprop="image" content="{{ $seo_image }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
