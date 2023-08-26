<?php

namespace Nielsphp\JsonBlocks;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Nielsphp\JsonBlocks\View\Components\ContentComponent;
use Nielsphp\JsonBlocks\View\Components\Parts\ImageComponent;
use Nielsphp\JsonBlocks\View\Components\Parts\ListComponent;


class JsonBlocksServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/jsonblocks.php' => config_path('jsonblocks.php')
        ], 'jsonblocks-config');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/jsonblocks'),
        ], 'jsonblocks-views');        
        
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'jsonblocks');
        Blade::component('jsonblocks', ContentComponent::class);
        Blade::component('image-block', ImageComponent::class);
        Blade::component('list-block', ListComponent::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/jsonblocks.php', 'jsonblocks'
        );
    }

}
