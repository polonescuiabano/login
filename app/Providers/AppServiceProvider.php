<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Discord\Provider as DiscordProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Laravel\Socialite\Facades\Socialite::extend('discord', function ($app) {
            $config = $app['config']['services.discord'];

            return new DiscordProvider($app['request'], $config['client_id'], $config['client_secret'], $config['redirect']);
        });
    }
}
