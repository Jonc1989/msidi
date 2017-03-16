<?php

Route::group(['middleware' => ['web']], function () {



    Route::group( [ 'prefix' => '/case-studies' ], function (){
        
        Route::resource( '/', 'App\Modules\CaseStudies\Controllers\CaseStudiesController' );

        Route::get( '/exigen', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@exigen' );

        Route::get( '/opal-online', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@opalOnline' );

        Route::get( '/opal-bop', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@opalBop' );
        
    });
    
    Route::get( '/brochure/{lang}', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@showBrochure');
    
    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::resource( 'case-studies', 'App\Modules\CaseStudies\Controllers\api\CaseStudiesController' );
    });


});