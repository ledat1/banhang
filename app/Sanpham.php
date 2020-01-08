<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanphams';
    protected $fillable = [
    'Tensanpham', 'Chitietsanpham', 'New', 'Giatien', 'Giakhuyenmai', 'Khuyenmai', 'Xuatxu', 'Trangthai','image', 'id_Loai'
    ];

    public function theloaiTow()
    {
        return $this->belongsTo('App\Theloai', 'id_Loai', 'id');
    }

    public function hinhSanPham()
    {
        return $this->hasMany('App\Hinhsanpham', 'id_Sanpham', 'id');
    }
    public function chiTietHoaDon()
    {
        return $this->hasMany('App\Chitiethoadon', 'id_Sp', 'id');
    }
}
