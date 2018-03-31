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
								<li><a href="#">Components</a></li> <li class="active">Maps</li>
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
							<h2>Maps</h2>
							<em>dynamic and interactive vector map</em>
						</div>

						<div class="main-content">
							<!-- WIDGET BASIC MAP -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-globe"></i> Basic Map</h3> <em> - world map with no options</em></div>
								<div class="widget-content">
									<div class="basic-map"><div class="map"></div></div>
								</div>
							</div>
							<!-- END WIDGET BASIC MAP -->

							<!-- WIDGET SALES MAP -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-globe"></i> Sales Data Visualization</h3> <em> - data visualization map, easy to setup</em></div>
								<div class="widget-content">
									<div class="data-visualization-map">
										<div class="row">
											<div class="col-md-9"><div class="map"></div></div>
											<div class="col-md-3">
												<div class="areaLegend legend-right"></div>
												<em>Click the text legend to see interactivity in action.</em>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END WIDGET SALES MAP -->

							<div class="row">
								<div class="col-md-6">
									<!-- WIDGET PLOTTABBLE MAP -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-globe"></i> US Sales Map</h3> <em> - US map with plottable latitude and longitude</em></div>
										<div class="widget-content">
											<div class="data-us-map">
												<div class="map"></div>
												<div class="plotLegend"></div>
											</div>
										</div>
									</div>
									<!-- END WIDGET PLOTTABBLE MAP -->
								</div>
								<div class="col-md-6">
									<!-- WIDGET ZOOM MAP -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-search-plus"></i> Zoom</h3> <em> - Map with zoom features, you can also use mouse wheel to control it.</em></div>
										<div class="widget-content">
											<div class="zoom-map">
												<div class="btn-group btn-group-sm pull-right">
													<button class="btn btn-info" id="focus-paris"><i class="fa fa-map-marker"></i> Focus on Paris Area</button>
													<button class="btn btn-info" id="focus-lyon"><i class="fa fa-map-marker"></i> Focus on Lyon Area</button>
													<button class="btn btn-danger" id="map-clear-zoom"><i class="fa fa-times-circle"></i> Clear Zoom</button>
												</div>
												<div class="map"></div>
											</div>
										</div>
									</div>
									<!-- END WIDGET ZOOM MAP -->
								</div>
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
	<!-- Javascript -->
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-tour.custom.js')}}"></script>
	<script src="{{asset('assets/js/king-common.js')}}"></script>
	<script src="{{asset('demo-style-switcher/assets/js/deliswitch.js')}}"></script>
	<script src="{{asset('assets/js/raphael-min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mapael.js')}}"></script>
	<script src="{{asset('assets/js/maps/world_countries.js')}}"></script>
	<script src="{{asset('assets/js/maps/usa_states.js')}}"></script>
	<script src="{{asset('assets/js/maps/france_departments.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mousewheel.js')}}"></script>
	<script src="{{asset('assets/js/king-components.js')}}"></script>
@stop