@extends('layouts.app')
@section('content')
  {{ Form::model($role, array('route' => array('roles.store'), 'files'=> true)) }}
    @include('roles._form')
  {{ Form::close() }}
@endsection
