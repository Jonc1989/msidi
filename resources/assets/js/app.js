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