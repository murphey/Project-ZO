@extends('admin.master')
@section('content')
<div class="sub-wrap">
<div class="col-md-13">
	
{{ link_to_route('posts.create', 'Maak een nieuwe post', null, array('class' => 'btn btn-primary'))}}

<div class="row"></div>
<div class="edit"> {{ HTML::image('img-admin/icons/text_.png', 'Nieuwe nieuws') }}<h1>Bewerken</h1></div>
</div>
@if($posts->count())
<div id="main-admin regular">
<div class="row"></div>
<div class="sub-wrap">
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
			<td>{{ substr($p->posts_content, 0, 100). ''}}</td>
			<td><span class="label label-info"> {{ \Carbon\Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
			<td>{{ link_to_route('posts.show', 'Preview', array($p->id), array('class' => 'btn btn-info')) }}</td>
			<td>{{ link_to_route('posts.edit', 'Edit', array($p->id), array('class' => 'btn btn-warning')) }}</td>
			<td>{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
			<span class="probeer">{{ Form::submit('Delete &#10006;', array('class' => 'btn btn-dangerr'))}}</span>
			{{ Form::close()}}
			</td>
			</tr>
			
			@endforeach
			{{ $posts->links() }} 
		</tbody>
	</table>
</div>

</div>
</div>
	</div>		
@else
	<div class="alert alsert-info col-md-4" style"margin-top:15px">U heeft waarschijnlijk geen posts</div>


@endif
@stop
