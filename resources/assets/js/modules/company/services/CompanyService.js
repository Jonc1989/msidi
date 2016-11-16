company.service( 'CompanyService', ['$http', '$q', function( $http, $q )
{
    var CompanyService = {

        sendMain: function( message )
        {
            var deferred = $q.defer();
            $http.post( '/api/company/send', message )
                .success( function( response )
                {
                    deferred.resolve( response );
                } )
                .error( function( response, status )
                {
                    if (status === 422)
                    {
                        deferred.resolve({errors: response});
                    } else
                    {
                        deferred.reject();
                    }
                } );

            return deferred.promise;

        }
    };
    return CompanyService;
}]);