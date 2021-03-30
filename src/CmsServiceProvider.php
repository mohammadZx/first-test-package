<?php
namespace Smd\Cms;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind('cms' , function(){
            return new Cms();
        });

        $this->mergeConfigFrom(__DIR__.'/Config/main.php', 'cms');
    }

    public function boot(){
        require_once __DIR__ . '/Http/route.php';
        $this->loadViewsFrom(__DIR__ .'/Views', 'cms');

        $this->app['router']->aliasMiddleware('admin', \Smd\Cms\Http\Middleware\Admin::class);

        $this->publishes([
            __DIR__.'/Config/main.php' => config_path('cms.php'),
            // copy views to resource
            __DIR__.'/Views' => base_path('resources/views/cms'),
            __DIR__.'/migrations' => database_path('/migrations'),
        ], 'config and views');
        // second parameter is tag name to publish with just tag
        // php artisan vendor:publish --tag="config and views" --provider="Smd\Cms\CmsServiceProvider"
    }
}