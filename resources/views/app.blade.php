<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elo That :: @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="/css/foundation.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">


	<!-- Fonts -->
	<!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@include('sections.nav')

	@yield('content')
		 
	<script type="text/javascript" src="/js/functions.js"></script>
	<script type="text/javascript" src="/js/vendor/jquery.js"></script>
	<script type="text/javascript" src="/js/vendor/modernizr.js"></script>
	<script type="text/javascript" src="/js/foundation.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<script type="text/javascript" src="/js/custom.js"></script>
	<script type="text/javascript" src="/js/elo.js"></script>
			
	<script>
		$(document).foundation();
	</script>
 
	<script>
		@yield('end_scripts')
	</script>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
