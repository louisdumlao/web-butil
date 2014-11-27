<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!--Custom CSS-->
    <link href="css/AdminLTE.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">


    <!-- jQuery 2.0.2 -->
    <script src="js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->

    <title>Butil</title>
</head>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="#" class="logo">
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
    <div class="content">

        <!-- add plant modal -->

        <div class="addplant modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Add Plant</h3>
                    </div>
                    <div class="modal-body">
                        <form id="addPlantModal" method="POST">
                            <table class="plantinput">
                                <tbody>
                                    <tr>
                                        <td>Plant Name:</td>
                                        <td>
                                            <input type="text" id="" class="form-control input-medium" placeholder="Write plant name here...">
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Date Placed:</td>
                                        <td>
                                            <input type="text" id="" class="form-control input-medium">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Plant Stage:</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Tillering
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tillering</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mid-Tillering</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Flowering</a>
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

        <!-- end add plant modal -->

        <!-- grid/list view control -->
        <div class="btn-group pull-right">
            <a class="btn btn-default" href="#" id="listview" class=""><i class="fa fa-list"></i></a>
            <a class="btn btn-default" href="#" id="gridview" class="active"><i class="fa fa-square"></i></a>
        </div>

        <!-- Main content -->
        <div class="container center">
            <span class="table-header">
            Current Plants
            <button type="button" class="btn btn-default disabled"><i class="fa fa-arrow-circle-right"></i> Move</button>
            <button type="button" class="btn btn-default disabled"><i class="fa fa-trash"></i> Delete</button>
            </span>
            <div class="gridview hidden">
                <script>
                    for (i = 1; i <= 6; i++) {
                        document.write('<a href="#" class="col-xs-3">')
                        document.write('<div class="small-box bg-highlight">')
                        document.write('<div class="inner">')
                        document.write('<img src="img/img' + i % 2 + '.jpg">')
                        document.write('</div>')
                        document.write('<div class="small-box-footer"');
                        document.write('<p>Plant ' + i + '</p>');
                        document.write('<p>Mid-Tillering</p>');
                        document.write('<p>Plant Type</p>');
                        document.write('</div>');
                        document.write('</div>');
                        document.write('</a>');
                    }
                </script>
            </div>
            <div class="listview">
                <table class="table table-bordered table-hover table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="addSelectAll">
                            </th>
                            <th>Camera</th>
                            <th>Plant Name</th>
                            <th>Date Last Phenotyped</th>
                            <th>Biomass (cm3)</th>
                            <th>Greenness</th>
                            <th>Height</th>
                            <th>Tiller Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickableList" data-url="plant">
                            <td>
                                <input type="checkbox" class="addRowSelect">
                            </td>
                            <td>1L</td>
                            <td>IR64-IRS007-006</td>
                            <td>2014-11-11</td>
                            <td>43</td>
                            <td>Between 3 and 4</td>
                            <td>40.63</td>
                            <td>1</td>
                        </tr>
                        <tr class="clickableList" data-url="plant">
                            <td>
                                <input type="checkbox" class="addRowSelect">
                            </td>
                            <td>1R</td>
                            <td>Sample Plant 5</td>
                            <td>2014-10-18</td>
                            <td>45</td>
                            <td>3</td>
                            <td>51.12</td>
                            <td>17.40</td>
                        </tr>
                        <tr data-toggle="modal" data-target=".addplant">
                            <td class="btn-addplant" colspan="8">+ Add Plant</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
        <div class="container center">
            <h3>Archived Plants</h3>
            <div class="gridview hidden">
                <script>
                    for (i = 1; i <= 6; i++) {
                        document.write('<a href="#" class="col-xs-3">')
                        document.write('<div class="small-box bg-highlight">')
                        document.write('<div class="inner">')
                        document.write('<img src="img/img' + i % 2 + '.jpg">')
                        document.write('</div>')
                        document.write('<div class="small-box-footer"');
                        document.write('<p>Plant ' + i + '</p>');
                        document.write('<p>Mid-Tillering</p>');
                        document.write('<p>Plant Type</p>');
                        document.write('</div>');
                        document.write('</div>');
                        document.write('</a>');
                    }
                </script>
            </div>

        </div>
    </div>
    <!-- ./wrapper -->

    <script>
        $('#listview').click(function () {
            $('.gridview').addClass("hidden");
            $('.listview').removeClass("hidden");
            $(this).addClass("active");
            $('#gridview').removeClass("active");
        });

        $('#gridview').click(function () {
            $('.listview').addClass("hidden");
            $('.gridview').removeClass("hidden");
            $(this).addClass("active");
            $('#listview').removeClass("active");
        });

         //clickable rows
        $('.clickableList').click(function () {
            window.document.location = $(this).data('url');
        });

        $('#addSelectAll').click(function () {
            if ($(this).is(':checked')) {
                $('.addRowSelect').prop('checked', true);
            } else {
                $('.addRowSelect').prop('checked', false);
            }
        });
    </script>
</body>

</html>