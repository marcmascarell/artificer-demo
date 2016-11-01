<?php

namespace App\Mascame;

use Illuminate\Support\ServiceProvider;

class HelloWorldPluginServiceProvider extends ServiceProvider
{
    public $package = 'mascame/helloworld';

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
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        \App::bind(HelloWorldPlugin::class);

        \Mascame\Artificer\Artificer::pluginManager()->add('mascame/hello-world-plugin', HelloWorldPlugin::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
