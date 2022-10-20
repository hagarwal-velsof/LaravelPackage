<?php
   
    namespace Spinwheel\Spinwheel;
    use Illuminate\Support\ServiceProvider;
    class SpinWheelServiceProvider extends ServiceProvider {
        public function boot()
        {
			$this->loadRoutesFrom(__DIR__.'/routes/web.php');
			$this->loadViewsFrom(__DIR__.'/resources/views', 'SpinWheel');
			
        }
        public function register()
        {
			
		}
   }
?>
