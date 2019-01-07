@extends('master')
@section('classheader','class=header-v4')
@section('content')
<section class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">
			{{-- 	Breadcrumb --}}
			<div>
				<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
					<a href="index" class="stext-109 cl8 hov-cl1 trans-04">
						Home
						<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
					</a>
					<a  class="stext-109 cl8 hov-cl1 trans-04">
						{{$name_type->name}}
					</a>
				</div>
				<p class="p-t-100">There are {{count($type_product)}} products</p>	
			</div>
			{{-- Choose gender --}}
			<div style="margin: 0 auto;" class="flex-w flex-l-m filter-tope-group m-tb-10">
			<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
				Tất cả
			</button>
			<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Women">			
				Phụ nữ
			</button>
			<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Men">		
				Đàn ông
			</button>
		</div>
	</div>
	{{-- Data product best seller --}}
	<div class="row isotope-grid">
		@foreach($type_product as $tp)
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$tp->gender}}">
			<!-- Block2 -->
			<div class="block2">
				<div class="block2-pic hov-img0">
					<img src="source/images/{{$tp->image}}" alt="IMG-PRODUCT" height="334.350px">
					<a href="{{route('addcart-page',$tp->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
						Thêm vào giỏ
					</a>
				</div>
				<div class="block2-txt flex-w flex-t p-t-14">
					<div class="block2-txt-child1 flex-col-l ">
						<a href="{{route('productdetail-page',$tp->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
							{{$tp->name}}
						</a>
						<div class="stext-105 cl3">
							@if($tp->promotion_price == 0)
							<span class="stext-105 cl3">
								${{$tp->unit_price}}
							</span>
							@else
							<span style="display: inline-block;text-decoration: line-through;">
								${{$tp->unit_price}}
							</span>
							<br>
							<span style="display: inline-block;color: red;">
								${{$tp->promotion_price}}
							</span>
							@endif
						</div>
					</div>
					<div class="block2-txt-child2 flex-r p-t-3">
						<a href="{{route('addcart-page',$tp->id)}}" style="color: black; size: 10px;">
							<i class="zmdi zmdi-shopping-cart"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<!-- Pagiantion-->
		{{-- <div class="flex-c-m flex-w w-full p-t-45">
				{{$bestseller->links()}}
			</div> --}}
		</div>
	</section>
	@endsection