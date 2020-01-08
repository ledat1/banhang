<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Sanpham;
use App\Tintuc;
use App\Theloai;
use App\Cart;
use Session;

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
        view()->composer('pages.giohang', function ($view) {
            $sanpham = Sanpham::all();
            $tintuc = Tintuc::where('Noibat', 1)->take(6)->get();
            $theloai = Theloai::whereNull('idLoai')->with('loaiSanpham')->get();
            $view->with(['sanphams', $sanpham, 'noibats', $tintuc, 'theloais', $theloai]);
        });

        view()->composer(['pages.giohang','pages.dathang'], function ($view) {
            if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with([
                    'cart'  => Session::get('cart'), 
                    'sanpham_carts' => $cart->items,
                    'totalQty'   => $cart->totalQty,
                    'totalPrice' => $cart->totalPrice,
                   
                   
                ]);
            }
        });
    }
}
