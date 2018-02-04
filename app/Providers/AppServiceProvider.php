<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp =  ProductType::all();
         

            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('left_content',function($view2){
            $loai_sp2 =  ProductType::all();
            $view2->with('loai_sp2',$loai_sp2);
        });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
