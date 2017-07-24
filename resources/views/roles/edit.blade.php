@extends('layouts.app')
@section('content')
  {{ Form::model($role, array('route' => array('roles.update', $role->id),'method'  => 'PUT', 'files'=> true)) }}
    @include('roles._form')
  {{ Form::close() }}
@endsection
