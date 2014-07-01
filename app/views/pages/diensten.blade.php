@extends('layouts.default')

@section('content')
<div id="to-top"></div>
<div id="main-wrap">
    <div id="content-right">
			<h1 class="h1_groen">Quickscan</h1><br>
		<p>
			Snel een indicatie krijgen of een schoolgebouw en/of -plein toegankelijk is voor leerlingen en studenten met een beperking?
		</p>
			<div id="btn"><a href="{{ URL::to('quickscan') }}"></a></div>
			<div id="image"></div>

    </div>
    <div id="content-left">
    @if(Auth::check())
<h3>{{		link_to('pages/'.$posts->id . '/edit-page', $posts->page_title. ' Bewerken.', $attributes = array(''), $secure = null);
}}			
</h3>
@else
@endif
	    	<h1 class="h1">{{$posts->page_title}}</h1><br />
		
	{{$posts->page_content}}
    </div>
    </div>
</div></br>
@stop