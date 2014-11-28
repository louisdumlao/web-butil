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
                            <span>Albert de Luna<i class="caret"></i></span>
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
                                    <tr>
                                        <td>Camera:</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Select Camera
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1L</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1R</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2L</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2R</a>
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

        <!-- end add plant modal -->

        <!-- grid/list view control -->
        <div class="btn-group pull-right">
            <a class="btn btn-default active" id="listview"><i class="fa fa-list"></i></a>
            <a class="btn btn-default" id="gridview"><i class="fa fa-image"></i></a>
        </div>

        <!-- Main content -->
        <div class="container center">
            <div class="row">
                <span class="table-header">
                <span class="col-sm-3">
                Current Plants
                </span>
                <span class="btn-group col-sm-6">
                <a class="btn btn-default disabled btn-curr"><i class="fa fa-arrow-circle-down"></i> Archive</a>
                <a class="btn btn-default disabled btn-curr"><i class="fa fa-trash"></i> Delete</a>
                </span>
                </span>
            </div>
            <div class="row">
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
                <div class="listview col-sm-12">
                    <table class="table table-bordered-out table-hover table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="currPlantSelectAll">
                                </th>
                                <th>Camera</th>
                                <th>Plant Name</th>
                                <th></th>
                                <th>Date Last Phenotyped</th>
                                <th>Biomass (cm3)</th>
                                <th>Greenness</th>
                                <th>Height</th>
                                <th>Tiller Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- plant values here; use data-url for navigating to plant phenotypic history menu; fa-pencil for edit modal -->
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="currPlantRowSelect">
                                </td>
                                <td>1L</td>
                                <td>IR64-IRS007-006</td>
                                <td><i class="fa fa-pencil fa-hidden" data-toggle="modal" data-target=".addplant"></i>
                                </td>
                                <td>2014-11-11</td>
                                <td>43</td>
                                <td>Between 3 and 4</td>
                                <td>40.63</td>
                                <td>1</td>
                            </tr>
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="currPlantRowSelect">
                                </td>
                                <td>1R</td>
                                <td>Sample Plant 5</td>
                                <td><i class="fa fa-pencil fa-hidden"></i>
                                </td>
                                <td>2014-10-18</td>
                                <td>45</td>
                                <td>3</td>
                                <td>51.12</td>
                                <td>17.40</td>
                            </tr>
                            <tr data-toggle="modal" data-target=".addplant">
                                <td class="btn-addplant" colspan="9">+ Add Plant</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container center">
            <div class="row">
                <span class="table-header">
            <span class="col-sm-3">
            Archived Plants
            </span>
                <span class="btn-group col-sm-6">
            <a class="btn btn-default disabled btn-arch"><i class="fa fa-arrow-circle-up"></i> Restore</a>
            <a class="btn btn-default disabled btn-arch"><i class="fa fa-trash"></i> Delete</a>
            </span>
                </span>
            </div>
            <div class="row">
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
                <div class="listview col-sm-12">
                    <table class="table table-bordered-out table-hover table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="archPlantSelectAll">
                                </th>
                                <th>Camera</th>
                                <th>Plant Name</th>
                                <th></th>
                                <th>Date Last Phenotyped</th>
                                <th>Biomass (cm3)</th>
                                <th>Greenness</th>
                                <th>Height</th>
                                <th>Tiller Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="archPlantRowSelect">
                                </td>
                                <td>1L</td>
                                <td>IR64-C-IRS001-001</td>
                                <td><i class="fa fa-pencil fa-hidden"></i>
                                </td>
                                <td>2014-08-02</td>
                                <td>24</td>
                                <td>Between 3 and 4</td>
                                <td>46.50</td>
                                <td>15.50</td>
                            </tr>
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="archPlantRowSelect">
                                </td>
                                <td>1R</td>
                                <td>Sample Plant 2</td>
                                <td><i class="fa fa-pencil fa-hidden"></i>
                                </td>

                                <td>2014-06-18</td>
                                <td>45</td>
                                <td>3</td>
                                <td>21.40</td>
                                <td>58.16</td>
                            </tr>
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="archPlantRowSelect">
                                </td>
                                <td>2L</td>
                                <td>Sample Plant 3</td>
                                <td><i class="fa fa-pencil fa-hidden"></i>
                                </td>

                                <td>2013-01-12</td>
                                <td>38</td>
                                <td>Between 2 and 3</td>
                                <td>61.24</td>
                                <td>16.32</td>
                            </tr>
                            <tr class="clickable-row" data-url="plant">
                                <td>
                                    <input type="checkbox" class="archPlantRowSelect">
                                </td>
                                <td>3R</td>
                                <td>Sample Plant 4</td>
                                <td><i class="fa fa-pencil fa-hidden"></i>
                                </td>
                                <td>2011-06-16</td>
                                <td>41.2</td>
                                <td>2</td>
                                <td>28.14</td>
                                <td>13.22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
        $('.clickable-row').click(function () {
            window.document.location = $(this).data('url');
        });

        $('.clickable-row').hover(function () {
            $(this).find('.fa-pencil').css('visibility', 'visible');
        });

        $('.clickable-row').mouseleave(function () {
            $(this).find('.fa-pencil').css('visibility', 'hidden');
        });

        $('#currPlantSelectAll').click(function () {
            if ($(this).is(':checked')) {
                $('.currPlantRowSelect').prop('checked', true);
            } else {
                $('.currPlantRowSelect').prop('checked', false);
            }
        });

        $('#archPlantSelectAll').click(function () {
            if ($(this).is(':checked')) {
                $('.archPlantRowSelect').prop('checked', true);
            } else {
                $('.archPlantRowSelect').prop('checked', false);
            }
        });

        $('input[type=checkbox]').click(function () {
            var currCheck = $('input[class=currPlantRowSelect]:checked').length > 0;
            var archCheck = $('input[class=archPlantRowSelect]:checked').length > 0;
            if (currCheck) {
                $('.btn-curr').removeClass("disabled");
            } else {
                $('.btn-curr').addClass("disabled");
            }
            if (archCheck) {
                $('.btn-arch').removeClass("disabled");
            } else {
                $('.btn-arch').addClass("disabled");

            }
        });
    </script>
</body>

</html>