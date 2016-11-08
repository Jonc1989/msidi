<?php

Route::group(['middleware' => ['web']], function () {

    Route::resource( 'case-studies', 'App\Modules\CaseStudies\Controllers\CaseStudiesController' );

    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::resource( 'case-studies', 'App\Modules\CaseStudies\Controllers\api\CaseStudiesController' );
    });


});