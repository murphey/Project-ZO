@extends('layouts.default')

@section('content')
<div id="to-top"></div>

<div id="main-wrap">
	<div id="content-left">
		@if(Auth::check())
		<h3>{{		
				link_to('pages/'.$posts->id . '/edit-page', $posts->page_title. ' Bewerken.', $attributes = array(''), $secure = null);
			}}			
		</h3>
		@else
		@endif
			<h1 class="h1">{{$posts->page_title}}</h1>
			{{$posts->page_content}}
	</div>
	<div id="content-right">
			<p class="quote2"><span style="color: #29b473;">"Zelfstandig op een andere</span> <span style="color: #f6931e;">verdieping kunnen komen"</span></p>
		<div class="img_r">{{ HTML::image('img/toegang.jpg', 'Toegankelijkheid') }}		</div>
	</div>
</div>

</br>
@stop