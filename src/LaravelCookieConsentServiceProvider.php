<?php

namespace W3designweb\LaravelCookieConsent;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LaravelCookieConsentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-cookie-consent');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-cookie-consent');

        $this->publishes([__DIR__.'/../config/config.php' => config_path('laravel-cookie-consent.php')], 'config');
        $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-cookie-consent')], 'lang');
        $this->publishes([__DIR__.'/../resources/js' => public_path('vendor/laravel-cookie-consent')], 'public');
        $this->publishes([__DIR__.'/../resources/css' => public_path('vendor/laravel-cookie-consent')], 'public');
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/laravel-cookie-consent')], 'views');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cookie-consent');
    }
}
