@extends('layouts.app')
@section('content')
  @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
      </div>
  @endif
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
            {{link_to(route('roles.toJson', $role->id), 'Role in json', ['class' => 'btn btn-warning json-btn'])}}
            {{link_to(route('roles.edit', $role->id), 'Редагувати', ['class' => 'btn btn-warning edit-btn'])}}
            {{ Form::open(['method' => 'DELETE', 'route' => array('roles.destroy', $role->id)]) }}
              {{ Form::hidden('id', $role->id) }}
              {{ Form::submit('Delete', ['class' => 'btn btn-danger role-destroy']) }}
            {{ Form::close() }}
          </td>
        </tr>

      @endforeach

    </tbody>
  </table>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<script>

  $(document).ready(function(){
    $('.edit-btn').click(function(e){
      e.preventDefault();
      var url = $(this).attr('href');

      $.ajax({
        url: url,
        success: function(response){
          $('#myModal').find('.modal-body').html(response);
          $('.btn.btn-success').appendTo('.modal-footer');
          $('.btn.btn-success').attr('form', 'edit-role');
          $('#myModal').modal();
        }
      })

    })

    $('.json-btn').click(function(e){
      e.preventDefault();
      var url = $(this).attr('href');

      $.ajax({
        url: url,
        // dataType: 'json',
        success: function(response){
          var test = JSON.parse(response);
          console.log(test.title);
          $('#myModal').find('.modal-body').html(response);
          $('#myModal').modal();
        }
      })

    })


  })
</script>
@endsection
