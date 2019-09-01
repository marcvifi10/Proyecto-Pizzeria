<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	@yield("meta")

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	@yield("script")

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/icono.png">

    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield("style")
</head>
<body>
	<div id="menu">
		@include("partials.backend_menu")
	</div>
    <div id="app">
		@yield("content")
    </div>
</body>
</html>