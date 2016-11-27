var app = angular.module( 'app', [
    'ngAnimate',
   'caseStudies',
    'clients',
    'company',
    'career',
    'slider'
] );

$(document).ready(function(){

    $(".home li > a").click(function(e) {
        e.preventDefault();
        var top = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(top).offset().top
        }, 1500)
    })

});
