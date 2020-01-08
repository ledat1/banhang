@extends('layout.index')
@section('title','Liên hệ')
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

                            <div id="map" style="width:800px;;height:800px;">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15116.732576222272!2d105.66068882673788!3d18.700616996868657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce1975d248d9%3A0x6d3c173f08fe0a7c!2zUXXDoW4gQsOgdSwgVHAuIFZpbmgsIE5naOG7hyBBbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1565930366748!5m2!1svi!2s" 
                                    width="800px;" height="800px;" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                            <br>

                            <div class="contact-form">
                                <form id="contact-form" method="post" class="form-validate form-horizontal">
                                    @csrf
                                    <fieldset>
                                        <legend>Gửi Email. Tất cả các thông tin được đánh dấu * là bắt buộc.</legend>
                                        <div class="control-group">
                                            <div class="control-label"><label id="jform_contact_name-lbl" for="jform_contact_name" class="hasTooltip required" title="" data-original-title="<strong>Tên</strong><br />Tên của bạn">
                                                    Tên<span class="star">&nbsp;*</span></label></div>
                                            <div class="controls"><input type="text" name="Ten" id="jform_contact_name" value="" class="required" size="30" required="required" aria-required="true"></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label"><label id="jform_contact_email-lbl" for="jform_contact_email" class="hasTooltip required" title="" data-original-title="<strong>Email</strong><br />Email liên hệ">
                                                    Email<span class="star">&nbsp;*</span></label></div>
                                            <div class="controls"><input type="email" name="email" class="validate-email required" id="jform_contact_email" value="" size="30" required="required" aria-required="true"></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label"><label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasTooltip required" title="" data-original-title="<strong>Tiêu đề</strong><br />Nhập tiêu đề cho liên hệ tại đây.">
                                                    Tiêu đề<span class="star">&nbsp;*</span></label></div>
                                            <div class="controls"><input type="text" name="Tieude" id="jform_contact_emailmsg" value="" class="required" size="60" required="required" aria-required="true"></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label"><label id="jform_contact_message-lbl" for="jform_contact_message" class="hasTooltip required" title="" data-original-title="<strong>Nội dung</strong><br />Nhập nội dung liên hệ tại đây.">
                                                    Nội dung<span class="star">&nbsp;*</span></label></div>
                                            <div class="controls"><textarea name="Noidung" id="jform_contact_message" cols="50" rows="10" class="required" required="required" aria-required="true"></textarea></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                            </div>
                                        </div>
                                        <div class="form-actions"><button class="btn btn-primary validate" type="submit">Gửi Email</button>

                            
                                    </fieldset>
                                </form>
                            </div>
                        </div>


                    </div>

                    <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection