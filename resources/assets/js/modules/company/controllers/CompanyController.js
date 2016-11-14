company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    this.$onInit = function () {
        
    };

    $scope.send = function () {
        CompanyService.sendMain().then(function (response) {
            console.log( response );
        });
    }

}]);