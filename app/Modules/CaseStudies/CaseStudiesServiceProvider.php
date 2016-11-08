<?php namespace App\Modules\CaseStudies;

use App\Providers\ModuleServiceProvider;

/**
 * Class CaseStudiesServiceProvider
 *
 * @package App\Modules\CaseStudies
 */
class CaseStudiesServiceProvider extends ModuleServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Reģistrējam moduļa vārdvietas, maršrutētāju, notikumu klausītāju un izšaujam moduļa palaisšanas notikumu
		$this->bootModule(__DIR__, 'casestudies');
	}
}