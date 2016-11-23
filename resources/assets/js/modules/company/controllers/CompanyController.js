company.controller( 'CompanyController', [ '$scope', 'CompanyService', function ( $scope, CompanyService ){


    $scope.contactForm = {};

    $scope.message = {
        cfsender: '',
        cfemail: '',
        cfsubject: '',
        cftext: ''
    };
    
    $scope.loading = true;
    
    this.$onInit = function () {
        $scope.init_map();
    };

    $scope.setFormScope = function( form )
    {
        $scope.contactForm = form;
    };

    $scope.removeErrors = function(){
        $('#company .form-group' ).removeClass( 'has-error' );
    };

    $scope.send = function () { 
        if(
            //!$scope.loading &&
            !$scope.contactForm.$invalid ){
            //$scope.loading = true;
            
            CompanyService.sendMail( $scope.message ).then(function (response) {
                //$scope.loading = false;

                $scope.message = {
                    cfsender: '',
                    cfemail: '',
                    cfsubject: '',
                    cftext: ''
                };

            });
        }else{
            $scope.removeErrors();
            for (var property in $scope.message) {

                    if( $scope.contactForm[property].$invalid ){
                        var $field = $( '[name="' + property + '"]' ); console.log($field);
                        if( $field )
                        {
                            $field.closest( '.form-group' )
                                .addClass( 'has-error' );
                        }
                    }

            }

        }
        
    };

    $scope.init_map = function (){
        var myOptions = {
            zoom:14,
            center:new google.maps.LatLng(56.526248,27.357412599999975),
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.526248,27.357412599999975)});
        infowindow = new google.maps.InfoWindow({content:'<strong> </strong><br>Rēzekne, Maskavas 22<br>'});
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        //infowindow.open(map,marker);
        //google.maps.event.addDomListener(window, 'load', init_map);
    }

}]);