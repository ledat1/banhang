<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhsanpham extends Model
{
    protected $table = 'hinhsanphams';
    protected $fillable = ['id_Sanpham', 'Hinhsanpham'];

    public function sanPhamTow()
    {
        return $this->belongsTo('App\Sanpham', 'id_Sanpham', 'id');
    }
}
