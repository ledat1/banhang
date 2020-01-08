<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiethoadon extends Model
{
    protected $table = 'chitiethoadons';

    protected $fillable = ['Soluong', 'Giatien', 'id_Sp', 'id_Hoadon'];

    public function hoaDonTow()
    {
        return $this->belongsTo('App\Hoadon', 'id_Hoadon', 'id');
    }
    public function sanPhamThree()
    {
        return $this->belongsTo('App\Sanpham', 'id_Sp', 'id');
    }
}
