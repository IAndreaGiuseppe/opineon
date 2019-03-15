<?php

namespace Agpretto\Opineon;

use Illuminate\Support\ServiceProvider;

class OpineonServiceProvider extends ServiceProvider {

 /**
  * Register services.
  *
  * @return void
  */
 public function register() {
  $this->mergeConfigFrom( __DIR__.'/../config/opineon.php', 'opineon' );
 }

 /**
  * Bootstrap services.
  *
  * @return void
  */
 public function boot() {
  $this->loadMigrationsFrom( __DIR__.'/../database/migrations' );
 }
}
