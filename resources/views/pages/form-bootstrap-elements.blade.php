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
								<li><a href="#">Forms</a></li> <li class="active">Bootstrap Form Elements</li>
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
							<h2>Bootstrap Form Elements</h2>
							<em>a collection of standard bootstrap form elements</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">

									<!-- BASIC INPUT -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i> Basic Input</h3></div>
										<div class="widget-content">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-md-2 control-label">Text Field</label>
													<div class="col-md-10">
														<input type="text" class="form-control" placeholder="text field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Password</label>
													<div class="col-md-10">
														<input type="password" class="form-control" value="asecret">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Textarea</label>
													<div class="col-md-10">
														<textarea class="form-control" placeholder="textarea" rows="4"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Select</label>
													<div class="col-md-10">
														<select class="form-control">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Multiple</label>
													<div class="col-md-10">
														<select multiple class="form-control">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Checkbox</label>
													<div class="col-md-10">
														<div class="checkbox">
															<label>
																<input type="checkbox" value="item1"> Item 1
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="item2"> Item 2
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="item3"> Item 3
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Inline</label>
													<div class="col-md-10">
														<label class="checkbox-inline">
															<input type="checkbox" value="item1"> Item 1
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" value="item2"> Item 2
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" value="item3"> Item 3
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Radio Button</label>
													<div class="col-md-10">
														<div class="radio">
															<label>
																<input type="radio" name="radio" value="radio1"> Radio Item 1
															</label>
														</div>
														<div class="radio">
															<label>
																<input type="radio" name="radio" value="radio2"> Radio Item 2
															</label>
														</div>
														<div class="radio">
															<label>
																<input type="radio" name="radio" value="radio3"> Radio Item 3
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Inline</label>
													<div class="col-md-10">
														<label class="radio radio-inline">
															<input type="radio" name="radioinline" value="radio1"> Radio Item 1
														</label>
														<label class="radio radio-inline">
															<input type="radio" name="radioinline" value="radio2"> Radio Item 2
														</label>
														<label class="radio radio-inline">
															<input type="radio" name="radioinline" value="radio3"> Radio Item 3
														</label>
													</div>
												</div>
												<div class="form-group">
													<label for="exampleInputFile" class="col-md-2 control-label">File input</label>
													<div class="col-md-10">
														<input type="file" id="exampleInputFile">
														<p class="help-block"><em>Example block-level help text here.</em></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Static Control</label>
													<div class="col-sm-10">
														<p class="form-control-static">email@example.com</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<!-- END BASIC INPUT -->

									<!-- CONTROL HEIGHT SIZING -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i>Control Height Sizing</h3></div>
										<div class="widget-content">
											<div class="form-horizontal">
												<div class="form-group">
													<label for="exampleInputFile" class="col-md-3 control-label">Large Input</label>
													<div class="col-md-9">
														<input class="form-control input-lg" type="text" placeholder=".input-lg">
													</div>
												</div>
												<div class="form-group">
													<label for="exampleInputFile" class="col-md-3 control-label">Default Input</label>
													<div class="col-md-9">
														<input class="form-control" type="text" placeholder="Default input">
													</div>
												</div>
												<div class="form-group">
													<label for="exampleInputFile" class="col-md-3 control-label">Small Input</label>
													<div class="col-md-9">
														<input class="form-control input-sm" type="text" placeholder=".input-sm">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Large Select</label>
													<div class="col-md-9">
														<select class="form-control input-lg">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Default Select</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Small Select</label>
													<div class="col-md-9">
														<select class="form-control input-sm">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- END CONTROL HEIGHT SIZING -->

								</div>
								<div class="col-md-6">
									<!-- INPUT GROUPS -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i> Input Groups</h3></div>
										<div class="widget-content">
											<div class="row">
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">@</span>
														<input type="text" class="form-control" placeholder="Username">
													</div><br/>
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-addon">.00</span>
													</div><br/>
													<div class="input-group">
														<span class="input-group-addon">$</span>
														<input type="text" class="form-control">
														<span class="input-group-addon">.00</span>
													</div><br/>
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group">
															<span class="input-group-addon">
																<div class="simple-checkbox">
																	<input type="checkbox" id="checkbox-addon">
																	<label for="checkbox-addon"></label>
																</div>
															</span>
														<input type="text" class="form-control">
													</div><br/>
													<div class="input-group">
															<span class="input-group-addon">
																<div class="simple-radio radio-green">
																	<input id="radio-addon" type="radio"><label for="radio-addon"></label>
																</div>
															</span>
														<input type="text" class="form-control">
													</div><br/>
													<div class="input-group">
															<span class="input-group-btn">
																<button class="btn btn-default" type="button">Go!</button>
															</span>
														<input type="text" class="form-control">
													</div><br/>
													<div class="input-group">
														<div class="input-group-btn">
															<button type="button" class="btn btn-default" tabindex="-1">Action</button>
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
																<span class="caret"></span>
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Action</a></li>
																<li><a href="#">Another action</a></li>
																<li><a href="#">Something else here</a></li>
																<li class="divider"></li>
																<li><a href="#">Separated link</a></li>
															</ul>
														</div>
														<input type="text" class="form-control">
													</div><br/>
												</div>
											</div>
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-btn">
													<button type="button" class="btn btn-warning" tabindex="-1">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" tabindex="-1">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- END INPUT GROUPS -->

									<!-- VALIDATION STATES -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-edit"></i>Validation States</h3></div>
										<div class="widget-content">
											<h4>Plain</h4>
											<div class="form-group has-success">
												<label class="control-label" for="inputSuccess1">Input with success</label>
												<input type="text" class="form-control" id="inputSuccess1">
											</div>
											<div class="form-group has-warning">
												<label class="control-label" for="inputWarning1">Input with warning</label>
												<input type="text" class="form-control" id="inputWarning1">
											</div>
											<div class="form-group has-error">
												<label class="control-label" for="inputError1">Input with error</label>
												<input type="text" class="form-control" id="inputError1">
											</div>
											<hr class="inner-separator" />
											<h4>With Icons</h4>
											<div class="form-group has-success has-feedback">
												<label class="control-label" for="inputSuccess2">Input with success</label>
												<input type="text" class="form-control" id="inputSuccess2">
												<span class="fa fa-check form-control-feedback"></span>
											</div>
											<div class="form-group has-warning has-feedback">
												<label class="control-label" for="inputWarning2">Input with warning</label>
												<input type="text" class="form-control" id="inputWarning2">
												<span class="fa fa-warning form-control-feedback"></span>
											</div>
											<div class="form-group has-error has-feedback">
												<label class="control-label" for="inputError2">Input with error</label>
												<input type="text" class="form-control" id="inputError2">
												<span class="fa fa-times form-control-feedback"></span>
											</div>
											<hr class="inner-separator" />
											<h4>On Horizontal Form</h4>
											<form class="form-horizontal" role="form">
												<div class="form-group has-success has-feedback">
													<label class="control-label col-sm-4" for="inputSuccess3">Input with success</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputSuccess3">
														<span class="fa fa-check form-control-feedback"></span>
													</div>
												</div>
											</form>
											<hr class="inner-separator" />
											<h4>On Inline Form</h4>
											<form class="form-inline" role="form">
												<div class="form-group has-success has-feedback">
													<label class="control-label" for="inputSuccess4">Input with success</label>
													<input type="text" class="form-control" id="inputSuccess4">
													<span class="glyphicon glyphicon-ok form-control-feedback"></span>
												</div>
											</form>
										</div>
									</div>
									<!-- END VALIDATION STATES -->

								</div>
							</div>

							<!-- CONTROL COLUMN SIZING -->
							<div class="widget">
								<div class="widget-header"><h3><i class="fa fa-edit"></i>Control Column Sizing</h3></div>
								<div class="widget-content">
									<div class="row">
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder=".col-sm-2">
										</div>
									</div>
									<hr class="inner-separator" />
									<div class="row">
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
									</div>
									<hr class="inner-separator" />
									<div class="row">
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder=".col-sm-4">
										</div>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder=".col-sm-4">
										</div>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder=".col-sm-4">
										</div>
									</div>
									<hr class="inner-separator" />
									<div class="row">
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder=".col-sm-6">
										</div>
									</div>
									<hr class="inner-separator" />
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder=".col-sm-6">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control" placeholder=".col-sm-3">
										</div>
									</div>
									<hr class="inner-separator" />
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder=".col-sm-6">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder=".col-sm-6">
										</div>
									</div>
									<hr class="inner-separator" />
									<input type="text" class="form-control" placeholder="default column size">
								</div>
							</div>
							<!-- END CONTROL CONTROL SIZING -->
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