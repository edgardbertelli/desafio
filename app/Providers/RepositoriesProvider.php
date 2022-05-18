<?php

namespace App\Providers;

use App\Contracts\CourseContract;
use App\Repositories\CourseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CourseContract::class, CourseRepository::class);
    }
}
