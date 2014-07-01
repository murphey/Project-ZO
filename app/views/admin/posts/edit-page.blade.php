@extends('admin.master')
@section('content')
<div id="main-admin regular">
<div class="row"></div>
<div class="sub-wrap">
<div class="col-md-13">
<!-- quick = posts  -->
	{{ Form::model($post, array('method' => 'PATCH', 'files' => true, 'route' => array('editor.update', $post->id),)) }} 
	@if($errors->any())
		<div class="alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>'))}}
		</div>
	@endif
	<br>
	<div class="control-group title">
		{{ Form::label('page_title', 'Titel') }}
		{{ Form::text('page_title', Input::old('page_title'), array('class' => 'form-control', 'placeholder' => 'Zet A.U.B uw titel hier...')) }}
	</div>
	<br>
	<div class="control-group"> <!-- Old content and  -->
		{{ Form::label('page_content', 'Content') }}
		        @if($errors->has('page_content')){{$errors->first('page_content')}} @endif 

		{{ Form::textarea('page_content', Input::old('page_content'), array('class' => 'ckeditor')) }}
	</div>
		<br>
	<div class="control-group"> <!-- Old description  -->
		{{ Form::label('category', 'Categorie') }}
		{{ Form::text('category', Input::old('category'), array('class' => 'form-control', 'placeholder' => 'Oude categorie.')) }}
	</div>
	<br>
	</div>
	{{ Form::submit('Update', array('class' => 'btn btn-succes'))}}
	{{ link_to_route('editor.index', 'Cancel', null, array('class' => 'btn btn-warning')) }}
	{{ Form::close() }}
</div>
</div>
</div>
<br>
@stop