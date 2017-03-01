slider.controller( 'IndexController', [ '$scope', function ( $scope ){

    $scope.slider = {};

    this.$onInit = function () {
        $scope.initSlider();
    };

    $scope.interval = null;

    $scope.makeActive = function (e) {
        $(e).find('.inner-bg').addClass('active');
    };

    $scope.makeInActive = function (e) {
        $scope.interval = setTimeout(function () {
            $(e).find('.inner-bg').addClass('leaving')
        }, 3500);
    }


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

                    console.log( 'Before' );
                },
                onSlideAfter: function (e) {
                    setTimeout($scope.makeActive( e ), 50);
                    $scope.makeInActive(e);
                    console.log( 'After' );


                }

            });
            
            // $('.bx-prev').click( function () {
            //     $scope.slider.startAuto();
            // });
            // $('.bx-next').click( function () {
            //     $scope.slider.startAuto();
            // });
            $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('active');
            setTimeout(function () {
                $scope.slider.getCurrentSlideElement().find('.inner-bg').addClass('leaving');
                $( '.amber-bg' ).removeClass('first-slide');
            },3500);

        });

    };
    
    

}]);