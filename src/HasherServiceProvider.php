<?php namespace Laravel\Hasher;

use Illuminate\Support\ServiceProvider;

class HasherServiceProvider extends ServiceProvider
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
        $this->registerLaravelHasher();
    }
    /**
     * Register the make:seed generator.
     */
    private function registerLaravelHasher()
    {
        $this->app->singleton('command.laravel.hash', function ($app) {
            return $app['Laravel\Hasher\Commands\LaravelHasherCommand'];
        });
        $this->commands('command.laravel.hash');
    }

}