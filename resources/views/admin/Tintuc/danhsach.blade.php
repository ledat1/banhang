@extends('adminlte::page')

@section('title', 'Quản lí sản phẩm')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Quản Lí Tin Tức</h3>
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
                <th class="sorting" tabindex="0">Tiêu đề</th>
                <th class="sorting" tabindex="0">Hình ảnh</th>
                <th class="sorting" tabindex="0">Tóm tắt</th>
                <th class="sorting" tabindex="0">Nổi bật</th>
                <th class="sorting" tabindex="0">Tin tư vấn</th>
              </tr>
              @if (session('thongbao'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo</h4>
                {{ session('thongbao') }}
            </thead>
            <tbody>
              @endif
              @foreach($tintucs as $tintuc)
              <tr role="row" class="odd">
                <td class="sorting_1">{{ $tintuc->id }}</td>
                <td class="sorting_1">{{ $tintuc->Tieude }}</td>
                <td><img width="150px;" src="/upload/tintuc/{{ $tintuc->Hinh }}" /></td>

                <td class="sorting_1">{{ $tintuc->Tomtat }}</td>
                <td class="sorting_1">
                  @if($tintuc->Noibat == 1)
                  {{'Có'}}
                  @else
                  {{'Không'}}
                  @endif
                </td>
                <td class="sorting_1">
                  @if($tintuc->Tuvan == 1)
                  {{'Có'}}
                  @else
                  {{'Không'}}
                  @endif
                </td>
                <td style="width: 50px;">
                  <button type="button" class="btn btn-block btn-default btn-sm"><a href="sua/{{ $tintuc->id }}">Sửa</a></button>
                </td>
                <td style="width: 50px;">
                  <button type="button" class="btn btn-block btn-default btn-sm"><a href="xoa/{{ 
                    $tintuc->id }}">Xóa</a></button>
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
            <li>{{ $tintucs->links() }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
@stop