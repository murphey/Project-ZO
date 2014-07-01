@extends('layouts.default')
@section('content')
<div id="to-top"></div>
<div id="main-wrap">
   <div id="article-left">
	    	<span class="h1_paars">Artikel</span><br />
		<p>
			   <div class="image_article">
<br>
			<span class="orange">{{ $post->posts_title }}</span><br />
  @if($post->photo)  	{{ HTML::image('img/db/'.$post->photo, 'leerlingen') }}	@endif   </div>
		</p>
			{{ $post->posts_content }}
    </div>
  <div id="archief-right">
			<span class="orange">Archief</span><br />
			<ul class="archief">
				<li>24/05/2014 &nbsp;&nbsp;<a href="#">Nieuws van 2014</a></li>
				<li>24/05/2014 &nbsp;&nbsp;<a href="#">Nieuws van 2014</a></li>
				<li>24/05/2014 &nbsp;&nbsp;<a href="#">Nieuws van 2014</a></li>
				<li>24/05/2014 &nbsp;&nbsp;<a href="#">Nieuws van 2014</a></li>
			</ul>	
    </div>    

</div>
</br>
@stop