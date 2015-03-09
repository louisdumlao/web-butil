@extends('layouts.plantlayout') @section('navbar')
<header class="header">
    <a href={{ URL::to( '') }} class="logo">
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
                            <?php date_default_timezone_set('Asia/Taipei');?>
                            {{{ date("F j, Y h:i A", strtotime("now")) }}}
						</span>

                    </a>
                    <ul class="dropdown-menu">
                        <!-- NOTES: add message if there are no scheduled appointments yet
                             Implementation does not work on other pages -->
                        <li>
                            <h4 class="col-xs-12">Capture Appointment</h4>
                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                @foreach($camera_appointments as $cameraAppointment)
                                <li>
                                    <!-- start message -->
                                    <!--
                                    @if(is_null($cameraAppointment))
                                    There are no camera appointments yet.
                                    @else
                                    -->
                                    <a href="#">
                                        <h4>{{{ date("l,", strtotime($cameraAppointment->Date_Taken)) }}}</h4>
                                        <h4>{{{ date("F j, Y", strtotime($cameraAppointment->Date_Taken)) }}}</h4>
                                        <h4>{{{ date("h:i:s", strtotime($cameraAppointment->Date_Taken)) }}}<small>{{{ date("A", strtotime($cameraAppointment->Date_Taken)) }}}</small></h4>
                                        @if($cameraAppointment->Interval == 'Daily') Repeats Daily @endif @if($cameraAppointment->Interval == 'Weekly') Repeats Weekly @endif
                                    </a>
                                </li>
                                @endif
                                <!-- end message -->
                                @endforeach
                            </ul>
                        </li>
                        <li class="footer"><a data-toggle="modal" data-target=".edit-appointment">Add Capture Appointment</a>
                        </li>
                        <li class="footer"><a data-toggle="modal" data-target=".add-camera">Add New Camera</a>
                        </li>
                    </ul>
                </li>
                </li>
                <!--<li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Albert de Luna<i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header bg-light-blue">
                            <img src="img/img1.jpg" class="img-circle" alt="User Image" />
                            <p>
                                Guy Dude - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
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
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </div>

    </nav>
</header>

<!-- temp appointment modal-->
<div class="edit-appointment modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Capture Appointment</h3>
            </div>
            <div class="modal-body">
                {{ Form::open(array('id'=> 'addAppointmentModal', 'route' => 'addAppointment', 'role' => 'form'))}}
                <table class="plantinput">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                Set the next camera appointment date and frequency:
                            </td>
                            <tr>
                                <tr>
                                    <td>Date Placed:</td>
                                    <td>
                                        <input type="text" name="Date_Taken" class="form-control input-medium">(MM/DD/YYYY HH:mm:ss)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Interval:</td>
                                    <td>
                                        <select class="btn btn-default dropdown-toggle" name="Interval" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            <option value="Once">Once</option>
                                            <option value="Daily">Daily</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </td>
                                </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();" class="btn btn-primary">Add</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- add camera modal -->
<div class="add-camera modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add A New Camera</h3>
            </div>
            <div class="modal-body">
                {{ Form::open(array('id'=> 'addCameraModal', 'route' => 'addCamera', 'role' => 'form'))}}
                <table class="plantinput">
                    <tbody>
                        <tr>
                            <td>Username:</td>
                            <td>
                                <input type="text" name="Camera_Username" class="form-control input-medium">
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="password" name="Camera_Password" class="form-control input-medium">
                            </td>
                        </tr>
                        <tr>
                            <td>IP Address</td>
                            <td>
                                <input type="text" name="IP_Address" class="form-control input-medium">(ex. 192.168.1.1)
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();" class="btn btn-primary">Add</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@stop