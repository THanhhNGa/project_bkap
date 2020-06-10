<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Helper\Cart;
use App\Helper\Wishlist;
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
    public function boot(Cart $cart)
    {
         View::composer('*', function ($view) {
            $view->with([
                'cart'=>new Cart,
                'category'=>Category::where('status',1)->get(),
                'pro_sale'=>Product::where('status',1)->orderBy('sale_price','DESC')->limit(2)->get(),
                'ship' =>10,
                'wishlist'=>new Wishlist

                ]);
            });
        }
}
