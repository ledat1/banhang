			@extends('layout.index')
			@section('content')
			<div class="vt_nivo_slider">
				<div id="vtnivo94" class="slider-wrapper theme-default theme-default94 nivocontrol-bottomright nivo-bullets01.png nivo-arrows01.png captionposition-topleft captionrounded-all" style="height: 360px; width: auto;">
					<div class="ribbon"></div>
					<div id="vt_nivo_slider94" class="nivoSlider">
						@foreach($slides as $slide)
						<a href="" target="_blank"><img src="/upload/slide/{{ $slide->Hinhslide }}" alt="Vinaora Nivo Slider" /></a>
						@endforeach
					</div>

				</div>
			</div>
			<script type="text/javascript">
				jQuery.noConflict();
				jQuery(window).load(function() {
					jQuery('#vt_nivo_slider94').nivoSlider({
						effect: 'fold', // Specify sets like: 'fold,fade,sliceDown'
						slices: 15, // For slice animations
						boxCols: 8, // For box animations
						boxRows: 4, // For box animations
						animSpeed: 500, // Slide transition speed
						pauseTime: 3000, // How long each slide will show
						startSlide: 0, // Set starting Slide (0 index)
						directionNav: true, // Next & Prev navigation
						controlNav: false, // 1,2,3... navigation
						controlNavThumbs: false, // Use thumbnails for Control Nav
						pauseOnHover: true, // Stop animation while hovering
						manualAdvance: false, // Force manual transitions
						prevText: 'Prev', // Prev directionNav text
						nextText: 'Next', // Next directionNav text
						randomStart: true, // Start on a random slide
						beforeChange: function() {}, // Triggers before a slide transition
						afterChange: function() {}, // Triggers after a slide transition
						slideshowEnd: function() {}, // Triggers after all slides have been shown
						lastSlide: function() {}, // Triggers when last slide is shown
						afterLoad: function() {} // Triggers when slider has loaded
					});
				});
			</script>

			<!-- END: Vinaora Nivo Slider >> http://vinaora.com/ -->

			</div>
			</div>
			</div>
			</div>

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
									<h3>THÚ CƯNG HOT</h3>
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($hots as $hot)
											<li class="product span3 first">
												<a href="san-pham/{{$hot->id}}/{{$hot->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$hot->image}}" class="css_zoom_image">
													</span>
												</a>
												@if($hot->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">

												@endif
												<div>
													<a href="san-pham/{{$hot->id}}/{{$hot->Tensanpham}}.html">{{$hot->Tensanpham}}</a>

												</div>
												<p style="color:#595959;">
													@if($hot->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($hot->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($hot->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($hot->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>
											</li>

										</ul>
										@endforeach
									</div>
								</div>
								<div class="moduletable_productdigital">
									<h3>THÚ CƯNG VÀ THỨC ĂN MỚI</h3>
									@foreach($news as $new)
									<a style="position:absolute;top:8px;right:10px;" href="{{route('sanPhamMoi')}}">Xem tất cả</a>
									@endforeach
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($news as $new)
											<li class="product span3 ">
												<a href="san-pham/{{$new->id}}/{{$new->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$new->image}}" class="css_zoom_image">

												</a>
												@if($new->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
												@endif
												<div>
													<a href="san-pham/{{$new->id}}/{{$new->Tensanpham}}.html">{{$new->Tensanpham}}</a>

												</div>

												<p style="color:#595959;">
													@if($new->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($new->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($new->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($new->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>


											</li>

										</ul>
										@endforeach
									</div>
								</div>
								<div class="moduletable">


									<div class="custom">
										<p>
											<img alt="" src="https://www.petcity.vn/media/banner/banner_839ab468.png" /></p>
									</div>
								</div>
								<div class="moduletable_hotproduct">
									<h3>THÚ CƯNG VẸT</h3>
									<a style="position:absolute;top:8px;right:10px;" href="{{route('aoKhoacNam')}}">Xem tất cả</a>
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($boys as $boy)
											<li class="product span3 ">
												<a href="san-pham/{{$boy->id}}/{{$boy->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$boy->image}}" class="css_zoom_image">

												</a>
												@if($boy->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
												@endif
												<div>
													<a href="san-pham/{{$boy->id}}/{{$boy->Tensanpham}}.html">{{$boy->Tensanpham}}</a>

												</div>

												<p style="color:#595959;">
													@if($boy->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($boy->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($boy->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($boy->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>

											</li>

										</ul>
										@endforeach
									</div>
								</div>
								<div class="moduletable_productupright">
									<h3>THÚ CƯNG CHÓ</h3>

									<link rel="stylesheet" type="text/css" href="css/skin1.css" />

									<a style="position:absolute;top:8px;right:10px;" href="{{route('aoKhoacNu')}}">Xem tất cả</a>
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($grils as $gril)
											<li class="product span3">
												<a href="san-pham/{{$gril->id}}/{{$gril->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$gril->image}}" class="css_zoom_image">

												</a>
												@if($gril->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
												@endif
												<div>
													<a href="san-pham/{{$gril->id}}/{{$gril->Tensanpham}}.html">{{$gril->Tensanpham}}</a>

												</div>

												<p style="color:#595959;">
													@if($gril->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($gril->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($gril->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($gril->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>

											</li>

										</ul>
										@endforeach
									</div>
								</div>

								<div class="moduletable">

									<div class="custom">
										<p>
											<img alt="" src="https://www.petcity.vn/media/banner/banner_25b2822c.png" /></p>
									</div>
								</div>
								<div class="moduletable_productdigital">
									<h3>THÚ CƯNG MèO</h3>

									<link rel="stylesheet" type="text/css" href="css/skin1.css" />

									<a style="position:absolute;top:8px;right:10px;" href="{{route('sanPhamCu')}}">Xem tất cả</a>
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($olds as $old)
											<li class="product span3 first">
												<a href="san-pham/{{$old->id}}/{{$old->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$old->image}}" class="css_zoom_image">

												</a>
												@if($old->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
												@endif
												<div>
													<a href="san-pham/{{$old->id}}/{{$old->Tensanpham}}.html">{{$old->Tensanpham}}</a>

												</div>

												<p style="color:#595959;">
													@if($old->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($old->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($old->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($old->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>

											</li>

										</ul>
										@endforeach


									</div>
								</div>
							
								<!-- <div class="moduletable_productupright">
								<br>
									<h3>THỨC ĂN VÀ PHỤ KIỆN	</h3>

									<link rel="stylesheet" type="text/css" href="css/skin1.css" />

									<a style="position:absolute;top:26px;;right:10px;" href="{{route('phuKien')}}">Xem tất cả</a>
									<div class="tvo-carousel jcarousel-skin-tangoTNT ">

										<ul id="product">
											@foreach($phukiens as $phukien)
											<li class="product span3">
												<a href="san-pham/{{$phukien->id}}/{{$phukien->Tensanpham}}.html">
													<span class="nn_tooltips-link hover isimg" data-toggle="popover" data-html="true" data-template="&lt" title="">

														<img src="/upload/sanpham/{{$phukien->image}}" class="css_zoom_image">

												</a>
												@if($phukien->Giakhuyenmai != 0)
												<img style="left: 0;  position: absolute; top: 0;  margin: 0;  padding: 0;" src="image/sale-icon.png">
												@endif
												<div>
													<a href="san-pham/{{$phukien->id}}/{{$phukien->Tensanpham}}.html">{{$phukien->Tensanpham}}</a>

												</div>

												<p style="color:#595959;">
													@if($phukien->Giakhuyenmai == 0)

													Giá : <span style="color:#d50000;text-transform:uppercase; }">{{ number_format($phukien->Giatien,0,',','.')}} VNĐ</span>
													@else
													Giá: <span style="color:#d50000;text-transform:uppercase;">{{ number_format($phukien->Giakhuyenmai,0,',','.')}} VNĐ</span><br>
													Giá cũ: <span style="color:#ccc;text-transform:uppercase; text-decoration: line-through;}">{{ number_format($phukien->Giatien,0,',','.')}} VNĐ</span>
													@endif
												</p>

											</li>

										</ul>
										@endforeach
									</div> -->
								</div>
								<!------------------------------------------------------------------------>
							
							<!-- End Content -->
						</main>
						<!-- Begin Sidebar -->
						@include('layout.menu')

						@endsection