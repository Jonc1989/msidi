var app = angular.module( 'app', [
    'caseStudies',
    'clients',
    'company',
    'career',
    'slider',
    'service'
] );

$(document).ready(function(){

    $(".home li > a").click(function(e) {
        e.preventDefault();
        var top = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(top).offset().top
        }, 1500)
    })

});

var career = angular.module('career', [

]);
var caseStudies = angular.module('caseStudies', [

]);

caseStudies.controller( 'OpalOnlineController', [ '$scope', function ( $scope){

    $scope.equalheight = function(e) {
        var t, a = 0,
            i = 0,
            o = new Array;
        $(e).each(function() {
            if (t = $(this), $(t).height("auto"), topPostion = t.position().top, i != topPostion) {
                for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(a);
                o.length = 0, i = topPostion, a = t.height(), o.push(t)
            } else o.push(t), a = a < t.height() ? t.height() : a;
            for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(a)
        })
    };

    this.$onInit = function () {
        $scope.equalheight('.team-member');
    };

    $( window ).resize(function() {
        $scope.equalheight('.team-member');
    });

}]);
var clients = angular.module('clients', [

]);
var company = angular.module('company', [

]);
/**
 * Created by Jānis Mozais on 03.03.2017..
 */
var service = angular.module('service', [

]);
var slider = angular.module('slider', [

]);
career.service( 'CareerService', ['$http', '$q', function( $http, $q )
{
    var CareerService = {

        sendMail: function( message )
        {
            var deferred = $q.defer();
            $http.post( '/api/career/send', message )
                .success( function( response )
                {
                    deferred.resolve( response );
                } )
                .error( function( response, status )
                {
                    if (status === 422)
                    {
                        deferred.resolve({errors: response});
                    } else
                    {
                        deferred.reject();
                    }
                } );

            return deferred.promise;

        }
    };
    return CareerService;
}]);

career.controller( 'CareerController', [ '$scope', 'CareerService', function ( $scope, CareerService ){


    $scope.careerForm = {};

    $scope.vacancy = {
        position: '',
        email: '',
        message: ''
    };

    $scope.loading = true;

    $scope.removeErrors = function(){
        $('#career .form-group' ).removeClass( 'has-error' );
    };

    $scope.setFormScope = function( form )
    {
        $scope.careerForm = form;
    };

     $scope.send = function () { console.log($scope.careerForm);
        if( !$scope.careerForm.$invalid ){
            CareerService.sendMail( $scope.vacancy ).then(function (response) {
                $scope.vacancy = {
                    position: '',
                    email: '',
                    message: ''
                };
            });
        }else{
            $scope.removeErrors();
            for (var property in $scope.vacancy) {
                if( $scope.careerForm[property].$invalid ){ 
                    var $field = $( '[name="' + property + '"]' );
                    if( $field ) {
                        $field.closest( '.form-group' ) .addClass( 'has-error' );
                    }
                }
            }
        }
     };

    $scope.toggleMe = function ( event ) { console.log(event)
        $( event.target ).parent().find('.plus').toggleClass( 'open' );
    };

}]);
caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', '$animate',
    function ( $scope, CaseStudiesService, $animate){

    $scope.caseStudies = [];
    $scope.categories = [];
    $scope.count = null;

    this.$onInit = function () {};

    $scope.sortCategories = function () {
        $scope.caseStudies.forEach( function ( project ) {
            if( $.inArray( project.categories.name , $scope.categories ) == -1 ){
                $scope.categories.push( project.categories.name );
            }
        });
    };

    $scope.setCount = function ( count ) {
        $scope.count = count;              $scope.getData();
    };

    $scope.visible = 'all';

    $scope.filter = function ( category, event ) {
        $( '.categories .category' ).removeClass( 'active' );
        $scope.visible = category;
        $( event.currentTarget).addClass( 'active' );
    };

    $scope.showPosts = function ( category ) {
        return $scope.visible === 'all' || $scope.visible === category;
    };

    $scope.getData = function(){
        CaseStudiesService.all( $scope.count ).then(function(response)
        {
            $scope.caseStudies = response;
            $scope.sortCategories();
        });
    };


}]);
caseStudies.service( 'CaseStudiesService', ['$http', '$q', function( $http, $q )
{
    var CaseStudiesService = {

        all: function( count )
        {
            var deferred = $q.defer();
            $http.get( '/api/case-studies', {params:{ count: count }} )
                .success( function( response )
                {
                    deferred.resolve( response );
                } )
                .error( function( response, status )
                {
                    if (status === 422)
                    {
                        deferred.resolve({errors: response});
                    } else
                    {
                        deferred.reject();
                    }
                } );

            return deferred.promise;

        }
    };
    return CaseStudiesService;
}]);
caseStudies.controller( 'ClientsController', [ '$scope', function ( $scope ){

    $scope.clients = [];

    this.$onInit = function () {

        var slider = $('.client-slider').bxSlider({
            slideWidth: 820,
            minSlides: 1,
            moveSlides: 1,
            speed: 0,
            useCSS: true,
            pager: false,
            pause: 10000,
            infiniteLoop: true,
            controls: true,
            slideMargin: 20,
            auto: true,
            onSliderLoad: function () {
                $('.client-slide').addClass('animate');
            },
            onSlideBefore: function (e) {
                $('.client-slide').removeClass('active');
                $('.client-slide').removeClass('animate');
            },
            onSlideAfter: function (e) {
                $(e).find('.client-slide').addClass('active');
                $('.client-slide').addClass('animate');
            }

        });
       // setTimeout(function () {
            slider.getCurrentSlideElement().find('.client-slide').addClass('active');
       // },500);

        $( '.holder' ).show();
    };

    $(window).load(function () {
        var scroll = $(window).scrollTop();
        var height = $(window).height();
        var partners = $('#clients .partnerz' ).offset().top;
        var partnersHeight = $('#clients .partnerz' ).height();
        var breakpoint = ( scroll + ( height / 2 ));

        if ( breakpoint > ( partners - 100 ) &&  breakpoint < ( partners + partnersHeight + 100 ) ) {
            $(".year").addClass("active");
            $(".year-txt").addClass("active");
            $('.partner .image').addClass( 'active' );
        }


        $(window).on('scroll',function() {
            var currentScroll = $(window).scrollTop();
            var currentBreakpoint = ( currentScroll + ( height / 2 ));

            if ( currentBreakpoint > ( partners - 100 ) &&  currentBreakpoint < ( partners + partnersHeight + 100 ) ){

                $(".year").addClass("active");
                $(".year-txt").addClass("active");
                $('.partner .image').addClass( 'active' );
            }
        });

    });


}]);
company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    $scope.contactForm = {};

    $scope.message = {
        cfsender: '',
        cfemail: '',
        cfsubject: '',
        cftext: ''
    };
    
    $scope.loading = true;
    
    this.$onInit = function () {
        $scope.init_map();
    };

    $scope.setFormScope = function( form )
    {
        $scope.contactForm = form;
    };

    $scope.removeErrors = function(){
        $('#company .form-group' ).removeClass( 'has-error' );
    };

    $scope.send = function () { 
        if(
            //!$scope.loading &&
            !$scope.contactForm.$invalid ){
            //$scope.loading = true;
            
            CompanyService.sendMail( $scope.message ).then(function (response) {
                //$scope.loading = false;

                $scope.message = {
                    cfsender: '',
                    cfemail: '',
                    cfsubject: '',
                    cftext: ''
                };

            });
        }else{
            $scope.removeErrors();
            for (var property in $scope.message) {

                    if( $scope.contactForm[property].$invalid ){
                        var $field = $( '[name="' + property + '"]' ); console.log($field);
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .addClass( 'has-error' );
                        }
                    }

            }

        }
        
    };

    $scope.init_map = function (){
        var myOptions = {
            zoom:14,
            center:new google.maps.LatLng(56.526248,27.357412599999975),
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.526248,27.357412599999975)});
        infowindow = new google.maps.InfoWindow({content:'<strong> </strong><br>Rēzekne, Maskavas 22<br>'});
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        //infowindow.open(map,marker);
        //google.maps.event.addDomListener(window, 'load', init_map);
    }

}]);
company.service( 'CompanyService', ['$http', '$q', function( $http, $q )
{
    var CompanyService = {

        sendMail: function( message )
        {
            var deferred = $q.defer();
            $http.post( '/api/company/send', message )
                .success( function( response )
                {
                    deferred.resolve( response );
                } )
                .error( function( response, status )
                {
                    if (status === 422)
                    {
                        deferred.resolve({errors: response});
                    } else
                    {
                        deferred.reject();
                    }
                } );

            return deferred.promise;

        }
    };
    return CompanyService;
}]);
/**
 * Created by Admin on 03.03.2017..
 */
service.controller( 'ServiceController', [ '$scope', function ( $scope ){

    $scope.currentScroll = null;
    $scope.currentBreakpoint = null;
    $scope.countFinished = false;
    $(window).load(function () {

        var counter = new countUp('project-count', 1, 8, 0, 2);


        $scope.scroll = $(window).scrollTop();
        $scope.height = $(window).height();
        $scope.projects = $('#services .project-count-wrap' ).offset().top;
        $scope.projectsHeight = $('#services .project-count-wrap' ).height();
        $scope.breakpoint = ( $scope.scroll + ( $scope.height / 2 ));
        
        if ( $scope.breakpoint > ( $scope.projects - 100 ) &&  $scope.breakpoint < ( $scope.projects + $scope.projectsHeight + 100 ) ) {
            $scope.countFinished = true;
            counter.start();

        }


        $(window).on('scroll',function() {
            $scope.currentScroll = $(window).scrollTop();
            $scope.currentBreakpoint = ( $scope.currentScroll + ( $scope.height / 2 ));

            if ( $scope.currentBreakpoint > ( $scope.projects - 100 )
                && $scope.currentBreakpoint < ( $scope.projects + $scope.projectsHeight + 100 ) ){

                if( !$scope.countFinished ){
                    $scope.countFinished = true;
                    counter.start();

                }

            }
        });

    });
}]);
slider.controller( 'IndexController', [ '$scope', function ( $scope ){

    $scope.slider = {};

    this.$onInit = function () {
        $scope.initSlider();
    };

    $scope.interval = null;
    $scope.secondInterval = null;

    $scope.makeActive = function (e) {
        $(e).find('.inner-bg').addClass('active');
    };

    $scope.makeInActive = function (e) {
        $scope.interval = setTimeout(function () {
            $(e).find('.inner-bg').addClass('leaving')
        }, 3000);
    };

    $scope.makeInActiveFirstSlide = function (e) {
        $scope.secondInterval = setTimeout(function () {
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('leaving');
            $( '.amber-bg' ).removeClass('first-slide');
        },3000);
    };

    $scope.initSlider = function () {

        $(window).load(function () {



            $scope.slider = $('.bxslider').bxSlider({
                minSlides: 1,
                moveSlides: 1,
                easing: 'ease-out',
                speed: 0,
                pager: !0,
                pause: 4000,
                infiniteLoop: true,
                autoControls: false,
                controls: false,
                hideControlOnEnd: !0,
                auto: true,
                autoStart: true,
                stopAutoOnClick: false,
                tickerHover: false,
                touchEnabled: false,
                onSliderLoad: function (currentIndex) {
                    //console.log( 'onSliderLoad' );
                },
                onSlideBefore: function (e) {
                    $('.inner-bg').removeClass('active');
                    $('.inner-bg').removeClass('leaving');

                },
                onSlideAfter: function (e) {
                    setTimeout($scope.makeActive( e ), 50);
                    $scope.makeInActive(e);
                }

            });
            
            // $('.bx-prev').click( function () {
            //     clearTimeout( $scope.interval );
            //     clearTimeout( $scope.secondInterval );
            //     $scope.slider.startAuto(true);
            // });
            // $('.bx-next').click( function () {
            //     clearTimeout( $scope.interval );
            //     clearTimeout( $scope.secondInterval );
            //     $scope.slider.startAuto(true);
            // });
            //
            // $('.bx-pager-link').click( function (e) {
            //     clearTimeout( $scope.interval );
            //     clearTimeout( $scope.secondInterval );
            //     $scope.slider.startAuto();
            //     //$('.bx-start').click();
            // });

            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
            $scope.makeInActiveFirstSlide();

        });

    };
    
    

}]);
//# sourceMappingURL=all.js.map
