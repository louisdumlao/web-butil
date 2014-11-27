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
                    {{ Form::open(array('id'=> 'addPlantModal', 'route' => 'addPlant', 'role' => 'form'))}}
                    <div class="modal-header">
                        <h3 class="modal-title">Add Plant</h3>
                    </div>
                    <div class="modal-body">
                        
                            <table class="plantinput">
                                <tbody>
                                    <tr>
                                        <td>Plant Name:</td>
                                        <td>
                                            <input type="text" name="Plant_Name" class="form-control input-medium" placeholder="Write plant name here...">
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Date Placed:</td>
                                        <td>
                                            <input type="text" name="Date_Placed" class="form-control input-medium">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Plant Stage:</td>
                                        <td>
                                            <div class="dropdown">
                                                <select class="btn btn-default dropdown-toggle" name="Plant_Stage" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                  <option value="Tillering">Tillering</option>
                                                  <option value="Mid-Tillering">Mid-Tillering</option>
                                                  <option value="Flowering">Flowering</option>
                                                </select>
                                                <!-- <button class="btn btn-default dropdown-toggle" name="Plant_Stage" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Tillering
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tillering</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mid-Tillering</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Flowering</a>
                                                </ul> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Camera:</td>
                                        <td>
                                            <div class="dropdown">
                                                <select class="btn btn-default dropdown-toggle" type="button" name="Camera_ID_Side" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                                  <option value="1L">1L</option>
                                                  <option value="1R">1R</option>
                                                  <option value="2L">2L</option>
                                                  <option value="2R">2R</option>
                                                  <option value="3L">3L</option>
                                                  <option value="3R">3R</option>
                                                </select>
                                                <!-- <button class="btn btn-default dropdown-toggle" type="button" name="Camera_ID_Side" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                                    Select Camera
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1L</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1R</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2L</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2R</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3L</a>
                                                    </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3R</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <!-- end add plant modal -->

        <!-- grid/list view control -->
        <div class="btn-group pull-right">
            <a class="btn btn-default" href="#" id="listview" class=""><i class="fa fa-list"></i></a>
            <a class="btn btn-default" href="#" id="gridview" class="active"><i class="fa fa-image"></i></a>
        </div>

        <!-- Main content -->
        <div class="container center">
            <span class="table-header">
            Current Plants
            <button type="button" class="btn btn-default disabled btn-curr"><i class="fa fa-arrow-circle-down"></i> Move</button>
            <button type="button" class="btn btn-default disabled btn-curr"><i class="fa fa-trash"></i> Delete</button>
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
                                <input type="checkbox" id="currPlantSelectAll">
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
                        @foreach($plants as $plant)
                            @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() != null)
                                <tr class="clickableList" data-url="plant/{{{$plant->ID}}}">
                                    <td>
                                        <input type="checkbox" class="currPlantRowSelect">
                                    </td>
                                    <td>
                                        @if(($camera = Camera::where('Current_Left_Plant_ID','=', $plant->ID)->first()) != null)
                                            {{{$camera->ID.'L'}}}
                                        @elseif(($camera = Camera::where('Current_Right_Plant_ID','=', $plant->ID)->first()) != null)
                                            {{{$camera->ID.'R'}}}
                                        @endif
                                    </td>
                                    <td>{{{$plant->Plant_Name}}}</td>
                                    <?php 
                                    $lastImage = Image::where('Plant_ID', $plant->ID)->orderBy('Date_Taken','desc')->first();
                                    ?>
                                    @if($lastImage != null)
                                    <?php $lastPheno = PhenotypicData::where('Image_ID', $lastImage->ID)->first();?>
                                    <td>{{{$lastImage->Date_Taken}}}</td>
                                    <td>{{{$lastPheno->Biomass}}}</td>
                                    <td>{{{$lastPheno->Greenness}}}</td>
                                    <td>{{{$lastPheno->Height}}}</td>
                                    <td>{{{$lastPheno->Tiller_Count}}}</td>
                                    @else
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    @endif
                                </tr>
                             @endif
                        @endforeach
                        <tr data-toggle="modal" data-target=".addplant">
                            <td class="btn-addplant" colspan="8">+ Add Plant</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
        <div class="container center">
            <span class="table-header">
            Archived Plants
            <button type="button" class="btn btn-default disabled btn-arch"><i class="fa fa-arrow-circle-up"></i> Move</button>
            <button type="button" class="btn btn-default disabled btn-arch"><i class="fa fa-trash"></i> Delete</button>
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
            <table class="table table-bordered table-hover table-condensed table-responsive">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="archPlantSelectAll">
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
                    @foreach($plants as $plant)
                        @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() == null)
                            <tr class="clickableList" data-url="plant/{{{$plant->ID}}}">
                                <td>
                                    <input type="checkbox" class="currPlantRowSelect">
                                </td>
                                <td>
                                    @if(($camera = Camera::where('Current_Left_Plant_ID','=', $plant->ID)->first()) != null)
                                        {{{$camera->ID.'L'}}}
                                    @elseif(($camera = Camera::where('Current_Right_Plant_ID','=', $plant->ID)->first()) != null)
                                        {{{$camera->ID.'R'}}}
                                    @endif
                                </td>
                                <td>{{{$plant->Plant_Name}}}</td>
                                <?php 
                                $lastImage = Image::where('Plant_ID', $plant->ID)->orderBy('Date_Taken','desc')->first();
                                ?>
                                @if($lastImage != null)
                                <?php $lastPheno = PhenotypicData::where('Image_ID', $lastImage->ID)->first();?>
                                <td>{{{$lastImage->Date_Taken}}}</td>
                                <td>{{{$lastPheno->Biomass}}}</td>
                                <td>{{{$lastPheno->Greenness}}}</td>
                                <td>{{{$lastPheno->Height}}}</td>
                                <td>{{{$lastPheno->Tiller_Count}}}</td>
                                @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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