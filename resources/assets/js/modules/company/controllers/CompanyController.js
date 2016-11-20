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
        $scope.init_map();
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