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
        speed: 1000,
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
                $(e).find('.inner-bg').removeClass('active');
            },497);

        },
        onSlideAfter: function (e) {
            setTimeout(function () {
                $(e).find('.inner-bg').addClass('active');
            },500);

        }

    });
    setTimeout(function () {
    slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
    },500);
});
var caseStudies = angular.module('caseStudies', [

]);
var clients = angular.module('clients', [

]);
var company = angular.module('company', [

]);
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
caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', function ( $scope, CaseStudiesService){

    $scope.caseStudies = [];

    this.$onInit = function () {
        $scope.getData();
    };

    $scope.getData = function(){
        CaseStudiesService.all().then(function(response)
        {
            $scope.caseStudies = response;
            console.log(response)
        });
    };
}]);
caseStudies.controller( 'ClientsController', [ '$scope', function ( $scope ){

    $scope.clients = [];

    this.$onInit = function () {

        var slider = $('.client-slider').bxSlider({
            slideWidth: 820,
            minSlides: 1,
            moveSlides: 1,
            slideMargin: 20,
            pager: !0,
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
company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    this.$onInit = function () {
        
    };

    $scope.send = function () {
        CompanyService.sendMain().then(function (response) {
            console.log( response );
        });
    }

}]);
company.service( 'CompanyService', ['$http', '$q', function( $http, $q )
{
    var CompanyService = {

        sendMain: function(  )
        {
            var deferred = $q.defer();
            $http.get( '/api/company/send' )
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
//# sourceMappingURL=all.js.map
