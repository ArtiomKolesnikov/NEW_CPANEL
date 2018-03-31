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
								<li><a href="#">UI Elements</a></li> <li class="active">Icons</li>
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
							<h2>Icons</h2>
							<em>Font Awesome icon collections dan examples</em>
						</div>

						<div class="main-content">
							<!-- ICONS -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-info-circle"></i> More Than 360 Font Awesome Icons</h3> <em>- (<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">check all icons <i class="fa fa-external-link"></i></a>)</em>
								</div>
								<div class="widget-content">
									<div class="row">
										<div class="col-md-3">
											<ul class="demo-icon list-unstyled">
												<li><i class="fa fa-adjust"></i> fa-adjust</li>
												<li><i class="fa fa-asterisk"></i> fa-asterisk</li>
												<li><i class="fa fa-ban"></i> fa-ban</li>
												<li><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</li>
												<li><i class="fa fa-barcode"></i> fa-barcode</li>
												<li><i class="fa fa-flask"></i> fa-flask</li>
												<li><i class="fa fa-beer"></i> fa-beer</li>
												<li><i class="fa fa-bell"></i> fa-bell</li>
												<li><i class="fa fa-bell-o"></i> fa-bell-o</li>
												<li><i class="fa fa-bolt"></i> fa-bolt</li>
												<li><i class="fa fa-book"></i> fa-book</li>
												<li><i class="fa fa-bookmark"></i> fa-bookmark</li>
												<li><i class="fa fa-bookmark-o"></i> fa-bookmark-o</li>
												<li><i class="fa fa-briefcase"></i> fa-briefcase</li>
												<li><i class="fa fa-bullhorn"></i> fa-bullhorn</li>
												<li><i class="fa fa-calendar"></i> fa-calendar</li>
												<li><i class="fa fa-camera"></i> fa-camera</li>
												<li><i class="fa fa-camera-retro"></i> fa-camera-retro</li>
												<li><i class="fa fa-certificate"></i> fa-certificate</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="demo-icon list-unstyled">
												<li><i class="fa fa-check-square-o"></i> fa-check-square-o</li>
												<li><i class="fa fa-square-o"></i> fa-square-o</li>
												<li><i class="fa fa-circle"></i> fa-circle</li>
												<li><i class="fa fa-circle-o"></i> fa-circle-o</li>
												<li><i class="fa fa-cloud"></i> fa-cloud</li>
												<li><i class="fa fa-cloud-download"></i> fa-cloud-download</li>
												<li><i class="fa fa-cloud-upload"></i> fa-cloud-upload</li>
												<li><i class="fa fa-coffee"></i> fa-coffee</li>
												<li><i class="fa fa-cog"></i> fa-cog</li>
												<li><i class="fa fa-cogs"></i> fa-cogs</li>
												<li><i class="fa fa-comment"></i> fa-comment</li>
												<li><i class="fa fa-comment-o"></i> fa-comment-o</li>
												<li><i class="fa fa-comments"></i> fa-comments</li>
												<li><i class="fa fa-comments-o"></i> fa-comments-o</li>
												<li><i class="fa fa-credit-card"></i> fa-credit-card</li>
												<li><i class="fa fa-dashboard"></i> fa-dashboard</li>
												<li><i class="fa fa-desktop"></i> fa-desktop</li>
												<li><i class="fa fa-download"></i> fa-download</li>
												<li><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="demo-icon list-unstyled">
												<li><i class="fa fa-edit"></i> fa-edit</li>
												<li><i class="fa fa-envelope"></i> fa-envelope</li>
												<li><i class="fa fa-envelope-o"></i> fa-envelope-o</li>
												<li><i class="fa fa-exchange"></i> fa-exchange</li>
												<li><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</li>
												<li><i class="fa fa-external-link"></i> fa-external-link</li>
												<li><i class="fa fa-eye"></i> fa-eye</li>
												<li><i class="fa fa-eye-slash"></i> fa-eye-slash</li>
												<li><i class="fa fa-video-camera"></i> fa-video-camera</li>
												<li><i class="fa fa-fighter-jet"></i> fa-fighter-jet</li>
												<li><i class="fa fa-film"></i> fa-film</li>
												<li><i class="fa fa-filter"></i> fa-filter</li>
												<li><i class="fa fa-fire"></i> fa-fire</li>
												<li><i class="fa fa-flag"></i> fa-flag</li>
												<li><i class="fa fa-folder"></i> fa-folder-close</li>
												<li><i class="fa fa-folder-open"></i> fa-folder-open</li>
												<li><i class="fa fa-folder-o"></i> fa-folder-close-o</li>
												<li><i class="fa fa-folder-open-o"></i> fa-folder-open-o</li>
												<li><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="demo-icon list-unstyled">
												<li><i class="fa fa-gift"></i> fa-gift</li>
												<li><i class="fa fa-glass"></i> fa-glass</li>
												<li><i class="fa fa-globe"></i> fa-globe</li>
												<li><i class="fa fa-group"></i> fa-group</li>
												<li><i class="fa fa-hdd-o"></i> fa-hdd-o</li>
												<li><i class="fa fa-headphones"></i> fa-headphones</li>
												<li><i class="fa fa-heart"></i> fa-heart</li>
												<li><i class="fa fa-heart-o"></i> fa-heart-o</li>
												<li><i class="fa fa-home"></i> fa-home</li>
												<li><i class="fa fa-inbox"></i> fa-inbox</li>
												<li><i class="fa fa-info-circle"></i> fa-info-circle</li>
												<li><i class="fa fa-key"></i> fa-key</li>
												<li><i class="fa fa-leaf"></i> fa-leaf</li>
												<li><i class="fa fa-laptop"></i> fa-laptop</li>
												<li><i class="fa fa-legal"></i> fa-legal</li>
												<li><i class="fa fa-lemon-o"></i> fa-lemon-o</li>
												<li><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</li>
												<li><i class="fa fa-lock"></i> fa-lock</li>
												<li><i class="fa fa-unlock"></i> fa-unlock</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-info-circle"></i> Icon Sizing</h3>
										</div>
										<div class="widget-content">
											<p><i class="fa fa-camera-retro fa-lg"></i> fa-camera-retro</p>
											<p><i class="fa fa-camera-retro fa-2x"></i> fa-camera-retro</p>
											<p><i class="fa fa-camera-retro fa-3x"></i> fa-camera-retro</p>
											<p><i class="fa fa-camera-retro fa-4x"></i> fa-camera-retro</p>
											<p><i class="fa fa-camera-retro fa-5x"></i> fa-camera-retro</p>
										</div>
									</div>
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-info-circle"></i> Rotated &amp; Flipped</h3>
										</div>
										<div class="widget-content">
											<i class="fa fa-shield"></i>&nbsp; normal<br>
											<i class="fa fa-shield fa-rotate-90"></i>&nbsp; fa-rotate-90<br>
											<i class="fa fa-shield fa-rotate-180"></i>&nbsp; fa-rotate-180<br>
											<i class="fa fa-shield fa-rotate-270"></i>&nbsp; fa-rotate-270<br>
											<i class="fa fa-shield fa-flip-horizontal"></i>&nbsp; fa-flip-horizontal<br>
											<i class="fa fa-shield fa-flip-vertical"></i>&nbsp; icon-flip-vertical
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-info-circle"></i> Fixed Width Icons</h3>
										</div>
										<div class="widget-content">
											<ul class="nav nav-pills nav-stacked">
												<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
												<li><a href="#"><i class="fa fa-book fa-fw"></i> Library</a></li>
												<li><a href="#"><i class="fa fa-pencil fa-fw"></i> Applications</a></li>
												<li><a href="#"><i class="fa fa-cogs fa-fw"></i> Settings</a></li>
											</ul>
										</div>
									</div>
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-info-circle"></i> List Icons</h3>
										</div>
										<div class="widget-content">
											<ul class="fa-ul">
												<li><i class="fa-li fa fa-check-square"></i>List icons (like these)</li>
												<li><i class="fa-li fa fa-check-square"></i>can be used</li>
												<li><i class="fa-li fa fa-spinner fa-spin"></i>to replace</li>
												<li><i class="fa-li fa fa-square"></i>default bullets in lists</li>
											</ul>
										</div>
									</div>
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-info-circle"></i> Stacked Icons</h3>
										</div>
										<div class="widget-content">
												<span class="fa-stack fa-lg">
													<i class="fa fa-square-o fa-stack-2x"></i>
													<i class="fa fa-twitter fa-stack-1x"></i>
												</span>
											fa-twitter on fa-square-o<br>
											<span class="fa-stack fa-lg">
													<i class="fa fa-circle fa-stack-2x"></i>
													<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
												</span>
											fa-flag on fa-circle<br>
											<span class="fa-stack fa-lg">
													<i class="fa fa-square fa-stack-2x"></i>
													<i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
												</span>
											fa-terminal on fa-square<br>
											<span class="fa-stack fa-lg">
													<i class="fa fa-camera fa-stack-1x"></i>
													<i class="fa fa-ban fa-stack-2x text-danger"></i>
												</span>
											fa-ban on fa-camera
										</div>
									</div>
								</div>
							</div>
							<!-- END ICONS -->

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
@stop