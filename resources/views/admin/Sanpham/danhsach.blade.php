@extends('adminlte::page')

@section('title', 'Quản lí sản phẩm')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Quản lí sản phẩm</h3>
    <form action="{{ route('timkiemSanPham') }}" method="get" role="search">

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px; float: right">
          <input type="text" name="sp" class="form-control pull-right" placeholder="Nhập tên sản phẩm" style="width: 150px;">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th tabindex="0">id</th>
             
                <th class="sorting" tabindex="0">Loại sản phẩm</th>
                <th class="sorting" tabindex="0">Tên sản phẩm</th>
                <th class="sorting" tabindex="0">Hot</th>
                <th class="sorting" tabindex="0">Giá tiền</th>
                <th class="sorting" tabindex="0">Giá khuyến mãi</th>
                <th class="sorting" tabindex="0">Khuyến mãi</th>
                <th class="sorting" tabindex="0">Xuất xứ</th>
                <th class="sorting" tabindex="0">Trạng thái</th>
                <th class="sorting" tabindex="0">Hình sản phẩm chính</th>
              
              </tr>
              @if (session('thongbao'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo</h4>
                {{ session('thongbao') }}
            </thead>
            <tbody>
              @endif
              @foreach($sanphams as $sanpham)
              <tr role="row" class="odd">
                <td class="sorting_1">{{ $sanpham->id }}</td>
             
                <td class="sorting_1">{{ $sanpham->theloaiTow->Tentheloai }}</td>
                <td class="sorting_1">{{$sanpham->Tensanpham }}</td>
                <td class="sorting_1">
                  @if($sanpham->New ==1)
                  {{'Mẫu hot'}}
                  @else
                  {{'Mẫu không hot'}}
                  @endif
                </td>
                <td class="sorting_1">{{ $sanpham->Giatien }}</td>
                <td class="sorting_1">{{ $sanpham->Giakhuyenmai }}</td>

                <td class="sorting_1">{{ $sanpham->Khuyenmai }}</td>
                <td class="sorting_1">{{ $sanpham->Xuatxu }}</td>
                <td class="sorting_1">
                  @if($sanpham->Trangthai == 1)
                  {{'Còn hàng'}}
                  @else
                  {{'Hết hàng'}}
                  @endif
                  <td><img width="80px;" src="/upload/sanpham/{{ $sanpham->image }}" /></td>
                </td>
                
                
                <td style="width: 50px;">
                  <button type="button" class="btn btn-block btn-default btn-sm"><a href="sua/{{ $sanpham->id }}">Sửa</a></button>
                </td>
                <td style="width: 50px;">
                  <button type="button" class="btn btn-block btn-default btn-sm"><a href="xoa/{{ 
                    $sanpham->id }}">Xóa</a></button>
                </td>
              </tr>

              @endforeach
            </tbody>
            <tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li>{{ $sanphams->links() }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
@stop