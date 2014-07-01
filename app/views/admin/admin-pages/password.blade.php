@extends('admin.master')
@section('content')
<div id="sign-box">
<h2>Wijzig uw wachtwoord.</h2>
</br>
<form action="{{ URL::route('change-password-post') }}" class="form" method="post">
{{ Form::label('old_password', 'Oude wachtwoord:', array('class' => 'password')) }}
    @if($errors->has('old_password'))
    {{ $errors->first('old_password') }}
    @endif
      {{ Form::password('old_password') }}  
{{ Form::label('password', 'Nieuwe wachtwoord:', array('class' => 'password')) }}
    @if($errors->has('password'))
    {{$errors->first('password')}}
    @endif
    {{ Form::password('password') }}  

{{ Form::label('password_again', 'Nieuwe wachtwoor opnieuw:', array('class' => 'password')) }}
  @if($errors->has('password_again'))
  {{$errors->first('password_again')}}
  @endif 
  {{ Form::password('password_again') }}  


  {{ Form::token() }}
  {{Form::submit('Wachtwoord wijzigen')}}
</form>
</div>
@stop