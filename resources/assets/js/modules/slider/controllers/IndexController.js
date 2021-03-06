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
        }, 9000);
    };

    $scope.makeInActiveFirstSlide = function (e) {
        $scope.secondInterval = setTimeout(function () {
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('leaving');
            $( '.amber-bg' ).removeClass('first-slide');
        },9000);
    };

    $scope.initSlider = function () {

        $(window).load(function () {



            $scope.slider = $('.bxslider').bxSlider({
                minSlides: 1,
                moveSlides: 1,
                easing: 'ease-out',
                speed: 0,
                pager: !0,
                pause: 10000,
                infiniteLoop: true,
                autoControls: false,
                controls: false,
                hideControlOnEnd: !0,
                auto: true,
                autoStart: true,
                stopAutoOnClick: false,
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
            $('.bx-pager-link').click( function (e) {
                clearTimeout( $scope.interval );
                clearTimeout( $scope.secondInterval );
                $scope.slider.stopAuto();
                $scope.slider.startAuto();
                //$('.bx-start').click();
            });

            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
            $scope.makeInActiveFirstSlide();

        });

    };
    
    

}]);