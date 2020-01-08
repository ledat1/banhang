@extends('layout.index')
@section('title','Giới thiệu')
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
                    <div class="item-page" itemscope="" itemtype="http://schema.org/Article">
                        <meta itemprop="inLanguage" content="vi-VN">
                        <div class="page-header">

                            <p>Shop Thú cưng Online Love Tree với phương châm "Đồng hành cùng phong cách Thú cưng của bạn" sẽ là nơi mua sắm an 
                                toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến 
                                cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng.</p>

                            <p>Shop Thú cưng Love Tree chuyên cung cấp:
                            - Thú cưng mới
                            - Thức ăn 
                            với nhiều mặt hàng đa dạng và phong phú như thú cưng chó, thú cưng chó,  thú cưng mèo,.... sẽ là sự lựa chọn tốt nhất cho phong cách thời của các bạn.</p>

                           <p> Tuy Shop Thú cưng Love Tree hiện chủ yếu chỉ bán hàng online nhưng luôn luôn đảm bảo uy tín và chất lượng sản phẩm (Nếu trong quá trình mua - bán hàng xảy ra lỗi từ phía shop,
                                chúng tôi sẽ hoàn trả tiền và bồi thường thiệt hại cho quý khách)</p>

                            <p>Mọi thắc mắc, tư vấn và đóng góp ý kiến xin liên hệ với chúng tôi qua:
                            Số điện thoại: 0922.166.561 (Mr.Duy)
                            Facebook Fanpage: <a style="color:blue;">https://www.facebook.com/shoplovetree</a>
                            Mail: shoplovetree@gmail.com hoặc paulnhatduy@gmail.com
                            Yahoo: paul_nhatduy
                            Địa chỉ: 97 ấp Xẻo Môn xã Phụng Hiệp huyện Phụng Hiệp tỉnh Hậu Giang
                            Shop Thú cưng Online Love Tree
                            Hân Hạnh Được Phục Vụ Quý Khách!</p>

                        </div>

                    </div>

                    <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection