@extends('layouts.app')
@section('content')
  {{Form::model($contentBlock, array('route' => array('content_blocks.store')))}}
    @include('contentBlocks._form')
  {{Form::close()}}

@endsection
