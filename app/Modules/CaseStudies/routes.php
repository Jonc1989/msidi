<?php

Route::group(['middleware' => ['web']], function () {



    Route::group( [ 'prefix' => '/case-studies' ], function (){

        Route::resource( '/', 'App\Modules\CaseStudies\Controllers\CaseStudiesController' );

        Route::get( '/{id}', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@caseStudies' );

    });

    Route::get( '/brochure/{lang}', 'App\Modules\CaseStudies\Controllers\CaseStudiesController@showBrochure');

    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::resource( 'case-studies', 'App\Modules\CaseStudies\Controllers\api\CaseStudiesController' );
    });


});