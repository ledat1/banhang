<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class AdminSlide extends Controller
{
  public function them(Request $request)
  {
    return view('admin.Slide.them');
  }

  public function luu(Request $request)
  {
    $this->validate(
      $request,
      [
        'Lienket' => 'required'

      ],
      [
        'Lienket.required' => 'Bạn chưa nhập liên kết'
      ]
    );
    $slide = new Slide();
    $slide->Lienket = $request->Lienket;

    if ($request->hasFile('Hinhslide')) {

      $file = $request->file('Hinhslide');
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . '--' . $name;
      $file->move('upload/slide', $Hinh);
      $slide->Hinhslide = $Hinh;
    } else {

      $slide->Hinhslide = "";
    }
    $slide->save();
    return redirect()->back()->with('thongbao', 'Thêm thành công');
  }

  public function sua(Request $request, $id)
  {
    return view(
      'admin.Slide.sua',
      [

        'slide' => Slide::findOrFail($id)

      ]
    );
  }

  public function luuSua(Request $request, $id)
  {
    $this->validate(
      $request,
      [
        'Lienket' => 'required'

      ],
      [
        'Lienket.required' => 'Bạn chưa nhập liên kết'
      ]
    );
    $slide = Slide::findOrFail($id);
    $slide->Lienket = $request->Lienket;
    if ($request->hasFile('Hinhslide')) {

      $file = $request->file('Hinhslide');
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . '-' . $name;
      $file->move('upload/slide', $Hinh);
      unlink('upload/slide/' . $slide->Hinhslide);
      $slide->Hinhslide = $Hinh;
    }
    $slide->save();

    return redirect()->back()->with('thongbao', 'Sửa thành công');
  }


  public function danhsach(Request $request)
  {

    return view(

      'admin.Slide.danhsach',
      [

        'slides' => Slide::orderBy('id', 'DESC')->paginate(2)

      ]
    );
  }

  public function xoa($id)
  {
    $slide = Slide::find($id);
    $slide->delete();
    return redirect('admin/slide/danhsach')->with('thongbao', 'Xóa thành công');
  }
}
