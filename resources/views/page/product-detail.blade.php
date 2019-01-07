@extends('master')
@section('content')
@section('classheader','class=header-v4')
<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="index" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<span class="stext-109 cl4">
			{{$sanpham->name}}
		</span>
	</div>
</div>
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="source/images/{{$sanpham->image}}">
								<div class="wrap-pic-w pos-relative">
									<img src="source/images/{{$sanpham->image}}" alt="IMG-PRODUCT">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="source/images/{{$sanpham->image}}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
							<div class="item-slick3" data-thumb="source/images/{{$sanpham->image}}">
								<div class="wrap-pic-w pos-relative">
									<img src="source/images/{{$sanpham->image}}" alt="IMG-PRODUCT">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="source/images/{{$sanpham->image}}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
							<div class="item-slick3" data-thumb="source/images/{{$sanpham->image}}">
								<div class="wrap-pic-w pos-relative">
									<img src="source/images/{{$sanpham->image}}" alt="IMG-PRODUCT">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="source/images/{{$sanpham->image}}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						{{$sanpham->name}}
					</h4>
					@if($sanpham->buy >= 15)
					<span class="stext-105 cl3" style="color: red;"> 		Mua nhiều
					</span>
					@else
					@endif
					<br>
					<span class="mtext-106 cl2">
						@if($sanpham->promotion_price == 0)
						<span class="stext-105 cl3">
							{{$sanpham->unit_price}}$
						</span>
						@else
						<span style="display: inline-block;text-decoration: line-through;">
							{{$sanpham->unit_price}}$
						</span>
						<br>
						<span style="display: inline-block; color:red;">
							{{$sanpham->promotion_price}}$
						</span>
						@endif
					</span>
					<p class="stext-102 cl3 p-t-23">
						{{$sanpham->description}}
					</p>
				</div>
			</div>
		</div>
		<div class="bor10 m-t-50 p-t-43 p-b-40">
			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả</a>
					</li>
					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#information" role="tab">Thông tin thêm</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content p-t-43">
					<!-- - -->
					<div class="tab-pane fade show active" id="description" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6">
								Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
							</p>
						</div>
					</div>
					<!-- - -->
					<div class="tab-pane fade" id="information" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<ul class="p-lr-28 p-lr-15-sm">
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Weight
										</span>
										<span class="stext-102 cl6 size-206">
											0.79 kg
										</span>
									</li>
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Dimensions
										</span>
										<span class="stext-102 cl6 size-206">
											110 x 33 x 100 cm
										</span>
									</li>
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Materials
										</span>
										<span class="stext-102 cl6 size-206">
											60% cotton
										</span>
									</li>
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Color
										</span>
										<span class="stext-102 cl6 size-206">
											Black, Blue, Grey, Green, Red, White
										</span>
									</li>
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Size
										</span>
										<span class="stext-102 cl6 size-206">
											XL, L, M, S
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- - -->
				</div>
			</div>
		</div>
	</div>
	<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
		<span class="stext-107 cl6 p-lr-25">
			SKU: JAK-01
		</span>
		<span class="stext-107 cl6 p-lr-25">
			Categories: Jacket, Men
		</span>
	</div>
</section>
@endsection