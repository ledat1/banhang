<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table = 'khachhangs';

    protected $fillable = ['Hoten','Gioitinh','email','Diachi','Sodienthoai','Ghichu','Hinh'];
    
    public function hoaDon(){
    	return $this->hasMany('App\Hoadon', 'id_Khachhang', 'id');
    }
  
}
