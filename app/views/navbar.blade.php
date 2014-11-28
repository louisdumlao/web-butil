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
						<li class="footer"><a data-toggle="modal" data-target=".edit-appointment">Edit Capture Appointment</a></li>
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

<!-- temp appointment modal-->
        <div class="edit-appointment modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Add Plant</h3>
                    </div>
                    <div class="modal-body">
                        <form id="editPlantModal" method="POST">
                            <table class="plantinput">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            Set the next camera appointment date and frequency:</td>
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        2014
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        @for ($i = 2014; $i <= 2020; $i++)
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$i}}</a>
                                                        </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        1
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                       @for ($i = 1; $i <= 12; $i++)
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$i}}</a>
                                                        </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        1
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        @for ($i = 1; $i <= 30; $i++)
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$i}}</a>
                                                        </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Frequency
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Once</a>
                                                        </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Daily</a>
                                                        </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Weekly</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

@stop