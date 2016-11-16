company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    $scope.contactForm = {};

    $scope.message = {
        cfsender: $scope.cfsender,
        cfemail: $scope.cfemail,
        cfsubject: $scope.cfsubject,
        cftext: $scope.cftext
    };
    
    $scope.loading = true;
    
    this.$onInit = function () {

    };

    $scope.setFormScope = function( form )
    {
        $scope.contactForm = form;
    };

    $scope.send = function () { 
        if(
            //!$scope.loading &&
            !$scope.contactForm.$invalid ){
            //$scope.loading = true;

            for (var property in $scope.message) {


                        var $field = $( '[name="' + property + '"]' );
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .removeClass( 'has-error' );
                        }

            }


            CompanyService.sendMain( $scope.message ).then(function (response) {
                //$scope.loading = false;

                    $scope.cfsender = '';
                    $scope.cfemail = '';
                    $scope.cfsubject = '';
                    $scope.cftext = '';

            });
        }else{
            for (var property in $scope.message) { console.log( property);

                    console.log( $scope.contactForm[property] )
                    if( $scope.contactForm[property].$invalid ){ console.log( $scope.contactForm[property].$invalid );
                        var $field = $( '[name="' + property + '"]' );
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .addClass( 'has-error' );
                        }
                    }

            }

        }
        
    };



}]);