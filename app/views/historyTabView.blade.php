      <div class="tab-pane fade active in" id="history" aria-labelledby="history-tab">
		  <div class="history">
				<table class="table table-condensed butil-table-history">
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
							<tr>
								<td><a href="#imageModal{{{$image->ID}}}" data-toggle="modal" name="plantView">{{{ $image->Date_Taken }}}</a></td>
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