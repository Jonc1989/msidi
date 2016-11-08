<?php


Route::group(['middleware' => ['web']], function () {

    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::get( 'view/{url}', 'Http\Controllers\ApiViewController@render' );
    });

    Route::get('/', 'Controller@main');

});
