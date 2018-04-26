<?php

namespace evan45245\Laracrypto;

use evan45245\Laracrypto\Bitcoin\BlockchainContainer as Blockchain;
use evan45245\Laracrypto\Ethereum\EthereumContainer as Ethereum;
use Illuminate\Support\ServiceProvider;

class LaracryptoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/laracrypto.php' => config_path('laracrypto.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('blockchain', function () {
            return new Blockchain();
        });
        $this->app->bind('ethereum', function () {
            return new Ethereum();
        });
    }
}
