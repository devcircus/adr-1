<?php

namespace PerfectOblivion\Adr;

use PerfectOblivion\Adr\Commands\AdrMakeCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class AdrServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->commands([
            AdrMakeCommand::class,
        ]);
    }
}
