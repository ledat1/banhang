@extends('layout.index')
@section('title','Tin tức')
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


                    <div class="blog" itemscope="" itemtype="http://schema.org/Blog">

                        <h2> <span class="subheading-category">Tin mới</span>
                        </h2>


                        <div class="category-desc clearfix">
                        </div>

                        <div class="items-row cols-1 row-0 row-fluid clearfix">
                            <div class="span12">
                                @foreach($tintucs as $tintuc)
                                <div class="item column-1" itemprop="blogPost" itemscope="" itemtype="http://schema.org/BlogPosting">

                                    <div class="blogitem">
                                        <div class="row-fluid">
                                            <div class="span3 imgfull">

                                                <div class="intro-catimgitem">
                                                    <a title="{{$tintuc->Tieude}}" href="tin-tuc/{{$tintuc->id}}">
                                                        <img style="height: 160px;width: 190px;" title="{{$tintuc->Tieude}}" class="thub-catitem" src="/upload/tintuc/{{$tintuc->Hinh}}">
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="span9">
                                                <div class="intro-textcatitem">
                                                    <div class="title-cat-di">
                                                        <h3>
                                                            <a class="title-cat-item" title="{{$tintuc->Tieude}}" href="tin-tuc/{{$tintuc->id}}">
                                                                {{$tintuc->Tieude}} </a>
                                                        </h3>

                                                    </div>

                                                    <div class="intro">

                                                        {{$tintuc->Tomtat}} </div>

                                                    <span class="clr">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <br>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                        <!-- End Content -->

                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li>{{ $tintucs->links() }}</li>
                            </ul>

                        </div>
            </main>
            <!-- Begin Sidebar -->
            @include('layout.menu')

            @endsection