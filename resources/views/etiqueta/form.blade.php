<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre etiqueta') }}
            {{ Form::text('nombreEtiqueta', $etiqueta->nombreEtiqueta, ['class' => 'form-control' . ($errors->has('nombreEtiqueta') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreEtiqueta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>