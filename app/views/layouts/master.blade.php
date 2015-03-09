<!DOCTYPE html>
<html>
    <head>
    @section('title')
        <title>
            {{{$title}}}
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-responsive.min.css') }}
        {{ HTML::style('css/chosen.css') }}
        {{ HTML::style('css/elfinder.min.css') }}
        {{ HTML::style('css/font-awesome.css') }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/jquery-migrate-1.2.1.min.js') }}
        {{ HTML::script('js/jquery-ui-1.10.2.custom.min.js') }}
        {{ HTML::script('js/jquery.ui.touch-punch.js') }}
        {{ HTML::script('js/modernizr.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/jquery.cookie.js') }}
        {{ HTML::script('js/fullcalendar.min.js') }}
        {{ HTML::script('js/jquery.dataTables.min.js') }}
        {{ HTML::script('js') }}

    </body>
</html>