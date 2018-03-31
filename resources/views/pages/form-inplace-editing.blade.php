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
								<li><a href="#">Forms</a></li> <li class="active">In-Place Editing</li>
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
							<h2>In-Place Editing</h2>
							<em>in-place editing input by x-editable</em>
						</div>

						<div class="main-content">
							<!-- X-EDITABLE -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> In-Place Editing</h3>
									<div class="btn-group widget-header-toolbar">
										<div class="control-inline toolbar-item-group">
											<span class="control-title">Inline Style</span>
											<div class="control-inline onoffswitch">
												<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-inline-input">
												<label class="onoffswitch-label" for="switch-inline-input">
													<div class="onoffswitch-inner"></div>
													<div class="onoffswitch-switch"></div>
												</label>
											</div>
										</div>
									</div>
									<div class="btn-group widget-header-toolbar">
										<button id="enable" class="btn btn-default btn-sm">Enable / Disable</button>
									</div>
								</div>
								<div class="widget-content">
									<table id="user" class="table table-bordered table-striped">
										<tbody>
										<tr>
											<td width="35%">Simple text field</td>
											<td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
										</tr>
										<tr>
											<td>Required, client-side error message</td>
											<td><a href="#" id="lastname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your last name">mylastname</a></td>
										</tr>
										<tr>
											<td>Select, local array, custom display</td>
											<td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
										</tr>
										<tr>
											<td>Select, remote array, no buttons</td>
											<td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
										</tr>
										<tr>
											<td>Select, error while loading</td>
											<td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
										</tr>
										<tr>
											<td>Datepicker</td>
											<td><a href="#" id="dob" data-type="date" data-pk="1" data-url="/post" data-title="Select date">15/05/1984</a></td>
										</tr>
										<tr>
											<td>Combodate (date)</td>
											<td><a href="#" id="combodate" data-type="combodate" data-value="1984-05-23" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
										</tr>
										<tr>
											<td>Combodate (datetime)</td>
											<td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
										</tr>
										<tr>
											<td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
											<td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
										</tr>
										<tr>
											<td>Twitter typeahead.js</td>
											<td><a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
										</tr>
										<tr>
											<td>Checklist</td>
											<td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
										</tr>
										<tr>
											<td>Select2 (tags mode)</td>
											<td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a></td>
										</tr>
										<tr>
											<td>Select2 (dropdown mode)</td>
											<td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
										</tr>
										<tr>
											<td>Custom input, several fields</td>
											<td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END X-EDITABLE -->

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
	<script src="{{asset('assets/js/jquery.mockjax.min.js')}}"></script>
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-editable.min.js')}}"></script>
	<script src="{{asset('assets/js/typeahead.js')}}"></script>
	<script src="{{asset('assets/js/typeaheadjs.1.5.1.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/address.custom.js')}}"></script>
	<script src="{{asset('assets/js/demo-mock.js')}}"></script>
	<script src="{{asset('assets/js/king-elements.js')}}"></script>
@stop