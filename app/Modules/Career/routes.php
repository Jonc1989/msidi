<?php

Route::group(['middleware' => ['web']], function () {

    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::group( [ 'prefix' => '/career' ], function ()
        {
            Route::post( '/send', 'App\Modules\Career\Controllers\api\CareerController@send' );
        });

    });

});