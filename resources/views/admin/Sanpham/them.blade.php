@extends('adminlte::page')

@section('title', 'Thêm sản phẩm')

@section('content_header')
<h1>Tạo sản phẩm</h1>
@stop

@section('content')
<script type="text/javascript" language="javascript" src="/ckeditor/ckeditor.js"></script>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Sản phẩm</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ route('luuSanpham') }}" enctype="multipart/form-data">
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
        <option value="">------</option>
        @foreach($theloais as $theloai)
        <option value="{{ $theloai->id }}">{{$theloai->Tentheloai}}</option>
        @foreach($theloai->loaiSanpham as $tl)
        <option value="{{ $tl->id }}">----{{$tl->Tentheloai}}</option>
        @endforeach
        @endforeach
      </select>
      <label> Tên sản phẩm </label>
      <input name="Tensanpham" type="text" class="form-control" placeholder="Tên sản phẩm">
      <label>Chi tiết sản phẩm</label>
      <textarea name="Chitietsanpham" type="text" class="form-control ckeditor" rows="10"></textarea>
      <br>
      <label>Sản phẩm hot:</label>
      <label class="radio-inline">
        <input name="New" value="0" checked="" type="radio">Không
      </label>
      <label class="radio-inline">
        <input name="New" value="1" type="radio">Có
      </label>
      <br>
      <label> Giá tiền </label>
      <input name="Giatien" type="text" class="form-control" placeholder="Giá tiền">
      <label>Giá khuyến mãi</label>
      <input name="Giakhuyenmai" type="text" class="form-control" placeholder="Giá khuyến mãi">
      <label> Khuyến mãi </label>
      <input name="Khuyenmai" type="text" class="form-control" placeholder="Khuyến mãi">
      <label> Hình ảnh chính </label>
      <input class="btn btn-app" type="file" name="image" multiple>

      <!-- <label> Thêm hình ảnh cho sản phẩm </label>
      <input class="btn btn-app" type="file" name="Hinhsanpham[]" multiple> -->

      <label> Xuất xứ </label>
      <input name="Xuatxu" type="text" class="form-control" placeholder=" Xuất xứ">
      <br>
      <p><label>Trạng thái</label></p>
      <label class="radio-inline">
        <input name="Trangthai" value="1" checked="" type="radio">Còn hàng
      </label>
      <label class="radio-inline">
        <input name="Trangthai" value="0" type="radio">Hết hàng
      </label>
      <br>
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Thêm</button>
</div>
</form>
</div>
@stop