<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::group( [ 'prefix' => '/api' ], function ()
	{
		Route::group( [ 'prefix' => '/company' ], function ()
		{
			Route::post( '/send', 'App\Modules\Company\Controllers\api\CompanyController@send' );
		});

	});

});