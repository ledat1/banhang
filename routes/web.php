<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
	Route::prefix('theloai')->group(function () {
		Route::get('/them', 'Admin\AdminTheLoai@them');
		Route::post('/them', 'Admin\AdminTheLoai@luu')->name('luuTheLoai');
		Route::get('/danhsach', 'Admin\AdminTheLoai@danhsach');
		Route::get('sua/{id}', 'Admin\AdminTheLoai@sua');
		Route::post('sua/{id}', 'Admin\AdminTheLoai@luuSua');
		Route::get('xoa/{id}', 'Admin\AdminTheLoai@xoa');
		Route::get('/timkiem', 'Admin\AdminTheLoai@timkiem')->name('timkiemTheLoai');
	});

	Route::prefix('slide')->group(function () {
		Route::get('/them', 'Admin\AdminSlide@them');
		Route::post('/them', 'Admin\AdminSlide@luu')->name('luuSlide');
		Route::get('/danhsach', 'Admin\AdminSlide@danhsach');
		Route::get('sua/{id}', 'Admin\AdminSlide@sua');
		Route::post('sua/{id}', 'Admin\AdminSlide@luuSua');
		Route::get('xoa/{id}', 'Admin\AdminSlide@xoa');
	});
	Route::prefix('tintuc')->group(function () {
		Route::get('/them', 'Admin\AdminTintuc@them');
		Route::post('/them', 'Admin\AdminTintuc@luu')->name('luuTintuc');
		Route::get('/danhsach', 'Admin\AdminTintuc@danhsach');
		Route::get('sua/{id}', 'Admin\AdminTintuc@sua');
		Route::post('sua/{id}', 'Admin\AdminTintuc@luuSua');
		Route::get('xoa/{id}', 'Admin\AdminTintuc@xoa');
	});
	Route::prefix('sanpham')->group(function () {
		Route::get('/them', 'Admin\AdminSanpham@them');
		Route::post('/them', 'Admin\AdminSanpham@luu')->name('luuSanpham');
		Route::get('/danhsach', 'Admin\AdminSanpham@danhsach');
		Route::get('sua/{id}', 'Admin\AdminSanpham@sua');
		Route::post('sua/{id}', 'Admin\AdminSanpham@luuSua');
		Route::get('xoa/{id}', 'Admin\AdminSanpham@xoa');
		Route::get('/timkiem', 'Admin\AdminSanpham@timkiem')->name('timkiemSanPham');
	});
	Route::prefix('khachhang')->group(function () {
		Route::get('/danhsach', 'Admin\AdminKhachhang@danhsach');
		Route::get('sua/{id}', 'Admin\AdminKhachhang@sua');
		Route::post('sua/{id}', 'Admin\AdminKhachhang@luuSua');
		Route::get('xoa/{id}', 'Admin\AdminKhachhang@xoa');
		Route::get('/timkiem', 'Admin\AdminKhachhang@timkiem')->name('tiemkiemKhachHang');
	});

	Route::prefix('ajax')->group(function () {
		Route::get('loaisanpham/{idTheLoai}', 'Admin\AjaxController@layLoaiTin');
	});
});

Route::get('/trangchu', 'Admin\pagesController@trangchu')->name('trangchu');
Route::get('/the-loai/san-pham/{id}/{Tentheloai}.html', 'Admin\pagesController@laySanPham')->name('sanPham');
Route::get('/the-loai/{id}/{Tentheloai}.html', 'Admin\pagesController@laySanPhamTow')->name('sanPhamTow');
Route::get('/tuyen-dung.html', 'Admin\pagesController@tuyenDung')->name('tuyendung');
Route::get('/gioi-thieu.html', 'Admin\pagesController@gioiThieu')->name('gioithieu');
Route::get('/lien-he.html', 'Admin\pagesController@lienHe')->name('lienHe');
Route::get('/giao-hang.html', 'Admin\pagesController@giaoHang')->name('giaoHang');
Route::get('/huong-dan.html', 'Admin\pagesController@huongDan')->name('huongDan');
Route::get('/tu-van.html', 'Admin\pagesController@layTuVan')->name('tuVan');
Route::get('/tu-van/{id}', 'Admin\pagesController@chiTietTuVan');
Route::get('/tin-tuc.html', 'Admin\pagesController@layTinTuc')->name('tinTuc');
Route::get('/tin-tuc/{id}', 'Admin\pagesController@chiTietTinTuc');
Route::get('/san-pham/{id}/{Tensanpham}.html', 'Admin\pagesController@chiTietSanPham');
Route::get('/san-pham-moi', 'Admin\pagesController@laySanPhamMoi')->name('sanPhamMoi');
Route::get('/san-pham', 'Admin\pagesController@sanPham')->name('sanPham');
Route::get('/shop-meo', 'Admin\pagesController@laySanPhamCu')->name('sanPhamCu');
Route::get('/shop-vet', 'Admin\pagesController@layAoKhoacNam')->name('aoKhoacNam');
Route::get('/shop-cho', 'Admin\pagesController@layAoKhoacNu')->name('aoKhoacNu');
Route::get('/phu-kien', 'Admin\pagesController@layPhuKien')->name('phuKien');
Route::get('/ok	', 'Admin\pagesController@timKiem')->name('timKiem');
Route::post('/lien-he.html', 'Admin\pagesController@luuGuiMail')->name('luuguimail');
Route::get('/thongbaoguimail', 'Admin\pagesController@guiMail')->name('guiMail');
Route::prefix('cart')->group(function () {
	Route::get('/addCart/{id}', 'Admin\CartController@themGioHang');
	Route::get('/hienthiCart', 'Admin\CartController@hienThiCart');
	Route::get('/xoa-gio-hang/{id}', 'Admin\CartController@xoaItemGioHang')->name('xoaGioHang');
	Route::get('/dat-hang.html', 'Admin\CartController@datHang')->name('datHang');
	Route::post('/dat-hang.html', 'Admin\CartController@luuDatHang')->name('luuDatHang');
	
});




//Route::get('/ok', 'Admin\pagesController@ok');
