<?php namespace App\Modules\Career;

use App\Providers\ModuleServiceProvider;

/**
 * Class CareerServiceProvider
 *
 * @package App\Modules\Career
 */
class CareerServiceProvider extends ModuleServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Reģistrējam moduļa vārdvietas, maršrutētāju, notikumu klausītāju un izšaujam moduļa palaisšanas notikumu
		$this->bootModule(__DIR__, 'career');
	}
}