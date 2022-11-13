<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('provincia') }}
            {{ Form::select('provincia_id', $provincias,$canton->provincia_id, ['class' => 'form-control' . ($errors->has('provincia_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('provincia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

      


        <div class="form-group">
            {{ Form::label('nombre cantón') }}
            {{ Form::text('nombreCanton', $canton->nombreCanton, ['class' => 'form-control' . ($errors->has('nombreCanton') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreCanton', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>