@extends('admin.master')
@section('content')

<div id="sign-box">
<form action="{{ URL::route('create-post') }}" class="form" method="post">
	
	{{ Form::label('name', 'Naam:', array('class' => 'name')) }}
		@if($errors->has('name')){{$errors->first('name')}} @endif
			{{ Form::text('name') }}	

  	{{ Form::label('email', 'E-Mail Address', array('class' => 'name')) }}
  		@if($errors->has('email')){{$errors->first('email')}} @endif
  			{{ Form::text('email')}} <!-- find it because fasade input is better than regular example old() -->

    {{ Form::label('password', 'Wachtwoord:', array('class' => 'password')) }}
        @if($errors->has('password')){{$errors->first('password')}} @endif    
            {{ Form::password('password') }}

    {{ Form::label('password_again', 'Wachtwoord herhalen:', array('class' => 'password_again')) }}
        @if($errors->has('password_again')){{$errors->first('password_again')}} @endif 
        	 {{ Form::password('password_again') }}
	{{ Form::token() }}
	<input type="submit" value="Account aanmaken"> 
</form> 
</div>
</br>
@stop