@extends('layouts.app')
@section('content')
  {{ Form::model($cat, array('route' => array('cats.store'))) }}
    @include('cats._form')
  {{ Form::close() }}
@endsection
