caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', '$animate',
    function ( $scope, CaseStudiesService, $animate){

    $scope.caseStudies = [];
    $scope.categories = [];
    $scope.count = null;

    this.$onInit = function () {};

    $scope.sortCategories = function () {
        $scope.caseStudies.forEach( function ( project ) {
            if( $.inArray( project.categories.name , $scope.categories ) == -1 ){
                $scope.categories.push( project.categories.name );
            }
        });
    };

    $scope.setCount = function ( count ) {
        $scope.count = count;              $scope.getData();
    };

    $scope.visible = 'all';

    $scope.filter = function ( category, event ) {
        $( '.categories .category' ).removeClass( 'active' );
        $scope.visible = category;
        $( event.currentTarget).addClass( 'active' );
    };

    $scope.showPosts = function ( category ) {
        return $scope.visible === 'all' || $scope.visible === category;
    };

    $scope.getData = function(){
        CaseStudiesService.all( $scope.count ).then(function(response)
        {
            $scope.caseStudies = response;
            $scope.sortCategories();
        });
    };


}]);