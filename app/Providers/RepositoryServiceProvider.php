<?php

namespace App\Providers;

use App\Modules\backend\Counseling\Repositories\CounselingInterface;
use App\Modules\backend\Counseling\Repositories\CounselingRepository;
use App\Modules\backend\User\Repositories\UserInterface;
use App\Modules\backend\User\Repositories\UserRepository;
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
        /**
         * Counseling
         */
        $this->app->bind(
            CounselingInterface::class,
            CounselingRepository::class
        );
        /**
         * User
         */
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
        );

    }
}
