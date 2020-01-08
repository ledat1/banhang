@extends('layout.index')
@section('title','Hướng dẫn mua hàng')
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
                        <div class="divdetail"><header>
<p><span style="color:#FF0000;"><span style="font-size:18px;"><strong>Hướng dẫn cách mua đặt hàng thú cưng  Shop thú cưng</strong></span></span></p>

<p>Bạn vui lòng học theo các bước sau đây để đăng ký mua sắm trên website thucung.com</p>

<p><strong>Bước 1:</strong>&nbsp;truy vấn vào trang web <a href="https://thucung.com/" title="thú cưng"><span style="color:#B22222;"><strong>thú cưng</strong></span></a> chọn món hàng yêu thích&nbsp;muốn tìm theo những cách sau:</p>

<p>Hướng dẫn mua hàng thú cưng</p>
</figure>

<ol>
	<li>dùng dụng cụ search, gõ tên món đồ mong muốn sắm</li>
	<li>coi những ngành hàng của thú cưng</li>
	<li>tham khảo&nbsp;<strong>"Danh mục thú cưng"</strong></li>
	<li>tìm hiểu thêm&nbsp;<strong>"Khuyến mãi"</strong></li>
	<li>xem thêm&nbsp;<strong>"Sản phẩm liên quan"</strong></li>
</ol>

<p><strong>Bước 2:</strong>&nbsp;Vào chi tiết món đồ buộc phải mua, thực hiện thao tác làm việc&nbsp;<strong>"Mua Ngay"</strong></p>

<p>một số lưu ý:</p>

<p>Hướng dẫn đặt hàng thú cưng</p>
</figure>

<ol>
	<li>Nên tìm hiểu thêm phần&nbsp;<strong>nhận định cửa hàng</strong>,&nbsp;<strong>nhận xét món đồ</strong>, mục&nbsp;<strong>hỏi đáp</strong>&nbsp;cùng shop trên zalo</li>
	<li>Chọn&nbsp;màu, size mặt hàng</li>
	<li>Bấm "<strong>Mua Ngay"</strong>&nbsp;để tiến hành thanh toán</li>
	<li>bạn có thể dùng tác dụng "<strong>bổ sung vào giỏ hàng"</strong>&nbsp;để có thể đặt hầu hết mặt hàng bên trên cùng 1 đơn hàng.</li>
</ol>

<p><strong><u>Lưu ý:</u></strong>&nbsp;Chỉ những sản phẩm cùng một shop mới gom thành một giỏ hàng <a href="https://thoitrangngaynay.com" title="thú cưng nam nữ đẹp"><span style="color:#FF0000;"><strong>thú cưng đẹp</strong></span></a></p>

<p><strong>Bước 3:</strong>&nbsp;tiến hành thanh toán</p>

<ol>
	<li>trường hợp bạn bạn muốn tìn hiểu thông tin đặt hàng hãy gọi SĐT hotline cho chúng tôi để tư vấn chi tiết hơn và đơn hàng và cách thức đặt hàng.</li>
	<li>Ngoài ra bạn cũng có thể mua hàng chẳng cần đăng nhập.</li>
</ol>

<p><u>quan tâm</u>: bạn đừng nên tạo tài khoản email ảo để đăng ký vì sẽ không truy cập được email để vận động kiện, đánh giá bên trên đơn hàng…</p>

<p><strong>Bước 4:</strong>&nbsp;Xác nhân thông tin đơn hàng&nbsp;thanh toán đúng với sản phẩm đã đặt hàng</p>

<p>Hình thức thanh toán mua thú cưng</p>
</figure>

<ol>
	<li>Nhập đủ thông báo</li>
	<li>mua và&nbsp;vận chuyển phù hợp với phí and thời hạn trên toàn quốc</li>
	<li>chọn lựa người mua thanh toán thích hợp</li>
	<li>đánh giá thông tin deals, click vào mức&nbsp;<strong>“Đặt hàng”</strong>&nbsp;để hoàn vớ giao dịch</li>
	<li>Đặt hành thắng lợi
	<p><span style="color:#FF0000;">* Nhận thông báo đặt đơn hàng thành công thời gian giao hàng và phí ship hàng.</span></p>
	</li>
</ol>
</header>
</div>
                   

                        </div>
                       
                    </div>

                    <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection