slider.controller( 'IndexController', [ '$scope', function ( $scope ){

    $scope.slider = {};

    this.$onInit = function () {
        $scope.initSlider();
    };

    $scope.makeActive = function (e) {
        $(e).find('.inner-bg').addClass('active');
    };

    $scope.makeInActive = function (e) {
        $(e).find('.inner-bg').addClass('leaving');
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
                    //$( '#slider' ).css( 'opacity', 1 );
                },
                onSlideBefore: function (e) {
                    //setTimeout(function () {
                    $('.inner-bg').removeClass('active');
                    $('.inner-bg').removeClass('leaving');
                    //},497);

                },
                onSlideAfter: function (e) {
                    setTimeout($scope.makeActive( e ), 50);

                    //setTimeout( $scope.makeInActive( e ), 3000);

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
            },3000);

        });

    };
    
    

}]);