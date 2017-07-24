@extends('layouts.app')
@section('content')
  <a href="{{route('content_blocks.create')}}">Add </a>

  @foreach($contentBlocks as $contentBlock)
    {{$contentBlock->text}}
  @endforeach


@endsection
