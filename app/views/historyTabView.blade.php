      <div class="tab-pane fade active in" id="history" aria-labelledby="history-tab">
		  <div class="history">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>Date Taken</th>
							<th>Biomass</th>
							<th>Greenness</th>
							<th>Height</th>
							<th>Tiller Count</th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($plant[1]); $i++)
							<tr>
								<td><a href="#imageModal" data-toggle="modal" name="plantView">{{ $plant[1][$i]['datetaken'] }}</a></td>
								<td>{{ $plant[1][$i]['biomass'] }}</td>
								<td>{{ $plant[1][$i]['greenness'] }}</td>
								<td>{{ $plant[1][$i]['height'] }}</td>
								<td>{{ $plant[1][$i]['tillercount'] }}</td>
							</tr>
						@endfor
					</tbody>
					</table>
			</div>
      </div>