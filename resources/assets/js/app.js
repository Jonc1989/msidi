var app = angular.module( 'app', [
   'caseStudies',
    'clients',
    'company',
    'career',
    'slider'
] );

$(document).ready(function(){

    $(".nav li > a").click(function(e) {
        e.preventDefault();
        var top = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(top).offset().top
        }, 1500)
    })

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