<div class="body">
    <h1 class="h1-title">Mua Áo Khoác với nhiều mẫu mã hấp dẫn</h1>
    <!-- Header -->
    <header class="header" role="banner">
        <div class="container">

            <a class="header-l" href="/">
                <img style="width: 1100px; height: 500px;" src="https://img.lovepik.com/ppt_photo/40009/5019.jpg_cover.jpg!/fw/850" />
            </a>
        </div>
    </header>

    <!-- Main menu -->
    <div id="mainmenu">
        <div class="iconmenu">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <div class="container">
            <div class="row-fluid">
                <div class="mainmenu span12">
                    <nav class="navigation" role="navigation">
                        <div class="tvtma-megamnu navbar navbar-default" role="navigation">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#tvtma-megamnu">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <nav class="nav-collapse collapse" id="tvtma-megamnu">
                                    <ul class="nav navbar-nav nav-pills">
                                        <li class="item-101 current active"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                                        <li class="item-112"><a href="gioi-thieu.html">Giới thiệu</a></li>
                                        <li class="item-113 deeper parent dropdown"><a class="dropdown-toggle" href="{{route('sanPham')}}">Shop </a>
                                            <ul class="nav-child unstyled dropdown-menu" style="width: 500px;">

                                                <div class=" tvtma-megamnu-content">
                                                    @foreach($theloais as $theloai)
                                                    <ul class="span2 unstyled">
                                                        <li class="item-198 megacol-header"><a href="the-loai/{{$theloai->id}}/{{$theloai->Tentheloai}}.html">{{ $theloai->Tentheloai }} </a></li>
                                                        @foreach($theloai->loaiSanpham as $tl)
                                                        <li class="item-147"><a href="the-loai/san-pham/{{$tl->id}}/{{$tl->Tentheloai}}.html">{{ $tl->Tentheloai }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    @endforeach

                                                </div>  
                                        </li>
                                    </ul>
                                  
                                    <li class="item-115"><a href="tin-tuc.html">Tin Mới</a></li>
                                  
                                    <!-- <li class="item-186"><a href="tu-van.html">Tư vấn </a> -->
                                    </li>
                                    <li class="item-194"><a href="{{route('tuyendung')}}">Tuyển dụng </a>
                                    </li>
                                    <li class="item-117"><a href="lien-he.html">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Slideshow -->
    <div id="slideshow">
        <div class="container">
            <div class="row-fluid">
                <div class="slideshow">