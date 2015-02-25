@extends('layouts.plantlayout')

@section('imageModal')
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
							<p></p>
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
@stop