<div id="sidebar" class="span3 main-left">
    <div class="sidebar-nav">
        <div class="moduletable_social">
            "

            <div class="custom_social">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <a href="https://www.facebook.com/profile.php?id=100002792109393"><img alt="" class="cke-resize" src="image/f.png" /></a></td>
                            <td>
                                <a href="" target="_blank"><img alt="" src="image/g.png" /></a></td>
                            <td>
                                <a href="https://youtube.com" target="_blank"><img alt="" src="image/y.png" /></a></td>
                            <td>
                                <a href="#" target="_blank"><img alt="" src="image/rss.png" /></a></td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    &nbsp;</p>
                <div id="ckimgrsz" style="left: 2px; top: 2px;">
                    <div class="preview">
                        &nbsp;</div>
                </div>
            </div>
        </div>
        <div class="moduletable">
            <h3>Tìm kiếm thú cưng</h3>
            <div class="searchCr">
                <form action="{{'ok'}}" method="get" class="form-validate" role="search">
                    <input name="key" id="keyword" placeholder="Tên sản phẩm" type="text" />
                    <div id="loading" class=""> </div>
                    <div id="result" class="resultSearch"></div>
                    <input type="submit" class="timkiemsp" value="Tìm kiếm" />
                </form>

            </div>


        </div>
        <div class="moduletable_product">
            <h3>Danh mục thú cưng</h3>
            @foreach($theloais as $theloai)
            <ul class="nav menu" id="sanphamid">
                <li><a href="the-loai/{{$theloai->id}}/{{$theloai->Tentheloai}}.html">{{ $theloai->Tentheloai }}</a>
                    <ul class="nav-child unstyled small">
                        @foreach($theloai->loaiSanpham as $tl)
                        <li class="item-152"><a href="the-loai/san-pham/{{$tl->id}}/{{$tl->Tentheloai}}.html">{{ $tl->Tentheloai }}</a></li>
                        @endforeach
                    </ul>
                </li>

            </ul>
            @endforeach
        </div>
        <div class="moduletable_news">
            <h3>Tin Nổi Bật</h3>
            @foreach($noibats as $noibat)
            <div class="latestnews_news">
                <div class="list-news span12">
                    <div class="img span3">
                        <a title="{{$noibat->Tieude}}" href="tin-tuc/{{$noibat->id}}">
                            <img class="thub-catitem" src="/upload/tintuc/{{$noibat->Hinh}}">
                        </a>
                    </div>
                    <div class="title span9">
                        <h6>
                            <a href="tin-tuc/{{$noibat->id}}" class="name">
                                {{$noibat->Tieude}} </a>
                        </h6>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        <div class="moduletable_gallery">
            <h3>Hình Ảnh Thú Cưng</h3>


            <div class="custom_gallery">
                <p>
                    <img alt="" class="cke-resize cke-resize" src="https://photo-2-baomoi.zadn.vn/w1000_r1/2017_03_05_252_21687295/21bd24eddaab33f56aba.jpg" /></p>
                <p>
                    <br>
                    <img alt="" src="http://redsvn.net/wp-content/uploads/2018/09/REDSVN-Kitten-22.jpg" /></p>
                <p>
                    <br>
                    <img alt="" src="https://img.thuthuatphanmem.vn/uploads/2018/09/26/hinh-nen-chu-cho-bong-tren-bai-co-xanh-dep_052809960.jpg" /></p>

                </p>
                <div id="ckimgrsz" style="left: 0px; top: 411px;">
                    <div class="preview">
                        &nbsp;</div>
                </div>



            </div>
        </div>
    </div>
    <div class="moduletable_search">
        <h3>Liên kết WEB</h3>

        <div class="custom_search">
            <p>
                <a href="http://shope.online" style="color: rgb(0, 85, 128); text-decoration-line: underline; outline: 0px;"><img alt="" class="cke-resize" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFFh2X6bmuRUzf1Tf-dMBP_7HODvrwuMQ79MlWxGV7CsESYJW" /></a></p>
            <div id="ckimgrsz" style="left: 0px; top: 0px;">
                <div class="preview">
                    &nbsp;</div>
            </div>
            <div id="ckimgrsz" style="left: 0px; top: 0px;">
                <div class="preview">
                    &nbsp;</div>
            </div>
            <div id="ckimgrsz" style="left: 0px; top: 18px;">
                <div class="preview">
                    &nbsp;</div>
            </div>
        </div>
    </div>
    <div class="moduletable">
        <h3>Video</h3>


        <div class="custom">
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VJAKPdkmWJE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </div>
    </div>
</div>
</div>
<!-- End Sidebar -->



</div>
</div>
<div id="partner">
    <div class="container">
        <div class="row-fluid">
            <div class="partner span12">

            </div>
        </div>
    </div>
</div>