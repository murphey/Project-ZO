@extends('layouts.default-search')
@section('content')
<div id="to-top"></div>
</br></br>
@if($results->count())
@foreach($results as $r)
	<div class="col-lg-8"> 
	<h1>{{ HTML::link('nieuws/'.$r->posts_slug, $r->posts_title)}}</h1>
	<p class="lead">Door {{ ucwords($r->user->admin_name)}} </p>
	<p><span class="glyphicon glyphicon-time">Geplaatst {{ \Carbon\Carbon::createFromTimestamp(strtotime($r->created_at))->formatLocalized('%A %d %B %Y')}}</span></p>
	<p>{{ Str::limit($r->posts_content, 120)}}{{ HTML::link('nieuws/'.$r->posts_slug, 'Lees meer...') }}</p>
	<hr><br>
</div>
@endforeach
@else
<h4> Sorry uw zoekzocht leverde geen resultaten op.</h4>
@endif
@stop