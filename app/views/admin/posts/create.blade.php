@extends('admin.master')
@section('content')
{{Form::open(array('route' => 'posts.store'))}}
@if($errors->any())
	<div class="alert-danger">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		{{ implode('', $errors->all('<li class="error">:message</li>'))}}
	</div>
@endif
<div class="control-group">
{{ Form::label('posts_title', 'Titel') }}
{{ Form::text('posts_title', '', array('class' => 'form-control', 'placeholder' => 'Zet A.U.B uw titel hier...')) }}
</div>
<br>
<div class="control-group">
{{ Form::label('posts_content', 'Dit is de content van uw pagina.') }}
{{ Form::textarea('posts_content', '', array('class' => 'ckeditor')) }}
</div>
<br>
<hr>
<strong>Custom SEO properties</strong> <em>(These are optional)</em><br>
<br>
<div class="control-group">
{{ Form::label('posts_desc', 'Dit is de beschrijving van uw post.') }}
{{ Form::text('posts_desc', '', array('class' => 'form-control', 'placeholder' => 'Pagina beschrijving.' )) }}
</div>
<br>
<div class="control-group">
{{ Form::label('posts_keyw', 'Zet uw keywords gescheiden van uw komma&#039;s.') }}
{{ Form::text('posts_keyw', '', array('class' => 'form-control', 'placeholder' => 'Zet uw keywords gescheiden van uw komma&#039;s.' )) }}
</div>
{{Form::submit('Maak Post', array('class' => 'btn btn-succes'))}}
{{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
@stop