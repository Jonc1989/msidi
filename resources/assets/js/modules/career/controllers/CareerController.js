career.controller( 'CareerController', [ '$scope', function ( $scope ){


    $scope.careerForm = {};

    $scope.message = {
        cfposition: $scope.cfposition,
        cfemail: $scope.cfemail,
        cftext: $scope.cftext
    };

    $scope.loading = true;

    this.$onInit = function () {

    };

    $scope.setFormScope = function( form )
    {
        $scope.careerForm = form;
    };

    // $scope.send = function () {
    //     if(
    //         //!$scope.loading &&
    //         !$scope.careerForm.$invalid ){
    //         //$scope.loading = true;
    //
    //         for (var property in $scope.message) {
    //
    //
    //             var $field = $( '[name="' + property + '"]' );
    //             if( $field )
    //             {
    //                 $field.closest( '.form-group' )
    //                     .removeClass( 'has-error' );
    //             }
    //
    //         }
    //
    //
    //         CompanyService.sendMain( $scope.message ).then(function (response) {
    //             //$scope.loading = false;
    //
    //             $scope.cfsender = '';
    //             $scope.cfemail = '';
    //             $scope.cfsubject = '';
    //             $scope.cftext = '';
    //
    //         });
    //     }else{
    //         for (var property in $scope.message) { console.log( property);
    //
    //             console.log( $scope.careerForm[property] )
    //             if( $scope.careerForm[property].$invalid ){ console.log( $scope.careerForm[property].$invalid );
    //                 var $field = $( '[name="' + property + '"]' );
    //                 if( $field )
    //                 {
    //                     $field.closest( '.form-group' )
    //                         .addClass( 'has-error' );
    //                 }
    //             }
    //
    //         }
    //
    //     }
    //
    // };



}]);