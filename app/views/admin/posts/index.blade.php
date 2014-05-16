@extends('admin.master')
@section('content')
<div class="col-md-12">
	
{{ link_to_route('posts.create', 'Maak een nieuwe post', null, array('class' => 'btn btn-primary'))}}

</div>
@if($posts->count())
<h4>Dit zijn uw huidige pagina's </h4>

<div class="col-md-12">
	
	<table class=" table table-bordered table-striped">
		<thead>
			<tr>   
				<th>Titel</th>
				<th>Beschrijving</th>
				<th>Aangemaakt op</th>
				<th>Preview</th>
				<th>Bewerken</th>
				<th>Verwijderen</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $p)
			<tr>
			<td>{{ $p->posts_title}}</td>
			<td>{{ substr($p->posts_content, 0, 120). '[...]'}}</td>
			<td><span class="label label-info"> {{ \Carbon\Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
			<td>{{ link_to_route('posts.show', 'Preview', array($p->id), array('class' => 'btn btn-info')) }}</td>
			<td>{{ link_to_route('posts.edit', 'Edit', array($p->id), array('class' => 'btn btn-warning')) }}</td>
			<td>{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
			{{ Form::submit('Verwijderen', array('class' => 'btn btn-danger'))}}
			{{ Form::close()}}
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@else
	<div class="alert alsert-info col-md-4" style"margin-top:15px">U heeft waarschijnlijk geen posts</div>

@endif
@stop
