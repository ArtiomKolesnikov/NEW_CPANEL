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
								<li><a href="#">UI Elements</a></li> <li class="active">Flash Alert</li>
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
							<h2>Flash Alert</h2>
							<em>Growl like pop up alert/notification</em>
						</div>

						<div class="main-content">
							<!-- FLASH MESSAGE WITH SOUND -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-info-circle"></i> Gritter</h3> <em> - Growl like alert message with sound</em>
									<div class="btn-group widget-header-toolbar">
										<div class="control-inline toolbar-item-group">
											<span class="control-title"><i class="fa fa-bell"></i>Sound</span>
											<div class="control-inline onoffswitch">
												<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="gritter-sound-switch" checked="">
												<label class="onoffswitch-label" for="gritter-sound-switch">
													<div class="onoffswitch-inner"></div>
													<div class="onoffswitch-switch"></div>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="widget-content">
									<div class="alert alert-warning alert-dismissable">
										<a href="" class="close">×</a>
										<strong>No Sound?</strong> Make sure you've enabled the setting on top bar (speaker icon).
									</div>
									<div class="row">
										<div class="col-md-4">
											<a id="gritter-regular" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="fades out after certain amount of time.">Regular</a>
										</div>
										<div class="col-md-4">
											<a id="gritter-sticky" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="will not fades out until user click the close button">Sticky</a>
										</div>
										<div class="col-md-4">
											<button id="gritter-image" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="online/offline user notification">Notification With Image</button>
										</div>
									</div><br/>
									<div class="row">
										<div class="col-md-4">
											<button id="gritter-callback" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="has callback: before_open, after_open, before_close, after_close">Callback</button>
										</div>
										<div class="col-md-4">
											<button id="gritter-max" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="can be used to limit the number of maximum notification allowed">Limit Maximum Notification</button>
										</div>
										<div class="col-md-4">
											<button id="gritter-light" class="btn btn-lg btn-block btn-default btn-gritter" data-toggle="tooltip" data-original-title="light version">Light</button>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-3">
											<button id="top-left" class="btn btn-lg btn-block btn-info btn-gritter-position btn-gritter" data-toggle="tooltip" data-original-title="set all the notifications on the top left"><span class="title">Top Left</span></button>
										</div>
										<div class="col-md-3">
											<button id="top-right" class="btn btn-lg btn-block btn-info btn-gritter-position btn-gritter" data-toggle="tooltip" data-original-title="set all the notifications on the top right"><span class="title">Top Right (Default)</span></button>
										</div>
										<div class="col-md-3">
											<button id="bottom-right" class="btn btn-lg btn-block btn-info btn-gritter-position btn-gritter" data-toggle="tooltip" data-original-title="set all the notifications on the bottom right"><span class="title">Bottom Right</span></button>
										</div>
										<div class="col-md-3">
											<button id="bottom-left" class="btn btn-lg btn-block btn-info btn-gritter-position btn-gritter" data-toggle="tooltip" data-original-title="set all the notifications the bottom left"><span class="title">Bottom Left</span></button>
										</div>
									</div>
								</div>
							</div>
							<!-- END FLASH MESSAGE WITH SOUND -->

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
	<script src="http://www.google.com/jsapi"></script>
	<script src="{{asset('assets/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('assets/js/king-elements.js')}}"></script>
@stop