@extends('homepagelayout')

@section('homepage')
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
                                    <input type="checkbox" class="checkbox-curr-plant">
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
                                    <input type="checkbox" class="checkbox-curr-plant">
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
            <a class="btn btn-default disabled btn-arch"><i class="fa fa-arrow-circle-up"></i>Move to Archive</a>
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

    
@stop