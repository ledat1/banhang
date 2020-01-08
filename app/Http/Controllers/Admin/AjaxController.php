<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Theloai;
class AjaxController extends Controller
{
    public function layLoaiTin($idTheLoai){
        $loais = Theloai::where('idLoai',$idTheLoai)->get();
        foreach($loais as $loai){
            echo "<option value='" .$loai->id."'>".$loai->Tentheloai."</option>";
        }
    }
}
