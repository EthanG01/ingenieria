<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre organización') }}
            {{ Form::text('nombreTipoOrganizacion', $tipoOrganizacion->nombreTipoOrganizacion, ['class' => 'form-control' . ($errors->has('') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreTipoOrganizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>