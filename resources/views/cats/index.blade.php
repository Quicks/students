@extends('layouts.app')
@section('content')
  <a class='btn btn-success pull-right' href='{{route('cats.create')}}'> Нове кошеня </a>
  @foreach ($cats as $cat)
    <p>This is cat {{ $cat['name'] }}</p>
  @endforeach
@endsection
