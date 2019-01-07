<header @yield('classheader')>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					@include('marquee')
				</div>
				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						Help & FAQs
					</a>
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						EN
					</a>
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						USD
					</a>
				</div>
			</div>
		</div>
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop container">
				<!-- Logo desktop -->		
				<li class="label">
					<a style="text-decoration: none; margin-right: 50px;" href="{{route('index-page')}}">
						<img src="source/images/icons/logo-1.png" alt="IMG-LOGO">
					</a>
				</li>
				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="label1" data-label1="hot">
							<a style="color: red;" href="{{route('bestseller-page')}}">
								Mua nhiều nhất
							</a>
						</li>
						<li>
							<a style="color: #EA2528;" href="{{route('saleproduct-page')}}">
								Giảm giá
							</a>
						</li>
						<li>
							<a>Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($product_type as $type)
								<li><a href="{{route('typeproduct-page',$type->id)}}">{{ $type->name }}</a></li>
								@endforeach
							</ul>
						</li>		
						<li>
							<a href="{{route('blog-page')}}">Blog</a>
						</li>
						<li>
							<a href="{{route('about-page')}}">Giới thiệu</a>
						</li>
						<li>
							<a href="{{route('contact-page')}}">Liên hệ</a>
						</li>
					</ul>
				</div>
				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m m-r-15">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
				<div class="menu-desktop">
					<ul class="main-menu">
					</ul>
				</div>
			</nav>
		</div>	
	</div>
	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a style="text-decoration: none;" href="{{route('index-page')}}">
				<img src="source/images/icons/logo-1.png" alt="IMG-LOGO">
			</a>
		</div>
		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
				<i class="zmdi zmdi-search"></i>
			</div>
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>
		</div>
		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>
	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="topbar-mobile">
			<li>
				<div class="left-top-bar">
					@include('marquee')
				</div>
			</li>
			<li>
				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m p-lr-10 trans-04">
						Help & FAQs
					</a>
					<a href="#" class="flex-c-m p-lr-10 trans-04">
						EN
					</a>
					<a href="#" class="flex-c-m p-lr-10 trans-04">
						USD
					</a>
				</div>
			</li>
		</ul>
		<ul class="main-menu-m">
			<li>
				<a style="color:red;" class="label1 rs1" data-label1="hot" href="{{route('bestseller-page')}}">Mua nhiều</a>
			</li>
			<li>
				<a class="label1 rs1" data-label1="hot" href="{{route('saleproduct-page')}}">Giảm giá</a>
			</li>
			<li>
				<a>Sản phẩm</a>
				<ul class="sub-menu-m">
					@foreach($product_type as $type)
					<li><a href="{{route('typeproduct-page',$type->id)}}">{{ $type->name }}</a></li>
					@endforeach
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>
			<li>
				<a href="{{route('blog-page')}}">Blog</a>
			</li>
			<li>
				<a href="{{route('about-page')}}">About</a>
			</li>
			<li>
				<a href="{{route('contact-page')}}">Contact</a>
			</li>
		</ul>
	</div>
	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="source/images/icons/icon-close2.png" alt="CLOSE">
			</button>
			<form role="search" method="get" action="{{route('search-page')}}" class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="key" placeholder="Search name or price ....">
			</form>
		</div>
	</div>
</header>