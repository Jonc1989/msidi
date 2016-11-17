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