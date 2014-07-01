@extends('admin.master')
@section('content')
<div id="sign-box">
  <h2>Inloggen</h2>

<form action="{{URL::route('sign-in-post')}}" method="post">
{{ Form::label('email', 'E-mail:', array('class' => 'email')) }}
    @if($errors->has('email'))
    {{ $errors->first('email') }}
    @endif
      {{ Form::text('email') }}  
{{ Form::label('password', 'Wachtwoord:', array('class' => 'password')) }}
    @if($errors->has('password'))
    {{$errors->first('password')}}
    @endif
  {{ Form::password('password') }}  <br>
  {{ Form::checkbox('remember') }}  
  {{ Form::label('remember', 'Onthoud mij!', array('class' => 'checkbox')) }}<br>
  &nbsp;&nbsp; Wachtwoord vergeten? <a href="{{ URL::to('account/forgot-password')}}"> klik hier</a>
 
{{Form::submit('Inloggen')}}
{{Form::token()}}
</form>  
</div>

</br>
@stop