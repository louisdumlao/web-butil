      <div class="tab-pane fade active in" id="history" aria-labelledby="history-tab">
		  <div class="history list-view">
				<table class="table table-condensed table-bordered-out table-hover table-responsive butil-table-history">
					<thead>
						<tr>
							<th>Date Taken</th>
							<th>Plant Stage</th>
							<th>Biomass (cm<sup>3</sup>)</th>
							<th>Greenness</th>
							<th>Height (cm)</th>
							<th>Tiller Count</th>
						</tr>
					</thead>
					<tbody>
						@foreach($plant->images()->get() as $image)
							<tr class="clickable-row" data-target="#imageModal{{{$image->ID}}}" data-toggle="modal">
								<td>{{{ $image->Date_Taken }}}</td>
								<td>{{{ $image->Plant_Stage }}}</td>
								<?php $phenotypicData = PhenotypicData::where('Image_ID', $image->ID)->firstOrFail();?>
								<td>{{{ $phenotypicData->Biomass }}}</td>
								<td>{{{ $phenotypicData->Greenness }}}</td>
								<td>{{{ $phenotypicData->Height }}}</td>
								<td>{{{ $phenotypicData->Tiller_Count }}}</td>
							</tr>

						@endforeach
						
					</tbody>
					</table>
			</div>
      </div>