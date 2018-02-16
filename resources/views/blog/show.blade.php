@extends('layouts.master')

@section('title','Blog')

@section('content')
  <h1>Selamat Datang Di Blog {{ $blog->title }}</h1>
  {{-- @foreach ($users as $user)
      <li>{{ $user->username }}</li>
  @endforeach --}}
  <hr>
  <p> {{$blog->description}} </p>

@endsection
