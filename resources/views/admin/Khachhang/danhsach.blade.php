@extends('adminlte::page')

@section('title', 'Quản lí khách hàng')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">'Quản lí khách hàng</h3>
    <form action="{{ route('tiemkiemKhachHang') }}" method="get" role="search">

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px; float: right">
          <input type="text" name="kp" class="form-control pull-right" placeholder="Nhập tên khách hàng" style="width: 150px;">
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
             
                <th class="sorting" tabindex="0">Họ tên</th>
                <th class="sorting" tabindex="0">Giới tính</th>
                <th class="sorting" tabindex="0">Email</th>
                <th class="sorting" tabindex="0">Địa chỉ</th>
                <th class="sorting" tabindex="0">Số điện thoại</th>
                <th class="sorting" tabindex="0">Ghi chú</th>
                <th class="sorting" tabindex="0">Tổng tiền hóa đơn:</th>
                <th class="sorting" tabindex="0">Ngày đặt mua:</th>
                <th class="sorting" tabindex="0">Ghi chú mua hàng:</th>
              
              </tr>
              @if (session('thongbao'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo</h4>
                {{ session('thongbao') }}
            </thead>
            <tbody>
              @endif
              @foreach($khachhangs as $khachhang)
              <tr role="row" class="odd">
                <td class="sorting_1">{{ $khachhang->id }}</td>
             
                <td class="sorting_1"> {{ $khachhang->Hoten }} </td>
                <td class="sorting_1">{{ $khachhang->Gioitinh }}</td>
                <td class="sorting_1"> {{ $khachhang->email }}</td>
                <td class="sorting_1">{{ $khachhang->Diachi }}</td>
                <td class="sorting_1">{{ $khachhang->Sodienthoai }}</td>
                <td class="sorting_1">{{ $khachhang->Ghichu }}</td>
                @foreach($khachhang->hoaDon as $kp)
                <td class="sorting_1">{{ $kp->Tongtien  }}</td>
                <td class="sorting_1">{{ $kp->date  }}</td>
                <td class="sorting_1">{{ $kp->Ghichu   }}</td>
                @endforeach
                
                
                <td style="width: 50px;">
                  <button type="button" class="btn btn-block btn-default btn-sm"><a href="xoa/{{ 
                    $khachhang->id }}">Xác nhận</a></button>
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
              <li>{{ $khachhangs->links() }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
@stop