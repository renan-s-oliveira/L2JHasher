<?php

namespace L2j\L2JHasher\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class L2JHashServiceProvider extends ServiceProvider {

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register() {
        $this->app->singleton('hash', function () {
            return new L2JHasher();
        });
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides() {
        return [
            'hash'
        ];
    }

}