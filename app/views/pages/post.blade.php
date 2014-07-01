@extends('layouts.default')
@section('content')
<div id="to-top"></div>
<div id="main-wrap">
   <div id="article-left">
	    	<span class="h1_paars">Artikel
	    	 @if(Auth::check())
{{		link_to('posts/'.$post->id . '/edit',  ' bewerken.', $attributes = array(''), $secure = null);
}}			

@else
@endif
 </span><br />
		<p>
			   <div class="image_article">
<br>
			<span class="orange">{{ $post->posts_title }}.</span><br />
 @if($post->photo)  	{{ HTML::image('img/db/'.$post->photo, 'leerlingen') }}	@endif
   </div>
  

	<p class="lead">Door {{  ucwords( $post->user->admin_name) }}</p>
	<p><span class="glyphicon glyphicon-time">Geplaatst {{ $date }}</span></p>
	<p class="lead"> {{ $post->posts_content }} </p>    

	{{ HTML::link('/', 'Ga terug') }}
</div> 
<div id="archief-right">
			<span class="orange">Archief</span><br />
			    	
			    		<li>{{$post->created_at}} {{ HTML::link('nieuws/'.$post->posts_slug, ''.$post->posts_title )}}</li>

			
    </div>    

</div>

@stop