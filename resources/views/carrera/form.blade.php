<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Carrera') }}
            {{ Form::text('nombreCarrera', $carrera->nombreCarrera, ['class' => 'form-control' . ($errors->has('nombreCarrera') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreCarrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionCarrera', $carrera->descripcionCarrera, ['class' => 'form-control' . ($errors->has('descripcionCarrera') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionCarrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>