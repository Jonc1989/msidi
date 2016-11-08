var app = angular.module( 'app', [
   'caseStudies'
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
//# sourceMappingURL=all.js.map
