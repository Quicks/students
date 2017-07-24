<script src='https:////cdn.ckeditor.com/4.5.11/full/ckeditor.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.2/adapters/jquery.js'></script>

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

  {{ Form::label('text', 'Text') }}
  {{ Form::text('text', $contentBlock->text, ['class' => 'form-control ck-editor' ]) }}
  {!! $errors->first('text','<span class="help-block">:message</span>') !!}
  {{ Form::label('title', 'Title') }}
  {{ Form::textarea('title', $contentBlock->title, ['class' => 'form-control ckeditor']) }}
  {!! $errors->first('title','<span class="help-block">:message</span>') !!}
  {{ Form::label('alias', 'Alias') }}
  {{ Form::text('alias', $contentBlock->alias, ['class' => 'form-control ck-editor' ]) }}
  {!! $errors->first('alias','<span class="help-block">:message</span>') !!}

</div>

{{Form::submit('Зберегти', ['class' => 'btn btn-success'])}}
<script>
  $(document).ready(function(){
    $('.ckeditor').ckeditor();
  })


</script>
