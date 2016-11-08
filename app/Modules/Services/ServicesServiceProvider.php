<?php namespace App\Modules\Services;

use App\Providers\ModuleServiceProvider;

/**
 * Class ServicesServiceProvider
 *
 * @package App\Modules\Services
 */
class ServicesServiceProvider extends ModuleServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Reģistrējam moduļa vārdvietas, maršrutētāju, notikumu klausītāju un izšaujam moduļa palaisšanas notikumu
		$this->bootModule(__DIR__, 'services');
	}
}