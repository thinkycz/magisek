<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Observers\OrderObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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

        \View::composer('client.partials.sidebar', function (View $view) {
            $categories = Category::query()
                ->whereEnabled(true)
                ->whereIsRoot()
                ->orderBy('position')
                ->get();

            $view->with(compact('categories'));
        });
    }
}
