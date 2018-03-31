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
								<li><a href="#">Forms</a></li> <li class="active">Validation</li>
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
							<h2>Validation</h2>
							<em>form validations</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">
									<!-- BASIC VALIDATION -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-check"></i> Basic Validation</h3></div>
										<div class="widget-content">
											<form id="basic-form" action="" method="post" parsley-validate novalidate>
												<div class="form-group">
													<label for="text-input">Text Input</label>
													<input type="text" id="text-input" class="form-control" required>
												</div>
												<div class="form-group">
													<label for="textarea">Text Area</label>
													<textarea class="form-control" rows="5" cols="30" required></textarea>
												</div>
												<div class="form-group">
													<label for="textarea">Checkbox</label>
													<div class="simple-checkbox">
														<input type="checkbox" id="checkbox1" name="checkbox" required>
														<label for="checkbox1">Options 1</label>
														<input type="checkbox" id="checkbox2" name="checkbox">
														<label for="checkbox2">Options 2</label>
														<input type="checkbox" id="checkbox3" name="checkbox">
														<label for="checkbox3">Options 3</label>
													</div>
												</div>
												<div class="form-group">
													<label for="textarea">Radio Button</label>
													<div class="simple-radio">
														<input id="male" type="radio" name="gender" value="male" parsley-required="true">
														<label for="male">Male</label>
														<input id="female" type="radio" name="gender" value="female">
														<label for="female">Female</label>
													</div>
												</div>
												<div class="form-group">
													<label for="multiselect1">Multiselect</label><br/>
													<select id="multiselect1" name="multiselect1[]" class="multiselect-validation" parsley-error-container="#multiselect-error" multiple="multiple" required>
														<option value="cheese">Cheese</option>
														<option value="tomatoes">Tomatoes</option>
														<option value="mozarella">Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
													<span id="multiselect-error"></span>
												</div>

												<button type="submit" class="btn btn-primary">Validate</button>
											</form>
										</div>
									</div>
									<!-- END BASIC VALIDATION -->
								</div>

								<div class="col-md-6">
									<!-- ADVANCED VALIDATION -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-check-circle"></i> Advanced Validation</h3></div>
										<div class="widget-content">
											<form id="advanced-form" parsley-validate novalidate>
												<div class="form-group">
													<label for="text-input1">Min. 8 Characters</label>
													<input type="text" id="text-input1" class="form-control" parsley-minlength="8">
												</div>
												<div class="form-group">
													<label for="text-input2">Between 5-10 Characters</label>
													<input type="text" id="text-input2" class="form-control" parsley-rangelength="[5,10]">
												</div>
												<div class="form-group">
													<label for="text-input3">Min. Number ( >= 5 )</label>
													<input type="text" id="text-input3" class="form-control" parsley-min="5">
												</div>
												<div class="form-group">
													<label for="text-input4">Between 20-30</label>
													<input type="text" id="text-input4" class="form-control" parsley-range="[20,30]">
												</div>
												<div class="form-group">
													<label for="textarea">Select Min. 2 Options</label>
													<div class="simple-checkbox">
														<input type="checkbox" id="checkbox21" name="checkbox2" parsley-mincheck="2">
														<label for="checkbox21">Options 1</label>
														<input type="checkbox" id="checkbox22" name="checkbox2">
														<label for="checkbox22">Options 2</label>
														<input type="checkbox" id="checkbox23" name="checkbox2">
														<label for="checkbox23">Options 3</label>
													</div>
												</div>
												<div class="form-group">
													<label for="textarea">Select Between 1-2 Options</label>
													<div class="simple-checkbox">
														<input type="checkbox" id="checkbox31" name="checkbox3" parsley-rangecheck="[1,2]">
														<label for="checkbox31">Options 1</label>
														<input type="checkbox" id="checkbox32" name="checkbox3">
														<label for="checkbox32">Options 2</label>
														<input type="checkbox" id="checkbox33" name="checkbox3">
														<label for="checkbox33">Options 3</label>
													</div>
												</div>

												<button type="submit" class="btn btn-primary">Validate</button>
											</form>
										</div>
									</div>
									<!-- END ADVANCED VALIDATION -->
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
	<script src="{{asset('assets/js/parsley.min.js')}}"></script>
	<script src="{{asset('assets/js/king-elements.js')}}"></script>
@stop