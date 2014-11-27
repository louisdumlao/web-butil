@extends('layout')

@section('navbar')
<header class="header">
	<a href={{ URL::to('') }} class="logo">
		<!-- Add the class icon to your logo image or logo icon to add the margining -->
		Butil
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<div class="navbar-right">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<!-- Notification buttons go here -->
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown capture-appointment-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span>
							<i class="glyphicon glyphicon-camera"></i>
							October 11, 2014
							11:30 PM
						</span>
						
					</a>
					<ul class="dropdown-menu">
						<li class="header">Next Capture Appointment</li>
						<li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
								<li><!-- start message -->
									<a href="#">
										<h4>Saturday,</h4>
										<h4>October 11, 2014</h4>
										<h4>11:30<small>PM</small></h4>
										Repeats every 6 days.
									</a>
								</li><!-- end message -->
							</ul>
						</li>
						<li class="footer"><a href="#">Edit Capture Appointment</a></li>
					</ul>
				</li>
				</li>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="glyphicon glyphicon-user"></i>
						<span>Guy Dude <i class="caret"></i></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header bg-light-blue">
							<img src="img/img1.jpg" class="img-circle" alt="User Image" />
							<p>
								Guy Dude - Web Developer
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="col-xs-4 text-center">
								<a href="#">Followers</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Sales</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Friends</a>
							</div>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>

@stop