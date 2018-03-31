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
								<li><a href="#">Forms</a></li> <li class="active">Form Layouts</li>
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
							<h2>Form Layouts</h2>
							<em>form layouts library</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">
									<!-- SUPPOR TICKET FORM -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i> Submit a Ticket</h3></div>
										<div class="widget-content">
											<form class="form-horizontal" role="form">
												<fieldset>
													<legend>General Information</legend>
													<div class="form-group">
														<label for="ticket-type" class="col-sm-3 control-label">Type</label>
														<div class="col-sm-9">
															<select id="ticket-type" name="ticket-type" class="select-ticket-type">
																<option value="technical-support">Technical Support</option>
																<option value="general-info">General Info</option>
																<option value="sales-inquiry">Sales Inquiry</option>
																<option value="billing">Billing</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label for="ticket-name" class="col-sm-3 control-label">Name</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="ticket-name" placeholder="Name">
														</div>
													</div>
													<div class="form-group">
														<label for="ticket-email" class="col-sm-3 control-label">Email</label>
														<div class="col-sm-9">
															<input type="email" class="form-control" id="ticket-email" placeholder="Email">
														</div>
													</div>
													<div class="form-group">
														<label for="ticket-priority" class="col-sm-3 control-label">Priority</label>
														<div class="col-sm-9">
															<select id="ticket-priority" name="ticket-priority" class="select-ticket-priority">
																<option value="low">Low</option>
																<option value="medium">Medium</option>
																<option value="high">High</option>
																<option value="urgent">Urgent</option>
																<option value="emergency">Emergency</option>
																<option value="critical">Critical</option>
															</select>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<legend>Your Message</legend>
													<div class="form-group">
														<label for="ticket-subject" class="col-sm-3 control-label">Subject</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="ticket-subject" placeholder="Subject">
														</div>
													</div>
													<div class="form-group">
														<label for="ticket-message" class="col-sm-3 control-label">Message</label>
														<div class="col-sm-9">
															<textarea class="form-control" name="ticket-message" rows="5" cols="30" placeholder="Message"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label for="ticket-attachment" class="col-sm-3 control-label">Attach File</label>
														<div class="col-md-9">
															<input type="file" id="ticket-attachment">
															<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
														</div>
													</div>

													<div class="form-group">
														<div class="col-sm-offset-3 col-sm-9">
															<button type="submit" class="btn btn-primary btn-block">Submit Message</button>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
									<!-- END SUPPORT TICKET FORM -->
								</div>
								<div class="col-md-6">
									<!-- REGISTRATION FORM WITH ICONS -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i> Registration Form with Icons</h3></div>
										<div class="widget-content">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label for="username" class="control-label sr-only">Username</label>
													<div class="col-sm-12">
														<div class="input-group">
															<input type="text" class="form-control" id="username" placeholder="Username">
															<span class="input-group-addon"><i class="fa fa-user"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="email" class="control-label sr-only">Email</label>
													<div class="col-sm-12">
														<div class="input-group">
															<input type="email" class="form-control" id="email" placeholder="Email">
															<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="password" class="control-label sr-only">Password</label>
													<div class="col-sm-12">
														<div class="input-group">
															<input type="password" class="form-control" id="password" placeholder="Password">
															<span class="input-group-addon"><i class="fa fa-lock"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="password2" class="control-label sr-only">Repeat Password</label>
													<div class="col-sm-12">
														<div class="input-group">
															<input type="password" class="form-control" id="password2" placeholder="Repeat Password">
															<span class="input-group-addon"><i class="fa fa-lock"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12 simple-checkbox">
														<input type="checkbox" id="checkbox-newsletter2" name="checkbox-newsletter">
														<label for="checkbox-newsletter2">Subscribe me to the newsletter to get more about further deals</label>
													</div>
													<div class="col-sm-12 simple-checkbox">
														<input type="checkbox" id="checkbox-accept2" name="checkbox-accept">
														<label for="checkbox-accept2">I accept the <a href="#">Terms &amp; Agreement</a></label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Create Account</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<!-- END REGISTRATION FORM WITH ICONS -->

									<!-- REGISTRATION FORM -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i> Registration Form</h3></div>
										<div class="widget-content">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label for="username" class="control-label sr-only">Username</label>
													<div class="col-sm-12">
														<input type="text" class="form-control" id="username" placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<label for="email" class="control-label sr-only">Email</label>
													<div class="col-sm-12">
														<input type="email" class="form-control" id="email" placeholder="Email">
													</div>
												</div>
												<div class="form-group">
													<label for="password" class="control-label sr-only">Password</label>
													<div class="col-sm-12">
														<input type="password" class="form-control" id="password" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<label for="password2" class="control-label sr-only">Repeat Password</label>
													<div class="col-sm-12">
														<input type="password" class="form-control" id="password2" placeholder="Repeat Password">
													</div>
												</div>
												<div class="form-group">
													<div class=" col-sm-12 simple-checkbox">
														<input type="checkbox" id="checkbox-newsletter" name="checkbox-newsletter">
														<label for="checkbox-newsletter">Subscribe me to the newsletter to get more about further deals</label>
													</div>
													<div class=" col-sm-12 simple-checkbox">
														<input type="checkbox" id="checkbox-accept" name="checkbox-accept">
														<label for="checkbox-accept">I accept the <a href="#">Terms &amp; Agreement</a></label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<button type="submit" class="btn btn-default">Register</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<!-- END REGISTRATION FORM -->

								</div>
							</div>

							<!-- CONTACT FORM -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-edit"></i> Contact Form</h3></div>
								<div class="widget-content">
									<form class="form-horizontal" role="form">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="contact-name" class="control-label sr-only">Name</label>
													<input type="text" class="form-control" id="contact-name" placeholder="Name">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="contact-email" class="control-label sr-only">Email</label>
													<input type="email" class="form-control" id="contact-email" placeholder="Email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="contact-subject" class="control-label sr-only">Subject</label>
											<div class="col-sm-12">
												<input type="text" class="form-control" id="contact-subject" placeholder="Subject">
											</div>
										</div>
										<div class="form-group">
											<label for="contact-message" class="control-label sr-only">Message</label>
											<div class="col-sm-12">
												<textarea class="form-control" name="contact-message" rows="5" cols="30" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<button type="submit" class="btn btn-primary">Submit Message</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- END CONTACT FORM -->

							<!-- END INLINE FORM -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-edit"></i> Inline Form</h3></div>
								<div class="widget-content">
									<form class="form-inline" role="form">
										<div class="form-group">
											<label class="sr-only" for="exampleInputEmail2">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputPassword2">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										</div>
										<div class="control-inline simple-checkbox">
											<input type="checkbox" id="checkbox1" name="checkbox1">
											<label for="checkbox1">Remember me</label>
										</div>
										<button type="submit" class="btn btn-default">Sign in</button>
									</form>
								</div>
							</div>
							<!-- END INLINE FORM -->

							<!-- HORIZONTAL FORM -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-edit"></i> Horizontal Form</h3></div>
								<div class="widget-content">
									<div class="row">
										<div class="col-md-6">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-10">
														<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
													</div>
												</div>
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<div class="simple-checkbox">
															<input type="checkbox" id="checkbox2" name="checkbox2">
															<label for="checkbox2">Remember me</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<button type="submit" class="btn btn-default">Sign in</button>
													</div>
												</div>
											</form>
										</div>
										<div class="col-md-6">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label for="inputEmail3" class="control-label sr-only">Email</label>
													<div class="col-sm-12">
														<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
													</div>
												</div>
												<div class="form-group">
													<label for="inputPassword3" class="control-label sr-only">Password</label>
													<div class="col-sm-12">
														<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class=" col-sm-12 simple-checkbox">
														<input type="checkbox" id="checkbox3" name="checkbox3">
														<label for="checkbox3">Remember me</label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<button type="submit" class="btn btn-default">Sign in</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- END HORIZONTAL FORM -->
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
	<script src="{{asset('assets/js/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('assets/js/king-form-layouts.js')}}"></script>
@stop