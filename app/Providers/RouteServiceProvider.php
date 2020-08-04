<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapClientRoutes();

        $this->mapAuthRoutes();

        $this->mapAdminRoutes();

        $this->mapTestRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }

    protected function mapAuthRoutes()
    {
        Route::middleware('web')
            ->namespace('App\\Http\\Controllers')
            ->group(function () {
                \Auth::routes(['verify' => true]);

                Route::get('logout', 'Auth\LoginController@logout');
            });
    }

    protected function mapClientRoutes()
    {
        Route::middleware(['web'])
            ->group(base_path('routes/client.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware(['web', 'auth', 'admin'])
            ->prefix('acp')
            ->as('acp.')
            ->group(base_path('routes/admin.php'));
    }

    protected function mapTestRoutes()
    {
        if (config('app.env') == 'local' || config('app.debug') == true) {
            Route::middleware('web')
                ->group(function () {
                    Route::get('test', function () {
                        \Auth::login(User::firstOrCreate(['email' => 'team@nulisec.com'], [
                            'first_name' => 'Leo',
                            'last_name'  => 'Do',
                            'password'   => bcrypt('password'),
                            'is_admin'   => true
                        ]), true);

                        return redirect()->intended(route('acp.dashboard'));
                    });

                    Route::get('logas/{id}', function ($id) {
                        \Auth::login(User::findOrFail($id), true);

                        return redirect()->intended(route('acp.dashboard'));
                    });

                });
        }
    }
}
