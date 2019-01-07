@extends('master')
@section('content')
@section('classheader','class=header-v4')
<form action="{{route('checkout-page')}}" method="post" class="bg0 p-t-75 p-b-85">
	@csrf
	<div class="container">
		@if(Session::has('Notification'))
		<div class="alert alert-success">
			{{Session::get('Notification')}}				
		</div>
		@endif
		<div class="row">
			<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">Sản phẩm</th>
								<th class="column-2"></th>
								<th style="text-align: center;" class="column-3">Giá</th>
								<th style="text-align: center;" class="column-4">Số lượng</th>
								<th class="column-5"></th>
							</tr>
							@if(Session::has('cart'))
							@foreach($product_cart as $product)
							<tr class="table_row">
								<td class="column-1">
									<div class="how-itemcart1">
										<img src="source/images/{{$product['item']['image']}}" alt="IMG">
									</div>
								</td>
								<td class="column-2">{{$product['item']['name']}}</td>
								<td class="column-3">
									@if($product['item']['promotion_price'] > 0)
									<span style="color:red;">
										{{$product['item']['promotion_price']}}$
									</span>
									&nbsp
									<span style="text-decoration: line-through;display: inline-block;">
										{{$product['item']['unit_price']}}
									</span>
									@else
									{{$product['item']['unit_price']}}$
								@endif$</td>
								<td style="text-align: center;" class="column-4">
									{{$product['qty']}}
								</td>
								<td class="column-5">
									<a href="{{route('delcart-page',$product['item']['id'])}}"><i class="zmdi zmdi-close"></i></a>
									
								</td>
							</tr>
							@endforeach
							@endif

						</table>
					</div>

					{{-- Hinh thuc thanh toan --}}

					<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						<div style="margin: 0 auto;" class="flex-w flex-m m-r-20 m-tb-5 ">
							<input class="stext-104 cl2 plh4 size-80 bor13 p-lr-20 m-r-10 m-tb-5" type="radio" name="payment_method" value="COD" id="COD" checked="checked">
							<label lass="stext-104 cl2 plh4 size-80 bor13 p-lr-20 m-r-10 m-tb-5" for="payment_method_bacs">Thanh toán khi nhận hàng </label>		
						</div>
					</div>
				</div>
			</div>
			{{--  CHECK OUT --}}
			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Đặt hàng
					</h4>
					{{-- Input Name --}}
					<div class="flex-w flex-t bor12 p-b-5">
						<div class="size-208">
							<span class="stext-110 cl2 m-b-10">
								Full Name:
							</span>
						</div>
						<div class="bor8 bg0 m-b-12">
							<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Your Name!" id="name" required="">
						</div>
					</div>
					{{-- Input Email --}}
					<div class="flex-w flex-t bor12 p-b-5 p-t-18">
						<div class="size-208">
							<span class="stext-110 cl2 m-b-10">
								Email:
							</span>
						</div>
						<div class="bor8 bg0 m-b-12">
							<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" name="email" value="" placeholder="expample@gmail.com" required="">
						</div>
					</div>
					{{-- input Phone --}}
					<div class="flex-w flex-t bor12 p-b-5 p-t-18">
						<div class="size-208">
							<span class="stext-110 cl2">
								Phone (+8412345678):
							</span>
						</div>
						<div class="bor8 bg0 m-b-12">
							<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="i" id="phone" name="phone" placeholder="Your Phone!" required="">
						</div>
					</div>
					{{-- Input Address --}}
					<div class="flex-w flex-t bor12 p-b-5 p-t-18">
						<div class="size-208">
							<span class="stext-110 cl2">
								Arress:
							</span>
						</div>
						<div class="bor8 bg0 m-b-12">
							<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="i" id="address" name="address" placeholder="Your Arress!" required="">
						</div>
					</div>
					{{-- Input Note --}}
					<div class="flex-w flex-t bor12 p-b-5 p-t-18">
						<div class="size-208">
							<span class="stext-110 cl2">
								Note:
							</span>
						</div>
						<div class="bor8 bg0 m-b-12">
							<textarea class="stext-111 cl8 plh3 size-111 p-lr-15" style="width: 191px; height: 200px;" placeholder="Your Note!" id="note" name="note">		
							</textarea>
						</div>
					</div>
					{{-- Total Price --}}
					
					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Total:
							</span>
						</div>
						@if(Session::has('cart'))
						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								{{$totalPrice}} $
							</span>

							@if(Session('cart')->totalPrice > 100)
							<br>

							<span style="color:red;">Bạn sẽ được giao hàng miễn phí</span>
							@else 
							<br>
							<span style="color: red;">Mua tiếp
								{{100-Session('cart')->totalPrice}} $
							để nhận giao hàng miễn phí!</span>
							@endif
						</div>
				
						@endif
					</div>
					
					{{-- Order Product --}}
					<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Order!
					</button>
				</div>
			</div>
		</div>
	</div>
</form>

@endsection