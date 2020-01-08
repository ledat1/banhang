@extends('adminlte::page')

@section('title', 'Trang quản trị')

@section('content_header')
<h1>Sửa Tin Tức</h1>
@stop

@section('content')
<script type="text/javascript" language="javascript" src="/ckeditor/ckeditor.js"></script>
<div class="box box-primary">
  <div class="box-header with-border">
    <h1 class="box-title">Tin tức</h1>
    <p style="font-size : 20px;"> Tiêu đề tin tức : {{ $tintuc->Tieude }}</p>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{$tintuc->id}} " enctype="multipart/form-data">
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
      <input name="Tieude" type="text" class="form-control" value="{{$tintuc->Tieude}}">
      <label>Tóm tắt </label>
      <textarea name="Tomtat" type="text" class="form-control" rows="3" placeholder="Tóm tắt">
      {{$tintuc->Tomtat}}
      </textarea>
      <label>Nội dung</label>
      <textarea name="Noidung" type="text" class="form-control ckeditor" rows="10">{{$tintuc->Noidung}}</textarea>
      <p><label>Tin Tức Nổi Bật:</label>
        <p>
          <label class="radio-inline">
            <input name="Noibat" value="0" checked="" type="radio">Không
          </label>
          <label class="radio-inline">
            <input name="Noibat" value="1" type="radio">Có
          </label>
          <br>
          <br>
          <label> Hình ảnh </label>
          <p><img width="100px;" src="/upload/tintuc/{{ $tintuc->Hinh }}" /></p>
          <input type="file" name="Hinh" class="form-control">
          <p><label>Tin Tức Tư Vấn:</label>
            <p>
              <label class="radio-inline">
                <input name="Tuvan" value="0" checked="" type="radio">Không
              </label>
              <label class="radio-inline">
                <input name="Tuvan" value="1" type="radio">Có
              </label>
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Sửa</button>
</div>
</form>
</div>
@stop