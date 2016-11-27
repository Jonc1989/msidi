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