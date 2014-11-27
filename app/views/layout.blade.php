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
			@yield('addPlantModal')
			@yield('content')
			@yield('imageModal')
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
		{{ HTML::script('js/butilscript.js') }}
		{{ HTML::script('js/bootstrap-datepicker.js') }}
		{{ HTML::script('js/jquery-2.1.0.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
   	
    </body>
</html>