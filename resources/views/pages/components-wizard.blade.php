@extends('index')

@section('content')
	<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
	<div class="bottom">
		<div class="container">
			<div class="row">
				<!-- left sidebar -->
				<div class="col-md-2 left-sidebar">

					@include('part.main_nav')

					<div class="sidebar-minified js-toggle-minified">
						<i class="fa fa-angle-left"></i>
					</div>

					<!-- sidebar content -->
					<div class="sidebar-content">
						<div class="panel panel-default">
							<div class="panel-heading"><h5><i class="fa fa-lightbulb-o"></i> Tips</h5></div>
							<div class="panel-body">
								<p>You can do live search to the widget at search box located at top bar. It's very useful if your dashboard is full of widget.</p>
							</div>
						</div>

						<h5 class="label label-default"><i class="fa fa-info-circle"></i> Server Info</h5>
						<ul class="list-unstyled list-info-sidebar bottom-30px">
							<li class="data-row">
								<span class="data-name">Disk Space Usage</span>
								<span class="data-value">
										274.43 / 2 GB
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
												<span class="sr-only">10%</span>
											</div>
										</div>
									</span>
							</li>
							<li class="data-row">
								<span class="data-name">Monthly Bandwidth Transfer</span>
								<span class="data-value">
										230 / 500 GB
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%">
												<span class="sr-only">46%</span>
											</div>
										</div>
									</span>
							</li>
							<li class="data-row">
								<span class="data-name">Database Disk Space</span>
								<span class="data-value">219.45 MB</span>
							</li>
							<li class="data-row">
								<span class="data-name">Operating System</span>
								<span class="data-value">Linux</span>
							</li>
							<li class="data-row">
								<span class="data-name">Apache Version</span>
								<span class="data-value">2.4.6</span>
							</li>
							<li class="data-row">
								<span class="data-name">PHP Version</span>
								<span class="data-value">5.3.27</span>
							</li>
							<li class="data-row">
								<span class="data-name">MySQL Version</span>
								<span class="data-value">5.5.34-cll</span>
							</li>
							<li class="data-row">
								<span class="data-name">Architecture</span>
								<span class="data-value">x86_64</span>
							</li>
						</ul>
					</div>
					<!-- end sidebar content -->
				</div>
				<!-- end left sidebar -->

				<!-- content-wrapper -->

				<div class="col-md-10 content-wrapper">
					<div class="row">
						<div class="col-lg-4 ">
							<ul class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="#">Home</a></li>
								<li><a href="#">Components</a></li> <li class="active">Wizard</li>
							</ul>
						</div>
						<div class="col-lg-8 ">
							<div class="top-content">
								<ul class="list-inline quick-access">
									<li>
										<a href="{{route('charts-statistics-interactive')}}">
												<span class="quick-access-item bg-color-green">
													<i class="fa fa-bar-chart-o"></i>
													<h5>CHARTS</h5><em>basic, interactive, real-time</em>
												</span>
										</a>
									</li>
									<li>
										<a href="{{route('page-inbox')}}">
												<span class="quick-access-item bg-color-blue">
													<i class="fa fa-envelope"></i>
													<h5>INBOX</h5><em>inbox with gmail style</em>
												</span>
										</a>
									</li>
									<li>
										<a href="{{route('tables-dynamic-table')}}">
												<span class="quick-access-item bg-color-orange">
													<i class="fa fa-table"></i>
													<h5>DYNAMIC TABLE</h5><em>tons of features and interactivity</em>
												</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- main -->
					<div class="content">
						<div class="main-header">
							<h2>Wizard</h2>
							<em>wizard with validation</em>
						</div>

						<div class="main-content">
							<!-- WIDGET WIZARD -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-magic"></i> Wizard</h3></div>
								<div class="widget-content">
									<div class="wizard-wrapper">
										<div id="demo-wizard" class="wizard">
											<ul class="steps">
												<li data-target="#step1" class="active"><span class="badge badge-info">1</span>Account Type<span class="chevron"></span></li>
												<li data-target="#step2"><span class="badge">2</span>User Account<span class="chevron"></span></li>
												<li data-target="#step3"><span class="badge">3</span>Options<span class="chevron"></span></li>
												<li data-target="#step4" class="last"><span class="badge">4</span>Create Account</li>
											</ul>
										</div>
										<div class="step-content">
											<div class="step-pane active" id="step1">
												<form id="form1" parsley-validate novalidate>
													<p>Choose your account type:</p>
													<div class="simple-radio" id="account-type">
														<input id="personal" type="radio" name="account-type" value="personal" parsley-required="true">
														<label for="personal">Personal</label>
														<input id="business" type="radio" name="account-type" value="business">
														<label for="business">Business</label>
														<input id="enterprise" type="radio" name="account-type" value="enterprise">
														<label for="enterprise">Enterprise</label>
													</div>
												</form>
											</div>
											<div class="step-pane" id="step2">
												<form id="form2" parsley-validate novalidate>
													<p>Please provide email, username and password<br/>
														<em><small>Field marked * is required</small></em>
													</p>
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label for="email">Email *</label>
																<input type="email" class="form-control" required>
															</div>
															<div class="form-group">
																<label for="password">Password *</label>
																<input type="password" id="password" name="password" class="form-control" required>
															</div>
															<div class="form-group">
																<label for="password2">Repeat Password *</label>
																<input type="password" id="password2" name="password2" class="form-control" required parsley-equalto="#password" parsley-equalto-message="Password doesn't match.">
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="step-pane" id="step3">
												<form id="form3" parsley-validate novalidate>
													<div class="simple-checkbox">
														<input type="checkbox" id="newsletter" name="newsletter">
														<label for="newsletter">Subscribe to monthly newsletter</label>
													</div>
													<div class="simple-checkbox">
														<input type="checkbox" id="terms" name="terms">
														<label for="terms">I accept the <a href="#">Terms &amp; Agreements</a></label>
													</div>
												</form>
											</div>
											<div class="step-pane" id="step4">
												<p class="lead"><i class="fa fa-check-circle text-success"></i> All is well! Click "Create My Account" to complete.</p>
											</div>
										</div>
										<div class="actions">
											<button type="button" class="btn btn-default btn-prev"><i class="fa fa-arrow-left"></i> Prev</button>
											<button type="button" class="btn btn-primary btn-next">Next <i class="fa fa-arrow-right"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- END WIDGET WIZARD -->
						</div><!-- /main-content -->
					</div><!-- /main -->
				</div><!-- /content-wrapper -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div>
	<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
@stop

@section('scripts')
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-tour.custom.js')}}"></script>
	<script src="{{asset('assets/js/king-common.js')}}"></script>
	<script src="{{asset('demo-style-switcher/assets/js/deliswitch.js')}}"></script>
	<script src="{{asset('assets/js/wizard.min.js')}}"></script>
	<script src="{{asset('assets/js/parsley.min.js')}}"></script>
	<script src="{{asset('assets/js/king-components.js')}}"></script>
@stop