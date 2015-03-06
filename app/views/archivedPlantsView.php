@extends('layouts.homepagelayout') @section('homepage')
<div class="content">

    <!-- Main content -->
    <div class="container center">
        <div class="row">


            <div class="btn-group pull-right">
                <a class="btn btn-default active" id="list-view"><i class="fa fa-list"></i></a>
                <a class="btn btn-default" id="grid-view"><i class="fa fa-image"></i></a>
            </div>
        </div>
        <div class="row">
            <span class="table-header">
                <span class="col-sm-3 table-header">
                Current Plants
                </span>
            <span class="btn-group col-sm-6">
                <a class="btn btn-default disabled btn-curr"><i class="fa fa-arrow-circle-down"></i> Move to Archive</a>
                <a class="btn btn-default disabled btn-curr"><i class="fa fa-trash"></i> Delete</a>
                </span>
            </span>
        </div>
        <div class="row">
            <div class="grid-view hidden table-bordered-out col-sm-12">
                @foreach ($plants as $plant) @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() != null)
                <a href="plant/{{{$plant->ID}}}" class="col-xs-2 grid-element">
                    <div class="small-box bg-highlight">
                        <div class="inner">
                            <img src="img/img{{$plant->ID%2}}.jpg">
                        </div>
                        <div class="small-box-footer">
                            <p>{{{ $plant->Plant_Name }}}</p>
                            <p>{{{ $plant->Plant_Stage }}}</p>
                            <p>{{{ $plant->Date_Placed }}}</p>
                        </div>
                    </div>
                </a>
                @endif @endforeach
            </div>
            <div class="list-view col-sm-12">
                <table class="table table-bordered-out table-hover table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="currPlantSelectAll">
                            </th>
                            <th>Camera</th>
                            <th>Plant Name</th>
                            <!--<th></th>-->
                            <th>Date Last Phenotyped</th>
                            <th>Biomass (cm<sup>3</sup>)</th>
                            <th>Greenness (LCC)</th>
                            <th>Height (cm)</th>
                            <th>Tiller Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- plant values here; use data-url for navigating to plant phenotypic history menu; fa-pencil for edit modal -->
                        @foreach($plants as $plant) @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() != null)
                        <tr class="clickable-row" data-url="plant/{{{$plant->ID}}}">
                            <td>
                                <input type="checkbox" class="checkbox-curr-plant">
                            </td>
                            <td>@if(($camera = Camera::where('Current_Left_Plant_ID','=', $plant->ID)->first()) != null) {{{$camera->ID.'L'}}} @elseif(($camera = Camera::where('Current_Right_Plant_ID','=', $plant->ID)->first()) != null) {{{$camera->ID.'R'}}} @endif
                            </td>
                            <td>{{{$plant->Plant_Name}}}</td>
                            <!--<td><i class="fa fa-pencil fa-hidden" data-toggle="modal" data-target=".addplant"></i>
                            </td>-->
                            <?php $lastImage=Image::where( 'Plant_ID', $plant->ID)->orderBy('Date_Taken','desc')->first(); ?> @if($lastImage != null)
                            <?php $lastPheno=PhenotypicData::where( 'Image_ID', $lastImage->ID)->first();?>@if($lastPheno != null)
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
                            @else
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        @endif @endforeach
                        <tr data-toggle="modal" data-target=".addplant">
                            <td class="btn-addplant" colspan="8">+ Add Plant</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container center">
        <div class="row">
            <span class="table-header">
            <span class="col-sm-3 table-header">
            Archived Plants
            </span>
            <span class="btn-group col-sm-6">
            <a class="btn btn-default disabled btn-arch"><i class="fa fa-arrow-circle-up"></i> Move to Current</a>
            <a class="btn btn-default disabled btn-arch"><i class="fa fa-trash"></i> Delete</a>
            </span>
            </span>
        </div>
        <div class="row">
            <div class="grid-view hidden table-bordered-out">
                @foreach ($plants as $plant) @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() == null)
                <a href="plant/{{{$plant->ID}}}" class="col-xs-2 grid-element">
                    <div class="small-box bg-highlight">
                        <div class="inner">
                            <img src="img/img{{$plant->ID%2}}.jpg">
                        </div>
                        <div class="small-box-footer">
                            <p>{{{ $plant->Plant_Name }}}</p>
                            <p>{{{ $plant->Plant_Stage }}}</p>
                            <p>{{{ $plant->Date_Placed }}}</p>
                        </div>
                    </div>
                </a>
                @endif @endforeach
            </div>
            <div class="list-view col-sm-12">
                <table class="table table-bordered-out table-hover table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="archPlantSelectAll">
                            </th>
                            <th>Camera</th>
                            <th>Plant Name</th>
                            <th>Date Last Phenotyped</th>
                            <th>Biomass (cm<sup>3</sup>)</th>
                            <th>Greenness (LCC)</th>
                            <th>Height (cm)</th>
                            <th>Tiller Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plants as $plant) @if(Camera::where('Current_Left_Plant_ID','=', $plant->ID)->orWhere('Current_Right_Plant_ID','=', $plant->ID)->first() == null)
                        <tr class="clickable-row" data-url="plant/{{{$plant->ID}}}">
                            <td>
                                <input type="checkbox" class="archPlantRowSelect">
                            </td>
                            <td>
                            @if(($camera = Camera::where('Current_Left_Plant_ID','=', $plant->ID)->first()) != null) {{{$camera->ID.'L'}}} @elseif(($camera = Camera::where('Current_Right_Plant_ID','=', $plant->ID)->first()) != null) {{{$camera->ID.'R'}}} @endif
                            </td>
                            <td>{{{$plant->Plant_Name}}}</td>
                            <!-- <td><i class="fa fa-pencil fa-hidden" data-toggle="modal" data-target=".addplant"></i>
                            </td> -->
                            <?php $lastImage=Image::where( 'Plant_ID', $plant->ID)->orderBy('Date_Taken','desc')->first(); ?> @if($lastImage != null)
                            <?php $lastPheno=PhenotypicData::where( 'Image_ID', $lastImage->ID)->first();?>@if($lastPheno != null)
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
                            @else
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        @endif @endforeach
                        <tr href="#">
                            <td class="btn-viewmore" colspan="9">View More...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

@stop
