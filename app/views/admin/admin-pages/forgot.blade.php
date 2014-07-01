@extends('admin.master')
@section('content')
<div id="main-admin regular">
<h1 class="pass-left">Wachtwoord vergeten.</h1>
<div class="wrap-for">
<form action="{{ URL::route('forgot-password-post')}}" method="post">
<span class="log">{{ Form::label('', '', array('class' => 'email')) }}</span>
{{ Form::text('email') }}  
  @if($errors->has('email'))
{{ $errors->first('email')}}
@endif	
{{Form::token()}}

{{Form::submit('E-mail verzenden')}}
</form>
</div>
</div>		
@stop 