@extends('layouts.master')

@section('title','Blog Laravel')

@section('content')
  <h1>Selamat Datang Di Home Kami</h1>
  <hr>
  @foreach ($blogs as $blog)
  	<li>
  		<a href=" blog/{{ $blog->id }} "> {{$blog->title}}</a>

		<form action="/blog/{{$blog->id}} " method="post"> 
			<input type="submit" name="submit" value="delete">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE">
		</form>

		 <a href="/blog/ {{$blog->id}}/edit "><button>Edit</button></a>
  	</li>
  @endforeach

@endsection
