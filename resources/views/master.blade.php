<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?=  url('/') ?>/css/jquery.bxslider.css">
        <link rel="stylesheet" href="<?=  url('/') ?>/css/app.css">
        <!--<link rel="stylesheet" href="<?=  url('/') ?>/css/ngAnimate.css">-->
    </head>
    <body>





        @if( \Request::path() == '/' )
            @include('layouts.navbar')
        @else
            @include('layouts.navbar2')
        @endif

        @yield('content')

        @include('layouts.footer')




        <script src="<?=  url('/') ?>/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="<?=  url('/') ?>/js/vendor/bootstrap.min.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <script src="<?=  url('/') ?>/js/vendor/countUp.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

        <script src="<?=  url('/') ?>/js/vendor/jquery.bxslider.min.js"></script>
        <script src="<?=  url('/') ?>/js/all.js"></script>
    </body>
</html>
