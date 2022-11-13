<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Implicación') }}
            {{ Form::text('nombreImplicacion', $implicacion->nombreImplicacion, ['class' => 'form-control' . ($errors->has('nombreImplicacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreImplicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>