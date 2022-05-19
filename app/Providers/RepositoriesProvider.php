<?php

namespace App\Providers;

use App\Contracts\BookContract;
use App\Contracts\CourseContract;
use App\Repositories\BookRepository;
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
        $this->app->bind(BookContract::class, BookRepository::class);

    }
}
