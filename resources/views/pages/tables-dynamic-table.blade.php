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
								<li><a href="#">Tables</a></li> <li class="active">Dynamic Table</li>
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
							<h2>Dynamic Table</h2>
							<em>tables with lot of features and interactivity</em>
						</div>

						<div class="main-content">
							<!-- JQUERY DATA TABLE -->
							<div class="widget widget-table">
								<div class="widget-header"><h3><i class="fa fa-table"></i> Featured Table</h3> <em> - <a href="http://datatables.net/">jQuery Data Table</a> with sorting feature, live search and pagination</em></div>
								<div class="widget-content">
									<table class="table table-sorting table-striped table-hover datatable" cellpadding="0" cellspacing="0" width="100%">
										<thead>
										<tr>
											<th>Browser</th>
											<th>Operating System</th>
											<th>Visits</th>
											<th>New Visits</th>
											<th>Bounce Rate</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Chrome</td>
											<td>Macintosh</td>
											<td>360</td>
											<td>82.78%</td>
											<td>87.77%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>Windows</td>
											<td>582</td>
											<td>87.24%</td>
											<td>90.12%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>Linux</td>
											<td>172</td>
											<td>45.21%</td>
											<td>48.81%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>iOS</td>
											<td>86</td>
											<td>35.23%</td>
											<td>44.21%</td>
										</tr>
										<tr>
											<td>Firefox</td>
											<td>Windows</td>
											<td>280</td>
											<td>63.12%</td>
											<td>89.34%</td>
										</tr>
										<tr>
											<td>Firefox</td>
											<td>Android</td>
											<td>236</td>
											<td>58.02%</td>
											<td>76.19%</td>
										</tr>
										<tr>
											<td>Internet Explorer</td>
											<td>Windows</td>
											<td>145</td>
											<td>45.23%</td>
											<td>94.65%</td>
										</tr>
										<tr>
											<td>Safari</td>
											<td>Macintosh</td>
											<td>103</td>
											<td>22.12%</td>
											<td>52.43%</td>
										</tr>
										<tr>
											<td>Safari</td>
											<td>iOS</td>
											<td>302</td>
											<td>56.98%</td>
											<td>45.53%</td>
										</tr>
										<tr>
											<td>Opera</td>
											<td>Windows</td>
											<td>328</td>
											<td>67.12%</td>
											<td>78.34%</td>
										</tr>
										<tr>
											<td>Opera</td>
											<td>Macintosh</td>
											<td>22</td>
											<td>87.21%</td>
											<td>79.81%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>iOS</td>
											<td>45</td>
											<td>23.21%</td>
											<td>34.67%</td>
										</tr>
										<tr>
											<td>Firefox</td>
											<td>Windows</td>
											<td>67</td>
											<td>27.11%</td>
											<td>78.08%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>Macintosh</td>
											<td>120</td>
											<td>80.78%</td>
											<td>80.77%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>Windows</td>
											<td>682</td>
											<td>89.44%</td>
											<td>95.32%</td>
										</tr>
										<tr>
											<td>Chrome</td>
											<td>Windows</td>
											<td>172</td>
											<td>43.11%</td>
											<td>46.89%</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END JQUERY DATA TABLE -->

							<!-- JQGRID TABLE -->
							<div class="widget widget-table">
								<div class="widget-header"><h3><i class="fa fa-table"></i> Editable Table</h3> <em> - editable row, navigation, add, delete, view, search and reload</em></div>
								<div class="widget-content">
									<div id="jqgrid-wrapper">
										<table id="jqgrid" class="table table-striped table-hover"><tr><td></td></tr></table>
										<div id="jqgrid-pager"></div>
									</div>
								</div>
							</div>
							<!-- JQGRID TABLE -->
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
	<script src="{{asset('assets/js/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/js/datatable/jquery.dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/jqgrid/jquery.jqGrid.min.js')}}"></script>
	<script src="{{asset('assets/js/jqgrid/i18n/grid.locale-en.js')}}"></script>
	<script src="{{asset('assets/js/jqgrid/jquery.jqGrid.fluid.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/king-table.js')}}"></script>
@stop