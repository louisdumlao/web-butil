@extends('layouts.plantlayout')

@section('content')

	<div>
		<div class="plant-settings">
			
		</div>
		<div class="plant-details">
			<h3>
				<span>
					{{{ $plant->Plant_Name }}}
					<i class="fa fa-pencil butil-edit-plant" data-toggle="modal" data-target=".editPlantModal"></i>
					
					<!-- edit plant modal -->

					    <div class="editPlantModal modal fade">
					        <div class="modal-dialog">
					            <div class="modal-content">
					                {{ Form::open(array('id'=> 'editPlantModal', 'route' => array('editPlant', $plant->ID), 'role' => 'form'))}}
					                <div class="modal-header">
					                    <h3 class="modal-title">Edit Plant</h3>
					                </div>
					                <div class="modal-body">
					                    
					                        <table class="plantinput">
					                            <tbody>
					                                <tr>
					                                    <td>Plant Name:</td>
					                                    <td>
					                                        <input type="text" name="Plant_Name" class="form-control input-medium" placeholder="Write plant name here..." value="{{{ $plant->Plant_Name }}}">
					                                    </td>
					                                </tr>
					                                <tr>

					                                    <td>Date Placed:</td>
					                                    <td>
					                                        <input type="text" name="Date_Placed" class="form-control input-medium" value="{{{ $plant->Date_Placed }}}">
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        Plant Stage:</td>
					                                    <td>
					                                        <div class="dropdown">
					                                            <select class="btn btn-default dropdown-toggle" name="Plant_Stage" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					                                              <option value="Tillering" @if($plant->Plant_Stage == 'Tillering') selected="selected" @endif >Tillering</option>
					                                              <option value="Mid-Tillering" @if($plant->Plant_Stage == 'Mid-Tillering') selected="selected" @endif >Mid-Tillering</option>
					                                              <option value="Flowering" @if($plant->Plant_Stage == 'Flowering') selected="selected" @endif >Flowering</option>
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
					                                              <option value="{{{ $camera->ID }}}L" @if($camera->Current_Left_Plant_ID == $plant->ID) selected="selected" @endif  >{{{ $camera->ID }}}L</option>
					                                              <option value="{{{ $camera->ID }}}R" @if($camera->Current_Right_Plant_ID == $plant->ID) selected="selected" @endif >{{{ $camera->ID }}}R</option>
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
					                    <button type="submit" class="btn btn-primary">Edit</button>
					                </div>
					                {{ Form::close() }}
					            </div>
					        </div>
					    </div>

					<!-- end edit plant modal -->

				</span>
			</h3>
			Date placed: {{{ $plant->Date_Placed }}}<br>
			Plant Stage: {{{ $plant->Plant_Stage }}}<br>
			<br>
			<br>
		</div>
		<div class="history-graph">
			<ul class="nav nav-tabs" id="summaryTab">
				<li class="active"><a href="#history">Table</a></li>
				<li><a href="#graph">Graph</a></li>
			</ul>

			<div id='content' class="tab-content">
				@include('historyTabView')
				@include('graphTabView')
			</div>    
			
			
			<div class="graph"></div>
		</div>
	</div>
	
@stop
			