@extends('layouts.default')
@section('content')
<div id="to-top"></div>
<div id="main-wrap">

<div id="main-wrap2">
    <div id="overzicht-left">
    <span class="h1_groen">Laatste nieuwtjes</span>
	    
    	@foreach($posts as $p)
	    <div class="nieuwsartikel">
			<div class="image_overzicht"></div>

   <div class="image_overzicht">
<br>
			<span class="purple">{{  $p->posts_title }}</span><br />
			 @if($p->photo)
   	{{ HTML::image('img/db/'.$p->photo,  'leerlingen') }}	
   	@endif
   </div>
    	{{ Str::limit($p->posts_content, 420)}}{{ HTML::link('nieuws/'.$p->posts_slug, 'Lees meer...') }}
		</div>
		<div class="stripe2"></div>
	@endforeach
{{ $posts->links() }} 
    </div>

    <div id="archief-right">
			<span class="orange">Archief</span><br />
			<ul class="archief">
			    	@foreach($posts as $p)
			    		<li>{{$p->created_at}} {{ HTML::link('nieuws/'.$p->posts_slug, ''.$p->posts_title )}}</li>

				@endforeach
			</ul>	
    </div>    
</div>

</div>

</br>
@stop