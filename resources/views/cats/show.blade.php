@extends('layouts.app')
@section('content')
  {{ $cat->name }}
  {{ $cat->description }}

  <a href="{{route('cats.index')}}" class='btn btn-default'>Back</a>

@endsection
