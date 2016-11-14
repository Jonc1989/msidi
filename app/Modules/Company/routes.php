<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::group( [ 'prefix' => '/api' ], function ()
	{
		Route::group( [ 'prefix' => '/company' ], function ()
		{
			Route::get( '/send', 'App\Modules\Company\Controllers\api\CompanyController@send' );
		});

	});

});