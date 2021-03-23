<?php

namespace App\Providers;

use App\Services\ParserService;
use App\Services\TemplateNewsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            
        }

        $this->app->bind(TemplateNewsService::class, function() {
            return new TemplateNewsService();
        });

        $this->app->bind(ParserService::class, function() {
            return new ParserService();
        });     
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
