@extends('layouts.plantlayout')

@section('content')

	<div>
		<div class="plant-settings">
			
		</div>

		<!--Image Modals-->
    	@foreach($plant->images()->get() as $image)
			<div class="modal fade" id="imageModal{{{$image->ID}}}" tabindex="-1" role="dialog" aria-labelledby="imageModelLabel" aria-hidden="true">
				<div class="modal-dialog butil-modal-lg">
					<div class="modal-content">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-5">
									<div class=image>
										{{ HTML::image($image->Raw_Path, 'Plant', array('id' => 'plantImage'.$image->ID, 'height = 510')) }}		
									</div>
									<div class="view-choice">
										<p>
										<div class="btn-group">
											<input class="butil-viewopt-button" type="image" src="/web-butil/public/assets/images/buttons/Normal3.png" name="image" width="60" height="60" onclick="changeImage('{{{$image->Raw_Path}}}', '{{{'plantImage'.$image->ID}}}')">
											<input type="image" src="/web-butil/public/assets/images/buttons/Biomass3.png" name="image" width="60" height="60" onclick="changeImage('{{{$image->Processed_Biomass_Path}}}', '{{{'plantImage'.$image->ID}}}')">
											<input type="image" src="/web-butil/public/assets/images/buttons/Greenness2.png" name="image" width="60" height="60" onclick="changeImage('{{{$image->Processed_Greenness_Path}}}', '{{{'plantImage'.$image->ID}}}')">
											<input type="image" src="/web-butil/public/assets/images/buttons/Height2.png" name="image" width="60" height="60" onclick="changeImage('{{{$image->Processed_Height_Path}}}', '{{{'plantImage'.$image->ID}}}')">
											<input type="image" src="/web-butil/public/assets/images/buttons/Tiller2.png" name="image" width="60" height="60" onclick="changeImage('{{{$image->Processed_Tiller_Path}}}', '{{{'plantImage'.$image->ID}}}')">

									  </div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="row">
										<div class="butil-header">
												{{ Form::button('<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>', array('class'=>'close', 'data-dismiss'=>'modal')) }}
										</div>
									</div>
									<div class="row butil-detail">
										<div class="butil-content">
											<h4><b>{{ $image->plant->Plant_Name }}</b></h4>
											<table class="table table-condensed butil-table-detail">
											<tbody>
												<tr>
													<td class="butil-table-detail-data"><b>Date Placed:</b></td>
													<td class="butil-table-detail-data">{{ $image->plant->Date_Placed }}</td>
												</tr>
												<tr>
													<td class="butil-table-detail-data"><b>Date Phenotyped:</b></td>
													<td class="butil-table-detail-data">{{ $image->Date_Taken }}</td>
												</tr>
												<tr>
													<td class="butil-table-detail-data"><b>Plant stage:</b></td>
													<td class="butil-table-detail-data"><div class="dropdown">
			                                                <button class="btn btn-default dropdown-toggle butil-table-detail-data-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			                                                    {{{$image->Plant_Stage}}}
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
													<td class="butil-table-detail-data"><b>Biomass:</b></td>
													<td class="butil-table-detail-data">{{{ $image->phenotypicData->Biomass }}}</td>
												</tr>
												<tr>
													<td class="butil-table-detail-data"><b>Height:</b></td>
													<td class="butil-table-detail-data">{{{ $image->phenotypicData->Height }}}</td>
												</tr>
												<tr>
													<td class="butil-table-detail-data"><b>Greenness:</b></td>
													<td class="butil-table-detail-data">{{{ $image->phenotypicData->Greenness }}}</td>
												</tr>
												<tr>
													<td class="butil-table-detail-data"><b>Tiller Count:</b></td>
													<td class="butil-table-detail-data">{{{ $image->phenotypicData->Tiller_Count }}}</td>
												</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="row butil-detail">
										<p>
										<div class="butil-comment">
											<h5><b>Comments</b>
												<i class="fa fa-pencil butil-edit-plant" data-toggle="modal" data-target=".editCommentModal"></i></h5>
											<div class="butil-comments">
												{{{$image->Comments}}}
											</div>
											<div class="editCommentModal modal fade">
										        <div class="modal-dialog">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <h3 class="modal-title">Comment</h3>
										                </div>
										                <div class="modal-body">
										                    <form id="editPlantModal" method="POST">
																<textarea id="" class="form-control" rows="5" placeholder="Write comment here...">{{{$image->Comments}}}</textarea>
										                    </form>
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										                    <button type="button" class="btn btn-primary">Save</button>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
    	<!--End of Image Modals-->

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
			