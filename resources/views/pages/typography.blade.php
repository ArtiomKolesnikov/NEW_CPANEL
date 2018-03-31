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
								<li class="active">Typography</li>
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
							<h2>Typography</h2>
							<em>headings, lists and others</em>
						</div>

						<div class="main-content">
							<!-- TYPOGRAPHY -->
							<h1>Heading H1</h1>
							<p>Continually scale prospective innovation after client-centric niche markets. Dramatically optimize superior functionalities and premier interfaces. Collaboratively.</p>
							<h2>Heading H2</h2>
							<p>Quickly create low-risk high-yield interfaces without 24/365 internal or "organic" sources. Enthusiastically strategize team driven schemas.</p>
							<h3>Heading H3</h3>
							<p>Quickly fabricate transparent ideas vis-a-vis customer directed meta-services. Dramatically impact high-payoff communities whereas highly efficient deliverables.</p>
							<h4>Heading H4</h4>
							<p>Collaboratively optimize e-business infomediaries rather than excellent communities. Objectively expedite transparent products via turnkey outsourcing. Professionally.</p>
							<h5>Heading H5</h5>
							<p>Compellingly target wireless users through multimedia based results. Monotonectally incubate frictionless e-commerce rather than multidisciplinary opportunities.</p>
							<h6>Heading H6</h6>
							<p>Conveniently orchestrate timely information without reliable infrastructures. Appropriately evisculate installed base innovation via customer directed leadership.</p>
							<hr />
							<h3>Lead Body Copy</h3>
							<p>Make a paragraph stand out by adding <code>.lead</code></p>
							<p class="lead">Objectively re-engineer maintainable total linkage after proactive intellectual capital. Dynamically evolve best-of-breed e-services for user-centric customer.</p>

							<div class="row">
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-font"></i> Text Styles</h3></div>
										<div class="widget-content">
											<p><small>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent.</small></p>
											<p><strong>rendered as bold text</strong></p>
											<p><em>rendered as italicized text</em></p>
											<div class="well">
												<p class="text-left"><code>.text-left</code> Left aligned text.</p>
												<p class="text-center"><code>.text-center</code> Center aligned text.</p>
												<p class="text-right"><code>.text-right</code> Right aligned text.</p>
											</div>
											<p class="text-muted"><code>.text-muted</code> Convey meaning through color with a handful of emphasis utility classes.</p>
											<p class="text-primary"><code>.text-primary</code> Convey meaning through color with a handful of emphasis utility classes.</p>
											<p class="text-success"><code>.text-success</code> Convey meaning through color with a handful of emphasis utility classes.</p>
											<p class="text-info"><code>.text-info</code> Convey meaning through color with a handful of emphasis utility classes.</p>
											<p class="text-warning"><code>.text-warning</code> Convey meaning through color with a handful of emphasis utility classes.</p>
											<p class="text-danger"><code>.text-danger</code> Convey meaning through color with a handful of emphasis utility classes.</p>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget">
										<div class="widget-header"><h3><i class="fa fa-list-ul"></i> Lists</h3></div>
										<div class="widget-content">
											<div class="row">
												<div class="col-md-6">
													<h3>Ordered List</h3>
													<ol>
														<li>Ordered item #1</li>
														<li>Ordered item #2</li>
														<li>Ordered item #3</li>
														<li>Ordered item #4</li>
														<li>Ordered item #5</li>
													</ol>
												</div>
												<div class="col-md-6">
													<h3>Unordered List</h3>
													<ul>
														<li>Ordered item #1</li>
														<li>Ordered item #2</li>
														<li>Ordered item #3</li>
														<li>Ordered item #4</li>
														<li>Ordered item #5</li>
													</ul>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<h3>Unstyled List</h3>
													<ul class="list-unstyled">
														<li>This is a list item </li>
														<li>This is a list item </li>
														<li>This is a list item </li>
														<li>This is a list item </li>
														<li>This is a list item </li>
													</ul>
												</div>
												<div class="col-md-6">
													<h3>List Icon</h3>
													<ul class="fa-ul">
														<li><i class="fa-li fa fa-check-square"></i>List icons (like these)</li>
														<li><i class="fa-li fa fa-check-square"></i>can be used</li>
														<li><i class="fa-li fa fa-spinner fa-spin"></i>to replace</li>
														<li><i class="fa-li fa fa-square"></i>default bullets in lists</li>
													</ul>
												</div>
											</div>
											<h3>Inline List</h3>
											<ul class="list-inline">
												<li>Inline List Item</li>
												<li>Inline List Item</li>
												<li>Inline List Item</li>
												<li>Inline List Item</li>
											</ul>

										</div>
									</div>
								</div>
							</div>
							<!-- END TYPOGRAPHY -->

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