ampp@extends('layout')

@section('settings')
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="settingsLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<h3>Settings</h3>
						{{ Form::open(array('url' => ' ', 'method' => 'post', 'class'=>'form-horizontal', 'role'=>'form')) }}
							<h4>{{ Form::label('captureAppointment', 'Capture Appointment')}}</h4>
							<div class="form-group">
								<div class="col-sm-2">
									{{ Form::label('date', 'Date')}}
								</div>
								<div class="col-sm-10">
									<input id="date-input" type="text" type="text" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									{{ Form::label('time', 'Time')}}
								</div>
								<div class="col-sm-10">
									{{ Form::input('text', "Time", null, ['class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									{{ Form::label('every', 'Every')}}
								</div>
								<div class="col-sm-4">
									{{ Form::input('text', "interval", null, ['class'=>'form-control']) }}
								</div>
								<div class="col-sm-4">
									<select class="form-control">
										<option>Once</option>
										<option>Days</option>
										<option>Weeks</option>
									</select>
								</div>
							</div>
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