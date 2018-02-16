@extends('layouts.master')

@section('title','Blog')

@section('content')
  <h1>Selamat Datang Di Blog {{ $blog }}</h1>
  @foreach ($users as $user)
      <li>{{ $user->username }}</li>
  @endforeach
@endsection
