@extends('layouts.app')
@section('content')
  @foreach($users as $user)
    <p>{{$user->name}}</p>
    {{$user->lessons}}
      @foreach($user->lessons as $lesson)
        <p>{{$lesson->lesson_date}}</p>
      @endforeach

  @endforeach
@endsection
