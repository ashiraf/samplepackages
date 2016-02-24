<?php

namespace ashiraf\news;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //load my route file
        require __DIR__."/Http/route.php";

        //define the path to load views
        $this->loadViewsFrom(__DIR__.'/../views','news');

        ///define the files which are going to be published
        $this->publishes([__DIR__.'/migrations/2016_02_22_000000_create_news_table.php'=>base_path('database/migrations/2016_02_22_000000_create_news_table.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("News", function($app){
            return new news;
        });
    }
}
