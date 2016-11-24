slider.controller( 'IndexController', [ '$scope', function ( $scope ){

    $scope.slider = {};

    this.$onInit = function () {
        $scope.initSlider();
    };

    $scope.initSlider = function () {

        $(document).ready(function(){

            $scope.slider = $('.bxslider').bxSlider({
                minSlides: 1,
                moveSlides: 1,
                easing: 'ease-out',
                speed: 0,
                pager: !0,
                pause: 4000,
                infiniteLoop: true,
                useCSS: false,
                controls: !1,
                hideControlOnEnd: !0,
                auto: true,
                tickerHover: true,
                touchEnabled: true,
                onSliderLoad: function (currentIndex) {
                    $( '#slider' ).css( 'opacity', 1 );
                },
                onSlideBefore: function (e) {
                    //setTimeout(function () {
                    $('.inner-bg').removeClass('active');
                    $('.inner-bg').removeClass('leaving');
                    //},497);

                },
                onSlideAfter: function (e) {
                    setTimeout(function () {
                        $(e).find('.inner-bg').addClass('active');
                    },50);
                    setTimeout(function () {
                        $(e).find('.inner-bg').addClass('leaving');
                    },3000);

                }

            });
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
            setTimeout(function () {
                $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('leaving');
            },3000);

        });

    };
    
    

}]);