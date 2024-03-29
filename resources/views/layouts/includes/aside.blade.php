<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0; background-color:#c70022;">
			<a href="{{ url('/home') }}" class="" style=""><i>
				<img src="{{ asset('jubilee-logo.svg') }}" width="50%"/>
			</i>
			 <span style="color:white;">({{env('APP_NAME')}})</span>
			</a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="{{ asset('theme/images/user.png') }}" alt="User" class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Welcome,</span>
				<h2>{{ Auth::user()->name }}</h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

				
			<div class="menu_section">
				<h3>&nbsp;</h3>
				<br />
				<ul class="nav side-menu">
					<li><a href="{{ url('/sms') }}"><i class="fa fa-send"></i> Messages </a></li>
				</ul>
			</div>
		
			</div>
			<!-- /sidebar menu -->

			<!-- /menu footer buttons -->
			<div class="sidebar-footer hidden-small">
				<a data-toggle="tooltip" data-placement="top" title="Settings">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="FullScreen">
					<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Lock">
					<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Logout">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				</a>
			</div>
			<!-- /menu footer buttons -->
		</div>
	</div>