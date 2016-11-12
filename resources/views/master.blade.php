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


        <div class="container">

            @include('modules.technology.index')




            @yield('content')

        </div>
        @include('modules.clients.index')
        @include('modules.case_studies.index')
        @include('modules.company.index')
        @include('modules.career.index')
        @include('layouts.footer')




        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="/js/vendor/jquery.bxslider.min.js"></script>
        <script src="/js/all.js"></script>
    </body>
</html>
