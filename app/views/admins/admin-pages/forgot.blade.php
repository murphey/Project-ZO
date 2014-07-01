@extends('admin.master')
@section('content')
Wachtwoord vergeten.
<form action="{{ URL::route('forgot-password-post')}}" method="post">
{{ Form::label('email', 'E-mail:', array('class' => 'email')) }}
  {{ Form::text('email') }}  
  @if($errors->has('email'))
{{ $errors->first('email')}}
@endif	
{{Form::token()}}

{{Form::submit('Herstellen')}}
</form>
@stop