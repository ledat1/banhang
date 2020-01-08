<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Theloai;

class AdminTheLoai extends Controller
{
    public function them(Request $request)
    {
        return view(
            'admin.TheLoai.them',

            [
                'theloais' =>  Theloai::whereNull('idLoai')->get()


            ]
        );
    }

    public function luu(Request $request)
    {
        $request->validate(
            [
                'Tentheloai' => 'required|unique:theloais,Tentheloai|min:3|max:100'
            ],
            [
                'Tentheloai.required' => 'Bạn chưa nhập thể loại',
                'Tentheloai.unique'   => 'Tên thể loại đã tồn tại',
                'Tentheloai.min'      => 'Tên từ 3 đến 100 kí tự',
                'Tentheloai.max'      => 'Tên từ 3 đến 100 kí tự',

            ]
        );
        Theloai::create($request->all());
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }
    public function sua($id)
    {

        return view(

            'admin.TheLoai.sua',
            [

                'theloai'   => Theloai::findOrFail($id),
                'theloais'  =>  Theloai::whereNull('idLoai')->get()

            ]
        );
    }


    public function luuSua(Request $request, $id)
    {
        $theloai = Theloai::findOrFail($id);
        $this->validate(
            $request,
            [
                'Tentheloai' => 'required|unique:theloais,Tentheloai|min:3|max:100'
            ],
            [
                'Tentheloai.required' => 'Bạn chưa nhập thể loại',
                'Tentheloai.unique'   => 'Tên thể loại đã tồn tại',
                'Tentheloai.min'      => 'Tên từ 3 đến 100 kí tự',
                'Tentheloai.max'      => 'Tên từ 3 đến 100 kí tự',

            ]
        );

        $theloai->update($request->all());
        $theloai->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }



    public function danhsach(Request $request)
    {

        return view(

            'admin.TheLoai.danhsach',
            [

                'loais' =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->paginate(2)

            ]
        );
    }

    public function xoa($id)
    {
        $theloai = TheLoai::findOrFail($id);
        $theloai->delete();
        return redirect('admin/theloai/danhsach')->with('thongbao', 'Xóa thành công');
    }

    public function timkiem(Request $request)
    {

        return view(

            'admin.TheLoai.timkiem',
            [

                'theloai' => Theloai::where('Tentheloai', 'like', '%' . $request->tukhoa . '%')->paginate(10)

            ]
        );
    }
}
