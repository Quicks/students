@extends('layouts.app')
@section('content')

  <a class='btn btn-success pull-right' href='{{route('cats.create')}}'> Нове кошеня </a>
  @foreach ($cats as $cat)
    <p>
      This is cat {{ $cat['name'] }}

      {{ Form::open(['method' => 'DELETE', 'route' => array('cats.destroy', $cat->id)]) }}
        {{ Form::hidden('id', $cat->id) }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger cat-destroy pull-right']) }}
      {{ Form::close() }}
      <a href="{{route('cats.edit', $cat->id)}}" class='btn btn-warning pull-right'>edit</a>
    </p>

  @endforeach
  <script>
    $(document).ready(function(){
      $('.cat-destroy').click(function(){
          return confirm('Are you sure?');
      });
    })
  </script>
@endsection
