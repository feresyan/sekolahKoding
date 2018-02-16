@extends('layouts.master')

@section('title','Blog')

@section('content')
	<h1>Selamat datang di halaman EDIT</h1>
	<hr>
	<form action="/blog/{{$blog->id}} " method="post"> 
	<input type="text" name="title" value="{{$blog->title}}"><br><br>
	<textarea name="description" rows="8" cols="48">{{$blog->description}}</textarea><br>
	<input type="submit" name="submit" value="edit">
	{{ csrf_field() }}

	<input type="hidden" name="_method" value="PUT">
	</form>
@endsection
