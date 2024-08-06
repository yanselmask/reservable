<?php

namespace Yanselmask\Reservable;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class LaraReserveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrations(); // load migrations

        Schema::macro('maxAllowedReserves', function (string $table) {
            $table->integer('max_allowed_reserves')->nullable();
        });

    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
