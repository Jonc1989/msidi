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




    var lastScrollTop = 0;
    var stickyNav = function(){

        var scrollTop = $(window).scrollTop();

        if (scrollTop > lastScrollTop || scrollTop < 100){
            // downscroll code
            $('.nav-container').removeClass('sticky');
            $('body').removeClass('navbar-placeholder');
        } else {
            // upscroll code
            $('.nav-container').addClass('sticky');
            $('body').addClass('navbar-placeholder');
        }
        lastScrollTop = scrollTop;

    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });


    // var lastScrollTop = 0;
    // $(window).scroll(function(event){
    //     var st = $(this).scrollTop();
    //     if (st > lastScrollTop){
    //         // downscroll code
    //     } else {
    //         // upscroll code
    //     }
    //     lastScrollTop = st;
    // });

});
