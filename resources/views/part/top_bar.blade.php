<div class="top-bar">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-md-2 logo">
                <a href="{{route('index')}}"><img src="{{asset('assets/img/kingadmin-logo-white.png')}}" alt="{{env('APP_NAME')}} Dashboard" /></a>
                <h1 class="sr-only">{{env('APP_NAME')}} Dashboard</h1>
            </div>
            <!-- end logo -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <!-- search box -->
                        <div id="tour-searchbox" class="input-group searchbox">
                            <input type="search" class="form-control" placeholder="enter keyword here...">
                            <span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
									</span>
                        </div>
                        <!-- end search box -->
                    </div>
                    <div class="col-md-9">
                        <div class="top-bar-right">
                            <!-- responsive menu bar icon -->
                            <a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
                            <!-- end responsive menu bar icon -->
                            <button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>
                            <button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i> <span class="badge element-bg-color-blue">New</span></button>
                            @include('part.notifications')
                            <!-- logged user and the menu -->
                            @include('part.logged_user')
                            <!-- end logged user and the menu -->
                        </div><!-- /top-bar-right -->
                    </div>
                </div><!-- /row -->
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>