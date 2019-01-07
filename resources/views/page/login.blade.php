@extends('master')	
@section('title','Log in')
@section('classheader','class=header-v4')
@section('content')
<section class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">

			{{-- Breadcrumb --}}
			<div>
				<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
					<a href="index" class="stext-109 cl8 hov-cl1 trans-04">
						Home
						<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
					</a>
					<a href="{{route('login-page')}}" class="stext-109 cl8 hov-cl1 trans-04">
						Log in
					</a>
				</div>
			</div>
		</div>
		<div class="wrapper wrapper--w680">
			<div class="card card-1">
				<div class="card-heading">		
				</div>
				<div class="card-body">
					<h2 class="title">Login</h2>
					<form method="POST" action="{{route("login-page")}}">
						@csrf
						@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">
							{{Session::get('Notification')}}
						</div>
						@endif
						<div class="input-group">
							<input class="input--style-1" type="email" placeholder="Your E-mail" name="email" required>
						</div>
						<div class="input-group">
							<input class="input--style-1" type="password" name="password" placeholder="Password" required>
						</div>
						<div style="width: 100%;text-align: center;">
							<div style="display: inline-block;
							margin-right: 40px " class=" p-t-20">
							<button class="btn btn--radius btn--green" type="submit" name="login" value="login">Log in
							</button>
						</div>
						<div style="display: inline-block;margin-left: 40px;" class="p-t-20">
							<a class="btn btn--radius btn--green" style="text-decoration: none;" href="{{route('res-page')}}" target="">
								<button style="color: white;"  type="button">					Register
								</button>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection