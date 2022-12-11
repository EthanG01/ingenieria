<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Dimensión') }}
            {{ Form::text('nombreDimension', $dimension->nombreDimension, ['class' => 'form-control' . ($errors->has('nombreDimension') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreDimension', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>