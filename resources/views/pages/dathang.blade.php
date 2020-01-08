@extends('layout.index')
@section('title','Đặt hàng')
@section('content')

<!-- Content -->
<div class="maincontent">
    <div class="container">
        <div class="row-fluid">

            <main id="content" role="main" class="span9">
                <div>
                    <div class="mobile-top">
                        <div class="moduletable">
                            <h3>Tìm kiếm sản phẩm </h3>
                            <div class="searchCr">
                                <form action="https://pianomozart.com/tim-kiem.html" method="post" class="form-validate">
                                    <input name="key" id="keyword" placeholder="Tên sản phẩm" value="" />
                                    <div id="loading" class=" "> </div>
                                    <div id="result" class="resultSearch"></div>

                                    <input type="submit" class="timkiemsp" name="gui" value="Tìm kiếm" />
                                </form>

                            </div>

                        </div>

                    </div>
                    <!------------------------------------------------------------------------>

                    <!-- Begin Content -->
                    <div class="thongtintuyendung ">

                        @if(Session::has('thongbao'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h2> {{ Session::get('thongbao') }} </h2>
                        </div>
                        @endif
                        <form id="contact" action="{{route('luuDatHang')}}" method="POST">
                            @csrf
                            <h3 class="buoc">Đơn hàng của bạn</h3>
                            <h5><a href="cart/hienthiCart">

                                    [ Sửa giỏ hàng ]</a></h5>
                            @if(Session::has('cart'))

                            <table class="cartlist table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr class="info">
                                        <td>Sản phẩm</td>
                                        <td>Số lượng</td>
                                        <td>Giá</td>
                                        <td>Thành tiền</td>

                                    </tr>
                                    @foreach($sanpham_carts as $sp)
                                    <tr>
                                        <td>
                                            <div class="infospcart">
                                                <div class="haspcartpage">
                                                    <img src="/upload/sanpham/{{$sp['item']['image']}}" title="Casio AP 270 WH">
                                                </div>
                                                <h3>{{$sp['item']['Tensanpham']}}</h3>
                                            </div>
                                        </td>
                                        <td>{{$sp['qty']}}</td>
                                        @if($sp['item']['Giakhuyenmai'] == 0)
                                        <td>{{ number_format($sp['item']['Giatien'],0,',','.')}} VNĐ</td>
                                        <td>{{ number_format($sp['item']['Giatien']* $sp['qty'],0,',','.')}} VNĐ</td>
                                        @else
                                        <td>{{ number_format($sp['item']['Giakhuyenmai'],0,',','.')}} VNĐ</td>
                                        <td>{{ number_format($sp['item']['Giakhuyenmai']* $sp['qty'],0,',','.')}} VNĐ</td>
                                        @endif

                                    </tr>
                                    @endforeach

                                    </tr>
                                    <tr class="error">
                                        <td colspan="3" style="text-align:right"> Tổng tiền :</td>

                                        <td><b> @if(Session::has('cart')){{ number_format($totalPrice,0,',','.')}} VNĐ
                                                @else 0 VNĐ
                                                @endif</b></td>

                                    </tr>


                                </tbody>
                            </table>

                            @endif
                            <div class="tblProfile">
                                <h3 class="buoc">Nhập thông tin khách hàng</h3>
                                <input type="text" placeholder="Nhập họ tên" class="required" name="Hoten" id="name">
                                <input type="radio" name="Gioitinh" value="Nam" checked="checked"><span>Nam</span>
                                <input type="radio" name="Gioitinh" value="Nữ" checked="checked"><span>Nữ</span>
                                <input type="text" placeholder="Số điện thoại" required="true" minlength="5" maxlength="12" class="textbox digits" name="Sodienthoai" id="phone">
                                <input type="text" placeholder="VD:datle@gmail.com" required="true" maxlength="50" class="required email" name="email" id="email">
                                <input type="text" placeholder="Địa chỉ" required="true" maxlength="50" class="textbox" name="Diachi" id="address">
                                <textarea name="Ghichu" placeholder="Ghi chú" id="comment"></textarea>

                                <input type="hidden" name="uid" value="0">
                                <input type="hidden" name="MaDH" value="1565861897">
                                <input type="submit" class="btn btn-danger btn-large button buttonspecial" value="Đặt Hàng" name="submit">

                            </div>


                            <div class="alerthdpay">
                                <p class="alertapay">Quý khác mua hàng vui lòng chuyển tiền về tài khoản: </p>
                                <div class="itembank">
                                    <h4>ACB</h4>
                                    <ul>
                                        <li>Chủ tài khoản: Phạm Văn Trường </li>
                                        <li>STK: 213821149 </li>
                                        <li>Chi nhánh Đông Đô, Hà Nội</li>
                                    </ul>
                                </div>

                                <div class="itembank">
                                    <h4>Vietinbank</h4>
                                    <ul>
                                        <li>Chủ tài khoản: Phạm Văn Trường </li>
                                        <li>STK: 100004906414</li>
                                        <li>Chi nhánh Nam Thăng Long, Hà Nội </li>
                                    </ul>
                                </div>

                                <div class="itembank">
                                    <h4>Techcombank</h4>
                                    <ul>
                                        <li>Chủ tài khoản: Phạm Văn Trường </li>
                                        <li>STK: 19029567177016 </li>
                                        <li>Chi nhánh Văn Quán, Hà Nội</li>
                                    </ul>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection