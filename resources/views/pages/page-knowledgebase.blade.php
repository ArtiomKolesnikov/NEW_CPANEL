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
								<li><a href="#">Pages</a></li> <li class="active">Knowledge Base</li>
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
							<h2>Knowledge Base</h2>
							<em>browse and search our knowledge base or open a support ticket</em>
						</div>

						<div class="main-content">
							<!-- knowledge search box -->
							<form class="form-knowledge-search">
								<div class="input-group input-group-lg">
									<input type="search" placeholder="enter a search term" class="form-control">
									<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Search</button></span>
								</div>
							</form>
							<!-- end knowledge search box -->

							<div class="row">
								<!-- left side, main content -->
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-5">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> General <span class="pull-right">22</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left pull-left"></i><a href="#">What is KINGADMIN admin dashboard?</a></li>
													<li><i class="fa fa-file-text-o pull-left pull-left"></i><a href="#">How do I change my password?</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-md-offset-1">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> Customer Support <span class="pull-right">15</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Payment Problems</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Shopping Cart</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Discount Policy</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">How do I use promo code?</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> Products <span class="pull-right">27</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">How to review a product</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Recommend a product</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">I can't see the product stock</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Back Order</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-md-offset-1">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> Shipping<span class="pull-right">14</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Shipping Cost</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Shipping &amp; Warranty</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Where do we ship?</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">How can I find my shipping code?</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">How to track my shipping?</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> Downloads <span class="pull-right">6</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Find out downloadable products type.</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Where can I find the link for my digital product</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Link Expiration</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-md-offset-1">
											<div class="knowledge">
												<h3><a href="#"><i class="fa fa-folder"></i> Technical Support<span class="pull-right">17</span></a></h3>
												<ul class="list-unstyled">
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Turn on my browser cookies</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">The page keeps reloading</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Report a broken link</a></li>
													<li><i class="fa fa-file-text-o pull-left"></i><a href="#">Contact Technical Support</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="well well-lg knowledge-recent-popular">
										<div class="row">
											<div class="col-md-6">
												<h4>Most Popular</h4>
												<ol>
													<li><a href="#">I can't add otem to Shopping Cart, what should I do?</a></li>
													<li><a href="#">Error When Uploading File</a></li>
													<li><a href="#">How to Deposit Money?</a></li>
												</ol>
											</div>
											<div class="col-md-6">
												<h4>Recent Articles</h4>
												<ol>
													<li><a href="#">Avoid Any Type of Scam, Now!</a></li>
													<li><a href="#">Update to Terms &amp; Agreements</a></li>
													<li><a href="#">A Step-by-Step Guide to Participate in CSR Program</a></li>
													<li><a href="#">Where Can I Find My Order History?</a></li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<!-- end left side, main content -->

								<!-- right sidebar -->
								<div class="col-lg-3">
									<h3>Categories</h3>
									<ul class="nav nav-pills nav-stacked nav-categories">
										<li><a href="#">General <span class="badge pull-right">22</span></a></li>
										<li><a href="#">Customer Support <span class="badge pull-right">15</span></a></li>
										<li><a href="#">Downloads <span class="badge pull-right">6</span></a></li>
										<li><a href="#">Products <span class="badge pull-right">27</span></a></li>
										<li><a href="#">Buying <span class="badge pull-right">20</span></a></li>
										<li><a href="#">Shipping <span class="badge pull-right">14</span></a></li>
										<li><a href="#">Email <span class="badge pull-right">8</span></a></li>
										<li><a href="#">Technical Support <span class="badge pull-right">17</span></a></li>
									</ul>
									<div class="ticket-box">
										<p>Please submit a ticket only if you can't find a solution to your problem in our knowledge base</p>
										<a href="#" class="btn btn-primary">Open a Ticket</a>
									</div>
								</div>
								<!-- end right sidebar -->
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
@stop