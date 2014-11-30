<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0">
		<meta name="description" content="">
		<meta name="author" content="">
        <title>
            Butil
        </title>
 	

		<!--CSS are placed here -->
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/ionicons.min.css') }}
		{{ HTML::style('css/AdminLTE.css') }}
		{{ HTML::style('css/navbar.css') }}
		{{ HTML::style('css/homepage.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
        <!--{{ HTML::style('css/bootstrap-theme.css') }}-->
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
		@yield('homepage')

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
		{{ HTML::script('js/jquery-2.1.0.min.js') }}
		{{ HTML::script('js/icheck.min.js') }}
		{{ HTML::script('js/butilscript.js') }}
		{{ HTML::script('js/bootstrap-datepicker.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/AdminLTE/app.js') }}
<!--        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
		{{ HTML::script('js/AdminLTE/morris.js') }}

<script>
    
    $('input').iCheck();
        $('#listview').click(function () {
            $('.gridview').addClass("hidden");
            $('.listview').removeClass("hidden");
            $(this).addClass("active");
            $('#gridview').removeClass("active");
        });

        $('#gridview').click(function () {
            $('.listview').addClass("hidden");
            $('.gridview').removeClass("hidden");
            $(this).addClass("active");
            $('#listview').removeClass("active");
        });

         //clickable rows
        $('.clickable-row').click(function () {
            window.document.location = $(this).data('url');
        });

        $('.clickable-row').hover(function () {
            $(this).find('.fa-pencil').css('visibility', 'visible');
        });

        $('.clickable-row').mouseleave(function () {
            $(this).find('.fa-pencil').css('visibility', 'hidden');
        });
    
    $('.clickable-row .checkbox-curr-plant').click(function(e){
            e.stopPropagation(); 
        });
    
    $('.clickable-row .fa-pencil').click(function(e){
            e.stopPropagation();
        $('.clickable-row .fa-pencil').modal('toggle');
        });

        $('#currPlantSelectAll').click(function () {
            if ($(this).is(':checked')) {
                $('.checkbox-curr-plant').prop('checked', true);
            } else {
                $('.checkbox-curr-plant').prop('checked', false);
            }
        });

        $('#archPlantSelectAll').click(function () {
            if ($(this).is(':checked')) {
                $('.archPlantRowSelect').prop('checked', true);
            } else {
                $('.archPlantRowSelect').prop('checked', false);
            }
        });

        $('input[type=checkbox]').click(function () {
            var currCheck = $('input[class=checkbox-curr-plant]:checked').length > 0;
            var archCheck = $('input[class=archPlantRowSelect]:checked').length > 0;
            if (currCheck) {
                $('.btn-curr').removeClass("disabled");
            } else {
                $('.btn-curr').addClass("disabled");
            }
            if (archCheck) {
                $('.btn-arch').removeClass("disabled");
            } else {
                $('.btn-arch').addClass("disabled");

            }
        });
    </script>
   	
    </body>
</html>