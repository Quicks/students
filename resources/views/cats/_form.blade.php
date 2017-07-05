<div class="form-group">
  {{ Form::label('name', 'Ім\'я кошеня') }}
  {{ Form::text('name', $cat->name, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('description', 'Опис кошеня') }}
  {{ Form::text('description', $cat->description, ['class' => 'form-control']) }}
</div>
{{Form::submit('Зберегти', ['class' => 'btn btn-success'])}}
