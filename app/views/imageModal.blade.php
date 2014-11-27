@extends('layout')

@section('imageModal')
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModelLabel" aria-hidden="true">
	<div class="modal-dialog butil-modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-5">
						<div class=image>
							{{ HTML::image($plant[1][0]['image'], 'Plant', array('id="plantImage" height = "510"'))}}		
						</div>
						<div class="view-choice">
							<p>
							<div class="btn-group">
								<input type="image" src="/web-butil/public/assets/images/buttons/Normal.png" name="image" width="60" height="60">
								<input type="image" src="/web-butil/public/assets/images/buttons/Biomass.png" name="image" width="60" height="60">
								<input type="image" src="/web-butil/public/assets/images/buttons/Greenness.png" name="image" width="60" height="60">
								<input type="image" src="/web-butil/public/assets/images/buttons/Height.png" name="image" width="60" height="60">
								<input type="image" src="/web-butil/public/assets/images/buttons/Tiller.png" name="image" width="60" height="60">
								
								{{ Form::button('Normal', array('class'=>'btn btn-default btn-sm butil-viewopt butil-viewopt-normal', 'onclick'=>"changeImage('C41234567890', 'Normal')")) }}
								{{ Form::button('Biomass', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Biomass')")) }}
								{{ Form::button('Greenness', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Greenness')")) }}
								{{ Form::button('Height', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Height')")) }}
								{{ Form::button('Tillers', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'TillerCount')")) }}
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
								<h4><b>{{ $plant[0]['name'] }}</b></h4>
								<table class="table table-condensed butil-table-detail">
								<tbody>
									<tr>
										<td class="butil-table-detail-data"><b>Date Placed:</b></td>
										<td class="butil-table-detail-data">{{ $plant[0]['dateplaced'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Date Phenotyped:</b></td>
										<td class="butil-table-detail-data">{{ $plant[1][0]['datetaken'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Plant stage:</b></td>
										<td class="butil-table-detail-data">{{ $plant[0]['stage'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Biomass:</b></td>
										<td class="butil-table-detail-data">{{ $plant[1][0]['biomass'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Height:</b></td>
										<td class="butil-table-detail-data">{{ $plant[1][0]['height'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Greenness:</b></td>
										<td class="butil-table-detail-data">{{ $plant[1][0]['greenness'] }}</td>
									</tr>
									<tr>
										<td class="butil-table-detail-data"><b>Tiller Count:</b></td>
										<td class="butil-table-detail-data">{{ $plant[1][0]['tillercount'] }}</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>
						<div class="row butil-detail">
							<p>
							<div class="butil-comment">
								<h5><b>Comments</b>
									{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>') }}</h5>
								<div class="butil-comments">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus viverra lacus quis massa convallis pellentesque. Integer malesuada bibendum ornare. Quisque tincidunt rutrum ligula vitae rutrum. Pellentesque vehicula urna quis consequat fringilla. Cras vehicula scelerisque condimentum. Mauris consectetur diam sed ligula lobortis, et laoreet magna interdum.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop