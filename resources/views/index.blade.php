@extends('layouts.main')

@section('content')

  <div class="container my-5">
    @if (Auth::user())
    <h1 class="text-center">Selamat Datang, {{ Auth::user()->name }}</h1>
    @else
    <h1 class="text-center">Silahkan Login</h1>
    @endif
  </div>
    
@endsection
    