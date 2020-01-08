@extends('layout.index')
@section('title','Giỏ hàng')
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

                    <div id="system-message-container">
                    </div>
                    @if(Session::has('cart'))
                    <h3 class="titshoping">Giỏ hàng :
                        @if(Session::has('cart')){{$totalQty}} Sản phẩm
                        @else <h6>Giỏ hàng trống</h6>
                        @endif
                    </h3>
                    <table class="cartlist table table-striped table-bordered table-hover">

                        <tbody>
                            <tr class="info">
                                <td>Sản phẩm</td>
                                <td>Số lượng</td>
                                <td>Giá</td>
                                <td>Thành Tiền</td>
                                <td>Xóa</td>
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
                                <td><a class="" href="{{route('xoaGioHang',$sp['item']['id'])}}"> <img src="https://www.pianomozart.com/templates/protostar/images/icon-xoa.png" title="Bạn muốn xóa thật à?"> </a></td>
                            </tr>
                            @endforeach


                            <tr class="error">
                                <td colspan="5" class="thanhtien">Tổng tiền: <span>
                                        @if(Session::has('cart')){{ number_format($totalPrice,0,',','.')}} VNĐ
                                        @else 0 VNĐ
                                        @endif

                                    </span>
                                </td>
                            </tr>
                            @endif

                            <tr>


                                <script type="text/javascript">
                                    setmenutype = function(type) {


                                        window.parent.SqueezeBox.close();
                                        window.location = "http://google.com.vn";
                                    }
                                </script>


                                <td colspan="3" class="continueshopp">
                                    <a href="{{route('trangchu')}}">Tiếp tục mua hàng </a>
                                </td>

                                <td colspan="2" class="thanhtoannow">
                                    <a href="{{route('datHang')}}">Tiến hành thanh toán</a>
                                </td>

                            </tr>
                        </tbody>
                    </table>


                </div>
                <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection