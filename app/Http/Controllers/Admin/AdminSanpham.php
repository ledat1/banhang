<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sanpham;
use App\Theloai;
use App\Hinhsanpham;
use DB;
use File;


class AdminSanpham extends Controller
{
    public function them(Request $request)
    {
        return view(
            'admin.Sanpham.them',
            [

                'theloais' => Theloai::whereNull('idLoai')->with('loaiSanpham')->get()

            ]
        );
    }

    public function luu(Request $request)
    {
        $this->validate(
            $request,
            [
                'Tensanpham'     =>     'required|unique:sanphams,Tensanpham',
                'Chitietsanpham' =>     'required',
                'New'            =>     'required',
                'Giatien'        =>     'required',
                'Giakhuyenmai'   =>     'required',
                'Khuyenmai'      =>     'required',
                'Xuatxu'         =>     'required',
                'Trangthai'      =>     'required',
            ],
            [
                'Tensanpham.required'       => 'Bạn chưa nhập sản phẩm',
                'Tensanpham.unique'         => 'Sản phẩm đã tồn tại',
                'Chitietsanpham.required'   => 'Bạn chưa nhập chi tiết sản phẩm',
                'New.required'              => 'Bạn chưa nhập new',
                'Giatien.required'          => 'Bạn chưa nhập giá tiền',
                'Giakhuyenmai.required'     => 'Bạn chưa nhập giá khuyến mãi',
                'Khuyenmai.required'        => 'Bạn chưa nhập khuyến mãi',
                'Xuatxu.required'           => 'Bạn chưa nhập xuất xứ',
                'Trangthai.required'        => 'Bạn chưa nhập trạng thái',
            ]
        );
        $sanpham = new Sanpham();
        $sanpham->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4) . '--' . $name;
            $file->move('upload/sanpham', $Hinh);
            $sanpham->image = $Hinh;
        } else {
            $sanpham->Hinh = "";
        }
        // $sanpham->save();
        // if ($request->hasFile('Hinhsanpham')) {
        //     foreach ($request->file('Hinhsanpham') as $image) {
        //         $filenameWithExt = $image->getClientOriginalName();
        //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //         $extension = $image->getClientOriginalExtension();

        //         $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //         $image->move('upload/sanpham', $fileNameToStore);

        //         $image = new Hinhsanpham([
        //             'id_Sanpham'  => $sanpham->id,
        //             'Hinhsanpham' => $fileNameToStore
        //         ]);

        //         $image->save();

                $sanpham->save();
            

            return redirect()->back()->with('thongbao', 'Thêm thành công');
        
    }
    public function sua(Request $request, $id)
    {
        return view(
            'admin.Sanpham.sua',
            [

                'sanpham' => Sanpham::findOrFail($id),
                'theloais' => Theloai::whereNull('idLoai')->with('loaiSanpham')->get()

            ]
        );
    }
    public function luuSua(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'Tensanpham'     =>     'required',
                'Chitietsanpham' =>     'required',
                'New'            =>     'required',
                'Giatien'        =>     'required',
                'Giakhuyenmai'   =>     'required',
               //'Donvi'          =>     'required',
            ],
            [
                'Tensanpham.required'       => 'Bạn chưa nhập sản phẩm',
                //'Tensanpham.unique'         => 'Sản phẩm đã tồn tại',
                'Chitietsanpham.required'   => 'Bạn chưa nhập chi tiết sản phẩm',
                'New.required'              => 'Bạn chưa nhập new',
                'Giatien.required'          => 'Bạn chưa nhập giá tiền',
                'Giakhuyenmai.required'     => 'Bạn chưa nhập giá khuyến mãi',
                //'Donvi.required'            => 'Bạn chưa nhập đơn vị',
            ]
        );
        $sanpham = Sanpham::findOrFail($id);
        $sanpham->update($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4) . '--' . $name;
            $file->move('upload/sanpham', $Hinh);
            $sanpham->image = $Hinh;
        }
        $sanpham->save();
        // if ($request->hasFile('Hinhsanpham')) {
        //     foreach ($request->file('Hinhsanpham') as $image) {
        //         $filenameWithExt = $image->getClientOriginalName();
        //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //         $extension = $image->getClientOriginalExtension();

        //         $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //         $image->move('upload/sanpham', $fileNameToStore);

        //         $image = new Hinhsanpham([
        //             'id_Sanpham'  => $sanpham->id,
        //             'Hinhsanpham' => $fileNameToStore
        //         ]);

        //         $image->save();

        //         $sanpham->save();
        //     }
        //     $sanpham->save();

            return redirect()->back()->with('thongbao', 'Sửa thành công');
        
    }
    public function xoa($id)
    {
        $sanpham =  Sanpham::findOrFail($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao', 'Xóa thành công');
    }

    public function danhsach(Request $request)
    {
        return view(
            'admin.Sanpham.danhsach',
            [

                'sanphams' => Sanpham::with('hinhSanPham')->orderBy('id', 'DESC')->paginate(5)

            ]
        );
    }

    public function timkiem(Request $request)
    {
        return view(
            'admin.Sanpham.timkiem',
            [

                'sanpham' => Sanpham::where('Tensanpham', 'like', '%' . $request->sp . '%')->paginate(3)

            ]
        );
    }
}
