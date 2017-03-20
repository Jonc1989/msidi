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

     $scope.send = function () {

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

    var options = {
        newTab : true,
        stickyPlaceholder : true,
        onChange : function( val ) {
            $('select.cs-select.cs-skin-elastic option[value="' + val +'"]').attr("selected", "selected");
            var vacancy = $('select.cs-select.cs-skin-elastic option:selected').text();

            $scope.vacancy.position = vacancy;
        }
    };
    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
        new SelectFx(el, options);

    } );

}]);