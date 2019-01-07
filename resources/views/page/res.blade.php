@extends('master')	
@section('title','Registration')
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

					<a href="{{route('res-page')}}" class="stext-109 cl8 hov-cl1 trans-04">
						Res
					</a>

				</div>
			</div>
		</div>
		<div class="wrapper wrapper--w680">
			<div class="card card-1">
				<div class="card-heading"></div>
				<div class="card-body">
					<h2 class="title">Registration Info</h2>
					<form method="POST" action="{{route("res-page")}}">
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
						<div class="input-group">
							<input class="input--style-1" type="text" placeholder="Your full name" name="name" required="">
						</div>
						<div class="input-group">
							<input class="input--style-1" type="email" placeholder="Your E-mail address " name="email" required="">
						</div>
						<div class="input-group">
							<input class="input--style-1" type="password" name="password" value="" placeholder="Password" required="">
						</div>
						<div class="input-group">
							<input class="input--style-1" type="password" name="re_password" value="" placeholder="Confirm your password" required="">
						</div>
						<div class="p-t-20">
							By clicking Sign Up, you are indicating that you have read and agree to the <a href="{{route('res-page')}}" title="">Terms of Service</a> and <a href="{{route('res-page')}}" title="">Privacy Policy</a>
							<br>
							<button style="float: right;" class="btn btn--radius btn--green" type="submit">Sign up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection