var app = angular.module( 'app', [
    'caseStudies',
    'clients',
    'company',
    'career',
    'slider',
    'service'
] );

$(document).ready(function(){

    $(".home li > a").click(function(e) {
        e.preventDefault();
        var top = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(top).offset().top
        }, 1500)
    });








    var stickyNavTop = $('.nav-container').offset().top;

    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop + 100 ) {
            $('.nav-container').addClass('sticky');
        } else {
            $('.nav-container').removeClass('sticky');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });

});
