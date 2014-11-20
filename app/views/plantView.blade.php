@extends('layout')

@section('content')

	<div>
		<div class="plant-settings">
			<div class="dropdown">
				<button class="btn btn-default" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					<li role="presentation">
						<a role="menuitem" tabindex="-1" href="#">Edit</a>
					</li>
					<li role="presentation">
						<a role="menuitem" tabindex="-1" href="#">Delete</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="plant-details">
			<h3>{{ $plant[0]['name'] }}</h3>
			Date placed: {{ $plant[0]['dateplaced'] }}<br>
			Plant Stage: {{ $plant[0]['stage'] }}<br>
			Plant Type: {{ $plant[0]['type'] }}
			<br><br>
			
			<h4>Comment</h4>
			{{ $plant[0]['comments'] }}
		</div>
		<div class="history-graph">
			<ul class="nav nav-tabs" id="summaryTab">
				<li class="active"><a href="#history">History</a></li>
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
			