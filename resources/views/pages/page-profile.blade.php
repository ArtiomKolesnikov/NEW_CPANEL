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
								<li><a href="#">Pages</a></li> <li class="active">Profile</li>
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
							<h2>Profile</h2>
							<em>user profile page</em>
						</div>

						<div class="main-content">
							<!-- NAV TABS -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> Recent Activity</a></li>
								<li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> Settings</a></li>
							</ul>
							<!-- END NAV TABS -->

							<div class="tab-content profile-page">
								<!-- PROFILE TAB CONTENT -->
								<div class="tab-pane profile active" id="profile-tab">
									<div class="row">
										<div class="col-md-3">
											<div class="user-info-left">
												<img src="/assets/img/profile-avatar.png" alt="Profile Picture" />
												<h2>Jonathan Smith <i class="fa fa-circle green-font online-icon"></i><sup class="sr-only">online</sup></h2>
												<div class="contact">
													<a href="#" class="btn btn-block btn-custom-primary"><i class="fa fa-envelope-o"></i> Send Message</a>
													<a href="#" class="btn btn-block btn-custom-secondary"><i class="fa fa-book"></i> Add To Contact</a>
													<ul class="list-inline social">
														<li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
														<li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
														<li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-md-9">
											<div class="user-info-right">
												<div class="basic-info">
													<h3><i class="fa fa-square"></i> Basic Information</h3>
													<p class="data-row">
														<span class="data-name">Username</span>
														<span class="data-value">jonasmith</span>
													</p>
													<p class="data-row">
														<span class="data-name">Birth Date</span>
														<span class="data-value">Nov 20, 1988</span>
													</p>
													<p class="data-row">
														<span class="data-name">Gender</span>
														<span class="data-value">Male</span>
													</p>
													<p class="data-row">
														<span class="data-name">Website</span>
														<span class="data-value"><a href="#">www.jonasmith.com</a></span>
													</p>
													<p class="data-row">
														<span class="data-name">Last Login</span>
														<span class="data-value">2 hours ago</span>
													</p>
													<p class="data-row">
														<span class="data-name">Date Joined</span>
														<span class="data-value">Feb 22, 2012</span>
													</p>
												</div>
												<div class="contact_info">
													<h3><i class="fa fa-square"></i> Contact Information</h3>
													<p class="data-row">
														<span class="data-name">Email</span>
														<span class="data-value">me@jonasmith.com</span>
													</p>
													<p class="data-row">
														<span class="data-name">Phone</span>
														<span class="data-value">(1800) 221 - 876543</span>
													</p>
													<p class="data-row">
														<span class="data-name">Address</span>
														<span class="data-value">Riverside City 66, 80123 Denver<br />Colorado</span>
													</p>
												</div>
												<div class="about">
													<h3><i class="fa fa-square"></i> About Me</h3>
													<p>Dramatically facilitate proactive solutions whereas professional intellectual capital. Holisticly utilize competitive e-markets through intermandated meta-services. Objectively.</p>
													<p>Monotonectally foster future-proof infomediaries before principle-centered interfaces. Assertively recaptiualize cutting-edge web services rather than emerging "outside the box" thinking. Phosfluorescently cultivate resource maximizing technologies and user-centric convergence. Completely underwhelm cross functional innovation vis-a-vis.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE TAB CONTENT -->

								<!-- ACTIVITY TAB CONTENT -->
								<div class="tab-pane activity" id="activity-tab">
									<ul class="list-unstyled activity-list">
										<li>
											<i class="fa fa-shopping-cart activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> commented on <a href="#">Special Deal 2013</a> <span class="timestamp">12 minutes ago</span>
											</p>
										</li>
										<li>
											<i class="fa fa-pencil activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> posted <a href="#">a new blog post</a> <span class="timestamp">4 hours ago</span>
											</p>
										</li>
										<li>
											<i class="fa fa-user activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> edited his profile <span class="timestamp">11 hours ago</span>
											</p>
										</li>
										<li>
											<i class="fa fa-pencil activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> has added review on <a href="#">jQuery Complete Guide</a> book <span class="timestamp">Yesterday</span>
											</p>
										</li>
										<li>
											<i class="fa fa-thumbs-up activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> liked <a href="#">a post</a> <span class="timestamp">December 12</span>
											</p>
										</li>
										<li>
											<i class="fa fa-tasks activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> has completed one task <span class="timestamp">December 11</span>
											</p>
										</li>
										<li>
											<i class="fa fa-picture-o activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> uploaded <a href="#">new photos</a> <span class="timestamp">December 5</span>
											</p>
										</li>
										<li>
											<i class="fa fa-credit-card activity-icon pull-left"></i>
											<p>
												<a href="#">Jonathan</a> has updated his credit card info <span class="timestamp">September 28</span>
											</p>
										</li>

									</ul>
									<p class="text-center more"><a href="#" class="btn btn-custom-primary">View more <i class="fa fa-long-arrow-right"></i></a></p>
								</div>
								<!-- END ACTIVITY TAB CONTENT -->

								<!-- SETTINGS TAB CONTENT -->
								<div class="tab-pane settings" id="settings-tab">
									<form class="form-horizontal" role="form">
										<fieldset>
											<h3><i class="fa fa-square"></i> Change Password</h3>
											<div class="form-group">
												<label for="old-password" class="col-sm-3 control-label">Old Password</label>
												<div class="col-sm-4">
													<input type="password" id="old-password" name="old-password" class="form-control">
												</div>
											</div>
											<hr />
											<div class="form-group">
												<label for="password" class="col-sm-3 control-label">New Password</label>
												<div class="col-sm-4">
													<input type="password" id="password" name="password" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="password2" class="col-sm-3 control-label">Repeat Password</label>
												<div class="col-sm-4">
													<input type="password" id="password2" name="password2" class="form-control">
												</div>
											</div>
										</fieldset>

										<fieldset>
											<h3><i class="fa fa-square"></i> Privacy</h3>
											<div class="simple-checkbox">
												<input type="checkbox" id="checkbox">
												<label for="checkbox">Show my display name</label>
											</div>
											<div class="simple-checkbox">
												<input type="checkbox" id="checkbox2">
												<label for="checkbox2">Show my birth date</label>
											</div>
											<div class="simple-checkbox">
												<input type="checkbox" id="checkbox3">
												<label for="checkbox3">Show my email</label>
											</div>
											<div class="simple-checkbox">
												<input type="checkbox" id="checkbox4">
												<label for="checkbox4">Show my online status on chat</label>
											</div>
										</fieldset>

										<h3><i class="fa fa-square"> </i>Notifications</h3>
										<fieldset>
											<div class="form-group">
												<label class="col-sm-5 control-label">Receive message from administrator</label>
												<ul class="col-sm-7 list-inline">
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-globe'></i>" data-off-label="<i class='glyphicon glyphicon-globe'></i>">
													</li>
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-phone'></i>" data-off-label="<i class='glyphicon glyphicon-phone'></i>">
													</li>
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-envelope'></i>" data-off-label="<i class='glyphicon glyphicon-envelope'></i>">
													</li>
												</ul>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">New product has been added</label>
												<ul class="col-sm-7 list-inline">
													<li>
														<input type="checkbox" class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-globe'></i>" data-off-label="<i class='glyphicon glyphicon-globe'></i>">
													</li>
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-phone'></i>" data-off-label="<i class='glyphicon glyphicon-phone'></i>">
													</li>
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-envelope'></i>" data-off-label="<i class='glyphicon glyphicon-envelope'></i>">
													</li>
												</ul>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Product review has been approved</label>
												<ul class="col-sm-7 list-inline">
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-globe'></i>" data-off-label="<i class='glyphicon glyphicon-globe'></i>">
													</li>
													<li>
														<input type="checkbox" class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-phone'></i>" data-off-label="<i class='glyphicon glyphicon-phone'></i>">
													</li>
													<li>
														<input type="checkbox" checked class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-envelope'></i>" data-off-label="<i class='glyphicon glyphicon-envelope'></i>">
													</li>
												</ul>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Others liked your post</label>
												<ul class="col-sm-7 list-inline">
													<li>
														<input type="checkbox" class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-globe'></i>" data-off-label="<i class='glyphicon glyphicon-globe'></i>">
													</li>
													<li>
														<input type="checkbox" class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-phone'></i>" data-off-label="<i class='glyphicon glyphicon-phone'></i>">
													</li>
													<li>
														<input type="checkbox" class="bs-switch switch-small" data-off="default" data-on-label="<i class='glyphicon glyphicon-envelope'></i>" data-off-label="<i class='glyphicon glyphicon-envelope'></i>">
													</li>
												</ul>
											</div>
										</fieldset>
									</form>

									<p class="text-center"><a href="#" class="btn btn-custom-primary"><i class="fa fa-floppy-o"></i> Save Changes</a></p>

								</div>
								<!-- END SETTINGS TAB CONTENT -->
							</div>

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
	<script src="{{asset('assets/js/bootstrap-switch.min.js')}}"></script>
@stop