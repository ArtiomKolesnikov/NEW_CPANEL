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
								<li><a href="#">Pages</a></li> <li class="active">Inbox</li>
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
							<h2>Inbox</h2>
							<em>3 unread messages</em>
						</div>

						<div class="main-content">
							<!-- INBOX -->
							<div class="inbox">
								<div class="row">
									<div class="col-lg-10 col-lg-offset-2">
										<!-- search box -->
										<form class="searchbox">
											<div class="input-group input-group-sm">
												<input type="search" class="form-control">
												<span class="input-group-btn">
							<button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Search</button>
						</span>
											</div>
										</form>
										<!-- end search box -->
									</div>
								</div>
								<div class="top">
									<div class="row">
										<div class="col-lg-2">
											<button href="#" class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> COMPOSE</button>
										</div>
										<div class="col-lg-10">
											<div class="top-menu">
												<div class="simple-checkbox simple-checkbox-all">
													<input type="checkbox" id="checkbox-all"><label for="checkbox-all">&nbsp;</label>
												</div>
												<ul class="list-inline top-menu-group1 hide">
													<li><button type="button" class="btn"><i class="fa fa-trash-o"></i> DELETE</button></li>
													<li><button type="button" class="btn"><i class="fa fa-warning"></i> SPAM</button></li>
													<li>
														<div class="btn-group">
															<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
																<i class="fa fa-folder"></i> MOVE <span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<li><a href="#">My Folder</a></li>
																<li><a href="#">My Other Folder</a></li>
															</ul>
														</div>
													</li>
												</ul>

												<ul class="list-inline top-menu-group2">
													<li class="top-menu-label hide">
														<div class="btn-group">
															<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
																<i class="fa fa-tags"></i> LABEL <span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<li><a href="#">Blog Comments</a></li>
																<li><a href="#">New Users</a></li>
																<li><a href="#">Password</a></li>
															</ul>
														</div>
													</li>
													<li class="top-menu-more">
														<div class="btn-group">
															<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
																<i class="fa fa-list"></i> MORE <span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<li class="mark-all"><a href="#">Mark All As Read</a></li>
																<li class="hide mark-read"><a href="#">Mark As Read</a></li>
																<li class="hide mark-unread"><a href="#">Mark As Unread</a></li>
																<li class="hide add-star"><a href="#">Add Star</a></li>
															</ul>
														</div>
													</li>
												</ul>

												<span class="navigation">
							<a href="#" class="hidden-sm hidden-md hidden-lg inbox-nav-toggle"><i class="fa fa-bars"></i></a>
							<span class="pager-wrapper">
								<span class="info">Showing 1-10 of 32</span>
								<ul class="pager">
									<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</span>
						</span>
											</div><!-- /top-menu -->
										</div>
									</div><!-- /row -->
								</div><!-- /top -->

								<div class="bottom">
									<div class="row">
										<!-- inbox left menu -->
										<div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
											<h3 class="sr-only">Inbox Menu</h3>
											<ul class="list-unstyled left-menu">
												<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge pull-right">32</span></a></li>
												<li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
												<li><a href="#"><i class="fa fa-edit"></i> Drafts</a></li>
												<li><a href="#"><i class="fa fa-external-link"></i> Sent</a></li>
												<li><a href="#"><i class="fa fa-warning"></i> Spam <span class="badge pull-right">1</span></a></li>
												<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
											</ul>

											<div class="labels">
												<h3>LABELS</h3>
												<ul class="list-unstyled">
													<li><a href="#">Blog Comments</a> <i class="fa fa-stop pull-right label1"></i></li>
													<li><a href="#">New User</a> <i class="fa fa-stop pull-right label2"></i></li>
													<li><a href="#">Password</a> <i class="fa fa-stop pull-right label3"></i></li>
												</ul>
											</div>
										</div>
										<!-- end inbox left menu -->

										<!-- right main content, the messages -->
										<div class="col-xs-12 col-sm-9 col-lg-10">
											<div class="messages">
												<table class="table-condensed message-table" width="100%" cellpadding="0" cellspacing="0">
													<colgroup>
														<col class="col-check">
														<col class="col-star">
														<col class="col-from">
														<col class="col-title">
														<col class="col-attachment">
														<col class="col-timestamp">
													</colgroup>
													<tbody>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox1"><label for="checkbox1">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Alice</span></td>
														<td><span class="message-label label2">New User</span>
															<span class="title">New User Registration</span> <span class="preview">- A new user has been registered on your site but not yet activated. You can activate this user on </span></td>
														<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
														<td><span class="timestamp">12:01 PM</span></td>
													</tr>
													<tr class="unread">
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox2"><label for="checkbox2">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Jordan Smith</span></td>
														<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
														<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
														<td><span class="timestamp">10:46 AM</span></td>
													</tr>
													<tr class="unread">
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox3"><label for="checkbox3">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Michael Doe</span></td>
														<td><span class="message-label label3">Password</span>
															<span class="title">Request For New Password</span> <span class="preview">- Hi Stacy, I try to reset maybe you can check some of my example. I was't really understand why this is happening ...</span></td>
														<td>&nbsp;</td>
														<td><span class="timestamp">09:22 AM</span></td>
													</tr>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox4"><label for="checkbox4">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Blog</span></td>
														<td><span class="message-label label1">Blog Comments</span>
															<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
														<td>&nbsp;</td>
														<td><span class="timestamp">Dec 16</span></td>
													</tr>
													<tr class="unread">
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox5"><label for="checkbox5">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Stella Roger</span></td>
														<td><span class="title">User Setting Updates</span> <span class="preview">- Hello Stacy, I figured out that weeks ago the user setting has been updated. But unfortunately</span></td>
														<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
														<td><span class="timestamp">Dec 11</span></td>
													</tr>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox6"><label for="checkbox6">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Blog</span></td>
														<td><span class="message-label label1">Blog Comments</span>
															<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
														<td>&nbsp;</td>
														<td><span class="timestamp">Dec 11</span></td>
													</tr><tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox7"><label for="checkbox7">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Blog</span></td>
														<td><span class="message-label label1">Blog Comments</span>
															<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
														<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
														<td><span class="timestamp">Dec 10</span></td>
													</tr>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox8"><label for="checkbox8">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Stella Roger</span></td>
														<td><span class="title">User Setting Updates</span> <span class="preview">- Hello Stacy, I figured out that weeks ago the user setting has been updated. But unfortunately</span></td>
														<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
														<td><span class="timestamp">Dec 9</span></td>
													</tr>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox9"><label for="checkbox9">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Jordan Smith</span></td>
														<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
														<td>&nbsp;</td>
														<td><span class="timestamp">10:46 AM</span></td>
													</tr>
													<tr>
														<td>
															<div class="simple-checkbox">
																<input type="checkbox" id="checkbox10"><label for="checkbox10">&nbsp;</label>
															</div>
														</td>
														<td><i class="fa fa-star-o"></i></td>
														<td><span class="from">Michael Doe</span></td>
														<td><span class="message-label label3">Password</span>
															<span class="title">Help, Can't Login</span> <span class="preview">- It's been 3 days I can't login to the site, I did receive admin email about</span></td>
														<td>&nbsp;</td>
														<td><span class="timestamp">09:22 AM</span></td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- end right main content, the messages -->
									</div>
								</div>

							</div>
							<!-- END INBOX -->

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