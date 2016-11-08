<?php namespace App\Modules\Technology;

use App\Providers\ModuleServiceProvider;

/**
 * Class TechnologyServiceProvider
 *
 * @package App\Modules\Technology
 */
class TechnologyServiceProvider extends ModuleServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Reģistrējam moduļa vārdvietas, maršrutētāju, notikumu klausītāju un izšaujam moduļa palaisšanas notikumu
		$this->bootModule(__DIR__, 'technology');
	}
}