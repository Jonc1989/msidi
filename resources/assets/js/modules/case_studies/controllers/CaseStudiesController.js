caseStudies.controller( 'CaseStudiesController', [ '$scope', 'CaseStudiesService', function ( $scope, CaseStudiesService){

    $scope.caseStudies = [];

    this.$onInit = function () {
        $scope.getData();
    };

    $scope.getData = function(){
        CaseStudiesService.all().then(function(response)
        {
            $scope.caseStudies = response;
        });
    };
}]);