@extends('admin.master')
@section('content')
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
  {{ Form::password('password') }}  
  {{ Form::label('remember', 'Remember me:', array('class' => 'checkbox')) }}
  {{ Form::checkbox('remember') }}  
{{Form::submit('Versturen')}}
{{Form::token()}}
</form>   
</br>
@stop