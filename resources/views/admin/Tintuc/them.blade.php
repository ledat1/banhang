@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Tạo tin tức</h1>
@stop

@section('content')
<script type="text/javascript" language="javascript" src="/ckeditor/ckeditor.js"></script>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Tin tức</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ route('luuTintuc') }}" enctype="multipart/form-data">
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
      <label> Tiêu đề </label>
      <input name="Tieude" type="text" class="form-control" placeholder="Tiêu đề">
      <label>Tóm tắt </label>
      <textarea name="Tomtat" type="text" class="form-control" rows="3" placeholder="Tóm tắt"></textarea>
      <label>Nội dung</label>
      <textarea name="Noidung" type="text" class="form-control ckeditor" rows="10"></textarea>
      <br>
      <p><label>Tin Tức Nổi Bật:</label><p>
        <label class="radio-inline">
          <input name="Noibat" value="0" checked="" type="radio">Không
        </label>
        <label class="radio-inline">
          <input name="Noibat" value="1" type="radio">Có
        </label>
        <br>
        <br>
      <label> Hình ảnh </label>
      <input class="btn btn-app" type="file" name="Hinh">
      <!-- <p><label>Tin Tức Tư Vấn:</label><p>
        <label class="radio-inline">
          <input name="Tuvan" value="0" checked="" type="radio">Không
        </label>
        <label class="radio-inline">
          <input name="Tuvan" value="1" type="radio">Có
        </label> -->
        
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Thêm</button>
</div>
</form>
</div>
@stop