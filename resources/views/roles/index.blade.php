@extends('layouts.app')
@section('content')
  <table class="table table-stripped">
    <thead>
      <tr>
        <td> Назва </td>
        <td> Опис </td>
        <td> Дії </td>
      </tr>
    </thead>
    <tbody>

      @foreach($roles as $role)
        <tr>
          <td>{{$role->title}}</td>
          <td>{{$role->description}}</td>
          <td>
            {{link_to(route('roles.edit', $role->id), 'Редагувати')}}
            {{ Form::open(['method' => 'DELETE', 'route' => array('roles.destroy', $role->id)]) }}
              {{ Form::hidden('id', $role->id) }}
              {{ Form::submit('Delete', ['class' => 'btn btn-danger role-destroy']) }}
            {{ Form::close() }}
          </td>
        </tr>

      @endforeach

    </tbody>
  </table>

@endsection
