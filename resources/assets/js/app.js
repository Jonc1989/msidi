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

    var scroll = $(window).scrollTop();
    console.log( scroll);
    console.log( $(document).height());

    if (scroll > $(document).height()) {
        $(".year").addClass("active");
        $(".year-txt").addClass("active");
        $('.partner .image').addClass( 'active' );
    }

    $(window).on('scroll',function() {
        var scroll = $(window).scrollTop();

        if (scroll >= $(document).height()) {
            $(".year").addClass("active");
            $(".year-txt").addClass("active");
            $('.partner .image').addClass( 'active' );
        }
        // else {
        //     $(".years").removeClass("darkHeader");
        // }
    });

});