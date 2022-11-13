<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cantón') }}
            {{ Form::select('canton_id',$cantons, $cantonOrganizacion->canton_id, ['class' => 'form-control' . ($errors->has('canton_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('canton_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Organización') }}
            {{ Form::select('organizacion_id',$organizacions, $cantonOrganizacion->organizacion_id, ['class' => 'form-control' . ($errors->has('organizacion_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('organizacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $cantonOrganizacion->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>