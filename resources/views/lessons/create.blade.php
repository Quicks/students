@extends('layouts.app')
@section('content')
  {{ Form::model($lesson, array('route' => array('lessons.store'), 'files'=> true)) }}
    @include('lessons._form')
  {{ Form::close() }}
@endsection
