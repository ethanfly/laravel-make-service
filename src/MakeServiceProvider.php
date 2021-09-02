<?php


namespace Ethan\LaravelMakeService;


use Ethan\LaravelMakeService\Commands\MakeService;
use Illuminate\Support\ServiceProvider;

class MakeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class,
            ]);
        }
    }
}