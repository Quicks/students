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

  {{ Form::label('lesson_date', 'Lesson date') }}
  {{ Form::date('lesson_date', $lesson->lesson_date, ['class' => 'form-control ck-editor' ]) }}
  {!! $errors->first('lesson_date','<span class="help-block">:message</span>') !!}
  {{ Form::label('description', 'Description') }}
  {{ Form::textarea('description', $lesson->description, ['class' => 'form-control']) }}
  {!! $errors->first('description','<span class="help-block">:message</span>') !!}
  {{ Form::file('img') }}

</div>

{{Form::submit('Зберегти', ['class' => 'btn btn-success'])}}
<script>
  $(document).ready(function(){
    $('.ckeditor').ckeditor();
  })


</script>
