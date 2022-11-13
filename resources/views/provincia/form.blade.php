<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre provincia') }}
            {{ Form::text('nombreProvincia', $provincia->nombreProvincia, ['class' => 'form-control' . ($errors->has('nombreProvincia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreProvincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>