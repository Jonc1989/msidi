career.controller( 'CareerController', [ '$scope', 'CareerService', function ( $scope, CareerService ){


    $scope.careerForm = {};

    $scope.vacancy = {
        position: '',
        email: '',
        message: ''
    };

    $scope.loading = true;

    $scope.removeErrors = function(){
        $('#career .form-group' ).removeClass( 'has-error' );
    };

    $scope.setFormScope = function( form )
    {
        $scope.careerForm = form;
    };

     $scope.send = function () { console.log($scope.careerForm);
        if( !$scope.careerForm.$invalid ){
            CareerService.sendMail( $scope.vacancy ).then(function (response) {
                $scope.vacancy = {
                    position: '',
                    email: '',
                    message: ''
                };
            });
        }else{
            $scope.removeErrors();
            for (var property in $scope.vacancy) {
                if( $scope.careerForm[property].$invalid ){ 
                    var $field = $( '[name="' + property + '"]' );
                    if( $field ) {
                        $field.closest( '.form-group' ) .addClass( 'has-error' );
                    }
                }
            }
        }
     };

    $scope.toggleMe = function ( event ) { console.log(event)
        $( event.target ).parent().find('.plus').toggleClass( 'open' );
    };

}]);