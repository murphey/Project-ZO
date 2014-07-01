	<div class="navbar">
	<a href="{{URL::to('/')}}"><img src={{asset('img/logo.png')}} class="image" alt="Logo"></a>
<!-- 	<img class="logo" src={{asset('img/logo.png')}} alt="logo">
 -->		
			<!-- <a id="logo" href="/">Logo</a> -->
			<nav>
				<ul class="nav-list clearfix">
					<a href="{{ URL::to('contact') }}"><li class="li-nav" >Home</li></a>
					@if(Auth::check())
					<a href="{{ URL::route('sign-out') }}"><li class="li-nav" >Uitloggen</li></a>
					<a href="{{ URL::route('change-password') }}"><li class="li-nav" >Wachtwoord wijzigen</li></a>
					<li>{{ link_to_route('posts.index', 'Posts')}}</li>	
					<a href="{{ URL::to('editor') }}"><li class="li-nav" >Pages</li></a>	
					@else
					<a href="{{ URL::route('sign-in') }}"><li class="li-nav" >Sign in</li></a>
					<a href="{{ URL::route('create') }}"><li class="li-nav" >Maak een account</li></a>
					<a href="{{ URL::route('forgot-password') }}"><li class="li-nav" >Wachtwoord vergeten</li></a>

					@endif
<!-- 				<a href="users"><li class="li-nav" >Users</li></a>
					<a href="#"><li class="li-nav" >Profiles</li></a>				
						 -->				
				</ul>
				<div class="handle">Menu</div>
				</nav>	
<!--  URL::route('admin')-->
	</div>
<script>
$('.handle').on('click', function(){
$('nav ul').toggleClass('showing');
});
</script>