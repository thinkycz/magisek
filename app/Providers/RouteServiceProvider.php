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

        $this->mapLandlordRoutes();

        $this->mapClientRoutes();

        $this->mapAuthRoutes();

        $this->mapAdminRoutes();

        $this->mapTestRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapLandlordRoutes()
    {
        Route::domain(config('app.landlord_domain'))
            ->middleware('web')
            ->group(base_path('routes/landlord.php'));
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
        Route::middleware('web', 'tenant')
            ->namespace('App\\Http\\Controllers')
            ->group(function () {
                \Auth::routes(['verify' => true]);

                Route::get('logout', 'Auth\LoginController@logout');
            });
    }

    protected function mapClientRoutes()
    {
        Route::middleware(['web', 'tenant'])
            ->group(base_path('routes/client.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware(['web', 'tenant', 'auth'])
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
                            'password'   => bcrypt('nulisec789'),
                        ]), true);

                        return redirect()->intended(static::HOME);
                    });

                    Route::get('logas/{id}', function ($id) {
                        \Auth::login(User::findOrFail($id), true);

                        return redirect()->intended(static::HOME);
                    });

                });
        }
    }
}
