<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\ProductType_model;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *SublimeLinter-php
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $product_type = ProductType_model::all();
            $view->with(
                'product_type',$product_type, 
            );            
        });
        view()->composer('master',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with([
                    'cart'=>Session::get('cart'), 
                    'product_cart'=>$cart->items, 
                    'totalPrice'=>$cart->totalPrice,
                    'totalQty'=> $cart->totalQty
                ]);
            }   
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