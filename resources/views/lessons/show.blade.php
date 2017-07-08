@extends('layouts.app')
@section('content')
  {{ $lesson->lesson_date }} 

  <a href="{{route('lessons.index')}}" class='btn btn-default'>Back</a>

@endsection
