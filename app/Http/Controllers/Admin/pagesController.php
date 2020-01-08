<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Theloai;
use App\Sanpham;
use App\Hinhsanpham;
use App\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Tintuc;

class pagesController extends Controller
{
    public function trangchu(Request $request)
    {
        $boy = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', 1)
            ->where('Giakhuyenmai', '<>', 0)
            ->take(4)
            ->get();
        $girl = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', 4)
            ->where('Giakhuyenmai', '<>', 0)
            ->get();
        $phukien = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', 3)
            ->where('Giakhuyenmai', '<>', 0)
            ->get();
        $old = DB::table('theloais')
        ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
        ->select('sanphams.*')
        ->where('theloais.idLoai', 2)
        ->where('Giakhuyenmai', '<>', 0)    
        ->take(4)
        ->get();;
   
        return view(
            'pages.trangchu',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'hots'      =>  Sanpham::where('New', 1)->take(4)->get(),
                'news'      =>  Sanpham::orderBy('id', 'DESC')->take(4)->get(),
                'olds'      =>  $old,
                'boys'      =>  $boy,
                'grils'     =>  $girl,
                'phukiens'  =>  $phukien,
                'slides'    =>  Slide::all(),
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()
            ]
        );
    }

    public function menu(Request $request)
    {
        return view(
            'layout.menu',
            [

                'theloais' =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),

            ]
        );
    }

    public function laySanPham($id)
    {


        return view(
            'pages.sanpham',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),

                'sptls'     =>  Sanpham::where('id_Loai', $id)->paginate(2),
                'loais'     =>  Theloai::where('id', $id)->first(),
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function laySanPhamTow($id)
    {
        $tl =  DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', $id)
            ->orWhere('theloais.id', $id)
            ->paginate(4);

        return view(
            'pages.sanphamtl',
            [

                'theloais'   =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'tls'        =>  $tl,
                'loais'      =>  Theloai::where('id', $id)->first(),
                'noibats'    =>  Tintuc::where('Noibat', 1)->take(3)->get()
            ]
        );
    }

    public function tuyenDung(Request $request)
    {
        return view(
            'pages.tuyendung',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }
    public function giaoHang(Request $request)
    {
        return view(
            'pages.giaohang',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }
    public function gioiThieu(Request $request)
    {
        return view(
            'pages.gioithieu',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }
    public function huongDan(Request $request)
    {
        return view(
            'pages.huongdan',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }
    public function lienHe(Request $request)
    {
        return view(
            'pages.lienhe',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }
    public function layTuVan(Request $request)
    {
        return view(
            'pagesphu.tuvan',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'tuvans'    =>  Tintuc::where('Tuvan', 1)->orderBy('id', 'DESC')->paginate(2),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
            ]
        );
    }

    public function layTinTuc(Request $request)
    {
        return view(
            'pages.tintuc',
            [
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'tintucs'    => Tintuc::orderBy('id', 'DESC')->paginate(4),
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()
            ]
        );
    }
    public function chiTietTinTuc($id)
    {
     


        return view(
            'pages.chitiettintuc',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'chitiettts' => Tintuc::where('id', $id)->first()
            ]
        );
    }
    public function chiTietSanPham($id)
    {
        return view(
            'pages.chitietsanpham',
            [
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get(),
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'chitietsps' => Sanpham::where('id', $id)->first()
            ]
        );
    }
    public function laySanPhamMoi(Request $request)
    {

        return view(
            'pagesphu.sanphammoi',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'news'      =>  Sanpham::orderBy('id', 'DESC')->take(20)->paginate(4),
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function laySanPhamCu(Request $request)
    {
        $cat = DB::table('theloais')
        ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
        ->select('sanphams.*')
        ->where('theloais.idLoai', 2)
        ->where('Giakhuyenmai', '<>', 0)
        ->paginate(4);

        return view(
            'pagesphu.sanphamcu',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'olds'      =>  $cat,
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function layAoKhoacNam(Request $request)
    {
        $boy = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', 1)
            ->where('Giakhuyenmai', '<>', 0)
            ->paginate(4);
        return view(
            'pagesphu.aokhoacnam',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'boys'      =>  $boy,
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function layAoKhoacNu(Request $request)
    {
        $girld = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.idLoai', 4)
            ->where('Giakhuyenmai', '<>', 0)
            ->paginate(4);
        return view(
            'pagesphu.aokhoacnu',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'girlds'      =>  $girld,
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function layPhuKien(Request $request)
    {
        $phukien = DB::table('theloais')
            ->join('sanphams', 'theloais.id', '=', 'sanphams.id_Loai')
            ->select('sanphams.*')
            ->where('theloais.id', 3)
            ->where('Giakhuyenmai', '<>', 0)
            ->paginate(4);
        return view(
            'pagesphu.phukien',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'phukiens'      =>  $phukien,
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function sanPham(Request $request)
    {

        return view(
            'pagesphu.loadsanpham',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'alls'      => Sanpham::paginate(4),
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function timKiem(Request $request)
    {
        $key = $request->key;
        $key = str_replace(' ', '%', $key);
        $timkiem = Sanpham::where('Tensanpham', 'like', '%' . $key . '%')->paginate(4);
        return view(
            'pagesphu.timkiem',
            [

                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),
                'timkiems'      => $timkiem,
                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()

            ]
        );
    }
    public function luuGuiMail(Request $request)
    {
        $data['gui'] = $request->all();
        $mail = $request->email;
        Mail::send('pagesphu.email', $data, function ($message) use ($mail) {
            $message->from('letiendat27297@gmail.com', 'Admin');
            $message->to($mail, $mail);
            // $message->cc('letiendat27297@gmail.com', 'dat le');
            $message->subject('Xác nhận ý kiến');
        });

        return redirect('thongbaoguimail');
    }
    public function guiMail()
    {
        return view(
            'pagesphu.thongbaoguimail',
            [
                'theloais'  =>  Theloai::whereNull('idLoai')->with('loaiSanpham')->get(),

                'noibats'  =>  Tintuc::where('Noibat', 1)->take(3)->get()
            ]
        );
    }
}
