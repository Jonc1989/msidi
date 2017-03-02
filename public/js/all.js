var app = angular.module( 'app', [
   'caseStudies',
    'clients',
    'company',
    'career',
    'slider'
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
var clients = angular.module('clients', [

]);
var company = angular.module('company', [

]);
var slider = angular.module('slider', [

]);
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

caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', '$animate',
    function ( $scope, CaseStudiesService, $animate){

    $scope.caseStudies = [];

    this.$onInit = function () {
        $scope.getData();
    };

    $scope.visible = 'all';

    $scope.filter = function ( category ) {
        $scope.visible = category;
    };

    $scope.showPosts = function ( category ) {
        return $scope.visible === 'all' || $scope.visible === category;
    };
    


    $scope.getData = function(){
        CaseStudiesService.all( 6 ).then(function(response)
        {
            $scope.caseStudies = response;
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
            slideMargin: 20,
            speed: 500,
            pager: !1,
            infiniteLoop: !0,
            controls: !0,
            hideControlOnEnd: !0,
            auto: false,
            tickerHover: true,
            touchEnabled: true,
            onSliderLoad: function () {

            },
            onSlideBefore: function (e) {
                //setTimeout(function () {
                    //$(e).removeClass('active');
                    $('.client-slide').removeClass('active');
                //},497);

            },
            onSlideAfter: function (e) { console.log( e);
                //setTimeout(function () {
                    $(e).find('.client-slide').addClass('active');
                //},500);

            }

        });
       // setTimeout(function () {
            slider.getCurrentSlideElement().find('.client-slide').addClass('active');
       // },500);

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
        }, 3500);
    };

    $scope.makeInActiveFirstSlide = function (e) {
        $scope.secondInterval = setTimeout(function () {
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('leaving');
            $( '.amber-bg' ).removeClass('first-slide');
        },3500);
    };

    $scope.initSlider = function () {

        $(window).load(function () {



            $scope.slider = $('.bxslider').bxSlider({
                minSlides: 1,
                moveSlides: 1,
                easing: 'ease-out',
                speed: 0,
                pager: !1,
                pause: 4000,
                infiniteLoop: true,
                useCSS: false,
                controls: !0,
                hideControlOnEnd: !0,
                auto: true,
                tickerHover: true,
                touchEnabled: true,
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
            
            $('.bx-prev').click( function () {
                clearTimeout( $scope.interval );
                clearTimeout( $scope.secondInterval );
                $scope.slider.startAuto(true);
            });
            $('.bx-next').click( function () {
                clearTimeout( $scope.interval );
                clearTimeout( $scope.secondInterval );
                $scope.slider.startAuto(true);
            });
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
            $scope.makeInActiveFirstSlide();

        });

    };
    
    

}]);
//# sourceMappingURL=all.js.map
