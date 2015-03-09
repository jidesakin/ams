<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>
	    @yield('title')
	</title>
	<meta name="description" content="Dashboard | Asset Management System" />
	<meta name="author" content="Jide Owosakin" />
	<meta name="keyword" content="Dashboard, ams, Asset, Management" />
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	{{ HTML::style("css/bootstrap.min.css") }}
	{{ HTML::style("css/bootstrap-responsive.min.css") }}
	{{ HTML::style("css/style.min.css") }}
	{{ HTML::style("css/style-responsive.min.css") }}
	{{ HTML::style("css/retina.css") }}
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	{{ HTML::script("http://html5shim.googlecode.com/svn/trunk/html5.js") }}
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="ico/favicon.png" />
	<!-- end: Favicon and Touch Icons -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>
				<div class="row-fluid">
				<a class="brand span2" href="index.html"><span>ams</span></a>
				</div>
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
								</li>
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li>
									<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                            	</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressBlue">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressRed">32</div>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressGreen">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressPink">80</div>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Create New Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-plus"></i><span class="title"> Create New</span>
							</a>
							<ul class="dropdown-menu">
                                <li class="dropdown-menu-title">

								</li>
								<li><a href="{{URL::to('asset/new')}}"><i class="icon-barcode"></i><span class="hidden-tablet"> Asset</span></a></li>
								<li><a href="{{URL::to('license/new')}}"><i class="icon-certificate"></i><span class="hidden-tablet"> License</span></a></li>
								<li><a href="{{URL::to('user/new')}}"><i class="icon-user"></i><span class="hidden-tablet"> User</span></a></li>

							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="avatar">
								    {{ HTML::image("".Session::get('user')->profile_pic_url."", 'Avatar') }}
								</div>
								<div class="user">
									<span class="hello">Welcome!</span>
									@if(Session::has('user'))
									<span class="name">{{Session::get('user')->firstname.' '. Session::get('user')->lastname}}</span>
									@endif
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">

								</li>
								<li><a href="{{ URL::to('profile') }}"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
								<li><a href="{{ URL::to('logout') }}"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">

				<div class="row-fluid actions">

					<input type="text" class="search span12" placeholder="..." />

				</div>

				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('dashboard')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="#" class="dropmenu"><i class="icon-barcode"></i><span class="hidden-tablet"> Assets</span><span class="label">7</span></a>
						    <ul>
                        		<li><a class="submenu" href="{{URL::to('assets/deployed')}}"><i class="icon-double-angle-up"></i><span class="hidden-tablet">Deployed</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/ready')}}"><i class="icon-angle-up"></i><span class="hidden-tablet">Ready to deploy</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/pending')}}"><i class="icon-asterisk"></i><span class="hidden-tablet"> Pending</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/undeployable')}}"><i class="icon-bug"></i><span class="hidden-tablet">Un-deployable</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/archived')}}"><i class="icon-archive"></i><span class="hidden-tablet">Archived</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/requestable')}}"><i class="icon-angle-right"></i><span class="hidden-tablet">Requestable</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/watching')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">Watching</span></a></li>
                                <li><a class="submenu" href="{{URL::to('assets/all')}}"><i class="icon-list"></i><span class="hidden-tablet">All</span></a></li>
                            </ul>
						</li>
						<li><a href="{{URL::to('accessories')}}"><i class="icon-keyboard"></i><span class="hidden-tablet">Accessories</span></a></li>
						<li><a href="{{URL::to('licenses')}}"><i class="icon-certificate"></i><span class="hidden-tablet"> Licenses</span></a></li>
						<li>
						    <a href="#" class="dropmenu"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Reports</span><span class="label">4</span></a>
						    <ul>
                                <li><a class="submenu" href="{{URL::to('report/depreciation')}}"><i class="icon-double-angle-down"></i><span class="hidden-tablet"> Depreciation Report</span></a></li>
                            	<li><a class="submenu" href="{{URL::to('report/license')}}"><i class="icon-certificate"></i><span class="hidden-tablet"> License Report</span></a></li>
                            	<li><a class="submenu" href="{{URL::to('report/asset')}}"><i class="icon-barcode"></i><span class="hidden-tablet"> Asset Report</span></a></li>
                            	<li><a class="submenu" href="{{URL::to('report/user')}}"><i class="icon-adjust"></i><span class="hidden-tablet"> Custom Asset Report</span></a></li>
                            </ul>
						</li>
						<li>
						    <a href="#" class="dropmenu"><i class="icon-group"></i><span class="hidden-tablet"> People</span><span class="label">2</span></a>
						    <ul>
                                <li><a class="submenu" href="{{URL::to('groups')}}"><i class="icon-group"></i><span class="hidden-tablet"> Groups</span></a></li>
                                <li><a class="submenu" href="{{URL::to('users')}}"><i class="icon-user"></i><span class="hidden-tablet"> Users</span></a></li>
                            </ul>
						</li>


					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<!-- start: Content -->
			<div id="content" class="span10">


			<div class="row-fluid">
                @yield('row_1')

			</div>

			<div class="row-fluid">

                @yield('row_2')


			</div>

			<div class="row-fluid">


			</div>

			<div class="row-fluid">



			</div>

			<div class="row-fluid">


			</div>

			<div class="row-fluid">


			</div>



			</div>
			<!-- end: Content -->
			</div>



		<div class="clearfix"></div>

		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2015 <a href="http://local.ams.io" alt="Asset Management System">Asset Management System</a></span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://local.ams.io" alt="DynamicLabs">DynamicLabs</a></span>
			</p>

		</footer>

	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	{{ HTML::script('js/jquery-migrate-1.2.1.min.js') }}
	{{ HTML::script('js/jquery-ui-1.10.3.custom.min.js') }}
	{{ HTML::script('js/jquery.ui.touch-punch.js') }}
	{{ HTML::script('js/modernizr.js') }}
	{{ HTML::script('js/bootstrap.min.js') }} 
	{{ HTML::script('js/jquery.cookie.js') }} 
	{{ HTML::script('js/fullcalendar.min.js') }} 
	{{ HTML::script('js/jquery.dataTables.min.js') }} 
	{{ HTML::script('js/excanvas.js') }} 
	{{ HTML::script('js/jquery.flot.js') }} 
	{{ HTML::script('js/jquery.flot.pie.js') }} 
	{{ HTML::script('js/jquery.flot.stack.js') }}
	{{ HTML::script('js/jquery.flot.resize.min.js') }} 
	{{ HTML::script('js/jquery.flot.time.js') }} 
	{{ HTML::script('js/jquery.chosen.min.js') }} 
	{{ HTML::script('js/jquery.flot.resize.min.js') }} 
	{{ HTML::script("js/jquery.chosen.min.js") }}
		{{ HTML::script("js/jquery.uniform.min.js") }}
		{{ HTML::script("js/jquery.cleditor.min.js") }}
		{{ HTML::script("js/jquery.noty.js") }}
		{{ HTML::script("js/jquery.elfinder.min.js") }}
		{{ HTML::script("js/jquery.raty.min.js") }}
		{{ HTML::script("js/jquery.iphone.toggle.js") }}
		{{ HTML::script("js/jquery.uploadify-3.1.min.js") }}
		{{ HTML::script("js/jquery.gritter.min.js") }}
		{{ HTML::script("js/jquery.imagesloaded.js") }}
		{{ HTML::script("js/jquery.masonry.min.js") }}
		{{ HTML::script("js/jquery.knob.modified.js") }}
		{{ HTML::script("js/jquery.sparkline.min.js") }}
		{{ HTML::script("js/counter.min.js") }}
		{{ HTML::script("js/raphael.2.1.0.min.js") }}
	{{ HTML::script("js/justgage.1.0.1.min.js") }}
		{{ HTML::script("js/jquery.autosize.min.js") }}
		{{ HTML::script("js/retina.js") }}
		{{ HTML::script("js/jquery.placeholder.min.js") }}
		{{ HTML::script("js/wizard.min.js") }}
		{{ HTML::script("js/core.min.js") }}
		{{ HTML::script("js/charts.min.js") }}
		{{ HTML::script("js/custom.min.js") }}
	<!-- end: JavaScript-->

</body>
</html>