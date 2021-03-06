<!doctype html>
<html class="no-js" lang="en" ng-app="rkf2016" ng-strict-di>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Robin Kessinger West VA State Flatpick Guitar Contest & Workshops</title>
    <meta name="description" content="Proudly partnered with the Fly In Festival, Aug 23-24 2019">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">

    @include('tags.fb')
    @include('tags.favicon')
    
    <link rel="stylesheet" href="/app.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body ng-controller="pageController">
    @include('tags.ga')
    <!--[if lte IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('partials.nav')
    @include('partials.header')
    <hr>
    <main>
        @include('partials.about')
        <hr>
        @include('partials.location-directions')
        <hr>
        @include('partials.contest-information')
        <hr>
        @include('partials.tickets-admission')
        <hr>
        @include('partials.contact-us')
    </main>
    <hr>
    @include('partials.footer')

    <script src="/app.js"></script>
    @include('tags.webfont')
</body>

</html>
