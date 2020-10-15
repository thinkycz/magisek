<?php

namespace App\Providers;

use App\Models\Order;
use App\Observers\OrderObserver;
use App\Tools\HeurekaGenerator;
use App\Tools\XmlWriter;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HeurekaGenerator::class, function () {
            return new HeurekaGenerator(new XmlWriter());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');

        Order::observe(OrderObserver::class);
    }
}
