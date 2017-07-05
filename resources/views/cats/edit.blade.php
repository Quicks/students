@extends('layouts.app')
@section('content')
  {{ Form::model($cat, array('route' => array('cats.update', $cat->id),'method'  => 'PUT')) }}
    @include('cats._form')
  {{ Form::close() }}
@endsection
