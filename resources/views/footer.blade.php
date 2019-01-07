<footer class="bg3 p-t-75 p-b-32">
	<div  class="container">
		<div class="row">
			<div  class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Help
				</h4>
				<ul>
					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Track Order
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Returns 
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Shipping
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							FAQs
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					GET IN TOUCH
				</h4>

				<p class="stext-107 cl7 size-201">
					Let us know in store at 416/3, Nguyen Dinh Chieu, Ward 4, District 3, Ho Chi Minh city.
				</p>

				<div class="p-t-27">
					<a href="https://www.facebook.com/minhieu9874" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="https://www.instagram.com/pewiri.h/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Newsletter
				</h4>

				<form method="post" action="{{route('footer-page')}}">
					@csrf
					@if(Session::has('Notification'))
					<div  class="alert alert-success">
						{{Session::get('Notification')}}	
					</div>
					@endif
					@if(count($errors)>0)
					<div style="color: red;" class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}}
						<br>
						@endforeach

					</div>
					@endif
					<div class="wrap-input1 w-full p-b-4">
						<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
						<div class="focus-input1 trans-04"></div>
					</div>

					<div class="p-t-18">
						<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
							Subscribe
						</button>
					</div>
				</form>
			</div>
		</div>

		<div class="p-t-40">
			<div class="flex-c-m flex-w p-b-18">
				<a href="#" class="m-all-1">
					<img src="source/images/icons/icon-pay-01.png" alt="ICON-PAY">
				</a>

				<a href="#" class="m-all-1">
					<img src="source/images/icons/icon-pay-02.png" alt="ICON-PAY">
				</a>

				<a href="#" class="m-all-1">
					<img src="source/images/icons/icon-pay-03.png" alt="ICON-PAY">
				</a>

				<a href="#" class="m-all-1">
					<img src="source/images/icons/icon-pay-04.png" alt="ICON-PAY">
				</a>

				<a href="#" class="m-all-1">
					<img src="source/images/icons/icon-pay-05.png" alt="ICON-PAY">
				</a>
			</div>

			<p class="stext-107 cl6 txt-center">
				
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.facebook.com/minhieu9874" target="_blank">Minh Hiếu</a>
				
			</p>
		</div>
	</div>
</footer>