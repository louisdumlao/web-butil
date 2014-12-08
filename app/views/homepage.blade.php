@extends('layouts.homepagelayout')

@section('homepage')
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
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Camera:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select class="btn btn-default dropdown-toggle" type="button" name="Camera_ID_Side" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                                <option value="none">None</option>
                                              @foreach($cameras as $camera)
                                              <option value="{{{ $camera->ID }}}L">{{{ $camera->ID }}}L</option>
                                              <option value="{{{ $camera->ID }}}R">{{{ $camera->ID }}}R</option>
                                              @endforeach
                                            </select>
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
                            <tr class="clickable-row" data-url="plant/{{{$plant->ID}}}">
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
                        <tr class="clickable-row" data-url="plant/{{{$plant->ID}}}">
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

@stop