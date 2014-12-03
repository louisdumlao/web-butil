@extends('layout')

@section('content')

	<div>
		<div class="plant-settings">
			
		</div>
		<div class="plant-details">
			<h3>
				<span>
					{{ $plant[0]['name'] }}
					<i class="fa fa-pencil butil-edit-plant" data-toggle="modal" data-target=".editPlantModal"></i>
					@include('editPlantModal')
				</span>
			</h3>
			Date placed: {{ $plant[0]['dateplaced'] }}<br>
			Plant Stage: {{ $plant[0]['stage'] }}<br>
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
			