<?php

namespace App\Providers;

use App\Models\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
{
    View::composer(['clients/webpage/cart'], function($view) {
        if (session()->has('cart')) {
            $oldCart = session()->get('cart');
            
         
            $view->with([
                'cart' => $oldCart, 
                'productCarts' => $oldCart->items,
                'totalPrice' => $oldCart->totalPrice,
                'totalQty' => $oldCart->totalQty
            ]);
        }
    });
}

}