@extends('layouts.app')
@section('content')
  @foreach($lessons as $lesson)
    <p>{{$lesson->lesson_date}}</p>
  @endforeach
@endsection
