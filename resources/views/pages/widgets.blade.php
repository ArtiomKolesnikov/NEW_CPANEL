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
								<li class="active">Widgets</li>
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
							<h2>Widgets</h2>
							<em>types of widget with various features</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">
									<!-- WIDGET SIMPLE  -->
									<div class="widget">
										<div class="widget-header">
											<h3>Simple Plain Widget</h3>
										</div>
										<div class="widget-content">
											<p>Just widget as simple container with header and footer</p>
										</div>
										<div class="widget-footer">
											Footer area
										</div>
									</div>
									<!-- END WIDGET SIMPLE  -->

									<!-- WIDGET AJAX ENABLE  -->
									<div class="widget widget-ajax">
										<div class="widget-header">
											<h3>Ajax Enable</h3>
											<div class="btn-group widget-header-toolbar">
												<button type="button" class="btn btn-primary btn-sm btn-ajax"><i class="fa fa-floppy-o"></i> <span>Update</span></button>
											</div>
										</div>
										<div class="widget-content">
											<div class="alert alert-info"><i class="fa fa-info-circle"></i> <span>Click "Update" button to call ajax function and get the message from the server.</span></div>
										</div>
									</div>
									<!-- END WIDGET AJAX ENABLE  -->

									<!-- WIDGET WITH SWITCH  -->
									<div class="widget">
										<div class="widget-header">
											<h3>Widget With Switch</h3>
											<div class="btn-group widget-header-toolbar">
												<div class="control-inline toolbar-item-group">
													<span class="control-title"><i class="fa fa-bell"></i>Sound</span>
													<div class="control-inline onoffswitch">
														<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch" checked="">
														<label class="onoffswitch-label" for="switch">
															<div class="onoffswitch-inner"></div>
															<div class="onoffswitch-switch"></div>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="widget-content">

										</div>
									</div>
									<!-- END WIDGET WITH SWITCH  -->

									<!-- WIDGET WITH PROGRESS BAR -->
									<div class="widget">
										<div class="widget-header">
											<h3>Widget With Progress Bar</h3>
											<div class="widget-header-toolbar">
												<div class="progress progress-striped active">
													<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
												</div>
											</div>
										</div>
										<div class="widget-content">

										</div>
									</div>
									<!-- END WIDGET WITH PROGRESS BAR -->
								</div>

								<div class="col-md-6">
									<!-- WIDGET COMPLETE -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-windows"></i> Complete Widget</h3> <em> - brief description and help icon</em> <button type="button" class="btn btn-link btn-help"><i class="fa fa-question-circle"></i></button>
											<div class="btn-group widget-header-toolbar">
												<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
												<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
												<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
											</div>
										</div>
										<div class="widget-content"><p>Widget with focus, expand/collapse and remove buttons</p></div>
									</div>
									<!-- END WIDGET COMPLETE -->

									<!-- WIDGET WITH DROPDOWN -->
									<div class="widget">
										<div class="widget-header">
											<h3>Widget With Dropdown</h3>
											<div class="btn-group widget-header-toolbar">
												<select id="multiselect1" name="multiselect1" class="multiselect">
													<option value="opt1">Option 1</option>
													<option value="opt2">Option 2</option>
													<option value="opt3">Option 3</option>
												</select>
											</div>
										</div>
										<div class="widget-content">

										</div>
									</div>
									<!-- END WIDGET WITH DROPDOWN -->

									<!-- WIDGET WITH LABEL AND BADGE -->
									<div class="widget">
										<div class="widget-header">
											<h3>Label &amp; Badge</h3>
											<div class="btn-group widget-header-toolbar">
												<div class="label label-danger"><i class="fa fa-arrow-down"></i> 0.7%</div>
												<div class="label label-success"><i class="fa fa-arrow-up"></i> 3.5%</div>
											</div>
										</div>
										<div class="widget-content">

										</div>
										<div class="widget-footer">
											<span class="badge">12</span> <span class="badge element-bg-color-blue">5</span>
											<div class="pull-right">
												<span class="badge element-bg-color-green">18</span> <span class="badge element-bg-color-orange">54</span>
											</div>
										</div>
									</div>
									<!-- END WIDGET WITH LABEL AND BADGE -->

									<!-- WIDGET TABBED CONTENT -->
									<div class="widget">
										<div class="widget-header">
											<h3>Tabbed Widget Content</h3>
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> Tab 1</a></li>
												<li><a href="#tab2" data-toggle="tab"><i class="fa fa-gear"></i> Tab 2</a></li>
											</ul>
										</div>
										<div class="widget-content">
											<div class="tab-content no-padding">
												<div class="tab-pane fade in active" id="tab1">
													Objectively repurpose superior content for extensible outsourcing. Objectively underwhelm future-proof technology rather than diverse architectures. Conveniently simplify flexible models with open-source functionalities. Authoritatively formulate world-class outsourcing.
												</div>
												<div class="tab-pane fade" id="tab2">
													Professionally maximize unique portals whereas out-of-the-box interfaces. Monotonectally optimize B2C communities through high-payoff methods of empowerment. Enthusiastically transition intermandated value whereas multidisciplinary portals. Credibly recaptiualize ethical ROI without stand-alone deliverables. Progressively extend progressive networks for one-to-one process improvements.
													Distinctively underwhelm resource sucking products and market-driven meta-services. Uniquely target granular bandwidth through compelling customer service. Dramatically mesh parallel initiatives.
												</div>
											</div>
										</div>
									</div>
									<!-- END WIDGET TABBED CONTENT -->
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
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-tour.custom.js')}}"></script>
	<script src="{{asset('assets/js/king-common.js')}}"></script>
	<script src="{{asset('demo-style-switcher/assets/js/deliswitch.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-multiselect.js')}}"></script>

@stop