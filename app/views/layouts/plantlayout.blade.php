<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0">
		<meta name="description" content="">
		<meta name="author" content="">
        <title>
            @section('title')
            Plant View
            @show
        </title>
 	

		<!--CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/ionicons.min.css') }}
		{{ HTML::style('css/AdminLTE.css') }}
		{{ HTML::style('css/navbar.css') }}
		{{ HTML::style('css/homepage.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::style('css/butilstyle.css') }}
		<!--{{ HTML::style('css/datepicker.css') }}
		{{ HTML::style('css/datepicker3.css') }}-->
<!--		
        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>-->
    </head>

    <body class="skin-blue">

		@yield('navbar')       
        <div class="container">
			<!-- Content -->
			@yield('settings')
			@yield('content')
			
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
		{{ HTML::script('js/jquery-2.1.0.min.js') }}
		{{ HTML::script('js/butilscript.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/bootstrap-datepicker.js') }}
		{{ HTML::script('js/AdminLTE/app.js') }}
        {{ HTML::script('js/raphael.js') }}
		{{ HTML::script('js/AdminLTE/morris.js') }}

		<script type="text/javascript">
	$(function() {
		"use strict";

		// LINE CHART
		var line = new Morris.Line({
			element: 'line-chart',
			resize: true,
			data: [
				{y: '2011 Q1', item1: 2666},
				{y: '2011 Q2', item1: 2778},
				{y: '2011 Q3', item1: 4912},
				{y: '2011 Q4', item1: 3767},
				{y: '2012 Q1', item1: 6810},
				{y: '2012 Q2', item1: 5670},
				{y: '2012 Q3', item1: 4820},
				{y: '2012 Q4', item1: 15073},
				{y: '2013 Q1', item1: 10687},
				{y: '2013 Q2', item1: 8432}
			],
			xkey: 'y',
			ykeys: ['item1'],
			labels: ['Item 1'],
			lineColors: ['#3c8dbc'],
			hideHover: 'auto'
		});
		return line;
	});
</script>

   	
    </body>
</html>