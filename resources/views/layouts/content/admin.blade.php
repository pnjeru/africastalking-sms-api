<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	    <link rel="shortcut icon" href="{{ asset('favicon.jpg') }}" type="image/x-icon">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> {{ config('app.name', 'Laravel') }}</title>
	@include('layouts.includes.styles')	
</head>

<body class="nav-md">
	<div id="app">
	<div class="container body">
		<div class="main_container">
			@include('layouts.includes.aside')
			@include('layouts.includes.header')
			<!-- page content -->
	     <div class="right_col" role="main"> 	
				@yield('content')
			</div>
			@include('layouts.includes.footer')
		</div>
	</div>
	</div>
	@include('layouts.includes.scripts')
	@yield('scripts')
</body>
</html>
