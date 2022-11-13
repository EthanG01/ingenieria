<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre libro/Revista') }}
            {{ Form::text('nombreLibro', $tipoLibro->nombreLibro, ['class' => 'form-control' . ($errors->has('nombreLibro') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionLibro', $tipoLibro->descripcionLibro, ['class' => 'form-control' . ($errors->has('descripcionLibro') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>