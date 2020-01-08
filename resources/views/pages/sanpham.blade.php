@extends('layout.index')
@section('title','Sản phẩm')
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
                    <div class="moduletable_hotproduct">
                        <h3>{{$loais->Tentheloai}}</h3>
                        <br>
                        <div class="tvo-carousel jcarousel-skin-tangoTNT ">

                            <ul id="product">
                                @foreach($sptls as $sptl)
                                <li class="product span3">
                                    <a href="san-pham/{{$sptl->id}}/{{$sptl->Tensanpham}}.html">
                                        <span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="<" title="" data-original-title="">

                                            <img src="/upload/sanpham/{{$sptl->image}}" class="css_zoom_image">

                                        </span>
                                    </a>
                                    @if($sptl->Giakhuyenmai != 0)
                                    <img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
                                    @endif
                                    <div>
                                        <a href="san-pham/{{$sptl->id}}/{{$sptl->Tensanpham}}.html">{{$sptl->Tensanpham}}</a>

                                    </div>
                                    <p style="color:#595959;">
                                        @if($sptl->Giakhuyenmai == 0)

                                        Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($sptl->Giatien,0,',','.')}} VNĐ</span>
                                        @else
                                        Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($sptl->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
                                        Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($sptl->Giatien,0,',','.')}} VNĐ</span>
                                        @endif
                                    </p>
                                    <p class="addtocart" style=" border: 0px solid red; margin-left: auto;right: auto;margin-top: 10px;width: 130px;text-align: center;">
                                        <a href="cart/addCart/{{$sptl->id}}" style="color: #fff; display: block;background: #cf3e2c;border-radius: 20px;line-height: 25px;">Đặt hàng</a>
                                    </p>
                                </li>

                            </ul>
                            @endforeach
                        </div>

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
                        <li>{{ $sptls->links() }}</li>
                    </ul>

                </div>
            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection