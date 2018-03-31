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
								<li><a href="#">UI Elements</a></li> <li class="active">Buttons</li>
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
							<h2>Buttons</h2>
							<em>general buttons with various style and icon collections</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-md-6">
									<!-- BASIC BUTTON -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-square"></i> Basic</h3></div>
										<div class="widget-content">
											<p>
												<button type="button" class="btn btn-default">Default</button>
												<button type="button" class="btn btn-primary">Primary</button>
												<button type="button" class="btn btn-info">Info</button>
												<button type="button" class="btn btn-success">Success</button>
												<button type="button" class="btn btn-warning">Warning</button>
											</p>
											<p>
												<button type="button" class="btn btn-custom-primary">Custom Primary</button>
												<button type="button" class="btn btn-custom-secondary">Custom Secondary</button>
												<button type="button" class="btn btn-danger">Danger</button>
												<button type="button" class="btn btn-link">Link</button>
											</p>
											<p><a class="btn btn-lg btn-primary" href="#"><i class="fa fa-download fa-3x pull-left"></i> Download The Guide<br /><small>Version 2.0</small></a></p>
										</div>
									</div>
									<!-- END BASIC BUTTON -->

									<!-- BUTTON SIZE -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-signal fa-rotate-90"></i> Button Size</h3></div>
										<div class="widget-content">
											<button type="button" class="btn btn-default btn-lg">Large Size</button>
											<button type="button" class="btn btn-primary">Default Size</button>
											<button type="button" class="btn btn-info btn-sm">Small Size</button>
											<button type="button" class="btn btn-success btn-xs">Extra Small Size</button>
											<hr class="inner-separator"/>
											<div class="row">
												<div class="col-md-6"><button type="button" class="btn btn-primary btn-block">Button Block</button></div>
												<div class="col-md-6"><button type="button" class="btn btn-warning btn-block">Button Block</button></div>
											</div>
											<hr class="inner-separator"/>
											<button type="button" class="btn btn-danger btn-block">Button Block</button>
										</div>
									</div>
									<!-- END BUTTON SIZE -->

									<!-- BUTTON GROUPS -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-square"></i> Button Groups</h3></div>
										<div class="widget-content">
											<div class="btn-group">
												<button type="button" class="btn btn-success">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn btn-danger">Right</button>
											</div>
											<div class="btn-group">
												<a class="btn btn-default" href="#"><i class="fa fa-align-left"></i></a>
												<a class="btn btn-default" href="#"><i class="fa fa-align-center"></i></a>
												<a class="btn btn-default" href="#"><i class="fa fa-align-right"></i></a>
												<a class="btn btn-default" href="#"><i class="fa fa-align-justify"></i></a>
											</div><br/><br/>
											<div class="btn-group">
												<button type="button" class="btn btn-primary">Button 1</button>
												<button type="button" class="btn btn-primary">Button 2</button>
												<div class="btn-group">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Others <span class="caret"></span></button>
													<ul class="dropdown-menu">
														<li><a href="#">Dropdown link</a></li>
														<li><a href="#">Dropdown link</a></li>
													</ul>
												</div>
											</div><br/><br/>
											<div class="btn-group btn-group-lg">
												<button type="button" class="btn btn-success">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn btn-danger">Right</button>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-success">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn btn-danger">Right</button>
											</div><br/><br/>
											<div class="btn-group btn-group-sm">
												<button type="button" class="btn btn-success">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn btn-danger">Right</button>
											</div>
											<div class="btn-group btn-group-xs">
												<button type="button" class="btn btn-success">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn btn-danger">Right</button>
											</div>
										</div>
									</div>
									<!-- END BUTTON GROUPS -->
								</div>

								<div class="col-md-6">
									<!-- ICONS BUTTONS -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-info-circle"></i> Icon Buttons</h3></div>
										<div class="widget-content">
											<p>
												<button type="button" class="btn btn-default"><i class="fa fa-plus-square"></i> Default </button>
												<button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Primary</button>
												<button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i> Info</button>
												<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-refresh fa-spin"></i> Refreshing...</button>
											</p>
											<p>
												<button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Success</button>
												<button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> Warning</button>
												<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Danger</button>
												<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> Loading...</button>
											</p>
											<p class="alert alert-info"><i class="fa fa-info-circle"></i> CSS3 animations aren't supported in IE8 - IE9.</p>
										</div>
									</div>
									<!-- END ICONS BUTTONS -->

									<!-- DISABLED BUTTONS -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-times"></i> Disabled Buttons</h3></div>
										<div class="widget-content">
											<button type="button" class="btn btn-default" disabled="disabled">Default</button>
											<button type="button" class="btn btn-primary" disabled="disabled">Primary</button>
											<button type="button" class="btn btn-info" disabled="disabled">Info</button>
											<button type="button" class="btn btn-success" disabled="disabled">Success</button>
											<button type="button" class="btn btn-warning" disabled="disabled">Warning</button>
											<button type="button" class="btn btn-danger" disabled="disabled">Danger</button>
										</div>
									</div>
									<!-- END DISABLED BUTTONS -->

									<!-- BUTTON DROPDOWN -->
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-list"></i> Button Dropdown</h3></div>
										<div class="widget-content">
											<div class="btn-group">
												<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-warning"></i> Warning <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<hr class="inner-separator"/>
											<div class="btn-group">
												<button type="button" class="btn btn-default btn-lg">Default</button>
												<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-primary btn-md">Primary</button>
												<button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-info btn-sm">Info</button>
												<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-success btn-xs">Success</button>
												<button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div><br/><br/>
											<div class="btn-group">
												<button type="button" class="btn btn-warning btn-md"><i class="fa fa-warning"></i> Warning</button>
												<button type="button" class="btn btn-warning btn-md dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-danger btn-md"><i class="fa fa-bolt"></i> Danger</button>
												<button type="button" class="btn btn-danger btn-md dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Action</a></li>
													<li class="disabled"><a href="#">Disabled link</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Dropdown Header</li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- END BUTTON DROPDOWN -->

									<!-- MORE BUTTONS -->
									<div class="widget">
										<div class="widget-header">
											<h3><i class="fa fa-list"></i> Do More With Buttons</h3>
											<div class="btn-group widget-header-toolbar">
												<div class="label label-info">NEW</div>
											</div>
										</div>
										<div class="widget-content">
											<button type="button" id="loading-example-btn" data-loading-text="Loading..." class="btn btn-primary">Loading state</button>
											<span id="server-message">Please click the button on the left :)</span>
											<hr class="inner-separator" />
											<button type="button" class="btn btn-primary" data-toggle="button">Single toggle</button>
											<hr class="inner-separator" />
											<h4>Checkboxes As Buttons Group</h4>
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-primary">
													<input type="checkbox"> Option 1
												</label>
												<label class="btn btn-primary">
													<input type="checkbox"> Option 2
												</label>
												<label class="btn btn-primary">
													<input type="checkbox"> Option 3
												</label>
											</div>
											<hr class="inner-separator" />
											<h4>Radio As Buttons Group</h4>
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-warning">
													<input type="radio" name="options" id="option1"> Option 1
												</label>
												<label class="btn btn-warning">
													<input type="radio" name="options" id="option2"> Option 2
												</label>
												<label class="btn btn-warning">
													<input type="radio" name="options" id="option3"> Option 3
												</label>
											</div>

										</div>
									</div>
									<!-- END MORE BUTTONS -->
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
	<script src="{{asset('assets/js/king-elements.js')}}"></script>
@stop