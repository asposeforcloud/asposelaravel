<?php 
 
namespace Aspose\Cloud;

use Illuminate\Support\ServiceProvider;

class Laravel4ServiceProvider extends ServiceProvider {
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
    public function boot()
    {
	$this->package('aspose/cloud');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['aspose'] = $this->app->share(function($app)
        {
            return new Cloud(\Config::get('cloud::config'));
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Aspose', 'Aspose\Cloud\Facades\Cloud');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('aspose');
    }

}
