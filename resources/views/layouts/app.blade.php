<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <title>{{Config::get('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
	<div class="container">
	 	@yield('content')
	</div>

    <script src="{{ asset('resources/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('js')
</body>
</html>