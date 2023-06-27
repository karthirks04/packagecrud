<?php
namespace Laravelmoduelscrud\Laravelpermissioneditor;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PermissionEditorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        // Publish views
        
        // $this->loadViewsFrom(__DIR__.'/resources/views/layouts', 'crud');
         $this->publishes([
        __DIR__.'/resources/views' => resource_path('views\laravelmoduelscrud/laravelpermissioneditor'),
    ], 'package-views');
       

        // Publish migrations
       // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->publishes([
        //     __DIR__.'/Migrations' => database_path('migrations'),
        // ], 'migrations');

        // Publish routes
        //$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->publishes([
        //     __DIR__.'/routes' => base_path('routes'),
        // ], 'routes');


// $this->app->bind('path.public', function() {
//           return base_path().'/public_html';
//         });


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Route::prefix('laravelpermissioneditor')
        //         ->namespace('laravelmoduelscrud\laravelpermissioneditor\Http\Controllers')
        //         ->as('laravelpermissioneditor.')
        //         ->group(function (){
        //             $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        //         });
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         $this->loadMigrationsFrom(__DIR__ .'/database/migrations');
         $this->loadViewsFrom(__DIR__.'/resources/views', 'crud');
    }
}
