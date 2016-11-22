<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        @include('layouts.navbar')
        @include('modules.slider.index')
        @include('modules.services.index')
        @include('modules.technology.index')
        @include('modules.clients.index')
        @include('modules.case_studies.index')
        @include('modules.company.index')
        @include('modules.career.index')
        @include('layouts.footer')

        <div class="container">
            @yield('content')
        </div>





        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="/js/vendor/jquery.bxslider.min.js"></script>
        <script src="/js/all.js"></script>
    </body>
</html>
