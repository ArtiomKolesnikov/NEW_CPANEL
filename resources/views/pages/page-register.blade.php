@extends('index')

@section('content')
	<div class="wrapper full-page-wrapper page-register text-center">

		<div class="inner-page">
			<div class="logo"><a href="{{route('index')}}"><img src="{{asset('assets/img/kingadmin-logo.png')}}" alt="" /></a></div>
			<button type="button" class="btn btn-register-facebook"><span>Connect using Facebook</span></button>

			<div class="separator"><span>OR</span></div>

			<div class="register-box center-block">
				<form>
					<p class="title">Create Your Account</p>
					<input type="email" placeholder="email" class="form-control">
					<input type="password" placeholder="password" class="form-control">
					<input type="password" placeholder="repeat password" class="form-control">
					<div class="simple-checkbox">
						<input type="checkbox" id="checkbox1" name="checkbox1">
						<label for="checkbox1">I accept the <a href="#">Terms &amp; Agreements</a></label>
					</div>
					<button class="btn btn-custom-primary btn-lg btn-block btn-register"><i class="fa fa-check-circle"></i> Create Account</button>
				</form>
			</div>
		</div>
		<div class="push-sticky-footer"></div>
	</div>
@stop

@section('scripts')
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
@stop