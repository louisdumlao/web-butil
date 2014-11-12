@extends('layout')

@section('imageModal')
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModelLabel" aria-hidden="true">
	<div class="modal-dialog butil-modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class=image>
							{{ HTML::image($plant[1][0]['image'], 'Plant', array('id="plantImage" height = "510"'))}}		
						</div>
						<div class="view-choice">
							<p>
							<div class="btn-group">
								{{ Form::button('Normal', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Normal')")) }}
								{{ Form::button('Biomass', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Biomass')")) }}
								{{ Form::button('Greenness', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Greenness')")) }}
								{{ Form::button('Height', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'Height')")) }}
								{{ Form::button('Tillers', array('class'=>'btn btn-default btn-sm', 'onclick'=>"changeImage('C41234567890', 'TillerCount')")) }}
						  </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="butil-header">
								{{ Form::button('<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>', array('class'=>'close', 'data-dismiss'=>'modal')) }}
							</div>
						</div>
						<div class="row">
							<div class="butil-content">
								<h4><b>{{ $plant[0]['name'] }}</b></h4>
								<h6>{{ $plant[0]['dateplaced'] }}</h6>
								<h6>{{ $plant[1][0]['datetaken'] }}</h6>
								Plant stage: {{ $plant[0]['stage'] }}<br>
								Plant type: {{ $plant[0]['type'] }}<br>
								<h5><b>Phenotypic Traits</b></h5>
								Biomass: {{ $plant[1][0]['biomass'] }}<br>
								Height: {{ $plant[1][0]['height'] }}<br>
								Greenness: {{ $plant[1][0]['greenness'] }}<br>
								Tiller Count: {{$plant[1][0]['tillercount'] }}<br>
							</div>
						</div>
						<div class="row">
							<p>
							<div class="butil-comment">
								<h5><b>Comment</b>
									{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>') }}</h5>
								<div class="butil-comments">
									This is my comment.
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