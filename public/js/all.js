var app = angular.module( 'app', [
   'caseStudies',
    'clients',
    'company'
] );

$(document).ready(function(){
    var slider = $('.bxslider').bxSlider({
        minSlides: 1,
        moveSlides: 1,
        easing: 'ease-out',
        speed: 500,
        pager: !1,
        infiniteLoop: !0,
        controls: !1,
        hideControlOnEnd: !0,
        auto: true,
        tickerHover: true,
        touchEnabled: true,
        onSliderLoad: function () {

        },
        onSlideBefore: function (e) {
            setTimeout(function () {
                $('.inner-bg').removeClass('active');
            },497);

        },
        onSlideAfter: function (e) {
            setTimeout(function () {
                $(e).find('.inner-bg').addClass('active');
            },500);

        }

    });
    //setTimeout(function () {
    slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
    //},500);

    $('.navbar-nav > li > a').hover(function () {
        $( this ).toggleClass( 'hover' );
    });






















});
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
var caseStudies = angular.module('caseStudies', [

]);
var company = angular.module('company', [

]);
var clients = angular.module('clients', [

]);
caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', function ( $scope, CaseStudiesService){

    $scope.caseStudies = [];

    this.$onInit = function () {
        $scope.getData();
    };

    $scope.getData = function(){
        CaseStudiesService.all().then(function(response)
        {
            $scope.caseStudies = response;
        });
    };
}]);
caseStudies.service( 'CaseStudiesService', ['$http', '$q', function( $http, $q )
{
    var CaseStudiesService = {

        all: function(  )
        {
            var deferred = $q.defer();
            $http.get( '/api/case-studies/' )
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
company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    $scope.contactForm = {};

    $scope.message = {
        cfsender: $scope.cfsender,
        cfemail: $scope.cfemail,
        cfsubject: $scope.cfsubject,
        cftext: $scope.cftext
    };
    
    $scope.loading = true;
    
    this.$onInit = function () {

    };

    $scope.setFormScope = function( form )
    {
        $scope.contactForm = form;
    };

    $scope.send = function () { 
        if(
            //!$scope.loading &&
            !$scope.contactForm.$invalid ){
            //$scope.loading = true;

            for (var property in $scope.message) {


                        var $field = $( '[name="' + property + '"]' );
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .removeClass( 'has-error' );
                        }

            }


            CompanyService.sendMain( $scope.message ).then(function (response) {
                //$scope.loading = false;

                    $scope.cfsender = '';
                    $scope.cfemail = '';
                    $scope.cfsubject = '';
                    $scope.cftext = '';

            });
        }else{
            for (var property in $scope.message) { console.log( property);

                    console.log( $scope.contactForm[property] )
                    if( $scope.contactForm[property].$invalid ){ console.log( $scope.contactForm[property].$invalid );
                        var $field = $( '[name="' + property + '"]' );
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .addClass( 'has-error' );
                        }
                    }

            }

        }
        
    };



}]);
company.service( 'CompanyService', ['$http', '$q', function( $http, $q )
{
    var CompanyService = {

        sendMain: function( message )
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


}]);
//# sourceMappingURL=all.js.map
