<?php

namespace Devuniverse\Usermanage;

use Illuminate\Support\ServiceProvider;
use Devuniverse\Permissions\Models\User;

class UsermanageServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    // register our controller
    $this->app->make('Devuniverse\Usermanage\Controllers\UsermanageController');

    $this->loadViewsFrom(__DIR__.'/views', 'usermanage');

    $this->mergeConfigFrom(
        __DIR__.'/config/usermanage.php', 'usermanage'
    );
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //
    include __DIR__.'/routes.php';

    $this->publishes([

      __DIR__.'/config/usermanage.php' => config_path('usermanage.php'),
      __DIR__.'/public' => public_path('usermanage'),
    ]);

    $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    view()->composer('*', function ($view){

      if( \Auth::check() ){

        $luser  = new User();
        $view->with('luser', $luser);
        
      }

    });

  }
}
