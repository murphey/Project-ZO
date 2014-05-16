@extends('admin.master')
@section('content')
<div class="col-md-12">
	{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
	@if($errors->any())
		<div class="alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>'))}}
		</div>
	@endif
	<br>
	<div class="control-group">
		{{ Form::label('posts_title', 'Titel') }}
		{{ Form::text('posts_title', Input::old('posts_title'), array('class' => 'form-control', 'placeholder' => 'Zet A.U.B uw titel hier...')) }}
	</div>
	<br>
	<div class="control-group"> <!-- Old content and  -->
		{{ Form::label('posts_content', 'Content') }}
		        @if($errors->has('posts_content')){{$errors->first('posts_content')}} @endif 

		{{ Form::textarea('posts_content', Input::old('posts_content'), array('class' => 'ckeditor')) }}
	</div>
		<br>
	<div class="control-group"> <!-- Old description  -->
		{{ Form::label('posts_desc', 'Meta beschrijving.') }}
		{{ Form::text('posts_desc', Input::old('posts_desc'), array('class' => 'form-control', 'placeholder' => 'Pagina beschrijving.')) }}
	</div>
	<br>
	<div class="control-group"> <!-- Old keywords  -->
		{{ Form::label('posts_keyw', 'Sleutelwoorden') }}
		{{ Form::text('posts_keyw',  Input::old('posts_keyw'), array('class' => 'form-control', 'placeholder' => 'Sleutelwoorden.')) }}
	</div>
	{{ Form::submit('Update', array('class' => 'btn btn-succes'))}}
	{{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-warning')) }}
	{{ Form::close() }}

</div>
<br>
@stop