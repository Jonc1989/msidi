/**
 * Created by Admin on 03.03.2017..
 */
service.controller( 'ServiceController', [ '$scope', function ( $scope ){

    $scope.currentScroll = null;
    $scope.currentBreakpoint = null;
    var counter = new countUp('project-count', 1, 8, 0, 2)
    counter.start();

    $(window).load(function () {
        $scope.scroll = $(window).scrollTop();
        $scope.height = $(window).height();
        $scope.projects = $('#services .project-count-wrap' ).offset().top;
        $scope.projectsHeight = $('#services .project-count-wrap' ).height();
        $scope.breakpoint = ( $scope.scroll + ( $scope.height / 2 ));

        if ( $scope.breakpoint > ( $scope.projects - 100 ) &&  $scope.breakpoint < ( $scope.projects + $scope.projectsHeight + 100 ) ) {
            //$(".year").addClass("active");
console.log('fddf');
        }


        $(window).on('scroll',function() {
            $scope.currentScroll = $(window).scrollTop();
            $scope.currentBreakpoint = ( $scope.currentScroll + ( $scope.height / 2 ));

            if ( $scope.currentBreakpoint > ( $scope.projects - 100 )
                && $scope.currentBreakpoint < ( $scope.projects + $scope.projectsHeight + 100 ) ){

                //$(".year").addClass("active");
                console.log('fddf');
            }
        });

    });
}]);