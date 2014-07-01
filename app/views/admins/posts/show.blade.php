@extends('admin.master')
@section('content')
<h1>{{ $post->posts_title }}</h1>
{{ $post->posts_email }}
{{ $post->posts_content }}
@stop