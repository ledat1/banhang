<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{

    protected $table = 'hoadons';

    protected $fillable = ['Tongtien', 'Ghichu', 'date', 'id_Khachhang'];

    public function khachHang()
    {
        return $this->belongsTo('App\Khachhang', 'id_Khachhang', 'id');
    }
    public function chiTietHoaDonTow()
    {
        return $this->hasMany('App\Chitiethoadon', 'id_Hoadon', 'id');
    }
}
