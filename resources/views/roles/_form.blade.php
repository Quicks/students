@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">

  {{ Form::label('title', 'Title') }}
  {{ Form::text('title', $role->title, ['class' => 'form-control ck-editor' ]) }}
  {!! $errors->first('title','<span class="help-block">:message</span>') !!}
  {{ Form::label('description', 'Description') }}
  {{ Form::textarea('description', $role->description, ['class' => 'form-control']) }}
  {!! $errors->first('description','<span class="help-block">:message</span>') !!}

</div>

{{Form::submit('Зберегти', ['class' => 'btn btn-success'])}}
<script>
  $(document).ready(function(){
    $('.ckeditor').ckeditor();
  })


</script>
