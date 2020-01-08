@extends('layout.index')
@section('title','Tuyển dụng')
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
                            <div class="content-single">
                                <div class="noi-dung-tin">
                                    <div class="head-sub">
                                        <h2>Mô tả công việc</h2>
                                    </div>
                                    <div class="content">
                                        <p>– Nhân viên bán hàng phụ kiện thú cưng:</p>
                                        <p>+ Thời gian : 14h00 – 20h00</p>
                                        <p>– Nhân viên nam phụ việc spa chó mèo:</p>
                                        <p>+ Thời gian: 13h30 – 19h30</p>
                                        <p>– Mức Lương: cơ bản thoả thuận + thưởng chuyên cần.</p>
                                    </div>
                                </div>
                                <div class="noi-dung-tin">
                                    <div class="head-sub">
                                        <h2>Yêu cầu công việc</h2>
                                    </div>
                                    <div class="content">
                                        <p>+ Yêu chó mèo</p>
                                        <p>+ Siêng năng, chăm chỉ, cẩn thận</p>
                                        <p>+ Trách nhiệm với công việc</p>
                                    </div>
                                </div>
                                <div class="noi-dung-tin">
                                    <div class="head-sub">
                                        <h2>Quyền lợi được hưởng</h2>
                                    </div>
                                    <div class="content">
                                        <p>+ Môi trường làm việc vui vẻ, hòa đồng</p>
                                        <p>+ Làm tốt công việc sẽ có thưởng thêm</p>
                                    </div>
                                </div>
                                <div class="noi-dung-tin">
                                    <div class="head-sub">
                                        <h2>Hồ sơ bao gồm</h2>
                                    </div>
                                    <div class="content">
                                        <p>+ Có thể đến trực tiếp địa chỉ: 11 Trần Kế Xương để trao đổi cụ thể.</p>
                                    </div>
                                </div>
                                <div id="ung-tuyen-ngay" class="ung-tuyen noi-dung-tin">
                                    <div class="head-sub">
                                        <h2>Thông Tin Liên Hệ</h2>
                                    </div>
                                    <ul class="thong-tin-ung-tuyen">
                                        <p class="nguoi first"><i class="fas fa-dollar-sign"></i><strong>Người Liên Hệ: </strong>Quản lí nhân sự</p>
                                        <p class="sdt"><i class="fas fa-calendar-alt"></i><strong>Số Điện Thoại: </strong>0935350511</p>
                                        <p class="last"><i class="far fa-clock"></i><strong>Địa Chỉ: </strong>11 Trần Kế Xương, Hải Châu, Đà Nẵng</p>
                                    </ul>
                                </div>
                                <div class="khi-ung-tuyen">
                                    <p>Khi liên hệ nhà tuyển dụng vui lòng nói rõ tham khảo việc làm tại website: <a href="https://thichlamthem.com/">thichlamthem.com</a> để được ưu tiên khi ứng tuyển hãy cảnh giác với bất kỳ hình thức thu phí nào từ nhà tuyển dụng, nếu có vui lòng báo lại cho website biết thông tin.</p>
                                </div>
                            </div>


                        </div>

                    </div>

                    <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection