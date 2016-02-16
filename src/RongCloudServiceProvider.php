<?php namespace Aobo\RongCloud;

use Illuminate\Support\ServiceProvider;

class RongCloudServiceProvider extends ServiceProvider {

    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {

        // $this->mergeConfigFrom(__DIR__.'/config/rongcloud.php', 'rongcloud');
    }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        $this->publishes([

            __DIR__.'/config/rongcloud.php' => config_path('rongcloud.php'),

        ]);

        $this->app->singleton('rongcloud', function($app) {

            return new RongCloudClass (
                $app['config']['rongcloud']['AppKey'],
                $app['config']['rongcloud']['AppSecret']
            );

        });

        $this->app->booting( function($app){

            $aliases = $app['config']['aliases'];

            if(empty($aliases['RongCloud'])){

                $loader = \Illuminate\Foundation\AliasLoader::getInstance();
                $loader->alias('RongCloud','Aobo\RongCloud\Facades\RongCloud');

            }
        });
    }
}
