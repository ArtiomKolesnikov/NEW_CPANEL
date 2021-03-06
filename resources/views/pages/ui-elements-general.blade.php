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
								<li><a href="#">UI Elements</a></li> <li class="active">General Elements</li>
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
							<h2>General Elements</h2>
							<em>General UI Elements</em>
						</div>

						<div class="main-content">
							<div class="row">
								<div class="col-lg-6">
									<!-- PROGRESS BARS -->
									<div id="widget-progress-bar" class="widget">
										<div class="widget-header">
											<h3>Progress Bars</h3>
										</div>
										<div class="widget-content">
											<h5>Various Styles</h5>
											<div class="progress demo-only">
												<div class="progress-bar" aria-valuetransitiongoal="20"></div>
											</div>
											<div class="progress demo-only progress-striped">
												<div class="progress-bar progress-bar-warning" aria-valuetransitiongoal="40"></div>
											</div>
											<div class="progress demo-only progress-striped active">
												<div class="progress-bar progress-bar-info" aria-valuetransitiongoal="60"></div>
											</div>
											<div class="progress demo-only">
												<div class="progress-bar progress-bar-success" aria-valuetransitiongoal="20"></div>
												<div class="progress-bar progress-bar-warning" aria-valuetransitiongoal="35"></div>
												<div class="progress-bar progress-bar-danger" aria-valuetransitiongoal="10"></div>
											</div>
											<h5>Format</h5>
											<div class="progress no-percentage">
												<div class="progress-bar" aria-valuetransitiongoal="35"></div>
											</div>
											<div class="progress custom-format">
												<div class="progress-bar" aria-valuetransitiongoal="65"></div>
											</div>
											<h5>Other Sizes</h5>
											<div class="progress demo-only progress-sm">
												<div class="progress-bar progress-bar-success" aria-valuetransitiongoal="80"></div>
											</div>
											<div class="progress demo-only progress-xs">
												<div class="progress-bar progress-bar-danger" aria-valuetransitiongoal="90"></div>
											</div>
											<h5>No Animation (Bootstrap Original)</h5>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
											<h5>Vertical</h5>
											<div class="progress-vertical-wrapper">
												<div class="progress vertical">
													<div class="progress-bar" aria-valuetransitiongoal="80"></div>
												</div>
												<div class="progress vertical bottom">
													<div class="progress-bar progress-bar-warning" aria-valuetransitiongoal="60"></div>
												</div>
												<div class="progress demo-only progress-striped vertical wide">
													<div class="progress-bar progress-bar-info" aria-valuetransitiongoal="50"></div>
												</div>
												<div class="progress demo-only progress-striped active vertical bottom wide">
													<div class="progress-bar progress-bar-danger" aria-valuetransitiongoal="70"></div>
												</div>
											</div>
										</div>
									</div>
									<!-- END PROGRESS BARS -->

									<!-- TOOLTIPS -->
									<div class="widget">
										<div class="widget-header">
											<h3>Tooltips</h3>
										</div>
										<div class="widget-content">
											<div class="demo-tooltip">
												<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" data-original-title="Tooltip on left">Tooltip on left</button>
												<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Tooltip on top">Tooltip on top</button>
												<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
												<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="right" data-original-title="Tooltip on right">Tooltip on right</button>
											</div>
											<br />
											<div class="demo-popover1">
												<button type="button" id="popover-title" class="btn btn-block btn-warning" data-container="body" data-toggle="popover" data-placement="top">Popover With Title</button>
												<button type="button" id="popover-hover" class="btn btn-block btn-warning" data-container="body" data-toggle="popover" data-placement="top">Popover On Hover</button>
											</div>
											<br />
											<div class="demo-popover2">
												<button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
												<button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
												<button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
												<button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
											</div>
										</div>
									</div>
									<!-- END TOOLTIPS -->

									<!-- MODAL DIALOG -->
									<div class="widget">
										<div class="widget-header">
											<h3>Modal Dialog</h3>
										</div>
										<div class="widget-content">
											<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title" id="myModalLabel">Modal title</h4>
														</div>
														<div class="modal-body">
															<p>Modal dialog content...</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
															<button type="button" class="btn btn-custom-primary"><i class="fa fa-check-circle"></i> Save changes</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- END MODAL DIALOG -->
								</div>

								<div class="col-lg-6">

									<!-- LABELS AND BADGES -->
									<div class="widget">
										<div class="widget-header">
											<h3>Labels &amp; Badges</h3>
										</div>
										<div class="widget-content">
											<h5>Labels</h5>
											<div class="label label-default">Default</div>
											<div class="label label-primary">Primary</div>
											<div class="label label-info">Info</div>
											<div class="label label-success">Success</div>
											<div class="label label-warning">Warning</div>
											<div class="label label-danger">Danger</div>
											<h5>Badges</h5>
											<span class="badge">24</span>
											<span class="badge element-bg-color-green">12</span>
											<span class="badge element-bg-color-orange">8</span>
											<span class="badge element-bg-color-seagreen">30</span>
											<span class="badge element-bg-color-blue">2</span>
										</div>
									</div>
									<!-- END LABELS AND BADGES -->

									<!-- PAGINATION -->
									<div class="widget">
										<div class="widget-header">
											<h3>Pagination</h3>
										</div>
										<div class="widget-content">
											<ul class="pagination">
												<li class="disabled"><a href="#">&laquo;</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#">&raquo;</a></li>
											</ul><br/>
											<ul class="pagination borderless">
												<li><a href="#">&laquo;</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li class="active"><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#">&raquo;</a></li>
											</ul><br/>
											<ul class="pagination">
												<li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
											</ul><br/>
											<ul class="pagination borderless">
												<li><a href="#"><i class="i fa fa-angle-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li class="active"><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#"><i class="i fa fa-angle-right"></i></a></li>
											</ul>
											<ul class="pager">
												<li><a href="#">&larr; Previous</a></li>
												<li><a href="#">Next &rarr;</a></li>
											</ul>
										</div>
									</div>
									<!-- END PAGINATION -->

									<!-- ALERTS -->
									<div class="widget">
										<div class="widget-header">
											<h3>Alerts</h3>
										</div>
										<div class="widget-content">
											<div class="alert alert-success">
												<strong>Well done!</strong> You successfully read this important alert message.
											</div>
											<div class="alert alert-info alert-dismissable">
												<a href="" class="close">&times;</a>
												<strong>Heads up!</strong> This alert needs your attention, but it's not super important. You can close this alert message.
											</div>
											<div class="alert alert-warning alert-dismissable">
												<a href="" class="close">&times;</a>
												<strong>Warning!</strong> Best check yo self, you're not looking too good.
											</div>
											<div class="alert alert-danger alert-dismissable">
												<a href="" class="close">&times;</a>
												<strong>Oh snap!</strong> Change a few things up and try submitting again.
											</div>
										</div>
									</div>
									<!-- END ALERTS -->
								</div>
							</div>

							<!-- TABS -->
							<div class="widget">
								<div class="widget-header">
									<h3>Tabs</h3>
								</div>
								<div class="widget-content">
									<div class="row">
										<div class="col-md-6">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-home"></i> Home</a></li>
												<li><a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
												<li class="dropdown">
													<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list	"></i> Dropdown <b class="caret"></b></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
														<li><a href="#dropdown1" tabindex="-1" data-toggle="tab">Dropdown Item 1</a></li>
														<li><a href="#dropdown2" tabindex="-1" data-toggle="tab">Dropdown Item 2</a></li>
													</ul>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade in active" id="home">
													<p>Globally fabricate team driven applications through user friendly e-business. Professionally cultivate magnetic networks rather than extensible innovation. Dramatically optimize collaborative growth strategies for plug-and-play systems. Enthusiastically actualize error-free opportunities after innovative niches. Seamlessly visualize client-centric collaboration and idea-sharing via client-centric.</p>
												</div>
												<div class="tab-pane fade" id="profile">
													<p>Phosfluorescently target multidisciplinary supply chains through 2.0 resources. Globally redefine superior process improvements rather than just in time processes. Uniquely architect ubiquitous quality vectors before real-time.</p>
												</div>
												<div class="tab-pane fade" id="dropdown1">
													<p>Continually mesh flexible results for end-to-end paradigms. Collaboratively implement cross-platform e-tailers before cooperative benefits. Interactively deliver viral innovation for 2.0 users. Objectively plagiarize global quality vectors rather than sticky schemas. Holisticly generate.</p>
												</div>
												<div class="tab-pane fade" id="dropdown2">
													<p>Dynamically negotiate progressive deliverables for future-proof bandwidth. Assertively restore cross functional paradigms after extensive imperatives. Quickly disintermediate intuitive e-business for web-enabled architectures. Completely procrastinate bricks-and-clicks results after synergistic products. Synergistically embrace one-to-one meta-services rather than focused intellectual capital. Appropriately mesh real-time content.</p>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<ul class="nav nav-tabs nav-tabs-right">
												<li><a href="#tabitem1" data-toggle="tab">Changes <span class="badge">12</span></a></li>
												<li class="active"><a href="#tabitem2" data-toggle="tab">Messages <span class="badge element-bg-color-orange">3</span></a></li>
												<li><a href="#tabitem3" data-toggle="tab">Growth <div class="label label-success"><i class="fa fa-arrow-up"></i> 3.5%</div></a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade in active" id="tabitem1">
													<p>Globally fabricate team driven applications through user friendly e-business. Professionally cultivate magnetic networks rather than extensible innovation. Dramatically optimize collaborative growth strategies for plug-and-play systems. Enthusiastically actualize error-free opportunities after innovative niches. Seamlessly visualize client-centric collaboration and idea-sharing via client-centric.</p>
												</div>
												<div class="tab-pane fade" id="tabitem2">
													<p>Dynamically negotiate progressive deliverables for future-proof bandwidth. Assertively restore cross functional paradigms after extensive imperatives. Quickly disintermediate intuitive e-business for web-enabled architectures. Completely procrastinate bricks-and-clicks results after synergistic products. Synergistically embrace one-to-one meta-services rather than focused intellectual capital. Appropriately mesh real-time content.</p>
												</div>
												<div class="tab-pane fade" id="tabitem3">
													<p>Continually mesh flexible results for end-to-end paradigms. Collaboratively implement cross-platform e-tailers before cooperative benefits. Interactively deliver viral innovation for 2.0 users. Objectively plagiarize global quality vectors rather than sticky schemas. Holisticly generate.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END TABS -->

							<!-- ACCORDION -->
							<div class="widget">
								<div class="widget-header">
									<h3>Accordion</h3>
								</div>
								<div class="widget-content">
									<div class="row">
										<div class="col-md-6">
											<div class="panel-group" id="accordion">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1 <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
														</h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse in">
														<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Collapsible Group Item #2 <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
														</h4>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse">
														<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3 <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
														</h4>
													</div>
													<div id="collapseThree" class="panel-collapse collapse">
														<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="panel-group" id="accordion2">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i> Collapsible Group Item #1</a>
														</h4>
													</div>
													<div id="collapseOne2" class="panel-collapse collapse in">
														<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed"><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i> Collapsible Group Item #2</a>
														</h4>
													</div>
													<div id="collapseTwo2" class="panel-collapse collapse">
														<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" class="collapsed"><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i> Collapsible Group Item #3</a>
														</h4>
													</div>
													<div id="collapseThree2" class="panel-collapse collapse">
														<div class="panel-body">Non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ACCORDION -->

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
	<script src="{{asset('assets/js/bootstrap-progressbar.js')}}"></script>
	<script src="{{asset('assets/js/king-elements.js')}}"></script>
@stop