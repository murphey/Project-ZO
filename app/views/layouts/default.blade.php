<!doctype html>
<html lang="nl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://media02.hongkiat.com/responsive-web-nav/demo/normalize.css" type="text/css">

{{HTML::style('css/layout.css');}}
{{HTML::style('css/media.css');}}
{{HTML::script('js/medias.js');}}
{{HTML::script('js/flaunt.js');}}
<!-- {{HTML::script('js/flaunt.min.js');}} -->
	@include('includes.head')
	<meta charset="UTF-8">
	<title>Welkom op ZO</title>
<!--	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

	</style>-->
</head>
<body>
<script type="text/javascript">

</script>
<div class="container">
	
	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">
	dddddddddddddddddddddddddddddd
		@yield('content')
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>	
</body>
</html>
