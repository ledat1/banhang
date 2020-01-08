<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tintuc;

class AdminTintuc extends Controller
{
    public function them(Request $request){
        return view('admin.Tintuc.them');
    }

    public function luu(Request $request){
        $this->validate($request,
        [
            'Tieude' => 'required|unique:tintucs,Tieude|min:3|max:100',
            'Tomtat' => 'required|unique:tintucs,Tomtat',
            'Noidung'=> 'required',
        ],
        [
            'Tieude.required' => 'Bạn chưa nhập thể loại',
            'Tieude.unique'   => 'Tiêu đề đã tồn tại',
            'Tieude.min'      => 'Tiêu đề từ 3 đến 100 kí tự',
            'Tieude.max'      => 'Tiêu đề từ 3 đến 100 kí tự',
            'Tomtat.required' => 'Bạn chưa nhập đoạn tóm tắt',
            'Tomtat.unique'   => 'Đoạn tóm tắt đã tồn tại',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
        ]);
        $tintuc = new Tintuc();
        $tintuc->fill($request->all());
        if($request->hasFile('Hinh')){

            $file = $request->file('Hinh');
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4).'--'. $name;
            $file->move('upload/tintuc',$Hinh);
            $tintuc->Hinh = $Hinh;

        }else{

            $tintuc->Hinh = "";
        }
        $tintuc->save();
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function danhsach(Request $request){
        return view(
            'admin.Tintuc.danhsach',
        [
            'tintucs' => Tintuc::paginate(2)

        ]);
    }

    public function sua(Request $request, $id){
        return view(
            'admin.Tintuc.sua',
        [   

            'tintuc' => Tintuc::findOrFail($id)
            
        ]);
    }
    public function luuSua(Request $request, $id){
        $this->validate($request,
        [
            'Tieude' => 'required|min:3|max:100',
            'Tomtat' => 'required',
            'Noidung'=> 'required',
        ],
        [
            'Tieude.required' => 'Bạn chưa nhập thể loại',
            //'Tieude.unique'   => 'Tiêu đề đã tồn tại',
            'Tieude.min'      => 'Tiêu đề từ 3 đến 100 kí tự',
            'Tieude.max'      => 'Tiêu đề từ 3 đến 100 kí tự',
            'Tomtat.required' => 'Bạn chưa nhập đoạn tóm tắt',
            //'Tomtat.unique'   => 'Đoạn tóm tắt đã tồn tại',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
        ]);
        $tintuc = Tintuc::find($id);
        $tintuc->Tieude = $request->Tieude;
        $tintuc->Tomtat = $request->Tomtat;
        $tintuc->Noibat = $request->Noibat;
        $tintuc->Tuvan = $request->Tuvan;
        $tintuc->Noidung = $request->Noidung;

        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4).'-'. $name;
            $file->move('upload/tintuc',$Hinh);
            unlink('upload/tintuc/'.$tintuc->Hinh);
            $tintuc->Hinh = $Hinh;
        }
        $tintuc->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
    public function xoa($id){
        $tintuc = Tintuc::findOrFail($id);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao', 'Xóa thành công');
    }
}
