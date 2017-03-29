<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>MS-IDI</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://allfont.net/allfont.css?fonts=montserrat" rel="stylesheet" type="text/css" />
        <link href="http://allfont.net/allfont.css?fonts=montserrat-bold" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?= env( 'ROOT_PATH' );?>/css/jquery.bxslider.css">
        <link rel="stylesheet" href="<?= env( 'ROOT_PATH' );?>/css/app.css">
        <link rel="stylesheet" type="text/css" href="<?= env( 'ROOT_PATH' );?>/css/cs-select.css" />

        <link rel="stylesheet" type="text/css" href="<?= env( 'ROOT_PATH' );?>/css/cs-skin-elastic.css" />
    </head>
    <body>





        @if( \Request::path() == '/' )
            @include('layouts.navbar')
        @else
            @include('layouts.navbar2')
        @endif

        @yield('content')

        @include('layouts.footer')




        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/classie.js"></script>
        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/selectFx.js"></script>
        <script src='//maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyC65qTskUjsL4_7f9gWsNfkGbUJ5p5bXv0'></script>
        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/countUp.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

        <script src="<?= env( 'ROOT_PATH' );?>/js/vendor/jquery.bxslider.min.js"></script>
        <script src="<?= env( 'ROOT_PATH' );?>/js/all.js"></script>
    </body>
</html>
