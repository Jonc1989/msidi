<?php namespace App\Modules\Company;

use App\Providers\ModuleServiceProvider;

/**
 * Class CompanyServiceProvider
 *
 * @package App\Modules\Company
 */
class CompanyServiceProvider extends ModuleServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Reģistrējam moduļa vārdvietas, maršrutētāju, notikumu klausītāju un izšaujam moduļa palaisšanas notikumu
		$this->bootModule(__DIR__, 'company');
	}
}