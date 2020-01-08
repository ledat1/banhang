<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = 'theloais';

    protected $fillable = ['Tentheloai','idLoai'];

    public function loaiSanpham(){
    	return $this->hasMany('App\Theloai', 'idLoai', 'id');
    }
    public function theLoai(){
    	return $this->belongsTo('App\Theloai', 'idLoai', 'id');
    }
    
    public function sanPham(){
    	return $this->hasManyThrough('App\Sanpham','idLoai','id_Loai','id');
    }
}
