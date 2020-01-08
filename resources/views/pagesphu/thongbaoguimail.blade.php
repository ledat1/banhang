@extends('layout.index')
@section('title','Thông báo gửi mail')
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

                        <h1>!! Khách Hàng Đã Gửi Mail Thành Công</h1>

                        </div>
                       
                    </div>

                    <!-- End Content -->


            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection