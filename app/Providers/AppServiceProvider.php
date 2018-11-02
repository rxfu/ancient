<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		Blade::directive('highlight', function ($expression) {
			list($field, $keyword) = explode(', ', $expression);

			$highlight = "<?php echo preg_replace(\"/({$keyword})/u\", '<span class=\"text-danger\">$1</span>', {$field}) ?>";

			return $highlight;
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
