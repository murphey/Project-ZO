	<div class="navbar">
 	<a href="/"><img class="logo" href="/" src={{asset('img/logo.png')}} alt="logo" /></a>
 		<div class="navbar-inner clearfix">
 		<div class="spacer"></div>
			<!-- <a id="logo" href="/">Logo</a> -->
				<ul class="nav-list clearfix">
					<li class="li-nav" ><a href="/">Home</a></li>					
		<li class="li-nav" ><a href="{{ URL::to('pagina/toegankelijkheid') }}">Toegankelijkheid</a></li>

		<li class="li-nav" ><a href="{{ URL::to('pagina/diensten') }}">Diensten</a></li>
		<li class="li-nav" ><a href="{{ URL::to('pagina/beperkingen') }}">Beperkingen</a></li>
		<li class="li-nav" ><a href="{{ URL::to('referenties') }}">Referenties</a></li>
		<li class="li-nav" ><a href="{{ URL::to('pagina/over') }}">Over ZO</a></li>
		<li class="li-nav" ><a href="{{ URL::to('nieuwsoverzicht') }}">Nieuws</a></li>	

				</ul>
				<a href="#" id="uitklappen">Menu</a>
		</div>
	</div>
