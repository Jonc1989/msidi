<?php


Route::group(['middleware' => ['web']], function () {

    Route::group( [ 'prefix' => '/api' ], function ()
    {
        Route::get( 'view/{url}', 'Http\Controllers\ApiViewController@render' );
    });

    Route::get('/', function (\App\Modules\Common\Models\Categories $categories) {

        //\Log::info( $categories->with('posts')->get());
        return view('master');
    });

});
