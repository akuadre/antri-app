<?php

namespace App\Providers;

use App\Models\Antrian;
use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        if (Schema::hasTable('antrians')) {
            View::share('antrianCount', Antrian::count());
        }

        if (Schema::hasTable('dokters')) {
            View::share('dokterCount', Dokter::count());
        }

        if (Schema::hasTable('polis')) {
            View::share('poliCount', Poli::count());
        }

        // Route sidebar
        View::share('currentRoute', Route::currentRouteName() ?? request()->path());


    }
}
