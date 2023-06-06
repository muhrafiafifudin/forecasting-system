<?php

namespace App\Providers;

use App\Interfaces\DepartmentInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\DepartmentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DepartmentInterface::class, DepartmentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
