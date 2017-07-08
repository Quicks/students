@extends('layouts.app')
@section('content')
  {{ Form::model($lesson, array('route' => array('lessons.update', $lesson->id),'method'  => 'PUT')) }}
    @include('lessons._form')
  {{ Form::close() }}
@endsection
