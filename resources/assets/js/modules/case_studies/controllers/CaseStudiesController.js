caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', '$animate',
    function ( $scope, CaseStudiesService, $animate){

    $scope.caseStudies = [];

    this.$onInit = function () {
        $scope.getData();
    };

    $scope.visible = 'all';

    $scope.filter = function ( category ) {
        $scope.visible = category;
    };

    $scope.showPosts = function ( category ) {
        return $scope.visible === 'all' || $scope.visible === category;
    };
    


    $scope.getData = function(){
        CaseStudiesService.all( 6 ).then(function(response)
        {
            $scope.caseStudies = response;
        });
    };


}]);