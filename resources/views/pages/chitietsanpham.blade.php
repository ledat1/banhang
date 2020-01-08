@extends('layout.index')
@section('title','Chi tiết sản phẩm')
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

                    <div class="product row-fluid">
                        <div class="row-fluid">
                            <div class="span7">
                                <div class="imgintro">
                                    <div class="image_product" id="gallery">
                                        <a class="example-image-link" href="#" data-lightbox="example-set">
                                            <img id="zoom_07" src="/upload/sanpham/{{$chitietsps->image}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="khuyenmainowdetail">
                                    <div class="khuyenmai">
                                        <b>Khuyến mại : </b>
                                        <p>
                                            <style type="text/css">
                                                li.li1 {
                                                    margin: 0.0px 0.0px 0.0px 0.0px;
                                                    font: 12.0px 'Helvetica Neue'
                                                }

                                                span.s1 {
                                                    font: 10.0px Menlo
                                                }

                                                ul.ul1 {
                                                    list-style-type: disc
                                                }
                                            </style>
                                        </p>
                                        <ul class="ul1">
                                            <li style="font-size: 15px;" class="li1">
                                                {{$chitietsps->Khuyenmai}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="infor">
                                    <h1 class="cattile"><span>{{$chitietsps->Tensanpham }}</span></h1>
                                    <ul class="listinfor">
                                        <li><span>Danh Mục</span>
                                            <div>{{$chitietsps->theloaiTow->Tentheloai }}</div>
                                        </li>
                                        <li><span>Xuất xứ </span>
                                            <div>{{$chitietsps->Xuatxu}} </div>
                                        </li>
                                        @if($chitietsps->Giakhuyenmai == 0)

                                        <li><span>Giá bán </span>
                                            <div class="pricedetail">{{number_format($chitietsps->Giatien,0,',','.')}} VNĐ</div>
                                        </li>
                                        @else
                                        <li><span>Giá bán </span>
                                            <div class="pricedetail">{{number_format($chitietsps->Giakhuyenmai,0,',','.')}} VNĐ</div>
                                        </li>
                                        <li><span>Giá cũ</span>
                                            <div class="pricecudetail">{{number_format($chitietsps->Giatien,0,',','.')}} VNĐ</div>
                                        </li>
                                        @endif
                                        <li><span>Tình trạng </span>
                                            <div>@if($chitietsps->Trangthai == 1)
                                                {{'Còn hàng'}}
                                                @else
                                                {{'Hết hàng'}}
                                                @endif
                                            </div>
                                        </li>



                                    </ul>

                                    <div class="muahangdetail">
                                        <div class="btnmuahangdetail">
                                            <p class="addtocart">
                                                <a class="" href="cart/addCart/{{$chitietsps->id}}">
                                                    Mua Ngay
                                                    <span>Giao Hàng Tận Nơi - Thanh Toán Tại Nhà</span>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="lienhemienphi">
                                            <p class="hotline  ">
                                                <a href="#">
                                                    Để có giá tốt hơn <br> 037545645
                                                </a>
                                            </p>
                                            <p class="hotline hotlinerignt ">
                                                <a href="#">
                                                    Tư vấn trả góp 0% <br>037545645

                                                </a>
                                            </p>

                                        </div>
                                        <div class="chinhsach">
                                            <div class="pdchinhssach">
                                                <ul>
                                                    <li>Hoàn tiền 200% nếu phát hiện piano giả </li>
                                                    <li>Nhập khẩu trực tiếp từ Nước ngoài</li>
                                                    <li>Đại lí chính hãng Yamaha tại Việt Nam</li>
                                                    <li>Hỗ trợ trả góp lãi xuất 0%</li>
                                                </ul>
                                            </div>

                                            <div class="votesao">
                                                <div class="pdvotesao">
                                                    <form method="post">
                                                        <input type="submit" value="1" name="1star">
                                                        <input type="submit" value="2" name="2star">
                                                        <input type="submit" value="3" name="3star">
                                                        <input type="submit" value="4" name="4star">
                                                        <input type="submit" value="5" name="5star">
                                                        <input type="hidden" name="product_id" value="353">
                                                    </form>
                                                    <span class="starresult">(5) Votes 5</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="fb-root" class=" fb_reset">
                                        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- hết sản phẩm -->
                            <!-- chi tiết sản phẩm -->
                            <div style="clear:both;" class="description">

                                <ul class="nav nav-tabs" id="myTabtintuc" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link " data-toggle="tab" role="tab" aria-controls="home" aria-expanded="true">Mô tả sản phẩm</a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane   show active" id="home" role="tabpanel">
                                        <p>
                                            {!! $chitietsps->Chitietsanpham !!}
                                        </p>
                                    </div>
                             
                                </div>
                            </div>




                            <!-- End Content -->
            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection