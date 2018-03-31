@extends('index')

@section('content')
	<div class="wrapper full-page-wrapper page-login text-center">

		<div class="inner-page">

			<div class="logo"><a href="{{route('index')}}"><img src="{{asset('assets/img/kingadmin-logo.png')}}" alt="" /></a></div>
			<button type="button" class="btn btn-login-facebook"><span>Login via Facebook</span></button>

			<div class="separator"><span>OR</span></div>

			<div class="login-box center-block">
				<form class="form-horizontal" role="form">
					<p class="title">Use your username</p>
					<div class="form-group">
						<label for="username" class="control-label sr-only">Username</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="text" placeholder="username" class="form-control">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<label for="password" class="control-label sr-only">Password</label>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								<input type="password" placeholder="password" class="form-control">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					<div class="simple-checkbox">
						<input type="checkbox" id="checkbox1">
						<label for="checkbox1">Remember me next time</label>
					</div>
					<button class="btn btn-custom-primary btn-lg btn-block btn-login"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
				</form>

				<div class="links">
					<p><a href="#">Forgot Username or Password?</a></p>
					<p><a href="#">Create New Account</a></p>
				</div>
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