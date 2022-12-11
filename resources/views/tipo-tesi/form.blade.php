<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Tesis') }}
            {{ Form::text('nombreTesis', $tipoTesi->nombreTesis, ['class' => 'form-control' . ($errors->has('nombreTesis') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreTesis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionTesis', $tipoTesi->descripcionTesis, ['class' => 'form-control' . ($errors->has('descripcionTesis') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionTesis', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>