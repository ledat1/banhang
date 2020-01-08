@extends('adminlte::page')

@section('title', 'Trang quản trị')

@section('content_header')
<h1>Sửa thể loại</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h1 class="box-title">Danh mục</h1>
    <p style="font-size : 20px;">{{ $theloai->Tentheloai }}</p>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ $theloai->id }}">
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
      <label>Danh mục cha:</label>
      <select class="form-control" name="idLoai">
           <option value="">---</option>
        @foreach($theloais as $tl)
        <option
          @if($tl->id == $theloai->idLoai)
          {{"selected"}}
          @endif
         value="{{ $tl->id }}">{{$tl->Tentheloai}}</option>
        @endforeach
      </select>
        <label>Tên thể loại</label>
        <input name="Tentheloai" type="text" class="form-control" value="{{$theloai->Tentheloai}}">
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Sửa</button>
</div>
</form>
</div>
@stop