<style>
  .lesson-img{
    height: 150px;
  }
</style>
@extends('layouts.app')
@section('content')
<h1>Lessons list</h1>
<table class="table">
  <thead>
    <tr>
      <td>date</td>
      <td>description</td>
      <td>username</td>

      <td>actions</td>
    </tr>
  </thead>
  <tbody>
    @foreach($lessons as $lesson)
      <tr>
        <td>
          {{$lesson->lesson_date}}
        </td>
        <td>
          <img src="{{Storage::url($lesson->img)}}" class="lesson-img img">
        </td>
        <td>
          @if($lesson->user)
            {{$lesson->user->name}}
          @endif
        </td>
        <td>
          <a class="btn btn-warning" href='{{route('lessons.edit', $lesson->id)}}'>Edit</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<a class='btn btn-success pull-right' href='{{route('lessons.create')}}'>New lesson</a>

@endsection
