<?php

namespace App\Providers;

use App\Contracts\IUser;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserApiServiceProvider extends ServiceProvider
{

    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IUser::class, UserService::class);
    }

    public function provides()
    {
        return [IUser::class];
    }
}
