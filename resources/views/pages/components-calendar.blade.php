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
								<li><a href="#">Components</a></li> <li class="active">Calendar</li>
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
							<h2>Calendar</h2>
							<em>event calendar with drag &amp; drop feature</em>
						</div>

						<div class="main-content">
							<!-- WIDGET CALENDAR -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-calendar"></i> Calendar</h3></div>
								<div class="widget-content">
									<!-- external events -->
									<div id="external-events">
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading"><h3 class="panel-title">Create Quick Event</h3></div>
													<div class="panel-body">
														<input type="text" class="form-control" id="quick-event-name" placeholder="new event title" >
														<select name="colorpicker-picker-longlist">
															<option value="#ac725e">#ac725e</option>
															<option value="#d06b64">#d06b64</option>
															<option value="#f83a22">#f83a22</option>
															<option value="#fa573c">#fa573c</option>
															<option value="#ff7537">#ff7537</option>
															<option value="#ffad46" selected="selected">#ffad46</option>
															<option value="#42d692">#42d692</option>
															<option value="#16a765">#16a765</option>
															<option value="#7bd148">#7bd148</option>
															<option value="#b3dc6c">#b3dc6c</option>
															<option value="#fbe983">#fbe983</option>
															<option value="#fad165">#fad165</option>
															<option value="#92e1c0">#92e1c0</option>
														</select>
														<button type="button" id="btn-quick-event" class="btn btn-custom-primary btn-block"><i class="fa fa-plus-square"></i> Create</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading"><h3 class="panel-title">Draggable Events</h3></div>
													<div class="panel-body">
														<div id="event1" class="external-event">Seminar</div>
														<div id="event2" class="external-event">Jane's Birthday</div>
														<div id="event3" class="external-event">Coffee Break</div>
														<div id="event4" class="external-event">Fitness</div>
														<div id="event5" class="external-event">Buy Some Foods</div>
														<div id="event6" class="external-event">Weekly Meeting</div>
														<div id="event6" class="external-event">Monthly Meeting</div>
														<div class="simple-checkbox">
															<input type="checkbox" id="drop-remove">
															<label for="drop-remove">Remove event after drop</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end external events -->

									<div class="calendar"></div>
								</div>
							</div>
							<!-- END WIDGET CALENDAR -->
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
	<script src="{{asset('assets/js/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.simplecolorpicker.js')}}"></script>
	<script src="{{asset('assets/js/king-components.js')}}"></script>
@stop