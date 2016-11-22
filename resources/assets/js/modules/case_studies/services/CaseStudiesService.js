caseStudies.service( 'CaseStudiesService', ['$http', '$q', function( $http, $q )
{
    var CaseStudiesService = {

        all: function( count )
        {
            var deferred = $q.defer();
            $http.get( '/api/case-studies', {params:{ count: count }} )
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
    return CaseStudiesService;
}]);