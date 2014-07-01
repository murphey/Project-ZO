@extends('admin.master')
@section('content')
User profile

<p>{{$user->admin_name}}</p>
<p>{{$user->email}}</p>

@stop