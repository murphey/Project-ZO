@extends('admin.master')
@section('content')
<div id="main-admin regular">
@if(Auth::check())

<div class="row"></div>
<div class="sub-wrap">
<p class="auth">	We lkom, <b>{{Auth::user()->admin_name}}.</b></p>

	<h1 class="h1-purple">Welkom op het Adminpanel!</h1>
	<p>U kunt een nieuws/beperkings pagina wijzigen of een nieuwe toevoegen aan uw website.</p><p>U wordt aangeraden om de handleiding zorgvuldig door te nemen....</p>
<div class="icons-holder">
<div class="icon"><a href="{{ URL::to('posts/create') }}">{{ HTML::image('img-admin/icons/text_.png', 'Nieuwe nieuws') }}</a></div>
<div class="icon"><a href="{{ URL::to('posts') }}">{{ HTML::image('img-admin/icons/profile_.png', 'Overzicht') }}</a></div>
<div class="icon"><a href="{{ URL::to('account/change-password') }}"> {{ HTML::image('img-admin/icons/edit_.png', 'Verander uw wachtwoord') }}</a></div>

</div>

</div>
@else
<h1 class="pass-sign-1">U bent nog niet ingelogd
{{ Form::open(array('url' => 'account/sign-in')) }}
<span class="log">{{ Form::submit('Inloggen')}}	</span>
{{ Form::close()}}</h1>

@endif

</br>
</div>
@stop