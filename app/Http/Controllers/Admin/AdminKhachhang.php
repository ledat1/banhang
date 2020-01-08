<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Khachhang;

class AdminKhachhang extends Controller
{
    public function danhsach(Request $request)
    {
        return view(

            'admin.Khachhang.danhsach',
            [

                'khachhangs' => Khachhang::with('hoaDon')->orderBy('id', 'DESC')->paginate(5)

            ]
        );
    }

    public function timkiem(Request $request)
    {
        return view(
            'admin.Khachhang.timkiem',
            [

                'tkiemkhachhangs' => Khachhang::where('Hoten', 'like', '%' . $request->kp . '%')->paginate(3)

            ]
        );
    }
    public function xoa($id)
    {
        $khachhang =  Khachhang::findOrFail($id);
        $khachhang->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao', 'Xóa thành công');
    }
}
