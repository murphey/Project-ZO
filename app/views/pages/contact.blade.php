@extends('layouts.default')
@section('content')
	Ik ben de contact pagina
	{{ Form::open(array('url'=>'form-submit')) }}

<!-- radio buttons -->
{{ Form::label('status','Status',array('id'=>'','class'=>'')) }}

{{ Form::radio('status','enabled',true) }} Enabled
{{ Form::label('name', 'hoi;') }}{{ Form::radio('status','disabled') }} Disabled
   {{ Form::submit('Save') }} 
{{ Form::close() }}

@stop