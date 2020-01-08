@extends('adminlte::page')

@section('title', 'Trang quản trị')

@section('content_header')
<h1>Sửa Sản Phẩm</h1>
@stop

@section('content')
<style>
  .icon_del {
    position: relative;
    top: 4px;
    left: 10px;
  }
</style>
<script type="text/javascript" language="javascript" src="/ckeditor/ckeditor.js"></script>
<div class="box box-primary">
  <div class="box-header with-border">
    <h1 class="box-title">Sản phẩm</h1>
    <p style="font-size : 20px;">Tên sản phẩm : {{ $sanpham->Tensanpham }}</p>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{$sanpham->id}}" name="frmSua" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}<br>

        @endforeach
      </div>
      @endif

      @if (session('thongbao'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Thông báo</h4>
        {{ session('thongbao') }}
      </div>
    </div>
    @endif
    <div class="form-group">

      <label>Thể loại sản phẩm</label>
      <select class="form-control" name="id_Loai" id="Loaisanpham">
        @foreach($theloais as $theloai)
        <option value="{{ $theloai->id }}">{{$theloai->Tentheloai}}</option>
        @foreach($theloai->loaiSanpham as $tl)
        <option @if($tl->id == $sanpham->id_Loai)
          {{"selected"}}
          @endif
          value="{{ $tl->id }}">----{{$tl->Tentheloai}}</option>
        @endforeach
        @endforeach
      </select>
      <label> Tên sản phẩm </label>
      <input name="Tensanpham" type="text" class="form-control" value="{{$sanpham->Tensanpham}}">
      <label>Chi tiết sản phẩm</label>
      <textarea name="Chitietsanpham" type="text" class="form-control ckeditor" rows="10">{{$sanpham->Chitietsanpham}}</textarea>
      <label> New </label>
      <input name="New" type="text" class="form-control" value="{{$sanpham->New}}">
      <label> Giá tiền </label>
      <input name="Giatien" type="text" class="form-control" value="{{$sanpham->Giatien}}">
      <label>Giá khuyến mãi</label>
      <input name="Giakhuyenmai" type="text" class="form-control" value="{{$sanpham->Giakhuyenmai}}">
      <label> Khuyến mãi </label>
      <input name="Khuyenmai" type="text" class="form-control" value="{{$sanpham->Khuyenmai}}">
      <label> Xuất xứ </label>
      <input name="Xuatxu" type="text" class="form-control" value="{{$sanpham->Xuatxu}}">
      <label> Hình ảnh chính</label>
      <input class="btn btn-app" type="file" name="image" multiple>
      <p><img width="100px;" src="/upload/sanpham/{{ $sanpham->image }}" /></p>
      <label> Hình ảnh </label>
      <input class="btn btn-app" type="file" name="Hinhsanpham[]" multiple>
      @foreach($sanpham->hinhSanPham as $sp)
      <p id="ok2">
        <img width="100px;" src="/upload/sanpham/{{ $sp->Hinhsanpham }}" idHinh = "{{$sp->id}}" id="ok2" />
      </p>
      @endforeach

      <input name="Xuatxu" type="text" class="form-control" value="{{$sanpham->Xuatxu}}">
      <label>Trạng thái</label>
      <input name="Trangthai" type="text" class="form-control" value="{{$sanpham->Trangthai}}">
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Sửa</button>
</div>
</form>
</div>
@stop

