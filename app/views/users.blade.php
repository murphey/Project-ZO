@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{$user->name }}</p>
        <p>{{ $user->email }}</p>
    @endforeach
@stop