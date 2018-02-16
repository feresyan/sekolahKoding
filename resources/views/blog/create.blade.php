@extends('layouts.master')

@section('title','Blog')

@section('content')
	<h1>Selamat datang di halaman EDIT</h1>
	<hr>
	<form action="/blog" method="post"> 
	<input type="text" name="title" value=""><br><br>
	<textarea name="description" rows="8" cols="48"></textarea><br>
	<input type="submit" name="submit" value="submit">
	{{ csrf_field() }}

	</form>
@endsection
