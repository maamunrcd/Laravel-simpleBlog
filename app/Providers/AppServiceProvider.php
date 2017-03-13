<?php

namespace App\Providers;
use App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        ///Set the post global function using method...
        view()->composer('partial2.sidebar',function($view){
            $archives= \App\Post::archives();
            $tags= \App\Tag::has('posts')->pluck('name');
            $view->with(compact('archives','tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
