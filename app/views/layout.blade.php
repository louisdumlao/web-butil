<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Plant View
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <!--CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::style('css/butilstyle.css') }}
		{{ HTML::style('css/datepicker.css') }}
		{{ HTML::style('css/datepicker3.css') }}
		
        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">Butil</a>
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('') }}}">Home</a></li>
						<li><a data-toggle="modal" href="#settings">Settings</a></li>
						<li><a data-toggle="modal" href="#addPlantModal">Add Plant</a></li>
						<li><a href="{{{ URL::to('logout') }}}">Logout</a></li>
                    </ul> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">
			<!-- Content -->
			@yield('settings')
			@yield('addPlantModal')
			@yield('content')
			@yield('imageModal')
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/butilscript.js') }}
		{{ HTML::script('js/bootstrap-datepicker.js') }}

    </body>
</html>