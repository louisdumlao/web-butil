@extends('layouts.plantlayout')

@section('addPlantModal')
<div class="modal fade" id="addPlantModal" tabindex="-1" role="dialog" aria-labelledby="addPlantLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<h3>Add Plant</h3>
						{{ Form::open(array('url' => ' ', 'method' => 'post', 'class'=>'form-group')) }}
							{{ Form::label('name', 'Name')}}
							{{ Form::input('text', 'Name', null, ['class'=>'form-control']) }}
							{{ Form::label('datePlaced', 'Date Placed') }}
							<div>
								<input id="date-input" type="text" type="text" class="form-control">
							</div>
							{{ Form::label('plantStage', 'Plant Stage')}}
							{{ Form::input('text', 'Plant Stage', null, ['class'=>'form-control']) }}
							{{ Form::label('comment', 'Comment')}}
							<textarea class="form-control" rows="3" name="comment"></textarea>
							<p>
							{{ Form::button("Cancel", array('href'=>'', 'class'=>'btn btn-default', 'data-dismiss'=>'modal'))}}
							{{ Form::button("Save", array('href'=>'', 'class'=>'btn btn-primary'))}}
						{{ Form::close() }}							
								
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop