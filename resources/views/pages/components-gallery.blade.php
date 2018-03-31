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
								<li><a href="#">Components</a></li> <li class="active">Gallery</li>
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
							<h2>Gallery</h2>
							<em>photo gallery administration</em>
						</div>

						<div class="main-content">
							<!-- top action buttons -->
							<div class="gallery-buttons bottom-30px">
								<button type="button" class="btn btn-custom-primary btn-md"><i class="fa fa-upload"></i> Upload New Image</button>
								<button type="button" class="btn btn-primary btn-md"><i class="fa fa-picture-o"></i> New Album</button>
							</div>
							<!-- end top action buttons -->

							<!-- king gallery -->
							<div class="row list-group king-gallery">
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="list-group-image" src="{{asset('assets/img/gallery/bird.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/bird.jpg</em></li>
												<li><strong>File Size:</strong> <em>139 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/jet-sky.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/jet-sky.jpg</em></li>
												<li><strong>File Size:</strong> <em>108 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/cuba-cup.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/cuba-cup.jpg</em></li>
												<li><strong>File Size:</strong> <em>125 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/fence.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/fence.jpg</em></li>
												<li><strong>File Size:</strong> <em>154 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/kitsune.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/kitsune.jpg</em></li>
												<li><strong>File Size:</strong> <em>122 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/lighthouse.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/lighthouse.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/desk.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/desk.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/mac.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/mac.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/chair.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/chair.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/cafe.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/cafe.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/desk2.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/desk2.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item col-md-3 col-sm-6">
									<div class="thumbnail">
										<img class="group list-group-image" src="{{asset('assets/img/gallery/hand.jpg')}}" alt="" />
										<div class="caption">
											<h3 class="inner list-group-item-heading">Image Title</h3>
											<ul class="list-unstyled">
												<li><strong>Path:</strong> <em>assets/img/gallery/hand.jpg</em></li>
												<li><strong>File Size:</strong> <em>132 KB</em></li>
											</ul>
											<div class="action-buttons">
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end king gallery -->
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
@stop