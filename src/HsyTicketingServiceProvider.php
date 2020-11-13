<?php


namespace Hsy\Ticketing;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HsyTicketingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerFacades();
        $this->registerResources();
    }

    public function boot()
    {

    }

    /**
     * Register the package resources such as routes, templates, etc.
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ticketing');

        $this->registerFacades();
        $this->registerRoutes();
    }

    private function registerFacades()
    {
        $this->app->singleton("Ticketing", function ($app) {
            return new Tickets;
        });
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    /**
     * Get the Press route group configuration array.
     *
     * @return array
     */
    protected function routeConfiguration()
    {
        return [
            'namespace' => 'Hsy\Ticketing\Http\Controllers',
            'prefix' => "ticketing",
            'middleware' => 'web'
        ];
    }
}