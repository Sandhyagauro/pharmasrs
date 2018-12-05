<?php

namespace App\Providers;

use App\Modules\frontend\Categories\Repositories\CategoryInterface;
use App\Modules\frontend\Categories\Repositories\CategoryRepository;
use App\Modules\frontend\Pharmacist\Repositories\PharmacistRepository;
use Illuminate\Support\ServiceProvider;
use App\Modules\frontend\Pharmacist\Repositories\PharmacistInterface;
class RepositoryServiceProvider extends ServiceProvider
{
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

        /**
         * Pharmacist
         */
        $this->app->bind(
            PharmacistInterface::class,
            PharmacistRepository::class


        );
        /**
         * Categories department
         */
        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class


        );

    }
}
