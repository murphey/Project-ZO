@extends('admin.master')
@section('content')
@if(Auth::check())

<p>	Hello, <b>{{Auth::user()->admin_name}}.</b></p>

@else
<p>U bent niet ingelogd</p>
@endif
nnnnmmmm    m m m m  m  m m m m m m m m m m m m m m nnnnmmmm    m m m m  m  m m m m m m m m m m m m m m 
nnnnmmmm    m m m m  m  m m m m m m m m m m m m m m nnnnmmmm    m m m m  m  m m m m m m m m m m m m m m 
</br>
@stop