<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TBM</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    </head>

    <body>
    	<head>
			<div class="container">
				<div class="logo col-xs-12 page-header text-center">
					<h1 class=""><a href="/">TBM</a></h1>
					<p class="text-center"><strong>The best music</strong></p>
				</div>
			</div>

		</head>
       @yield('content')

    </body>
</html>
