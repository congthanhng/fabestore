@extends('master')
@section('title','Fabe Store')
@section('content')
<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			@foreach($slide as $sl)
			<div class="item-slick1" style="background-image: url(source/images/{{$sl->image}});">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-101 cl2 respon2">
								{{$sl->title}}
							</span>
						</div>
						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								{{$sl->description}}
							</h2>
						</div>
						<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
							<a href="{{$sl->link}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Xem ngay
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Banner Xu huong -->
<div class="container">
	<div class="p-t-25">
		<h3 class="cl5">
			Xu hướng
		</h3>
	</div>
	<div class="row">
		@foreach($trend as $trd)
		<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
			<!-- Block1 -->
			<div class="block1 wrap-pic-w">
				<img src="source/images/{{$trd->image}}" alt="IMG-BANNER">
				<a href="{{$trd->link}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
					<div class="block1-txt-child1 flex-col-l">
						<span class="block1-name ltext-102 trans-04 p-b-8">
							{{$trd->title}}
						</span>
						<span class="block1-info stext-102 trans-04">
							{{$trd->description}}
						</span>
					</div>
					<div class="block1-txt-child2 p-b-4 trans-05">
						<div class="block1-link stext-101 cl0 trans-09">
							Xem ngay
						</div>
					</div>
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
</div>
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
			</h3>
		</div>
		{{-- Filter --}}
		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					Sản phẩm
				</button>
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Women">
					Phụ nữ
				</button>
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Men">
					Đàn ông
				</button>
			</div>
		</div>
		{{-- Data All Product --}}
		<div class="row isotope-grid">
			@foreach($all_product as $all)
			<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto isotope-item {{$all->gender}} {{$all->type}}">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="source/images/{{$all->image}}" alt="IMG-PRODUCT" height="334.350px">
						<a href="{{route('addcart-page',$all->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
							Thêm vào giỏ
						</a>
					</div>
					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="{{route('productdetail-page',$all->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{$all->name}}
							</a>
							<div class="stext-105 cl3">
								@if($all->promotion_price == 0)
								<span class="stext-105 cl3">
									${{$all->unit_price}}
								</span>
								@else
								<span style="display: inline-block;text-decoration: line-through;">
									${{$all->unit_price}}
								</span>
								<br>
								<span style="display: inline-block; color:red;">
									${{$all->promotion_price}}
								</span>
								@endif
							</div>						
						</div>
						<div class="block2-txt-child2 flex-r p-t-3">
							{{-- <a href="{{route('addcart-page',$all->id)}}" style="color: black; size: 10px;">
								<i class="zmdi zmdi-shopping-cart"></i>
							</a> --}}
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<!-- Pagiantion-->
		{{-- <div class="flex-c-m flex-w w-full p-t-45">
				{{$all_product->links()}}
			</div> --}}
		</div>
	</section>
	@endsection