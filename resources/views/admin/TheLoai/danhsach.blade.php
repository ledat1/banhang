@extends('adminlte::page')

@section('title', 'Quản lí thể loại')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Danh sách danh mục</h3>

    <form action="{{ route('timkiemTheLoai') }}" method="get" role="search">

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px; float: right">
          <input type="text" name="tukhoa" class="form-control pull-right" placeholder="Search">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </form>

  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table">
      <tbody>
        <tr>
          <th style>Tên thể loại</th>
          <th style="width: 40px"></th>
        </tr>
        @if (session('thongbao'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Thông báo</h4>
          {{ session('thongbao') }}
        </div>
  </div>
  @endif

  @foreach($loais as $loai)
  <tr>

    <td>{{ $loai->Tentheloai }}</td>
    <td style="width: 50px;">
      <button type="button" class="btn btn-block btn-default btn-sm"><a href="sua/{{ $loai->id }}">Sửa</a></button>
    </td>
    <td style="width: 50px;">
      <button type="button" class="btn btn-block btn-default btn-sm"><a href="xoa/{{ 
                    $loai->id }}">Xóa</a></button>
    </td>
  </tr>
  @foreach($loai->loaiSanpham as $lt)
  <tr>
    <td>--- {{ $lt->Tentheloai }}</td>
    <td style="width: 50px;">
      <button type="button" class="btn btn-block btn-default btn-sm"><a href="sua/{{ $lt->id }}">Sửa</a></button>
    </td>
    <td style="width: 50px;">
      <button type="button" class="btn btn-block btn-default btn-sm"><a href="xoa/{{ 
                    $lt->id }}">Xóa</a></button>
    </td>
  </tr>
  @endforeach
  @endforeach
  </tbody>
  </table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
  <ul class="pagination pagination-sm no-margin pull-right">
    <li>{{ $loais->links() }}</li>
  </ul>
</div>
</div>
@stop