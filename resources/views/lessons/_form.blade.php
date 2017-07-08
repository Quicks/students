<div class="form-group">
  {{ Form::label('lesson_date', 'Lesson date') }}
  {{ Form::date('lesson_date', $lesson->lesson_date, ['class' => 'form-control']) }}
</div>

{{Form::submit('Зберегти', ['class' => 'btn btn-success'])}}
