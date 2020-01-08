<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sanpham;
use App\Tintuc;
use App\Theloai;
use App\Cart;
use Session;
use App\Khachhang;
use App\Hoadon;
use App\Chitiethoadon;

class CartController extends Controller
{
    public function themGioHang(Request $request, $id)
    {
        $sanpham = Sanpham::find($id);
        $oldCart =  Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($sanpham, $id,);
        $request->session()->put('cart', $cart);
        return redirect('cart/hienthiCart');
    }

    public function hienThiCart()
    {

        return view(
            'pages.giohang',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(6)->get(),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),

            ]
        );
    }

    public function xoaItemGioHang($id)
    {
        $oldCart =  Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect('cart/hienthiCart');
    }
    public function datHang(Request $request)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            
            return view(
                'pages.dathang',
                [

                    'sanpham_carts' => $cart->items,
                    'totalQty'   => $cart->totalQty,
                    'totalPrice' => $cart->totalPrice,
                    'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                    'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

                ]
            );
        }else{
            return view(
                'pages.dathang',
                [

                  
                    'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                    'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

                ]
            );
        }
    }

    public function luuDatHang(Request $request){
        $cart = Session::get('cart');
        $khachhang = new Khachhang(); 
        $khachhang->fill($request->all());
        $khachhang->save();

        $hoadon = new Hoadon();
        $hoadon->id_Khachhang = $khachhang->id;
        $hoadon->date = date('Y-m-d');
        $hoadon->Tongtien = $cart->totalPrice;
        $hoadon->Ghichu = $request->Ghichu;
        $hoadon->save();

        foreach ($cart->items as $key => $value) {
            $chitiethoadon = new Chitiethoadon();
            $chitiethoadon->id_Hoadon =  $hoadon->id;
            $chitiethoadon->id_Sp = $key;
            $chitiethoadon->Soluong = $value['qty'];
            $chitiethoadon->Giatien = $value['price']/$value['qty'];
            $chitiethoadon->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Quý khách đã đặt hàng  thành công');

    }

}
