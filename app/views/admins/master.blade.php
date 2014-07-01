<!doctype html>
<html lang="nl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<link rel="stylesheet" href="http://media02.hongkiat.com/responsive-web-nav/demo/normalize.css" type="text/css">

{{HTML::style('css/admin-layout.css');}}

 {{HTML::script('ckeditor/ckeditor.js');}} 
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

<div class="container">
	
	<header class="row">
		@include('admin.structure.admin-header')
	</header>
<!-- <nav class="admin"> admin panel</nav>
 -->	<div id="main" class="row">
@if(Session::has('global'))
<p>{{ Session::get('global') }}</p>
@endif
		@yield('content')
			
	</div>
	<footer class="row">
		@include('admin.structure.admin-footer')
	</footer>

</div>	
</body>
</html>
