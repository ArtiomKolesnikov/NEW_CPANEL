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
								<li><a href="#">Pages</a></li> <li class="active">Invoice</li>
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
							<h2>Invoice</h2>
							<em>printer friendly invoice, try to print it to see the result</em>
						</div>

						<div class="main-content">
							<!-- INVOICE -->
							<div class="invoice">
								<!-- invoice header -->
								<div class="invoice-header">
									<div class="row">
										<div class="col-lg-3 col-print-3">
											<img src="{{asset('assets/img/kingadmin-logo.png')}}" alt="KingAdmin Logo" />
										</div>
										<div class="col-lg-9 col-print-9" >
											<ul class="list-inline">
												<li>Invoice #: <strong>15240776</strong></li>
												<li>Invoice Date: <strong>Nov 22, 2013</strong></li>
												<li>Total Amount: <strong>$12,221</strong></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- end invoice header -->

								<!-- invoice address -->
								<div class="invoice-from-to">
									<div class="row">
										<div class="col-sm-6 col-print-6">
											<span>FROM</span>
											<p class="name">The Develovers</p>
											<address>
												12345 North Main Street<br /> New York, 2233845<br />
												<div class="contact">
													<p><span>Email:</span> email@example.com</p>
													<p><span>Phone:</span> (1800) 765 - 4321</p>
													<p><span>Fax:</span> (1800) 765 - 4322</p>
												</div>
											</address>
										</div>
										<div class="col-sm-6 col-print-6">
											<span>TO</span>
											<p class="name">Hardware Studio Inc.</p>
											<address>
												28435 East Main Street<br /> New York, 2233845<br />
												<div class="contact">
													<p><span>Email:</span> email@example.com</p>
													<p><span>Phone:</span> (1800) 888 - 4321</p>
													<p><span>Fax:</span> (1800) 888 - 4322</p>
												</div>
											</address>
										</div>
									</div>
								</div>
								<!-- end invoice address -->

								<!-- invoice item table -->
								<div class="table-responsive">
									<table class="table invoice-table">
										<thead>
										<tr>
											<th>#</th>
											<th>Item Name</th>
											<th>Quantity</th>
											<th>Unit Price</th>
											<th>Total</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>1</td>
											<td>LED Monitor 23"</td>
											<td>4</td>
											<td>$250</td>
											<td>$10,000</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Wireless Keyboard</td>
											<td>8</td>
											<td>$80</td>
											<td>$640</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Wireless Mouse</td>
											<td>8</td>
											<td>$40</td>
											<td>$320</td>
										</tr>
										<tr>
											<td>4</td>
											<td>UPS</td>
											<td>1</td>
											<td>$150</td>
											<td>$150</td>
										</tr>
										</tbody>
									</table>
								</div>
								<!-- end invoice item table -->

								<!-- invoice footer -->
								<div class="invoice-footer">
									<div class="row">
										<div class="col-sm-5 col-sm-offset-1 col-print-4 col-print-offset-2 right-col">
											<div class="invoice-total">
												<div class="row">
													<div class="col-xs-4 col-xs-offset-4 col-print-6 col-print-offset-2">
														<p>Subtotal</p>
														<p>VAT (10%)</p>
														<p>Total</p>
													</div>
													<div class="col-xs-4 text-right col-print-4">
														<p>$11,110</p>
														<p>$1,111</p>
														<p>$12,221</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-print-6 left-col">
											<blockquote class="invoice-notes">
												<strong>Notes:</strong>
												<p>Competently brand interactive expertise and interactive solutions. Proactively orchestrate viral innovation vis-a-vis customized leadership.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<!-- end invoice footer -->

								<!-- invoice action buttons -->
								<div class="invoice-buttons">
									<button class="btn btn-default print-btn"><i class="fa fa-print"></i> Print</button>
									<a href="#" class="btn btn-custom-primary"><i class="fa fa-arrow-right"></i> Proceed to Payment</a>
								</div>
								<!-- end invoice action buttons -->
							</div>
							<!-- INVOICE -->

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
	<script src="{{asset('assets/js/king-page.js')}}"></script>
@stop