@extends('layouts.default')
@section('content')
<script type="text/javascript">
       $(document).ready(function (){
           $(".all-tab").click(function (){
               //$(this).animate(function(){
                   $('html, body').stop().animate({
                       scrollTop: $("#tabs").offset().top - 200
                   }, 2000);
               //});           
           $("#tabs > ul").css({
"margin-bottom":"0"
});             $(".tab1").css({
"padding-bottom":"24px"
}); 
	           $("#tabs_container").css({
"background-color":"#9E1F63"
}); 
        $(".tab2").css({
"padding-bottom":"10px"
}); 
                $(".tab3").css({
"padding-bottom":"10px"
}); 

           });
$(".tab2").click(function (){
	           $(".tab2").css({
"padding-bottom":"24px"
}); 	           $(".tab1").css({
"padding-bottom":"10px"
});            $(".tab3").css({
"padding-bottom":"10px"
}); 
	           $("#tabs_container").css({
"background-color":"#29B473"
}); 


	 });
$(".tab3").click(function (){
	           $(".tab3").css({
"padding-bottom":"24px"
}); 	
	           $("#tabs_container").css({
"background-color":"#F6931E"
}); 	

           $(".tab1").css({
"padding-bottom":"10px"
});            $(".tab2").css({
"padding-bottom":"10px"
}); 


	 });

       });       
</script>
<div id="fullpage"> <div class="quote"> <h1 class="title-text"></h1> <h2 class="title-text"></h2></div>
</div>
<div class="wrapper"> 
	<div id="tabs">
  <ul>
    <li class="tab1 all-tab"><a href="#tabs-1"><span class="weldo">Welkom</span><span class="arrow-down"></span></a> </li>
    <li class="tab2 all-tab"><a href="#tabs-2"><span class="weldo">Nieuwe wet en regelgeving</span><span class="arrow-down"></span></a></li>
    <li class="tab3 all-tab"><a href="#tabs-3"><span class="weldo">Zorgeloos onderwijs</span><span class="arrow-down"></span></a></li>
  </ul>
  		<div id="tabs_container">
		<div id="tabs-1">
			<h1>Welkom</h1><p>Op de website van Zorgeloos Onderwijs (ZO). Als onafhankelijk adviesbureau streven wij naar een passende leeromgeving voor iedereen. Ook leerlingen en studenten met een (of meerdere) lichamelijke beperking(en) moeten volop mee kunnen doen in het reguliere onderwijs. Het onderwijs dient voor hen volledig toegankelijk te zijn.
			</p>
			<p>Dat heeft consequenties voor de inrichting en kwaliteit van de leer- en speelomgeving. Schoolgebouwen en -pleinen zullen in veel gevallen moeten worden aangepast, om ze toegankelijk te maken voor leerlingen/studenten met een beperking.</p>

		</div>

		<div id="tabs-2">
			 <h1>Nieuwe wet en regelgeving</h1>   <p>Volledige toegankelijkheid van onderwijs voor leerlingen en studenten met een beperking is niet alleen ons ideaal, maar ook een wettelijke verplichting. Alle onderwijsinstellingen in Nederland moeten op termijn aan nieuwe wet en regelgeving voldoen.</p>
	
		</div>

		<div id="tabs-3">
			  <h1>Zorgeloos onderwijs</h1>  <p>ZO kan daarbij helpen. Door schoolgebouwen en pleinen te scannen op toegankellijkheid, een plan van aanpak op te stellen om eventuele belemmeringen weg te nemen en ervoor te zorgen dat dit plan van aanpak daadwerkeijk wordt uitgevoerd. Zodat leerlingen en studenten met een lichaamelijke beperking zorgeloos aan het onderwijs kunnen deelnemen.</p>
		</div>

		</div><!--End tabs container-->
</div>
<div class="container-small">
	<h3 class="headline" style="padding-top: 0 !important;">Laatste nieuwtjes</h3>
		@foreach($posts as $p)
		<div class="one-third column">
	
	<div class="img-third"> @if($p->photo) {{ HTML::image('img/db/'.$p->photo, 'a picture') }} @endif</div>
	<h2>{{  $p->posts_title }}</h2>


	<p>{{ Str::limit($p->posts_content, 300)}}{{ HTML::link('nieuws/'.$p->posts_slug, 'Lees meer...') }}</p>
	</div>
	@endforeach

</div>
</div>
<!-- 
	@foreach($posts as $p)
	<h1>{{ HTML::link('blog/'.$p->posts_slug, $p->posts_title) }}</h1>
	<p class="lead">by {{ ucwords( $p->user->admin_name) }} </p>
	<hr>
	<p><span class="glyphicon glyphicon-time">Geplaatst {{ \Carbon\Carbon::createFromTimestamp(strtotime($p->created_at))->formatLocalized('%A %d %B %Y')}}</span></p>
	<p>{{ Str::limit($p->posts_content, 120)}}{{ HTML::link('blog/'.$p->posts_slug, 'Lees meer...') }}</p>
	@endforeach
	{{ $posts->links() }} -->

@stop