@extends('index')

@section('content')
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
								<li><a href="#">Charts &amp; Statistics</a></li> <li class="active">Charts</li>
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
							<h2>Charts</h2>
							<em>various charts with simple usage, attractive looks and interactive features</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">
									<!-- WIDGET LINE CHART -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Line Chart</h3> <em> - line chart with multiple data (current year)</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart" id="demo-line-chart" data-ctype="#year"></div>
										</div>
									</div>
									<!-- END WIDGET LINE CHART -->
								</div>
								<div class="col-md-6">
									<!-- WIDGET AREA CHART -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Area Chart</h3> <em> - area chart with multiple data (current week)</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart sales-chart" id="demo-area-chart" data-ctype="#week"></div>
										</div>
									</div>
									<!-- END WIDGET AREA CHART -->
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<!-- WIDGET VERTICAL BAR CHART  -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Vertical Bar Chart</h3> <em> - side-by-side bar chart</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart" id="demo-vertical-bar-chart" data-ctype="#week"></div>
										</div>
									</div>
									<!-- END WIDGET VERTICAL BAR CHART  -->
								</div>
								<div class="col-md-6">
									<!-- WIDGET HORIZONTAL BAR CHART  -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Horizontal Bar Chart</h3> <em> - horizontal version</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart" id="demo-horizontal-bar-chart"></div>
										</div>
									</div>
									<!-- END WIDGET HORIZONTAL BAR CHART  -->
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Combining Chart Types</h3> <em> - combining lines, points and bars</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart" id="demo-multi-types-chart"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-bar-chart-o"></i> Flot Chart: Donut Chart</h3> <em> - also can be configured as pie chart</em>
										</div>
										<div class="widget-content">
											<div class="demo-flot-chart" id="demo-donut-chart"></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /main-content -->
					</div><!-- /main -->
				</div><!-- /content-wrapper -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div>
@stop
	<!-- END STYLE SWITCHER -->
@section('scripts')
	<!-- Javascript -->
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-tour.custom.js')}}"></script>
	<script src="{{asset('assets/js/king-common.js')}}"></script>
	<script src="{{asset('demo-style-switcher/assets/js/deliswitch.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.pie.min.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.orderBars.js')}}"></script>
	<script src="{{asset('assets/js/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script src="{{asset('assets/js/king-chart-stat.js')}}"></script>
@stop
