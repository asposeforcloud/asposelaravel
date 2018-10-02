<?php 

namespace Aspose\Cloud;

use Illuminate\Support\ServiceProvider;

class Laravel5ServiceProvider extends ServiceProvider {
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
	//dd("testing");
        /** Publish configuration file . */
        $this->publishes([
            realpath(__DIR__.'/../../config/config.php') => config_path('asposecloud.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('aspose', function() {
            return new Cloud(config('asposecloud'));
        });
		
	$this->app->booting(function() {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Aspose', 'Aspose\Cloud\Facades\Cloud');
        });
    }

}
