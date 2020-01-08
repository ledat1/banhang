@extends('layout.index')
@section('title','Tìm kiếm')
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
                                <form action="" method="post" class="form-validate">
                                    <input name="key" id="keyword" placeholder="Tên sản phẩm" value="" />
                                    <div id="loading" class=" "> </div>
                                    <div id="result" class="resultSearch"></div>

                                    <input type="submit" class="timkiemsp" name="gui" value="Tìm kiếm" />
                                </form>

                            </div>

                        </div>

                    </div>
                    <link href="https://www.pianomozart.com/components/com_sanpham/css/style.css" rel="stylesheet" type="text/css" />
                    <div class="div_category">
                        <div class="descript_cat">
                            <h3 class="cattile"><span>Tìm thấy : {{count($timkiems)}} Sản Phẩm</span></h3>
                            <div class="noidungcategory">

                            </div>
                        </div>
                        <ul class="ul_category row-fluid ">
                            @foreach($timkiems as $timkiem)
                            <li class="li_category first">
                                <div class="product_in_cat">
                                    <p class="sanphamimg">
                                        <a href="san-pham/{{$timkiem->id}}/{{$timkiem->Tensanpham}}.html">
                                            <span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="<" title="" data-original-title="">
                                                <img src="/upload/sanpham/{{$timkiem->image}}">
                                            </span>
                                        </a>
                                    </p>
                                    @if($timkiem->Giakhuyenmai != 0)
                                    <img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
                                    @endif
                                    <h3 class="titleproduct">
                                        <a href="san-pham/{{$timkiem->id}}/{{$timkiem->Tensanpham}}.html">{{$timkiem->Tensanpham}}</a>
                                    </h3>



                                    <div class="boxgiamd">
                                        <p style="color:#595959;">
                                            @if($timkiem->Giakhuyenmai == 0)

                                            Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($timkiem->Giatien,0,',','.')}} VNĐ</span>
                                            @else
                                            Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($timkiem->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
                                            Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($timkiem->Giatien,0,',','.')}} VNĐ</span>
                                            @endif
                                        </p>
                                    </div>

                                    <p class="addtocart">
                                        <a href="cart/addCart/{{$timkiem->id}}">Đặt hàng</a>
                                    </p>

                                </div>
                            </li>
                        
                        @endforeach
                    </div>
                    <!------------------------------------------------------------------------>

                    <!-- Begin Content -->
                    <div id="system-message-container">
                    </div>

                    <div class="blog-featured" itemscope itemtype="http://schema.org/Blog">


                    </div>

                </div>
                <!-- End Content -->

                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li>{{ $timkiems->links() }}</li>
                    </ul>

                </div>
            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection