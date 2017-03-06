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